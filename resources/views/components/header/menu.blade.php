<ul class="first-col">
    @foreach($menu as $item)
        <li>
            <a href="{{ route($item['route']) }}" class="@if($item['active']) active @endif">
                {{ __($item['title']) }}
            </a>
        </li>
    @endforeach
</ul>
