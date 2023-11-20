@foreach ($collection as $nav)
    <li data-size="15" class="{{ array_search_value($nav->id, $activeParents) ? 'active' : '' }}  @if ( $nav->parent_id != 0) menu-item menu-item-has-children kingster-normal-menu @else menu-item menu-item-has-children kingster-normal-menu @endif ">
        <a href="{{ isset($navigation[$nav->id])? '#' : $nav->url }}" @if (isset($navigation[$nav->id]))  class="sf-with-ul-pre" id="{{ $nav->id }}" @else class="sf-with-ul-pre" @endif>
            
            {!! $nav->name !!}
        </a>

        @if (isset($navigation[$nav->id]))
            <ul class="sub-menu" aria-labelledby="{{ $nav->id }}" >
                @include('website.partials.navigation.sub_level', ['collection' => $navigation[$nav->id]])
            </ul>
        @endif
    </li>
@endforeach

