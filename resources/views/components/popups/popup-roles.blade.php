<!--Попап библиотеки подсказок-->
<div class="popup popup-show popup-library pop-catalog" id="popup-catalog">
    <div class="popupWrapper"></div>
    <div class="popupContent">
        <div class="popup-inner">
            <h2>
                {{__('Catalog')}}
            </h2>
            <div class="prompts-category">
                @foreach($roles as $role)
                    <div class="library-item">
                        <form onsubmit="return changeRole(event)" action="{{ route('chat.updateRole', $chat->id) }}" method="POST">
                            @csrf
                            @if($role->title)
                                <h2 class="library-item-title">@if(App::getLocale() == 'en') @if($role->title_en) {{ $role->title_en }}@endif @elseif(App::getLocale() == 'ru') @if($role->title) {{ $role->title }}@endif  @endif</h2>
                            @endif
                            <p class="role__description">@if(App::getLocale() == 'en') @if($role->description_en) {{ $role->description_en }}@endif @elseif(App::getLocale() == 'ru') @if($role->description) {{ $role->description }}@endif  @endif</p>
                            <p class="role" style="display:none;">@if(App::getLocale() == 'en') @if($role->role_en) {{ $role->role_en }}@endif @elseif(App::getLocale() == 'ru') @if($role->role) {{ $role->role }}@endif  @endif</p>
                            <textarea class="display-none" name="role" id="systemRoleText">@if(App::getLocale() == 'en') @if($role->role_en) {{ $role->role_en }}@endif @elseif(App::getLocale() == 'ru') @if($role->role) {{ $role->role }}@endif  @endif</textarea>
                            <div class="hoverItems">
                                <button class="copyRole" type="submit">
                                    <svg class="canbegray" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_861_4547)"><path d="M14.5 14.4922H7.5C6.11553 14.4922 4.76216 14.0816 3.61101 13.3125C2.45987 12.5433 1.56266 11.4501 1.03285 10.171C0.503033 8.89189 0.36441 7.48443 0.634506 6.12656C0.904603 4.76869 1.57129 3.52141 2.55026 2.54244C3.52922 1.56348 4.7765 0.89679 6.13437 0.626694C7.49224 0.356597 8.8997 0.495221 10.1788 1.02503C11.4579 1.55485 12.5511 2.45205 13.3203 3.6032C14.0895 4.75434 14.5 6.10772 14.5 7.49219V14.4922ZM7.5 1.65886C5.95291 1.65886 4.46918 2.27344 3.37521 3.3674C2.28125 4.46136 1.66667 5.94509 1.66667 7.49219C1.66667 9.03929 2.28125 10.523 3.37521 11.617C4.46918 12.7109 5.95291 13.3255 7.5 13.3255H13.3333V7.49219C13.3316 5.94562 12.7165 4.46287 11.6229 3.36928C10.5293 2.27568 9.04658 1.66056 7.5 1.65886V1.65886ZM7.44692 10.0699L11.4083 6.15752L10.5917 5.32686L6.6215 9.23519L4.40834 7.07511L3.59167 7.90927L5.79959 10.0676C6.01825 10.2854 6.31432 10.4077 6.62296 10.4077C6.93161 10.4077 7.22767 10.2854 7.44634 10.0676L7.44692 10.0699Z" fill="white"/></g><defs><clipPath id="clip0_861_4547"><rect width="14" height="14" fill="white" transform="translate(0.5 0.492188)"/></clipPath></defs></svg>
                                    {{__('choosePrompt')}}
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
