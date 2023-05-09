<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta GPT - {{__('libTitle')}}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="@if(session()->get('theme')){{ session()->get('theme') }} @else dark @endif">
    @include('components.header')
    <div class="sidebarMain left">
        <div class="first-col">
            <div class="folderRow">
                <h2>
                    {{ __("mainRazdeli") }}
                </h2>
            </div>

            @include('components.library_prompts.main_prompts')

            <div class="tablinks-container libraryItems sobsRazdeli">
                <h2>{{__("mineRazdeli")}}</h2>
                <!--Показывать в случае если пользователь не добавил себе раздел-->
                <div class="tablinks-mine-razdeli">
                    @include('components.sidebar_library')
                </div>

                <!--Создание раздела-->
                    <form class="create__folder" action="{{ route('prompts_folder.store') }}" method="POST">
                        @csrf
                        <button type="button" onclick="add_new_catalog(this)" class="add-folder">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_17_4808)"><path d="M9.5 0C7.71997 0 5.97991 0.527841 4.49987 1.51677C3.01983 2.50571 1.86628 3.91131 1.18509 5.55585C0.5039 7.20038 0.32567 9.00998 0.672937 10.7558C1.0202 12.5016 1.87737 14.1053 3.13604 15.364C4.39472 16.6226 5.99836 17.4798 7.74419 17.8271C9.49002 18.1743 11.2996 17.9961 12.9442 17.3149C14.5887 16.6337 15.9943 15.4802 16.9832 14.0001C17.9722 12.5201 18.5 10.78 18.5 9C18.4974 6.61384 17.5484 4.32616 15.8611 2.63889C14.1738 0.951621 11.8862 0.00258081 9.5 0V0ZM9.5 16.5C8.01664 16.5 6.5666 16.0601 5.33323 15.236C4.09986 14.4119 3.13856 13.2406 2.57091 11.8701C2.00325 10.4997 1.85473 8.99168 2.14411 7.53682C2.4335 6.08197 3.14781 4.74559 4.1967 3.6967C5.2456 2.64781 6.58197 1.9335 8.03683 1.64411C9.49168 1.35472 10.9997 1.50325 12.3701 2.0709C13.7406 2.63856 14.9119 3.59985 15.736 4.83322C16.5601 6.06659 17 7.51664 17 9C16.9978 10.9885 16.2069 12.8948 14.8009 14.3009C13.3948 15.7069 11.4885 16.4978 9.5 16.5ZM10.25 8.25H13.25V9.75H10.25V12.75H8.75V9.75H5.75V8.25H8.75V5.25H10.25V8.25Z" fill="white" fill-opacity="0.3"/></g><defs><clipPath id="clip0_17_4808"><rect width="18" height="18" fill="white" transform="translate(0.5)"/></clipPath></defs></svg>
                            {{ __("createRazdel") }}
                        </button>
                    </form>

            </div>
        </div>
        <div class="menu-items footer__menu-items">
            <a class="menu-item" id="aboutProject">
                <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_47_767)">
                        <path d="M9 0C7.21997 0 5.47991 0.527841 3.99987 1.51677C2.51983 2.50571 1.36628 3.91131 0.685088 5.55585C0.00389957 7.20038 -0.17433 9.00998 0.172937 10.7558C0.520204 12.5016 1.37737 14.1053 2.63604 15.364C3.89472 16.6226 5.49836 17.4798 7.24419 17.8271C8.99002 18.1743 10.7996 17.9961 12.4442 17.3149C14.0887 16.6337 15.4943 15.4802 16.4832 14.0001C17.4722 12.5201 18 10.78 18 9C17.9974 6.61384 17.0484 4.32616 15.3611 2.63889C13.6738 0.951621 11.3862 0.00258081 9 0V0ZM9 16.5C7.51664 16.5 6.0666 16.0601 4.83323 15.236C3.59986 14.4119 2.63856 13.2406 2.07091 11.8701C1.50325 10.4997 1.35473 8.99168 1.64411 7.53682C1.9335 6.08197 2.64781 4.74559 3.6967 3.6967C4.7456 2.64781 6.08197 1.9335 7.53683 1.64411C8.99168 1.35472 10.4997 1.50325 11.8701 2.0709C13.2406 2.63856 14.4119 3.59985 15.236 4.83322C16.0601 6.06659 16.5 7.51664 16.5 9C16.4978 10.9885 15.7069 12.8948 14.3009 14.3009C12.8948 15.7069 10.9885 16.4978 9 16.5V16.5Z" fill="white" fill-opacity="0.3"/>
                        <path d="M9.53774 3.79712C9.10524 3.71832 8.6607 3.73554 8.23559 3.84756C7.81048 3.95957 7.41518 4.16365 7.07767 4.44535C6.74016 4.72705 6.46868 5.07949 6.28246 5.47772C6.09623 5.87596 5.9998 6.31025 6 6.74987C6 6.94879 6.07902 7.13955 6.21967 7.2802C6.36032 7.42086 6.55109 7.49987 6.75 7.49987C6.94891 7.49987 7.13968 7.42086 7.28033 7.2802C7.42098 7.13955 7.5 6.94879 7.5 6.74987C7.49981 6.52921 7.54831 6.31121 7.64204 6.11144C7.73577 5.91167 7.87243 5.73504 8.04226 5.59415C8.21209 5.45325 8.41092 5.35156 8.62456 5.29633C8.83821 5.2411 9.06141 5.23369 9.27825 5.27462C9.57452 5.33214 9.84693 5.47666 10.0607 5.68974C10.2744 5.90282 10.4198 6.17478 10.4782 6.47087C10.5373 6.78168 10.4965 7.10318 10.3618 7.38943C10.2271 7.67567 10.0053 7.912 9.72824 8.06462C9.26937 8.33047 8.89019 8.71451 8.63019 9.17673C8.37019 9.63894 8.2389 10.1624 8.25 10.6926V11.2499C8.25 11.4488 8.32901 11.6396 8.46967 11.7802C8.61032 11.9209 8.80108 11.9999 9 11.9999C9.19891 11.9999 9.38967 11.9209 9.53032 11.7802C9.67098 11.6396 9.74999 11.4488 9.74999 11.2499V10.6926C9.74058 10.4316 9.8001 10.1728 9.92254 9.94209C10.045 9.71142 10.2261 9.51707 10.4475 9.37862C10.9909 9.08018 11.4285 8.62072 11.7001 8.06343C11.9717 7.50614 12.0639 6.87839 11.9642 6.26652C11.8645 5.65464 11.5776 5.08869 11.1431 4.6465C10.7086 4.2043 10.1478 3.90757 9.53774 3.79712V3.79712Z" fill="white" fill-opacity="0.3"/>
                        <path d="M9.75001 13.5C9.75001 13.0858 9.41422 12.75 9 12.75C8.58579 12.75 8.25 13.0858 8.25 13.5C8.25 13.9142 8.58579 14.25 9 14.25C9.41422 14.25 9.75001 13.9142 9.75001 13.5Z" fill="white" fill-opacity="0.3"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_47_767">
                            <rect width="18" height="18" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                {{ __("aboutProject") }}
            </a>
            <a href="https://t.me/starlinkprod" class="menu-item" id="aboutProject" target="_blank">
                <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_47_770)">
                        <path d="M15 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3L0 12C0 12.7956 0.316071 13.5587 0.87868 14.1213C1.44129 14.6839 2.20435 15 3 15H5.175L8.51325 17.8223C8.64867 17.9369 8.82034 17.9997 8.99775 17.9997C9.17516 17.9997 9.34683 17.9369 9.48225 17.8223L12.825 15H15C15.7956 15 16.5587 14.6839 17.1213 14.1213C17.6839 13.5587 18 12.7956 18 12V3C18 2.20435 17.6839 1.44129 17.1213 0.87868C16.5587 0.316071 15.7956 0 15 0V0ZM16.5 12C16.5 12.3978 16.342 12.7794 16.0607 13.0607C15.7794 13.342 15.3978 13.5 15 13.5H12.825C12.4705 13.5001 12.1274 13.6258 11.8568 13.8547L9 16.2675L6.14475 13.8547C5.87367 13.6255 5.53005 13.4998 5.175 13.5H3C2.60218 13.5 2.22064 13.342 1.93934 13.0607C1.65804 12.7794 1.5 12.3978 1.5 12V3C1.5 2.60218 1.65804 2.22064 1.93934 1.93934C2.22064 1.65804 2.60218 1.5 3 1.5H15C15.3978 1.5 15.7794 1.65804 16.0607 1.93934C16.342 2.22064 16.5 2.60218 16.5 3V12Z" fill="white" fill-opacity="0.3"/>
                        <path d="M5.25 5.25H9C9.19891 5.25 9.38968 5.17098 9.53033 5.03033C9.67098 4.88968 9.75 4.69891 9.75 4.5C9.75 4.30109 9.67098 4.11032 9.53033 3.96967C9.38968 3.82902 9.19891 3.75 9 3.75H5.25C5.05109 3.75 4.86032 3.82902 4.71967 3.96967C4.57902 4.11032 4.5 4.30109 4.5 4.5C4.5 4.69891 4.57902 4.88968 4.71967 5.03033C4.86032 5.17098 5.05109 5.25 5.25 5.25Z" fill="white" fill-opacity="0.3"/>
                        <path d="M12.75 6.75H5.25C5.05109 6.75 4.86032 6.82902 4.71967 6.96967C4.57902 7.11032 4.5 7.30109 4.5 7.5C4.5 7.69891 4.57902 7.88968 4.71967 8.03033C4.86032 8.17098 5.05109 8.25 5.25 8.25H12.75C12.9489 8.25 13.1397 8.17098 13.2803 8.03033C13.421 7.88968 13.5 7.69891 13.5 7.5C13.5 7.30109 13.421 7.11032 13.2803 6.96967C13.1397 6.82902 12.9489 6.75 12.75 6.75Z" fill="white" fill-opacity="0.3"/>
                        <path d="M12.75 9.75H5.25C5.05109 9.75 4.86032 9.82902 4.71967 9.96967C4.57902 10.1103 4.5 10.3011 4.5 10.5C4.5 10.6989 4.57902 10.8897 4.71967 11.0303C4.86032 11.171 5.05109 11.25 5.25 11.25H12.75C12.9489 11.25 13.1397 11.171 13.2803 11.0303C13.421 10.8897 13.5 10.6989 13.5 10.5C13.5 10.3011 13.421 10.1103 13.2803 9.96967C13.1397 9.82902 12.9489 9.75 12.75 9.75Z" fill="white" fill-opacity="0.3"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_47_770">
                            <rect width="18" height="18" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                {{ __("support") }}
            </a>
            <form action="{{ route('logout') }}" style="cursor: pointer;" onclick="this.submit()" class="menu-item" method="POST">
                @csrf
                <button type="submit">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_47_773)">
                            <path d="M17.1212 6.87857L14.212 3.96932C14.0705 3.8327 13.8811 3.75711 13.6844 3.75882C13.4878 3.76053 13.2997 3.8394 13.1606 3.97846C13.0215 4.11752 12.9427 4.30562 12.941 4.50227C12.9392 4.69892 13.0148 4.88837 13.1515 5.02982L16.0607 7.93907C16.1471 8.02722 16.2227 8.12542 16.2857 8.23157C16.2745 8.23157 16.2655 8.22557 16.2542 8.22557L4.49121 8.24957C4.2923 8.24957 4.10153 8.32859 3.96088 8.46924C3.82023 8.60989 3.74121 8.80066 3.74121 8.99957C3.74121 9.19848 3.82023 9.38925 3.96088 9.5299C4.10153 9.67055 4.2923 9.74957 4.49121 9.74957L16.2497 9.72557C16.2707 9.72557 16.288 9.71507 16.3082 9.71357C16.2417 9.84044 16.1573 9.95713 16.0577 10.0601L13.1485 12.9693C13.0768 13.0385 13.0197 13.1213 12.9804 13.2128C12.9411 13.3043 12.9204 13.4027 12.9195 13.5023C12.9187 13.6019 12.9376 13.7006 12.9753 13.7928C13.0131 13.885 13.0687 13.9687 13.1392 14.0391C13.2096 14.1095 13.2933 14.1652 13.3855 14.2029C13.4777 14.2406 13.5764 14.2596 13.676 14.2588C13.7756 14.2579 13.874 14.2372 13.9655 14.1979C14.057 14.1586 14.1398 14.1015 14.209 14.0298L17.1182 11.1206C17.6806 10.558 17.9966 9.79507 17.9966 8.99957C17.9966 8.20408 17.6806 7.44116 17.1182 6.87857H17.1212Z" fill="white" fill-opacity="0.3"/>
                            <path d="M5.25 16.5H3.75C3.15326 16.5 2.58097 16.2629 2.15901 15.841C1.73705 15.419 1.5 14.8467 1.5 14.25V3.75C1.5 3.15326 1.73705 2.58097 2.15901 2.15901C2.58097 1.73705 3.15326 1.5 3.75 1.5H5.25C5.44891 1.5 5.63968 1.42098 5.78033 1.28033C5.92098 1.13968 6 0.948912 6 0.75C6 0.551088 5.92098 0.360322 5.78033 0.21967C5.63968 0.0790176 5.44891 0 5.25 0L3.75 0C2.7558 0.00119089 1.80267 0.396661 1.09966 1.09966C0.396661 1.80267 0.00119089 2.7558 0 3.75L0 14.25C0.00119089 15.2442 0.396661 16.1973 1.09966 16.9003C1.80267 17.6033 2.7558 17.9988 3.75 18H5.25C5.44891 18 5.63968 17.921 5.78033 17.7803C5.92098 17.6397 6 17.4489 6 17.25C6 17.0511 5.92098 16.8603 5.78033 16.7197C5.63968 16.579 5.44891 16.5 5.25 16.5Z" fill="white" fill-opacity="0.3"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_47_773">
                                <rect width="18" height="18" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __("logout") }}
                </button>
            </form>
        </div>
    </div>
    <div class="mainWrapper">
        <section class="library">
            <div class="library-items">
                @empty($prompts)
                    <div class="notAddedRazdel">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_16_1857)"><path d="M28.4575 5.70745C28.0007 5.51718 27.4977 5.46717 27.0124 5.56378C26.5271 5.66039 26.0816 5.89925 25.7325 6.24995L22.5 9.48245L16.7675 3.74995C16.2987 3.28127 15.6629 3.01798 15 3.01798C14.3371 3.01798 13.7013 3.28127 13.2325 3.74995L7.5 9.48245L4.2675 6.24995C3.91787 5.90043 3.47246 5.66241 2.98758 5.56599C2.5027 5.46957 2.00011 5.51908 1.54336 5.70825C1.08661 5.89743 0.696207 6.21778 0.421496 6.6288C0.146785 7.03983 0.000105561 7.52307 0 8.01745L0 21.25C0.00198482 22.9069 0.661102 24.4955 1.83277 25.6672C3.00445 26.8389 4.59301 27.498 6.25 27.5H23.75C25.407 27.498 26.9956 26.8389 28.1672 25.6672C29.3389 24.4955 29.998 22.9069 30 21.25V8.01745C30.0001 7.52303 29.8536 7.03968 29.5791 6.62851C29.3045 6.21734 28.9142 5.89681 28.4575 5.70745ZM27.5 21.25C27.5 22.2445 27.1049 23.1983 26.4017 23.9016C25.6984 24.6049 24.7446 25 23.75 25H6.25C5.25544 25 4.30161 24.6049 3.59835 23.9016C2.89509 23.1983 2.5 22.2445 2.5 21.25V8.01745L6.61625 12.1337C6.85066 12.368 7.16854 12.4997 7.5 12.4997C7.83146 12.4997 8.14934 12.368 8.38375 12.1337L15 5.51745L21.6162 12.1337C21.8507 12.368 22.1685 12.4997 22.5 12.4997C22.8315 12.4997 23.1493 12.368 23.3838 12.1337L27.5 8.01745V21.25Z" fill="white" fill-opacity="0.3"/></g><defs><clipPath id="clip0_16_1857"><rect width="30" height="30" fill="white"/></clipPath></defs></svg>
                        <p>
                            Вы ещё не создали ни одного раздела
                        </p>
                    </div>
                @else
                    @include('components.library_prompts.main', ['library' => 1])
                @endempty
            </div>
            <div class="add_prompt">
                @if($prompts_main == 0)
                    @include('components.add_formPrompt')
                @endif
            </div>
        </section>
        <section class="library-mob">
            <div class="library-mob-wrapper">
                <h2>{{__('libTitle')}}</h2>
                    @include('components.library_prompts.main_prompts')
                    @include('components.library_prompts.main', ['library' => 1])
                <div class="add_prompt">
                    @if($prompts_main == 0)
                        @include('components.add_formPrompt')
                    @endif
                </div>
            </div>
        </section>
    </div>
    <div class="sidebarMain right">
        <div class="firstRow">
            <h2 class="title aboutRs">
                {{__("aboutRazdel")}}
            </h2>
            <p class="aboutRazdel">
                Библиотека подсказок — это набор заранее созданных ответов, который GPT может использовать для помощи в формулировании своих ответов на запросы пользователей. В данном разделе содержаться подсказки на различные темы.
            </p>
            <p class="aboutRazdel">
                Раздел содержат информацию о часто задаваемых вопросах и типичных сценариях общения, что позволяет улучшить качество ответов и повысить скорость их предоставления.
            </p>
        </div>
    </div>
    @include('components.popups.popup-settings')
    @include('components.popups.popup-pay')
    @include('components.popups.popup-about')
    @include('components.popups.popup-develop')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/markdown-it@13.0.1/dist/markdown-it.min.js "></script>
    <script src="https://widget.cloudpayments.ru/bundles/cloudpayments.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        $(".changeLang").click(function(){
            fetch("{{ route('changeLanguage') }}" + "?lang="+ $(this).data("lang"))
        });

        $(".switchTheme").click(function(){
            $.each($(".switchTheme"), function (num, item) {
                item.classList.remove('active')
            })
            $(this).addClass('active')

            fetch("{{ route('changeTheme') }}" + "?theme="+ $(this).data("theme"))

            $('body').toggleClass('dark light');
        });
    </script>
    <script>
        //Закрытие попапов
        let closeBtnBuy =  document.querySelectorAll('.closeBtnBuy button');

        closeBtnBuy.forEach((item)=>{
            let popups = document.querySelectorAll('.popup');
            item.onclick = () =>{
                popups.forEach(
                    (item)=>{
                        item.classList.remove('active');
                        if(item.id == "pay-popup"){
                            document.getElementById('tokensLeft').classList.remove('active');
                        }
                    }
                );
            }
        })
    </script>
    <script>
        this.pay = function () {
            var widget = new cp.CloudPayments();
            widget.pay('auth', // или 'charge'
                { //options
                    publicId: 'test_api_00000000000000000000002', //id из личного кабинета
                    description: 'Покупка токенов,',
                    amount: document.querySelector('#priceStealer').value, //сумма
                    currency: 'RUB', //валюта
                    invoiceId: {{ Auth::id() }},
                    accountId: '{{ Auth::user()->email }}', //идентификатор плательщика (необязательно)
                    skin: "mini", //дизайн виджета (необязательно)
                    data: {
                        myProp: 'myProp value'
                    },
                },
                {
                    onSuccess: function (options) {
                    },
                    onFail: function (reason, options) { // fail
                        //действие при неуспешной оплате
                    },
                    onComplete: function (paymentResult, options) { //Вызывается как только виджет получает от api.cloudpayments ответ с результатом транзакции.
                        if (paymentResult.success) {
                            let params = {
                                "amount": options.amount,
                                "user_id": options.invoiceId
                            }
                            fetch("{{ route('payer.buy') }}", {
                                headers: {
                                    'Content-Type': 'application/json;charset=utf-8',
                                    "X-CSRF-Token": document.querySelector('#pay-popup').querySelector('input[name="_token"]').value
                                }, method: 'POST', body: JSON.stringify(params)
                            })
                        }
                    }
                }

            )
        };

        $('#checkout').click(pay);
    </script>
    {{-- Код для удаления чата --}}
    <script>
        function delChat(item) {
            item.parentElement.parentElement.parentElement.remove()
            if (document.querySelector('.tablink')) {
                document.querySelector('.tablink').click()
            } else {
                window.location.replace('/prompts/1')
            }
            fetch(item.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": $(item).find('input[name="_token"]').val()}, method: "DELETE"})
            $('.tablinks-mine-razdeli').load('/prompts_folder/sidebar_content');
            initDelete();
        }
    </script>

    {{-- Код для смены названия чата --}}
    <script>
        document.querySelectorAll('.chat__update-form').forEach(item => {
            item.addEventListener('submit', function (e) {
                e.preventDefault()
                fetch(item.action, {
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8',
                        "X-CSRF-Token": $(item).find('input[name="_token"]').val()
                    }, method: "PATCH", body: JSON.stringify({'title': item.querySelector('input[name="title"]').value})
                })
                item.parentElement.parentElement.querySelector('.chat__name').innerHTML = item.querySelector('input[name="title"]').value
                renameChat(item.parentElement.parentElement.querySelector("button.renameChat"))
            })
        })
    </script>

    <script>
        function add_new_prompt() {
            let form = document.querySelector('.add_new_prompt');
            let key = form.querySelector('input[name=_token]').value;
            let folder_id = document.querySelector("input[name=folder_id]").value;
            let params = {
                "folder_id": folder_id,
            }
            fetch('/prompts', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
            $('.library-items').load(`/prompts/${folder_id}/main/1`);
        }

        function add_new_catalog(button) {
            let form = document.querySelector('.create__folder');
            let key = form.querySelector('input[name=_token]').value;
            fetch(form.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: {}})
            $('.tablinks-mine-razdeli').load('/prompts_folder/sidebar_content');
            initDelete();
        }

        function myFunction(id, is_main) {
            $.each($('.tablink'), function (index, val) {
                val.classList.remove('active');
                let btnCopies = document.querySelectorAll('.library-item button.copyRole');
            })
                    //Копирование промтов

            function copyPrompts(item){
                var copyTextarea = document.createElement("textarea");
                var lastSvg = btnCopies[i].innerHTML;
                copyTextarea.style.position = "fixed";
                copyTextarea.style.opacity = "0";
                copyTextarea.textContent = String(btnCopies[i].parentElement.parentElement.querySelector('span').innerHTML).trim();
                document.body.appendChild(copyTextarea);
                copyTextarea.select();
                document.execCommand("copy");
                document.body.removeChild(copyTextarea);
                btnCopies[i].innerHTML = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    btnCopies[i].innerHTML = lastSvg;
                }, 500);
            }
            event.target.classList.add('active');
            $('input[name="folder_id"]').val(id)
            $('.library-items').load(`/prompts/${id}/main/1`);
            if (!is_main) {
                $('.add_prompt').load(`/add_formPrompt/${id}`);
            } else {
                $(".add_new_prompt").remove()
            }

            let stateObj = { id: "100" };

            window.history.replaceState(stateObj,
                "Page 3", `/prompts/${id}`);

            $.each($('.tablink'), function (index, val) {
                val.classList.remove('active')
            })
            event.target.classList.add('active');
        }
    </script>
</body>
</html>
