@empty($show)
@else
    <div class="firstRow">
        <h2 class="title">
            {{ __("systemRole") }}
        </h2>
        <div class="systemRole" id="systemRole">
            <span>@if($chat->role) {{ $chat->role }} @else Пользователь @endif</span>
            <div class="hoverItems prompts">
                <button class="copyBtn">
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
                <button class="renameChat">
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
            </div>
            <!--Смена системной роли-->
            <div class="formSystemRole nonActive">

                <form class="change__role" onsubmit="return changeRole(event)" action="{{ route('chat.updateRole', $chat->id) }}" method="POST">
                    @csrf
                    <textarea name="role" id="systemRoleText"></textarea>
                    <div class="buttons">
                        <button type="submit">
                            Сохранить
                        </button>
                        <button id="dismissRole" type="button">
                            Отменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endempty
<script>

    //Copy btn system role
    document.querySelector("button.copyBtn").onclick = function() {
        var copyTextarea = document.createElement("textarea");
        copyTextarea.style.position = "fixed";
        copyTextarea.style.opacity = "0";
        copyTextarea.textContent = String(document.querySelector("#systemRole span").textContent).trim();
        document.body.appendChild(copyTextarea);
        copyTextarea.select();
        document.execCommand("copy");
        document.body.removeChild(copyTextarea);
        let lastSvg = this.innerHTML;
        this.innerHTML = `<svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_8_718)">
        <path d="M19.9499 5.53642L16.4639 2.05042C15.8155 1.3985 15.0442 0.881645 14.1947 0.529765C13.3452 0.177884 12.4344 -0.00203383 11.5149 0.000421525H6.99988C5.67428 0.00200938 4.40344 0.529304 3.4661 1.46664C2.52876 2.40398 2.00147 3.67483 1.99988 5.00042V19.0004C2.00147 20.326 2.52876 21.5969 3.4661 22.5342C4.40344 23.4715 5.67428 23.9988 6.99988 24.0004H16.9999C18.3255 23.9988 19.5963 23.4715 20.5337 22.5342C21.471 21.5969 21.9983 20.326 21.9999 19.0004V10.4854C22.0023 9.56594 21.8224 8.6551 21.4705 7.80561C21.1187 6.95612 20.6018 6.18485 19.9499 5.53642ZM18.5359 6.95042C18.8409 7.26483 19.1035 7.61783 19.3169 8.00042H14.9999C14.7347 8.00042 14.4803 7.89507 14.2928 7.70753C14.1052 7.51999 13.9999 7.26564 13.9999 7.00042V2.68342C14.3825 2.89681 14.7355 3.15937 15.0499 3.46442L18.5359 6.95042ZM19.9999 19.0004C19.9999 19.7961 19.6838 20.5591 19.1212 21.1217C18.5586 21.6844 17.7955 22.0004 16.9999 22.0004H6.99988C6.20423 22.0004 5.44117 21.6844 4.87856 21.1217C4.31595 20.5591 3.99988 19.7961 3.99988 19.0004V5.00042C3.99988 4.20477 4.31595 3.44171 4.87856 2.8791C5.44117 2.31649 6.20423 2.00042 6.99988 2.00042H11.5149C11.6799 2.00042 11.8379 2.03242 11.9999 2.04742V7.00042C11.9999 7.79607 12.3159 8.55913 12.8786 9.12174C13.4412 9.68435 14.2042 10.0004 14.9999 10.0004H19.9529C19.9679 10.1624 19.9999 10.3204 19.9999 10.4854V19.0004ZM16.7239 13.3114C16.9065 13.5035 17.0054 13.7602 16.9988 14.0252C16.9922 14.2901 16.8808 14.5416 16.6889 14.7244L13.0999 18.1384C12.5357 18.6937 11.775 19.0035 10.9834 19.0003C10.1918 18.9971 9.43355 18.6812 8.87388 18.1214L7.33388 16.7474C7.13576 16.5708 7.01593 16.3227 7.00074 16.0577C6.99321 15.9265 7.01161 15.7951 7.05487 15.671C7.09814 15.5469 7.16542 15.4325 7.25288 15.3344C7.34034 15.2363 7.44626 15.1564 7.56461 15.0993C7.68295 15.0421 7.81139 15.0088 7.9426 15.0013C8.20759 14.9861 8.46776 15.0768 8.66588 15.2534L10.2509 16.6674C10.3416 16.7693 10.4522 16.8516 10.576 16.9091C10.6997 16.9667 10.8338 16.9983 10.9702 17.002C11.1066 17.0058 11.2423 16.9816 11.369 16.9309C11.4957 16.8802 11.6107 16.8042 11.7069 16.7074L15.3069 13.2764C15.4021 13.1854 15.5143 13.1141 15.6371 13.0666C15.76 13.019 15.891 12.9963 16.0226 12.9995C16.1543 13.0028 16.284 13.032 16.4044 13.0855C16.5247 13.139 16.6333 13.2158 16.7239 13.3114Z" fill="white"/>
        </g>
        <defs>
        <clipPath id="clip0_8_718">
        <rect width="24" height="24" fill="white"/>
        </clipPath>
        </defs>
        </svg>
        `;
        setTimeout(()=>{
            this.innerHTML = lastSvg;
        }, 500);
    }

    //Кнопка редактирования в системной роли
    document.querySelector('.systemRole button.renameChat').onclick = () =>{
        document.querySelector('.formSystemRole').classList.toggle('nonActive');
        document.querySelector('.systemRole .hoverItems').classList.toggle('nonActive');
        document.getElementById('systemRoleText').innerText = document.querySelector('.systemRole span').textContent;
        document.querySelector('.systemRole span').classList.add('display-none');
    }

    //Кнопка отменить в системной роли
    document.getElementById('dismissRole').onclick = () =>{
        document.querySelector('.formSystemRole').classList.add('nonActive');
        document.querySelector('.systemRole .hoverItems').classList.remove('nonActive');
        document.querySelector('.systemRole span').classList.remove('display-none');
    }
</script>
