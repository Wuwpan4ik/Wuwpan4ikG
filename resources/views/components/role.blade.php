@empty($show)
@else
    <div class="firstRow">
        <h2 class="title">
            {{ __("systemRole") }}
        </h2>
        <div class="systemRole" id="systemRole">
            <span>@if($chat->role) {{ $chat->role }} @else Пользователь @endif</span>
            <div class="hoverItems">
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

                <form action="{{ route('chat.updateRole', $chat->id) }}" method="POST">
                    @csrf
                    <textarea name="role" id="systemRoleText">

            </textarea>
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
    }

    //Кнопка редактирования в системной роли
    document.querySelector('.systemRole button.renameChat').onclick = () =>{
        document.querySelector('.formSystemRole').classList.remove('nonActive');
        document.querySelector('.systemRole .hoverItems').classList.add('nonActive');
        document.getElementById('systemRoleText').innerText = document.querySelector('.systemRole span').textContent;
        document.querySelector('.systemRole span').textContent = "";
    }

    //Кнопка отменить в системной роли
    document.getElementById('dismissRole').onclick = () =>{
        document.querySelector('.formSystemRole').classList.add('nonActive');
        document.querySelector('.systemRole .hoverItems').classList.remove('nonActive');
        document.querySelector('.systemRole span').textContent = document.getElementById('systemRoleText').innerText;
    }
</script>
