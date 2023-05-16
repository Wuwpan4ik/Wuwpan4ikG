<div class="firstRow">
    @empty($chat)
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_24_1712)">
                <path d="M12.4726 2.17511C11.8823 1.67487 11.2636 1.14911 10.6336 0.576099C10.1503 0.136576 9.49757 -0.0671194 8.85006 0.0196111C8.2226 0.10251 7.66431 0.459662 7.32608 0.994599C6.43205 2.4886 5.79994 4.12438 5.45706 5.83136C5.32252 5.63709 5.20317 5.43276 5.10005 5.2201C4.74483 4.47169 3.85018 4.15293 3.10177 4.50815C2.92058 4.59414 2.75847 4.71561 2.62505 4.86534C1.36706 6.15086 0.669662 7.88248 0.685553 9.68108C0.649799 13.4615 3.19269 16.7806 6.85206 17.7301C7.53294 17.9014 8.23198 17.99 8.93405 17.9941C8.95655 17.9941 9.19579 17.9918 9.29254 17.9851C13.77 17.8401 17.3231 14.1654 17.3176 9.68558C17.3146 6.28811 15.0706 4.3831 12.4726 2.17511ZM8.91531 16.4888C8.35714 16.4464 7.80554 16.2203 7.38908 15.8843C6.73693 15.4229 6.30539 14.7462 6.20259 13.9666C6.07508 12.7501 6.8251 11.1593 8.35735 9.36235C8.51801 9.17469 8.75307 9.06714 9.00011 9.06834C9.24396 9.06658 9.47585 9.17384 9.63236 9.36084C11.0364 11.0273 11.8074 12.5648 11.8074 13.6906C11.803 15.1696 10.647 16.3396 9.17487 16.4821C9.11022 16.4883 9.00008 16.4978 8.91531 16.4888ZM13.1821 15.0623C13.1378 15.0968 13.0891 15.1246 13.0441 15.1576C13.2171 14.6873 13.3063 14.1902 13.3074 13.6891C13.3074 11.7938 11.9311 9.76281 10.7776 8.39256C10.3363 7.8699 9.68717 7.56811 9.0031 7.56755H9.00008C8.31463 7.56632 7.66315 7.86603 7.21808 8.38729C5.38433 10.5353 4.54209 12.465 4.71456 14.1233C4.75552 14.5082 4.85385 14.8849 5.00633 15.2408C3.22538 13.9503 2.176 11.8803 2.18781 9.68104C2.17333 8.25233 2.73674 6.87835 3.75005 5.87105C3.92306 6.2307 4.1308 6.57256 4.37031 6.89181C4.69927 7.33654 5.26124 7.54291 5.7998 7.4168C6.34891 7.29534 6.77525 6.86225 6.88806 6.31131C7.18939 4.7186 7.76521 3.19035 8.5898 1.79483C8.69126 1.63529 8.85885 1.52961 9.04655 1.50683C9.25633 1.4786 9.46779 1.54479 9.62406 1.68756C10.2676 2.27256 10.8991 2.81256 11.4991 3.32033C14.0026 5.44658 15.8123 6.98259 15.8123 9.68558C15.8188 11.7891 14.8478 13.7763 13.1843 15.0638L13.1821 15.0623Z" fill="white" fill-opacity="0.3"/>
            </g>
            <defs>
                <clipPath id="clip0_24_1712">
                    <rect width="18" height="18" fill="white"/>
                </clipPath>
            </defs>
        </svg>
    @else
        <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_16_2322)">
                <path d="M18 11.9998V15.7498C18 16.3465 17.7629 16.9188 17.341 17.3408C16.919 17.7627 16.3467 17.9998 15.75 17.9998H12C10.9478 17.9987 9.91443 17.721 9.00349 17.1944C8.09255 16.6679 7.33609 15.911 6.81 14.9998C7.3754 14.9958 7.93888 14.9334 8.4915 14.8138C8.91236 15.34 9.44625 15.7648 10.0536 16.0567C10.6609 16.3485 11.3262 16.5 12 16.4998H15.75C15.9489 16.4998 16.1397 16.4208 16.2803 16.2801C16.421 16.1395 16.5 15.9487 16.5 15.7498V11.9998C16.4998 11.3257 16.3479 10.6603 16.0555 10.053C15.7631 9.44561 15.3378 8.91186 14.811 8.49129C14.9316 7.93878 14.995 7.3753 15 6.8098C15.9112 7.33588 16.6681 8.09234 17.1946 9.00328C17.7212 9.91423 17.9989 10.9476 18 11.9998ZM13.4827 7.23805C13.5529 6.27178 13.4142 5.30173 13.0761 4.39382C12.7381 3.48591 12.2085 2.66141 11.5234 1.97636C10.8384 1.2913 10.0139 0.761744 9.10598 0.423663C8.19807 0.0855808 7.22802 -0.0530997 6.26175 0.0170446C4.54944 0.212594 2.96769 1.02743 1.81438 2.3081C0.66107 3.58878 0.0157704 5.24692 0 6.9703L0 10.7503C0 12.6493 1.13025 13.4998 2.25 13.4998H6.525C8.2491 13.485 9.90826 12.8401 11.1898 11.6867C12.4714 10.5333 13.2869 8.95106 13.4827 7.23805ZM10.4625 3.03804C10.995 3.57167 11.4066 4.21344 11.6695 4.91994C11.9324 5.62643 12.0405 6.38115 11.9865 7.13305C11.8264 8.4708 11.1829 9.70391 10.177 10.6003C9.17112 11.4966 7.87229 11.9943 6.525 11.9998H2.25C1.554 11.9998 1.5 11.0435 1.5 10.7503V6.9703C1.50625 5.62358 2.00449 4.32557 2.90094 3.32055C3.79739 2.31553 5.03025 1.6728 6.3675 1.51329C6.492 1.50429 6.6165 1.49979 6.741 1.49979C7.43195 1.49915 8.11626 1.63467 8.75481 1.89861C9.39337 2.16255 9.97365 2.54974 10.4625 3.03804Z" fill="white" fill-opacity="0.3"/>
            </g>
            <defs>
                <clipPath id="clip0_16_2322">
                    <rect width="18" height="18" fill="white"/>
                </clipPath>
            </defs>
        </svg>
    @endempty

    <p class="chat__name">{{ $main->title }}</p>
    <form class="chat__update-form" onsubmit="renChat(this)" action="@empty($chat) {{ route('prompts_folder.update', $main->id) }} @else{{ route('chats.update', $main->id) }} @endempty" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="title" class="nonActive" id="renameChatInput">
        <button type="button" id="submit_rename" style="display: none;"></button>
    </form>
