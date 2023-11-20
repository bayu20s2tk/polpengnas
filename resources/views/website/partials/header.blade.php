<!-- Header POLPENNAS -->
<div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a href="/" class="navbar-brand logo" title="{{ config('app.name') }}">
                            <img src="/images/logob.png" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                    <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i></div>
                    <div class="kingster-top-search-wrap">
                        <div class="kingster-top-search-close"></div>
                        <div class="kingster-top-search-row">
                            <div class="kingster-top-search-cell">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                    <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                            @if(isset($navigation))
                                    @include('website.partials.navigation.top_level', ['collection' => $navigation['root'], 'navigation' => $navigation])
                                @endif
                                @if(!auth()->check())
                                    <a href="/auth/login" class="btn btn-sm btn-outline-primary mr-1" {{--data-toggle="modal" data-target="#modal-login"--}}>
                                        <i class="fa fa-sign-in"></i>
                                        Login
                                    </a>
                    
                                    
                                    @if(auth()->check() && user()->isAdmin())
                                        <a href="/admin" class="btn btn-link" data-toggle="tooltip" title="Admin" data-original-title="Admin"><i class="fa fa-user-secret"></i></a>
                                   @endif
                             @endif
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">
                        <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i> mail@poltekpengadaan.ac.id <i class="fa fa-phone" id="i_fd84_1"></i> +1-3435-2356-222</div>
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item kingster-normal-menu"><a href="#">Alumni</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="#">Calendar</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="#">Student Portal</a></li>
                            </ul>
                            <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" href="#" target="_blank">PMB Online</a></div>
                    </div>
                </div>
            </div>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
                <div class="kingster-header-background"></div>
                <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner">
                                <a class="" href="/"><img src="images/logob.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                @if(isset($navigation))
                                    @include('website.partials.navigation.top_level', ['collection' => $navigation['root'], 'navigation' => $navigation])
                                @endif
                                @if(!auth()->check())
                                    <a href="/auth/login" class="btn btn-sm btn-outline-primary mr-1" {{--data-toggle="modal" data-target="#modal-login"--}}>
                                        <i class="fa fa-sign-in"></i>
                                        Login
                                    </a>
                    
                                    
                                    @if(auth()->check() && user()->isAdmin())
                                        <a href="/admin" class="btn btn-link" data-toggle="tooltip" title="Admin" data-original-title="Admin"><i class="fa fa-user-secret"></i></a>
                                   @endif
                             @endif
                                    
                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                            <div class="kingster-main-menu-right-wrap clearfix ">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                                <div class="kingster-top-search-wrap">
                                    <div class="kingster-top-search-close"></div>
                                    <div class="kingster-top-search-row">
                                        <div class="kingster-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="#">
                                                <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
<!-- Header POLPENNAS -->
<!-- <div class="sticky-top navbar-light bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a href="/" class="navbar-brand logo" title="{{ config('app.name') }}">
                <img src="/images/logo.png" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @if(isset($navigation))
                        @include('website.partials.navigation.top_level', ['collection' => $navigation['root'], 'navigation' => $navigation])
                    @endif
                </ul>
                @if(!auth()->check())
                    <a href="/auth/login" class="btn btn-sm btn-outline-primary mr-1" {{--data-toggle="modal" data-target="#modal-login"--}}>
                        <i class="fa fa-sign-in"></i>
                        Login
                    </a>
                    <a href="/auth/register" class="btn btn-sm btn-outline-secondary" data-icon="fa-edit">
                        Register
                    </a>
                @else
                    @if(impersonate()->isActive())
                        <small>
                            <a href="{{ route('impersonate.logout') }}"
                               onclick="event.preventDefault(); document.getElementById('impersonate-logout-form').submit();">
                                return to original user
                            </a>
                        </small>
                        <form id="impersonate-logout-form" class="d-none" action="{{ route('impersonate.logout') }}" method="post">
                            {{ csrf_field() }}
                        </form>
                    @endif

                    @if(auth()->check() && user()->isAdmin())
                        <a href="/admin" class="btn btn-link" data-toggle="tooltip" title="Admin" data-original-title="Admin"><i class="fa fa-user-secret"></i></a>
                    @endif
                @endif
            </div>
        </nav>
    </div>
</div>
-->
@section('scripts')
    @parent
    <script type="text/javascript" charset="utf-8">
        $(function () {
            $('#form-search').on('submit', function () {
                var search = $("#form-search input[name='search']").val();
                window.location.href = "https://www.google.com.na/search?q={{ config('app.url') }}+" + encodeURI(search);
                return false;
            });
        })
    </script>
@endsection
