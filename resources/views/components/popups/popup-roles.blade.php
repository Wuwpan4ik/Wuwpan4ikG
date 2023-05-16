<!--Попап библиотеки подсказок-->
<div class="popup popup-show popup-library pop-catalog" id="popup-catalog">
    <div class="popupWrapper"></div>
    <div class="popupContent">
        <div class="popup-inner">
            <h2>
                Каталог ролей
            </h2>
            <div class="prompts-category">
                @foreach($roles as $role)
                    <div class="library-item">
                        <form onsubmit="return changeRole(event)" action="{{ route('chat.updateRole', $chat->id) }}" method="POST">
                            @csrf
                            @if($role->title)
                                <h2 class="library-item-title">{{ $role->title }}</h2>
                            @endif
                            <p class="role__description">{{ $role->description }}</p>
                            <p class="role" style="display:none;">{{ $role->role }}</p>
                            <textarea class="display-none" name="role" id="systemRoleText">{{ $role->role }}</textarea>
                            <div class="hoverItems">
                                <button class="copyRole" type="submit">
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
                                </button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class="prompts-in-category">

            </div>
            <div class="closeBtnBuy">
                <button>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_73_1622)"><path d="M12.0001 6.00009C11.8594 5.85949 11.6687 5.7805 11.4698 5.7805C11.271 5.7805 11.0802 5.85949 10.9396 6.00009L9.00008 7.93959L7.06058 6.00009C6.91913 5.86347 6.72968 5.78788 6.53303 5.78959C6.33639 5.7913 6.14828 5.87017 6.00922 6.00923C5.87016 6.14828 5.79129 6.33639 5.78958 6.53304C5.78787 6.72969 5.86347 6.91914 6.00008 7.06059L7.93958 9.00009L6.00008 10.9396C5.86347 11.081 5.78787 11.2705 5.78958 11.4671C5.79129 11.6638 5.87016 11.8519 6.00922 11.991C6.14828 12.13 6.33639 12.2089 6.53303 12.2106C6.72968 12.2123 6.91913 12.1367 7.06058 12.0001L9.00008 10.0606L10.9396 12.0001C11.081 12.1367 11.2705 12.2123 11.4671 12.2106C11.6638 12.2089 11.8519 12.13 11.9909 11.991C12.13 11.8519 12.2089 11.6638 12.2106 11.4671C12.2123 11.2705 12.1367 11.081 12.0001 10.9396L10.0606 9.00009L12.0001 7.06059C12.1407 6.91995 12.2197 6.72922 12.2197 6.53034C12.2197 6.33147 12.1407 6.14074 12.0001 6.00009Z" fill="white"/><path d="M9 0C7.21997 0 5.47991 0.527841 3.99987 1.51677C2.51983 2.50571 1.36628 3.91131 0.685088 5.55585C0.00389957 7.20038 -0.17433 9.00998 0.172937 10.7558C0.520204 12.5016 1.37737 14.1053 2.63604 15.364C3.89472 16.6226 5.49836 17.4798 7.24419 17.8271C8.99002 18.1743 10.7996 17.9961 12.4442 17.3149C14.0887 16.6337 15.4943 15.4802 16.4832 14.0001C17.4722 12.5201 18 10.78 18 9C17.9974 6.61384 17.0484 4.32616 15.3611 2.63889C13.6738 0.951621 11.3862 0.00258081 9 0V0ZM9 16.5C7.51664 16.5 6.0666 16.0601 4.83323 15.236C3.59986 14.4119 2.63856 13.2406 2.07091 11.8701C1.50325 10.4997 1.35473 8.99168 1.64411 7.53682C1.9335 6.08197 2.64781 4.74559 3.6967 3.6967C4.7456 2.64781 6.08197 1.9335 7.53683 1.64411C8.99168 1.35472 10.4997 1.50325 11.8701 2.0709C13.2406 2.63856 14.4119 3.59985 15.236 4.83322C16.0601 6.06659 16.5 7.51664 16.5 9C16.4978 10.9885 15.7069 12.8948 14.3009 14.3009C12.8948 15.7069 10.9885 16.4978 9 16.5V16.5Z" fill="white"/></g><defs><clipPath id="clip0_73_1622"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                </button>
            </div>
        </div>
    </div>
</div>
