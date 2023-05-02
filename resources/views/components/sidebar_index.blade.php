@foreach($folders as $folder)
    <div class="folderBtn @empty($folder->children->firstWhere('id', $chat->id)->id) @else opened @endempty">
        <div class="buttonOpen">
            <div class="firstRow">
                <svg class="svgPath" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_47_509)">
                        <path d="M14.25 2.75024H9.354C9.23801 2.75101 9.12336 2.72536 9.01875 2.67524L6.65175 1.48724C6.33929 1.33165 5.99505 1.25053 5.646 1.25024H3.75C2.7558 1.25144 1.80267 1.64691 1.09966 2.34991C0.396661 3.05291 0.00119089 4.00605 0 5.00024L0 14.0002C0.00119089 14.9944 0.396661 15.9476 1.09966 16.6506C1.80267 17.3536 2.7558 17.7491 3.75 17.7502H14.25C15.2442 17.7491 16.1973 17.3536 16.9003 16.6506C17.6033 15.9476 17.9988 14.9944 18 14.0002V6.50024C17.9988 5.50605 17.6033 4.55291 16.9003 3.84991C16.1973 3.14691 15.2442 2.75144 14.25 2.75024V2.75024ZM3.75 2.75024H5.646C5.76199 2.74948 5.87664 2.77513 5.98125 2.82524L8.34825 4.00949C8.66039 4.16638 9.00465 4.24879 9.354 4.25024H14.25C14.6985 4.25098 15.1366 4.38575 15.508 4.63725C15.8794 4.88876 16.1671 5.24552 16.3342 5.66174L1.5 5.74574V5.00024C1.5 4.40351 1.73705 3.83121 2.15901 3.40925C2.58097 2.9873 3.15326 2.75024 3.75 2.75024V2.75024ZM14.25 16.2502H3.75C3.15326 16.2502 2.58097 16.0132 2.15901 15.5912C1.73705 15.1693 1.5 14.597 1.5 14.0002V7.24574L16.5 7.16099V14.0002C16.5 14.597 16.2629 15.1693 15.841 15.5912C15.419 16.0132 14.8467 16.2502 14.25 16.2502Z" fill="white" fill-opacity="0.3"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_47_509">
                            <rect width="18" height="18" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="folderName">{{ $folder->title }}</p>
                <form class="chat__update-form" action="{{ route('folder.update', $folder->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="title" class="nonActive" id="renameFolderInput">
                </form>
            </div>
            <div class="hoverItems folder">
                <div class="hoverItems-folder">
                    <!--Кнопка - Удаление папки-->
                    <button class="folderBtnHover" type="button" id="deleteFolderBtn">
                        <svg class="svgPath" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">    <g clip-path="url(#clip0_16_2304)">        <path d="M8.74998 1.66667H7.45831C7.36161 1.19642 7.10574 0.773894 6.73383 0.470299C6.36193 0.166704 5.89673 0.000606052 5.41665 0L4.58331 0C4.10323 0.000606052 3.63803 0.166704 3.26613 0.470299C2.89422 0.773894 2.63835 1.19642 2.54165 1.66667H1.24998C1.13947 1.66667 1.03349 1.71057 0.955352 1.78871C0.877212 1.86685 0.833313 1.97283 0.833313 2.08333C0.833313 2.19384 0.877212 2.29982 0.955352 2.37796C1.03349 2.4561 1.13947 2.5 1.24998 2.5H1.66665V7.91667C1.66731 8.469 1.88701 8.99852 2.27757 9.38908C2.66813 9.77963 3.19765 9.99934 3.74998 10H6.24998C6.80231 9.99934 7.33183 9.77963 7.72239 9.38908C8.11295 8.99852 8.33265 8.469 8.33331 7.91667V2.5H8.74998C8.86049 2.5 8.96647 2.4561 9.04461 2.37796C9.12275 2.29982 9.16665 2.19384 9.16665 2.08333C9.16665 1.97283 9.12275 1.86685 9.04461 1.78871C8.96647 1.71057 8.86049 1.66667 8.74998 1.66667ZM4.58331 0.833333H5.41665C5.67509 0.833649 5.92712 0.913907 6.13815 1.0631C6.34919 1.2123 6.5089 1.42312 6.5954 1.66667H3.40456C3.49106 1.42312 3.65077 1.2123 3.86181 1.0631C4.07284 0.913907 4.32487 0.833649 4.58331 0.833333ZM7.49998 7.91667C7.49998 8.24819 7.36828 8.56613 7.13386 8.80055C6.89944 9.03497 6.5815 9.16667 6.24998 9.16667H3.74998C3.41846 9.16667 3.10052 9.03497 2.8661 8.80055C2.63168 8.56613 2.49998 8.24819 2.49998 7.91667V2.5H7.49998V7.91667Z" fill="white"/>        <path d="M4.16667 7.49971C4.27717 7.49971 4.38315 7.45581 4.46129 7.37767C4.53943 7.29953 4.58333 7.19355 4.58333 7.08304V4.58305C4.58333 4.47254 4.53943 4.36656 4.46129 4.28842C4.38315 4.21028 4.27717 4.16638 4.16667 4.16638C4.05616 4.16638 3.95018 4.21028 3.87204 4.28842C3.7939 4.36656 3.75 4.47254 3.75 4.58305V7.08304C3.75 7.19355 3.7939 7.29953 3.87204 7.37767C3.95018 7.45581 4.05616 7.49971 4.16667 7.49971Z" fill="white"/>        <path d="M5.83326 7.49971C5.94377 7.49971 6.04975 7.45581 6.12789 7.37767C6.20603 7.29953 6.24993 7.19355 6.24993 7.08304V4.58305C6.24993 4.47254 6.20603 4.36656 6.12789 4.28842C6.04975 4.21028 5.94377 4.16638 5.83326 4.16638C5.72276 4.16638 5.61678 4.21028 5.53864 4.28842C5.46049 4.36656 5.4166 4.47254 5.4166 4.58305V7.08304C5.4166 7.19355 5.46049 7.29953 5.53864 7.37767C5.61678 7.45581 5.72276 7.49971 5.83326 7.49971Z" fill="white"/>    </g>    <defs>        <clipPath id="clip0_16_2304">            <rect width="10" height="10" fill="white"/>        </clipPath>    </defs></svg>
                    </button>
                    <!--Кнопка - Смена имени у папки-->
                    <button class="folderBtnHover" id="renameFolderBtn">
                        <svg class="svgPath" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">    <g clip-path="url(#clip0_16_2302)">        <path d="M9.52215 0.478314C9.23888 0.195479 8.85495 0.0366211 8.45465 0.0366211C8.05435 0.0366211 7.67042 0.195479 7.38715 0.478314L0.610484 7.25498C0.416422 7.44795 0.262552 7.67749 0.157775 7.93031C0.0529981 8.18313 -0.000604788 8.45422 6.72773e-05 8.7279V9.58331C6.72773e-05 9.69382 0.043966 9.7998 0.122106 9.87794C0.200246 9.95608 0.306227 9.99998 0.416734 9.99998H1.27215C1.5458 10.0008 1.81689 9.94724 2.06972 9.84253C2.32254 9.73782 2.55209 9.584 2.74507 9.38998L9.52215 2.6129C9.80486 2.32965 9.96364 1.9458 9.96364 1.54561C9.96364 1.14541 9.80486 0.761566 9.52215 0.478314ZM2.1559 8.80081C1.9209 9.03425 1.60339 9.16569 1.27215 9.16665H0.833401V8.7279C0.832979 8.56369 0.865132 8.40103 0.927999 8.24934C0.990867 8.09764 1.0832 7.95992 1.19965 7.84415L6.34257 2.70123L7.3009 3.65956L2.1559 8.80081ZM8.93257 2.02373L7.8884 3.06831L6.93007 2.11206L7.97465 1.06748C8.03758 1.00469 8.11225 0.954913 8.19441 0.920985C8.27658 0.887056 8.36462 0.869643 8.45351 0.86974C8.5424 0.869837 8.63041 0.887441 8.7125 0.921548C8.79459 0.955655 8.86915 1.0056 8.93194 1.06852C8.99473 1.13145 9.04451 1.20612 9.07844 1.28829C9.11237 1.37045 9.12978 1.45849 9.12968 1.54738C9.12959 1.63628 9.11198 1.72428 9.07787 1.80637C9.04377 1.88846 8.99383 1.96303 8.9309 2.02581L8.93257 2.02373Z" fill="white"/>    </g>    <defs>        <clipPath id="clip0_16_2302">            <rect width="10" height="10" fill="white"/>        </clipPath>    </defs></svg>
                    </button>
                    <!--Подтверждение удаления папки-->
                    <div class="deleteFolderConfirm nonActive">
                        <form class="delete_form" action="{{ route('folder.delete', $folder->id) }}" method="POST" >
                            @csrf
                            @method("DELETE")
                            <button class="deleteFolderYes" onclick="delFolder(this.parentElement)">
                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_47_1398)"><path d="M9.29976 2.34625L3.54184 8.10375C3.50313 8.14262 3.45712 8.17346 3.40646 8.1945C3.3558 8.21554 3.30149 8.22637 3.24663 8.22637C3.19178 8.22637 3.13746 8.21554 3.0868 8.1945C3.03614 8.17346 2.99014 8.14262 2.95142 8.10375L0.724756 5.875C0.686044 5.83614 0.640038 5.8053 0.589379 5.78426C0.538719 5.76321 0.484403 5.75238 0.429548 5.75238C0.374692 5.75238 0.320376 5.76321 0.269717 5.78426C0.219057 5.8053 0.173052 5.83614 0.134339 5.875V5.875C0.0954739 5.91372 0.0646354 5.95972 0.043593 6.01038C0.0225507 6.06104 0.0117187 6.11536 0.0117188 6.17021C0.0117187 6.22507 0.0225507 6.27938 0.043593 6.33004C0.0646354 6.3807 0.0954739 6.42671 0.134339 6.46542L2.36184 8.6925C2.59682 8.92705 2.91525 9.05877 3.24726 9.05877C3.57926 9.05877 3.89769 8.92705 4.13267 8.6925L9.89017 2.93625C9.92898 2.89755 9.95976 2.85157 9.98077 2.80095C10.0018 2.75033 10.0126 2.69606 10.0126 2.64125C10.0126 2.58645 10.0018 2.53218 9.98077 2.48156C9.95976 2.43094 9.92898 2.38496 9.89017 2.34625C9.85146 2.30739 9.80546 2.27655 9.7548 2.25551C9.70414 2.23446 9.64982 2.22363 9.59497 2.22363C9.54011 2.22363 9.48579 2.23446 9.43513 2.25551C9.38447 2.27655 9.33847 2.30739 9.29976 2.34625Z" fill="white"/></g><defs><clipPath id="clip0_47_1398"><rect width="10" height="10" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                            </button>
                        </form>
                        <button class="deleteFolderNo">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_47_1400)"><path d="M9.87832 0.622361C9.80018 0.544248 9.69422 0.500366 9.58373 0.500366C9.47325 0.500366 9.36729 0.544248 9.28915 0.622361L5.0004 4.91111L0.711649 0.622361C0.633513 0.544248 0.527551 0.500366 0.417066 0.500366C0.306581 0.500366 0.200619 0.544248 0.122483 0.622361V0.622361C0.0443697 0.700497 0.000488281 0.806459 0.000488281 0.916944C0.000488281 1.02743 0.0443697 1.13339 0.122483 1.21153L4.41123 5.50028L0.122483 9.78903C0.0443697 9.86716 0.000488281 9.97313 0.000488281 10.0836C0.000488281 10.1941 0.0443697 10.3001 0.122483 10.3782V10.3782C0.200619 10.4563 0.306581 10.5002 0.417066 10.5002C0.527551 10.5002 0.633513 10.4563 0.711649 10.3782L5.0004 6.08944L9.28915 10.3782C9.36729 10.4563 9.47325 10.5002 9.58373 10.5002C9.69422 10.5002 9.80018 10.4563 9.87832 10.3782C9.95643 10.3001 10.0003 10.1941 10.0003 10.0836C10.0003 9.97313 9.95643 9.86716 9.87832 9.78903L5.58957 5.50028L9.87832 1.21153C9.95643 1.13339 10.0003 1.02743 10.0003 0.916944C10.0003 0.806459 9.95643 0.700497 9.87832 0.622361V0.622361Z" fill="white"/></g><defs><clipPath id="clip0_47_1400"><rect width="10" height="10" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                        </button>
                    </div>
                    <!--Подтверждение смены имени папки-->
                    <div class="renameFolderConfirm nonActive">
                        <button class="removeFolderYes" type="button" onclick="renFolder(this)">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_47_1398)"><path d="M9.29976 2.34625L3.54184 8.10375C3.50313 8.14262 3.45712 8.17346 3.40646 8.1945C3.3558 8.21554 3.30149 8.22637 3.24663 8.22637C3.19178 8.22637 3.13746 8.21554 3.0868 8.1945C3.03614 8.17346 2.99014 8.14262 2.95142 8.10375L0.724756 5.875C0.686044 5.83614 0.640038 5.8053 0.589379 5.78426C0.538719 5.76321 0.484403 5.75238 0.429548 5.75238C0.374692 5.75238 0.320376 5.76321 0.269717 5.78426C0.219057 5.8053 0.173052 5.83614 0.134339 5.875V5.875C0.0954739 5.91372 0.0646354 5.95972 0.043593 6.01038C0.0225507 6.06104 0.0117187 6.11536 0.0117188 6.17021C0.0117187 6.22507 0.0225507 6.27938 0.043593 6.33004C0.0646354 6.3807 0.0954739 6.42671 0.134339 6.46542L2.36184 8.6925C2.59682 8.92705 2.91525 9.05877 3.24726 9.05877C3.57926 9.05877 3.89769 8.92705 4.13267 8.6925L9.89017 2.93625C9.92898 2.89755 9.95976 2.85157 9.98077 2.80095C10.0018 2.75033 10.0126 2.69606 10.0126 2.64125C10.0126 2.58645 10.0018 2.53218 9.98077 2.48156C9.95976 2.43094 9.92898 2.38496 9.89017 2.34625C9.85146 2.30739 9.80546 2.27655 9.7548 2.25551C9.70414 2.23446 9.64982 2.22363 9.59497 2.22363C9.54011 2.22363 9.48579 2.23446 9.43513 2.25551C9.38447 2.27655 9.33847 2.30739 9.29976 2.34625Z" fill="white"/></g><defs><clipPath id="clip0_47_1398"><rect width="10" height="10" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                        </button>
                        <button class="renameFolderNo">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_47_1400)"><path d="M9.87832 0.622361C9.80018 0.544248 9.69422 0.500366 9.58373 0.500366C9.47325 0.500366 9.36729 0.544248 9.28915 0.622361L5.0004 4.91111L0.711649 0.622361C0.633513 0.544248 0.527551 0.500366 0.417066 0.500366C0.306581 0.500366 0.200619 0.544248 0.122483 0.622361V0.622361C0.0443697 0.700497 0.000488281 0.806459 0.000488281 0.916944C0.000488281 1.02743 0.0443697 1.13339 0.122483 1.21153L4.41123 5.50028L0.122483 9.78903C0.0443697 9.86716 0.000488281 9.97313 0.000488281 10.0836C0.000488281 10.1941 0.0443697 10.3001 0.122483 10.3782V10.3782C0.200619 10.4563 0.306581 10.5002 0.417066 10.5002C0.527551 10.5002 0.633513 10.4563 0.711649 10.3782L5.0004 6.08944L9.28915 10.3782C9.36729 10.4563 9.47325 10.5002 9.58373 10.5002C9.69422 10.5002 9.80018 10.4563 9.87832 10.3782C9.95643 10.3001 10.0003 10.1941 10.0003 10.0836C10.0003 9.97313 9.95643 9.86716 9.87832 9.78903L5.58957 5.50028L9.87832 1.21153C9.95643 1.13339 10.0003 1.02743 10.0003 0.916944C10.0003 0.806459 9.95643 0.700497 9.87832 0.622361V0.622361Z" fill="white"/></g><defs><clipPath id="clip0_47_1400"><rect width="10" height="10" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                        </button>
                    </div>
                </div>
                <div class="dropdownButton">
                    <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.9999 11.625C8.80294 11.6254 8.60786 11.5868 8.42586 11.5115C8.24387 11.4362 8.07855 11.3257 7.9394 11.1863L3.96965 7.21577L5.03015 6.15527L8.9999 10.125L12.9697 6.15527L14.0302 7.21577L10.0604 11.1855C9.92132 11.3251 9.75602 11.4357 9.57402 11.5111C9.39202 11.5866 9.19691 11.6253 8.9999 11.625Z" fill="white" fill-opacity="0.3"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="folderItems">
            @foreach($folder->children as $children)
                <div data-id="{{ $children->uuid }}" onclick="myFunction('{{ $children->uuid }}')" class=" @if($children->id == $chat->id) active @endif tablink addChatIcon tab__link-edit">
                    @include('components.chat', ['main' => $children])
                </div>
            @endforeach
            <form class="folder__chat" action="{{ route('chats.folder_store') }}" method="POST">
                @csrf
                <input type="hidden" class="folder_id" name="folder_id" value="{{ $folder->id }}">
                <button type="button" class="add-chat" onclick="add_new_chat(this.parentElement)">
                    <svg class="svgPath" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_16_2289)">
                            <path d="M9.5 0C7.71997 0 5.97991 0.527841 4.49987 1.51677C3.01983 2.50571 1.86628 3.91131 1.18509 5.55585C0.5039 7.20038 0.32567 9.00998 0.672937 10.7558C1.0202 12.5016 1.87737 14.1053 3.13604 15.364C4.39472 16.6226 5.99836 17.4798 7.74419 17.8271C9.49002 18.1743 11.2996 17.9961 12.9442 17.3149C14.5887 16.6337 15.9943 15.4802 16.9832 14.0001C17.9722 12.5201 18.5 10.78 18.5 9C18.4974 6.61384 17.5484 4.32616 15.8611 2.63889C14.1738 0.951621 11.8862 0.00258081 9.5 0V0ZM9.5 16.5C8.01664 16.5 6.5666 16.0601 5.33323 15.236C4.09986 14.4119 3.13856 13.2406 2.57091 11.8701C2.00325 10.4997 1.85473 8.99168 2.14411 7.53682C2.4335 6.08197 3.14781 4.74559 4.1967 3.6967C5.2456 2.64781 6.58197 1.9335 8.03683 1.64411C9.49168 1.35472 10.9997 1.50325 12.3701 2.0709C13.7406 2.63856 14.9119 3.59985 15.736 4.83322C16.5601 6.06659 17 7.51664 17 9C16.9978 10.9885 16.2069 12.8948 14.8009 14.3009C13.3948 15.7069 11.4885 16.4978 9.5 16.5ZM10.25 8.25H13.25V9.75H10.25V12.75H8.75V9.75H5.75V8.25H8.75V5.25H10.25V8.25Z" fill="white" fill-opacity="0.3"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_16_2289">
                                <rect width="18" height="18" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __("newchat") }}
                </button>
            </form>
        </div>
    </div>
@endforeach

@foreach($chats as $chat_local)
    <div data-uuid="{{ $chat_local->uuid }}" onclick="myFunction({{ $chat_local->id }}, '{{ $chat_local->uuid }}')" class=" @if($chat_local->id == $chat->id) active @endif tablink addChatIcon tab__link-edit">
        @include('components.chat', ['main' => $chat_local] )
    </div>
@endforeach
