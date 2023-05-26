<div class="tablinks-container libraryItems">
    <div class="tablinks-library">
        @foreach($main_prompts as $prompt)
            <button class="tablink-library" onclick="myFunction({{ $prompt->id }}, {{ $prompt->is_main }})" style="background-color: {{ $prompt->main_background_color }}; color: {{ $prompt->main_color }}">
                {!! $prompt->main_image !!}
                @if(App::getLocale() == 'en') @if($prompt->title_en) {{ $prompt->title_en }}@endif @elseif(App::getLocale() == 'ru') @if($prompt->title) {{ $prompt->title }}@endif  @endif
            </button>
        @endforeach
    </div>
</div>
