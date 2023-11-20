@foreach ($collection as $nav)
<li class="menu-item">
    <a href="{{ $nav->url }}">
        
        {!! $nav->name !!}
    

    @if (isset($navigation[$nav->id]))
        
            @include('website.partials.navigation.sub_level', ['collection' => $navigation[$nav->id]])
        
    @endif
    </a>
</li>
@endforeach
