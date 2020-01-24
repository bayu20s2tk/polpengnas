<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    protected function successfulLoginRoute()
    {
        return route('home');
    }

    protected function loginGetRoute()
    {
        return route('login');
    }

    protected function loginPostRoute()
    {
        return route('login');
    }

    protected function logoutRoute()
    {
        return route('logout');
    }

    protected function successfulLogoutRoute()
    {
        return '/';
    }

    protected function guestMiddlewareRoute()
    {
        return route('home');
    }

    private function getTooManyLoginAttemptsMessage()
    {
        return sprintf('/^%s$/',
            str_replace('\:seconds', '\d+', preg_quote(__('auth.throttle'), '/')));
    }

    /** @test */
    public function guest_can_view_login()
    {
        $response = $this->get($this->loginGetRoute());

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    /** @test */
    public function authenticated_user_can_not_view_login()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get($this->loginGetRoute());

        $response->assertRedirect($this->guestMiddlewareRoute());
    }

    /** @test */
    public function user_can_login_with_correct_credentials()
    {
        $user = factory(User::class)->create();

        $response = $this->post($this->loginPostRoute(), [
            'email'    => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect($this->successfulLoginRoute());
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function remember_me_cookie_created_on_login()
    {
        $user = factory(User::class)->create();

        $response = $this->post($this->loginPostRoute(), [
            'email'    => $user->email,
            'password' => 'password',
            'remember' => 'on',
        ]);

        $user = $user->fresh();

        $response->assertRedirect($this->successfulLoginRoute());
        $response->assertCookie(\Illuminate\Support\Facades\Auth::guard()->getRecallerName(), vsprintf('%s|%s|%s', [
            $user->id,
            $user->getRememberToken(),
            $user->password,
        ]));
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function user_cannot_login_with_incorrect_credentials()
    {
        $user = factory(User::class)->create();

        $response = $this->from($this->loginGetRoute())->post($this->loginPostRoute(), [
            'email'    => $user->email,
            'password' => 'invalid-password',
        ]);

        $response->assertRedirect($this->loginGetRoute());
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /** @test */
    public function user_cannot_login_with_email_that_does_not_exist()
    {
        $response = $this->from($this->loginGetRoute())->post($this->loginPostRoute(), [
            'email'    => 'nobody@example.com',
            'password' => 'invalid-password',
        ]);

        $response->assertRedirect($this->loginGetRoute());
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /** @test */
    public function authenticated_user_can_logout()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->post($this->logoutRoute());

        $response->assertRedirect($this->successfulLogoutRoute());
        $this->assertGuest();
    }

    /** @test */
    public function guest_cannot_logout()
    {
        $response = $this->post($this->logoutRoute());

        $response->assertRedirect($this->successfulLogoutRoute());
        $this->assertGuest();
    }

    /** @test */
    public function user_cannot_make_more_than_five_attempts_in_one_minute()
    {
        $user = factory(User::class)->create();

        foreach (range(0, 5) as $_) {
            $response = $this->from($this->loginGetRoute())->post($this->loginPostRoute(), [
                'email'    => $user->email,
                'password' => 'invalid-password',
            ]);
        }

        $response->assertRedirect($this->loginGetRoute());
        $response->assertSessionHasErrors('email');
        $this->assertRegExp($this->getTooManyLoginAttemptsMessage(),
            collect($response->baseResponse->getSession()
                ->get('errors')
                ->getBag('default')
                ->get('email'))->first());
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }
}
