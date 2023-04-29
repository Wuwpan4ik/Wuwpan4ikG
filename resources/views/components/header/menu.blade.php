<ul class="first-col">
    @foreach($menu as $item)
        <li>
            <a href="{{ route($item['route']) }}" class="@if($item['active']) active @endif">
                {{ __($item['title']) }}
            </a>
        </li>
    @endforeach
    <li>
        <a id="chat-with-base">
            Чат с базой данных
            <div class="soon-plate">
                {{__('soonPlate')}}
            </div>
        </a>
    </li>
</ul>
