@if ($library == 1)
    <div class="library-title">
        <div class="library-item-titles">
            {{ $folder->title }}
        </div>
        <!--Выводим кол-во подсказок-->
        <div class="library-item-count">
            {{ count($prompts) }} {{__('promptsCount')}}
        </div>
    </div>
@endempty
<div class="library-items-container">
    @foreach($prompts as $prompt)
        <div class="library-item">
            <p>@if(App::getLocale() == 'en') @if($prompt->description_en) {{ $prompt->description_en }}@endif @elseif(App::getLocale() == 'ru') @if($prompt->description) {{ $prompt->description }}@endif  @endif</p>
            <div class="hoverItems">
                <button class="copyRole" onclick="copyPrompts(this)">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_47_1013)">
                            <path d="M7.58366 11.6667C8.35692 11.6658 9.09825 11.3582 9.64503 10.8114C10.1918 10.2646 10.4994 9.52327 10.5003 8.75001V3.64176C10.5012 3.33514 10.4413 3.03138 10.3239 2.7481C10.2066 2.46483 10.0341 2.20766 9.81666 1.99151L8.50883 0.683677C8.29268 0.466195 8.03551 0.293778 7.75223 0.176422C7.46895 0.0590654 7.1652 -0.000897138 6.85858 1.01439e-05H4.08366C3.3104 0.000936394 2.56907 0.308525 2.02229 0.855305C1.47551 1.40209 1.16792 2.14341 1.16699 2.91668V8.75001C1.16792 9.52327 1.47551 10.2646 2.02229 10.8114C2.56907 11.3582 3.3104 11.6658 4.08366 11.6667H7.58366ZM2.33366 8.75001V2.91668C2.33366 2.45255 2.51803 2.00743 2.84622 1.67924C3.17441 1.35105 3.61953 1.16668 4.08366 1.16668C4.08366 1.16668 6.95308 1.17484 7.00033 1.18068V2.33334C7.00033 2.64276 7.12324 2.93951 7.34203 3.1583C7.56083 3.37709 7.85757 3.50001 8.16699 3.50001H9.31966C9.32549 3.54726 9.33366 8.75001 9.33366 8.75001C9.33366 9.21414 9.14928 9.65926 8.8211 9.98745C8.49291 10.3156 8.04779 10.5 7.58366 10.5H4.08366C3.61953 10.5 3.17441 10.3156 2.84622 9.98745C2.51803 9.65926 2.33366 9.21414 2.33366 8.75001V8.75001ZM12.8337 4.66668V11.0833C12.8327 11.8566 12.5251 12.5979 11.9784 13.1447C11.4316 13.6915 10.6903 13.9991 9.91699 14H4.66699C4.51228 14 4.36391 13.9386 4.25451 13.8292C4.14512 13.7198 4.08366 13.5714 4.08366 13.4167C4.08366 13.262 4.14512 13.1136 4.25451 13.0042C4.36391 12.8948 4.51228 12.8333 4.66699 12.8333H9.91699C10.3811 12.8333 10.8262 12.649 11.1544 12.3208C11.4826 11.9926 11.667 11.5475 11.667 11.0833V4.66668C11.667 4.51197 11.7284 4.36359 11.8378 4.2542C11.9472 4.1448 12.0956 4.08334 12.2503 4.08334C12.405 4.08334 12.5534 4.1448 12.6628 4.2542C12.7722 4.36359 12.8337 4.51197 12.8337 4.66668Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_47_1013">
                                <rect width="14" height="14" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    {{__('copyRole')}}
                </button>
            </div>
        </div>
    @endforeach
</div>