</div>
<div class="hoverItems">
    <!--Удаление чата !!!!НАВЕСИТЬ ФОРМУ!!!!-->

    @isset($first_id)
        @if($main->id != $first_id)
        <button class="deleteChat buttonTool" onclick="deleteChat(this)">
            <svg class="svgPath" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_16_2304)">
                    <path d="M8.74998 1.66667H7.45831C7.36161 1.19642 7.10574 0.773894 6.73383 0.470299C6.36193 0.166704 5.89673 0.000606052 5.41665 0L4.58331 0C4.10323 0.000606052 3.63803 0.166704 3.26613 0.470299C2.89422 0.773894 2.63835 1.19642 2.54165 1.66667H1.24998C1.13947 1.66667 1.03349 1.71057 0.955352 1.78871C0.877212 1.86685 0.833313 1.97283 0.833313 2.08333C0.833313 2.19384 0.877212 2.29982 0.955352 2.37796C1.03349 2.4561 1.13947 2.5 1.24998 2.5H1.66665V7.91667C1.66731 8.469 1.88701 8.99852 2.27757 9.38908C2.66813 9.77963 3.19765 9.99934 3.74998 10H6.24998C6.80231 9.99934 7.33183 9.77963 7.72239 9.38908C8.11295 8.99852 8.33265 8.469 8.33331 7.91667V2.5H8.74998C8.86049 2.5 8.96647 2.4561 9.04461 2.37796C9.12275 2.29982 9.16665 2.19384 9.16665 2.08333C9.16665 1.97283 9.12275 1.86685 9.04461 1.78871C8.96647 1.71057 8.86049 1.66667 8.74998 1.66667ZM4.58331 0.833333H5.41665C5.67509 0.833649 5.92712 0.913907 6.13815 1.0631C6.34919 1.2123 6.5089 1.42312 6.5954 1.66667H3.40456C3.49106 1.42312 3.65077 1.2123 3.86181 1.0631C4.07284 0.913907 4.32487 0.833649 4.58331 0.833333ZM7.49998 7.91667C7.49998 8.24819 7.36828 8.56613 7.13386 8.80055C6.89944 9.03497 6.5815 9.16667 6.24998 9.16667H3.74998C3.41846 9.16667 3.10052 9.03497 2.8661 8.80055C2.63168 8.56613 2.49998 8.24819 2.49998 7.91667V2.5H7.49998V7.91667Z" fill="white"/>
                    <path d="M4.16667 7.49971C4.27717 7.49971 4.38315 7.45581 4.46129 7.37767C4.53943 7.29953 4.58333 7.19355 4.58333 7.08304V4.58305C4.58333 4.47254 4.53943 4.36656 4.46129 4.28842C4.38315 4.21028 4.27717 4.16638 4.16667 4.16638C4.05616 4.16638 3.95018 4.21028 3.87204 4.28842C3.7939 4.36656 3.75 4.47254 3.75 4.58305V7.08304C3.75 7.19355 3.7939 7.29953 3.87204 7.37767C3.95018 7.45581 4.05616 7.49971 4.16667 7.49971Z" fill="white"/>
                    <path d="M5.83326 7.49971C5.94377 7.49971 6.04975 7.45581 6.12789 7.37767C6.20603 7.29953 6.24993 7.19355 6.24993 7.08304V4.58305C6.24993 4.47254 6.20603 4.36656 6.12789 4.28842C6.04975 4.21028 5.94377 4.16638 5.83326 4.16638C5.72276 4.16638 5.61678 4.21028 5.53864 4.28842C5.46049 4.36656 5.4166 4.47254 5.4166 4.58305V7.08304C5.4166 7.19355 5.46049 7.29953 5.53864 7.37767C5.61678 7.45581 5.72276 7.49971 5.83326 7.49971Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_16_2304">
                        <rect width="10" height="10" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </button>
        @endif
    @endisset
        <!--Подтверждение удаления чата-->
        <div class="confirmDelete nonActive">
            <form class="deleteChatForm" action="@empty($chat){{ route('prompts_folder.destroy', $main->id) }}@else{{ route('chats.destroy', $main->id) }}@endempty" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="deleteChatYes buttonTool" onclick="delChat(this.parentElement)">
                <svg class="svgPath" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_17_1427)">
                        <path d="M9.29951 2.34625L3.5416 8.10375C3.50288 8.14262 3.45688 8.17346 3.40622 8.1945C3.35556 8.21554 3.30124 8.22637 3.24639 8.22637C3.19153 8.22637 3.13722 8.21554 3.08656 8.1945C3.0359 8.17346 2.98989 8.14262 2.95118 8.10375L0.724512 5.875C0.685799 5.83614 0.639794 5.8053 0.589134 5.78426C0.538475 5.76321 0.484159 5.75238 0.429303 5.75238C0.374448 5.75238 0.320132 5.76321 0.269473 5.78426C0.218813 5.8053 0.172807 5.83614 0.134095 5.875C0.0952298 5.91372 0.0643913 5.95972 0.0433489 6.01038C0.0223065 6.06104 0.0114746 6.11536 0.0114746 6.17021C0.0114746 6.22507 0.0223065 6.27938 0.0433489 6.33004C0.0643913 6.3807 0.0952298 6.42671 0.134095 6.46542L2.3616 8.6925C2.59657 8.92705 2.91501 9.05877 3.24701 9.05877C3.57901 9.05877 3.89745 8.92705 4.13243 8.6925L9.88993 2.93625C9.92873 2.89755 9.95952 2.85157 9.98052 2.80095C10.0015 2.75033 10.0123 2.69606 10.0123 2.64125C10.0123 2.58645 10.0015 2.53218 9.98052 2.48156C9.95952 2.43094 9.92873 2.38496 9.88993 2.34625C9.85122 2.30739 9.80521 2.27655 9.75455 2.25551C9.70389 2.23446 9.64958 2.22363 9.59472 2.22363C9.53987 2.22363 9.48555 2.23446 9.43489 2.25551C9.38423 2.27655 9.33823 2.30739 9.29951 2.34625Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_17_1427">
                            <rect width="10" height="10" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
            </button>
            </form>
            <div class="del">
                <button class="deleteChatNo buttonTool" type="button">
                    <svg class="svgPath" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_17_1429)">
                            <path d="M9.87819 0.622361C9.80006 0.544248 9.6941 0.500366 9.58361 0.500366C9.47313 0.500366 9.36716 0.544248 9.28903 0.622361L5.00028 4.91111L0.711527 0.622361C0.633391 0.544248 0.527429 0.500366 0.416944 0.500366C0.306459 0.500366 0.200497 0.544248 0.122361 0.622361C0.0442476 0.700497 0.000366211 0.806459 0.000366211 0.916944C0.000366211 1.02743 0.0442476 1.13339 0.122361 1.21153L4.41111 5.50028L0.122361 9.78903C0.0442476 9.86716 0.000366211 9.97313 0.000366211 10.0836C0.000366211 10.1941 0.0442476 10.3001 0.122361 10.3782C0.200497 10.4563 0.306459 10.5002 0.416944 10.5002C0.527429 10.5002 0.633391 10.4563 0.711527 10.3782L5.00028 6.08944L9.28903 10.3782C9.36716 10.4563 9.47313 10.5002 9.58361 10.5002C9.6941 10.5002 9.80006 10.4563 9.87819 10.3782C9.95631 10.3001 10.0002 10.1941 10.0002 10.0836C10.0002 9.97313 9.95631 9.86716 9.87819 9.78903L5.58944 5.50028L9.87819 1.21153C9.95631 1.13339 10.0002 1.02743 10.0002 0.916944C10.0002 0.806459 9.95631 0.700497 9.87819 0.622361Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_17_1429">
                                <rect width="10" height="10" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
        </div>
    <!--Поменять название чата !!!!НАВЕСИТЬ ФОРМУ!!!!-->
    <div class="renameChat">
        <button class="renameChat buttonTool" onclick="renameChat(this);">
            <svg class="svgPath" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_16_2302)">
                    <path d="M9.52215 0.478314C9.23888 0.195479 8.85495 0.0366211 8.45465 0.0366211C8.05435 0.0366211 7.67042 0.195479 7.38715 0.478314L0.610484 7.25498C0.416422 7.44795 0.262552 7.67749 0.157775 7.93031C0.0529981 8.18313 -0.000604788 8.45422 6.72773e-05 8.7279V9.58331C6.72773e-05 9.69382 0.043966 9.7998 0.122106 9.87794C0.200246 9.95608 0.306227 9.99998 0.416734 9.99998H1.27215C1.5458 10.0008 1.81689 9.94724 2.06972 9.84253C2.32254 9.73782 2.55209 9.584 2.74507 9.38998L9.52215 2.6129C9.80486 2.32965 9.96364 1.9458 9.96364 1.54561C9.96364 1.14541 9.80486 0.761566 9.52215 0.478314ZM2.1559 8.80081C1.9209 9.03425 1.60339 9.16569 1.27215 9.16665H0.833401V8.7279C0.832979 8.56369 0.865132 8.40103 0.927999 8.24934C0.990867 8.09764 1.0832 7.95992 1.19965 7.84415L6.34257 2.70123L7.3009 3.65956L2.1559 8.80081ZM8.93257 2.02373L7.8884 3.06831L6.93007 2.11206L7.97465 1.06748C8.03758 1.00469 8.11225 0.954913 8.19441 0.920985C8.27658 0.887056 8.36462 0.869643 8.45351 0.86974C8.5424 0.869837 8.63041 0.887441 8.7125 0.921548C8.79459 0.955655 8.86915 1.0056 8.93194 1.06852C8.99473 1.13145 9.04451 1.20612 9.07844 1.28829C9.11237 1.37045 9.12978 1.45849 9.12968 1.54738C9.12959 1.63628 9.11198 1.72428 9.07787 1.80637C9.04377 1.88846 8.99383 1.96303 8.9309 2.02581L8.93257 2.02373Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_16_2302">
                        <rect width="10" height="10" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </button>
        <!--Смена названия textarea-->
        <div class="confirmRename nonActive">
            <button class="renameChatYes buttonTool" onclick="renChat(this)">
                <svg class="svgPath" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_17_1427)">
                        <path d="M9.29951 2.34625L3.5416 8.10375C3.50288 8.14262 3.45688 8.17346 3.40622 8.1945C3.35556 8.21554 3.30124 8.22637 3.24639 8.22637C3.19153 8.22637 3.13722 8.21554 3.08656 8.1945C3.0359 8.17346 2.98989 8.14262 2.95118 8.10375L0.724512 5.875C0.685799 5.83614 0.639794 5.8053 0.589134 5.78426C0.538475 5.76321 0.484159 5.75238 0.429303 5.75238C0.374448 5.75238 0.320132 5.76321 0.269473 5.78426C0.218813 5.8053 0.172807 5.83614 0.134095 5.875C0.0952298 5.91372 0.0643913 5.95972 0.0433489 6.01038C0.0223065 6.06104 0.0114746 6.11536 0.0114746 6.17021C0.0114746 6.22507 0.0223065 6.27938 0.0433489 6.33004C0.0643913 6.3807 0.0952298 6.42671 0.134095 6.46542L2.3616 8.6925C2.59657 8.92705 2.91501 9.05877 3.24701 9.05877C3.57901 9.05877 3.89745 8.92705 4.13243 8.6925L9.88993 2.93625C9.92873 2.89755 9.95952 2.85157 9.98052 2.80095C10.0015 2.75033 10.0123 2.69606 10.0123 2.64125C10.0123 2.58645 10.0015 2.53218 9.98052 2.48156C9.95952 2.43094 9.92873 2.38496 9.88993 2.34625C9.85122 2.30739 9.80521 2.27655 9.75455 2.25551C9.70389 2.23446 9.64958 2.22363 9.59472 2.22363C9.53987 2.22363 9.48555 2.23446 9.43489 2.25551C9.38423 2.27655 9.33823 2.30739 9.29951 2.34625Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_17_1427">
                            <rect width="10" height="10" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <button class="renameChatNo buttonTool" onclick="renameChat(this);">
                <svg class="svgPath" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_17_1429)">
                        <path d="M9.87819 0.622361C9.80006 0.544248 9.6941 0.500366 9.58361 0.500366C9.47313 0.500366 9.36716 0.544248 9.28903 0.622361L5.00028 4.91111L0.711527 0.622361C0.633391 0.544248 0.527429 0.500366 0.416944 0.500366C0.306459 0.500366 0.200497 0.544248 0.122361 0.622361C0.0442476 0.700497 0.000366211 0.806459 0.000366211 0.916944C0.000366211 1.02743 0.0442476 1.13339 0.122361 1.21153L4.41111 5.50028L0.122361 9.78903C0.0442476 9.86716 0.000366211 9.97313 0.000366211 10.0836C0.000366211 10.1941 0.0442476 10.3001 0.122361 10.3782C0.200497 10.4563 0.306459 10.5002 0.416944 10.5002C0.527429 10.5002 0.633391 10.4563 0.711527 10.3782L5.00028 6.08944L9.28903 10.3782C9.36716 10.4563 9.47313 10.5002 9.58361 10.5002C9.6941 10.5002 9.80006 10.4563 9.87819 10.3782C9.95631 10.3001 10.0002 10.1941 10.0002 10.0836C10.0002 9.97313 9.95631 9.86716 9.87819 9.78903L5.58944 5.50028L9.87819 1.21153C9.95631 1.13339 10.0002 1.02743 10.0002 0.916944C10.0002 0.806459 9.95631 0.700497 9.87819 0.622361Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_17_1429">
                            <rect width="10" height="10" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
    </div>
</div>
