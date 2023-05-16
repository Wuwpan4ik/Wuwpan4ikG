<div class="tablinks-container libraryItems">
    <div class="tablinks-library">
        @foreach($main_prompts as $prompt)
            <button class="tablink-library" onclick="myFunction({{ $prompt->id }}, {{ $prompt->is_main }})" style="background-color: {{ $prompt->main_background_color }}; color: {{ $prompt->main_color }}">
                {!! $prompt->main_image !!}
                {{ $prompt->title }}
            </button>
        @endforeach
    </div>
</div>
