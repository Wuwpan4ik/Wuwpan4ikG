<ul class="first-col">
    @foreach($menu as $item)
        <li>
            <a href="{{ route($item['route']) }}" class="@if($item['active']) active @endif">
                {{ __($item['title']) }}
            </a>
        </li>
    @endforeach
    <li class="chat-with-base">
        <a id="chat-with-base">
            {{__('chatWithDatabase')}}
            <div class="soon-plate">
                {{__('soonPlate')}}
            </div>
        </a>
    </li>
    <li class="chat-with-mdjrny">
        <a id="chat-with-mdjrny">
            {{__('chatWithMidjourney')}}
            <div class="soon-plate">
                {{__('soonPlate')}}
            </div>
        </a>
    </li>
</ul>