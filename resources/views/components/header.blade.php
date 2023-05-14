<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta GPT</title>
    <!--Ключевые слова-->
    <meta name="keywords" content="ChatGPT, openai, чат гпт" />
    <!--Описание-->
    <meta name="description" content=" Наш сервис предоставляет доступ к использованию chatGPT - самой передовой технологии генерации текста на сегодняшний день." />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
    <!--OG SEO-->
    <meta property="og:url" content="https://meta-gpt.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Meta GPT" />
    <meta property="og:description" content=" Наш сервис предоставляет доступ к использованию chatGPT - самой передовой технологии генерации текста на сегодняшний день." />
    <meta property="og:image" content="{{ asset('assets/meta-img.jpg') }}" />
    <!--Метрика-->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(93386433, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/93386433" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!--Миниатюра-->
    <!--Slick slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<header id="mainHeader">
    <nav class="navbar">
        <x-menu>
        </x-menu>
        <ul class="second-col">
            <li class="nonActive">
                <button id="search">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_11_805)"><path d="M17.7801 16.7203L13.3033 12.2435C14.5233 10.7515 15.1231 8.84758 14.9787 6.92568C14.8343 5.00378 13.9567 3.21091 12.5275 1.9179C11.0983 0.624891 9.22678 -0.069323 7.30007 -0.0211491C5.37336 0.0270248 3.53886 0.8139 2.17605 2.17672C0.813229 3.53954 0.0263534 5.37403 -0.0218205 7.30074C-0.0699943 9.22745 0.624219 11.099 1.91723 12.5282C3.21023 13.9574 5.00311 14.835 6.92501 14.9794C8.84691 15.1238 10.7508 14.524 12.2428 13.304L16.7196 17.7808C16.861 17.9174 17.0505 17.993 17.2471 17.9913C17.4438 17.9896 17.6319 17.9107 17.771 17.7716C17.91 17.6326 17.9889 17.4445 17.9906 17.2478C17.9923 17.0512 17.9167 16.8617 17.7801 16.7203ZM7.49984 13.5005C6.31315 13.5005 5.15311 13.1486 4.16642 12.4893C3.17972 11.83 2.41069 10.893 1.95656 9.79661C1.50243 8.70025 1.38361 7.49385 1.61512 6.32997C1.84664 5.16608 2.41808 4.09698 3.2572 3.25787C4.09631 2.41875 5.16541 1.84731 6.3293 1.6158C7.49318 1.38428 8.69958 1.5031 9.79594 1.95723C10.8923 2.41136 11.8294 3.18039 12.4887 4.16709C13.1479 5.15378 13.4998 6.31382 13.4998 7.50051C13.4981 9.09126 12.8653 10.6163 11.7405 11.7412C10.6157 12.866 9.09059 13.4987 7.49984 13.5005Z" fill="#13B8A6"/></g><defs><clipPath id="clip0_11_805"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                </button>
            </li>
            <li>
                <div class="switchLangContainer">
                    <button id="switchLang">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_759_3269)"><path d="M9 0C7.21997 0 5.47991 0.527841 3.99987 1.51677C2.51983 2.50571 1.36628 3.91131 0.685088 5.55585C0.00389957 7.20038 -0.17433 9.00998 0.172937 10.7558C0.520204 12.5016 1.37737 14.1053 2.63604 15.364C3.89472 16.6226 5.49836 17.4798 7.24419 17.8271C8.99002 18.1743 10.7996 17.9961 12.4442 17.3149C14.0887 16.6337 15.4943 15.4802 16.4832 14.0001C17.4722 12.5201 18 10.78 18 9C17.9974 6.61384 17.0484 4.32616 15.3611 2.63889C13.6738 0.951621 11.3862 0.00258081 9 0V0ZM15.4853 5.25H13.0695C12.5287 3.99674 11.8167 2.82456 10.9538 1.767C12.8636 2.2867 14.4917 3.5381 15.4853 5.25ZM12.375 9C12.3688 9.76361 12.2485 10.522 12.018 11.25H5.982C5.75149 10.522 5.63116 9.76361 5.625 9C5.63116 8.2364 5.75149 7.47801 5.982 6.75H12.018C12.2485 7.47801 12.3688 8.2364 12.375 9ZM6.5835 12.75H11.4165C10.7799 14.0068 9.96612 15.1656 9 16.191C8.03353 15.1659 7.21968 14.007 6.5835 12.75ZM6.5835 5.25C7.22008 3.9932 8.03389 2.83437 9 1.809C9.96648 2.83408 10.7803 3.99297 11.4165 5.25H6.5835ZM7.05 1.767C6.18575 2.82434 5.47244 3.99652 4.9305 5.25H2.51475C3.50915 3.53732 5.13875 2.28582 7.05 1.767ZM1.84575 6.75H4.425C4.23057 7.48436 4.12977 8.24035 4.125 9C4.12977 9.75965 4.23057 10.5156 4.425 11.25H1.84575C1.38476 9.78542 1.38476 8.21458 1.84575 6.75ZM2.51475 12.75H4.9305C5.47244 14.0035 6.18575 15.1757 7.05 16.233C5.13875 15.7142 3.50915 14.4627 2.51475 12.75ZM10.9538 16.233C11.8167 15.1754 12.5287 14.0033 13.0695 12.75H15.4853C14.4917 14.4619 12.8636 15.7133 10.9538 16.233ZM16.1543 11.25H13.575C13.7694 10.5156 13.8702 9.75965 13.875 9C13.8702 8.24035 13.7694 7.48436 13.575 6.75H16.1528C16.6137 8.21458 16.6137 9.78542 16.1528 11.25H16.1543Z" fill="white" fill-opacity="0.3"/></g><defs><clipPath id="clip0_759_3269"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                        RU
                        <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.49999 6.31202C4.40151 6.3122 4.30397 6.2929 4.21297 6.25525C4.12197 6.21761 4.03931 6.16235 3.96974 6.09265L1.98486 4.1074L2.51511 3.57715L4.49999 5.56202L6.48486 3.57715L7.01511 4.1074L5.03024 6.09227C4.9607 6.16204 4.87805 6.21737 4.78705 6.25508C4.69605 6.29279 4.59849 6.31215 4.49999 6.31202Z" fill="white" fill-opacity="0.3"/>
                        </svg>
                    </button>
                    <div class="dropdownLang">
                        <button data-lang="EN" style="display:none;">
                            EN
                        </button>
                        <button data-lang="RU" class="active">
                            RU
                        </button>
                        <button data-lang="UA" style="display:none;">
                            UA
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <button id="tokensLeft">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.00002 0C11.4854 0 13.7356 1.00751 15.364 2.63587C16.9934 4.26424 17.9999 6.51449 17.9999 8.99989C17.9999 11.4853 16.9934 13.7355 15.364 15.3639C13.7356 16.9923 11.4854 17.9998 9.00002 17.9998C6.51461 17.9998 4.26538 16.9923 2.636 15.3639C1.00763 13.7355 0.00012207 11.4853 0.00012207 8.99989C0.00012207 6.51449 1.00763 4.26428 2.63603 2.63587C4.26538 1.00754 6.51461 0 9.00002 0Z" fill="#FFB703"/><path d="M9 1.771C10.9961 1.771 12.8038 2.58019 14.1123 3.88867C15.4198 5.19616 16.229 7.0039 16.229 9C16.229 10.9961 15.4198 12.8039 14.1123 14.1113C12.8038 15.4198 10.9961 16.229 9 16.229C7.0039 16.229 5.19715 15.4198 3.88867 14.1113C2.58019 12.8039 1.771 10.9961 1.771 9C1.771 7.0039 2.58019 5.19616 3.88867 3.88867C5.19715 2.58019 7.0039 1.771 9 1.771Z" fill="#FCD227"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.77089C10.9961 1.77089 12.8038 2.58008 14.1123 3.88856L15.364 2.63591C13.7356 1.00754 11.4854 0 9 0V1.77089Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.1123 3.88867C15.4198 5.19617 16.229 7.0039 16.229 9.00001H17.9999C17.9999 6.5146 16.9934 4.26439 15.364 2.63599L14.1123 3.88867Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.229 8.99979C16.229 10.9959 15.4198 12.8037 14.1123 14.1111L15.364 15.3638C16.9933 13.7354 17.9999 11.4852 17.9999 8.99976H16.229V8.99979Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.1123 14.1113C12.8038 15.4198 10.9961 16.229 9 16.229V17.9999C11.4854 17.9999 13.7356 16.9923 15.364 15.364L14.1123 14.1113Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.99997 16.229C7.00387 16.229 5.19712 15.4198 3.88864 14.1113L2.63599 15.364C4.26534 16.9924 6.51456 17.9999 9.00001 17.9999V16.229H8.99997Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.88868 14.1113C2.5802 12.8039 1.77101 10.9961 1.77101 9H0.00012207C0.00012207 11.4854 1.00763 13.7357 2.63603 15.364L3.88868 14.1113Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M1.77101 9.00001C1.77101 7.0039 2.5802 5.19617 3.88868 3.88867L2.63603 2.63599C1.00763 4.26439 0.00012207 6.5146 0.00012207 9.00001H1.77101Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.88867 3.88856C5.19715 2.58008 7.0039 1.77089 9.00001 1.77089V0C6.5146 0 4.26537 1.00751 2.63599 2.63587L3.88867 3.88856Z" fill="#FF9831"/><path d="M9.85103 5.06461L10.431 6.86239C10.454 6.93214 10.4958 6.98994 10.5506 7.0298C10.6064 7.06967 10.6742 7.09259 10.749 7.09259L12.6374 7.08859C12.8647 7.08859 13.058 7.16533 13.2075 7.28891C13.34 7.39951 13.4357 7.546 13.4885 7.70547C13.5403 7.86691 13.5483 8.04132 13.5064 8.20772C13.4586 8.39608 13.347 8.57345 13.1626 8.70598L11.6329 9.81316C11.5721 9.857 11.5302 9.91578 11.5093 9.97959C11.4884 10.0434 11.4884 10.1151 11.5113 10.1869L12.0983 11.9817C12.1691 12.1959 12.1551 12.4042 12.0824 12.5846C12.0193 12.7435 11.9121 12.8812 11.7734 12.9812C11.6379 13.0799 11.4735 13.1427 11.3011 13.1536C11.1078 13.1656 10.9065 13.1148 10.7231 12.9812L9.19737 11.8681C9.13757 11.8242 9.0688 11.8033 9.00004 11.8033C8.93127 11.8033 8.86251 11.8242 8.80373 11.8681L7.27801 12.9812C7.09464 13.1148 6.89235 13.1656 6.70001 13.1536C6.52662 13.1427 6.36318 13.0799 6.22765 12.9812C6.0911 12.8836 5.98251 12.746 5.91771 12.5846C5.84596 12.4042 5.832 12.1959 5.90179 11.9817L6.48876 10.1869C6.51266 10.1151 6.51168 10.0434 6.49076 9.97959C6.47083 9.91582 6.42797 9.857 6.36817 9.81316L4.83747 8.70598C4.65311 8.57345 4.54251 8.39608 4.49466 8.20772C4.4518 8.04132 4.46077 7.86691 4.51259 7.70547C4.56441 7.546 4.66109 7.39951 4.79363 7.28891C4.94209 7.16533 5.13545 7.08859 5.36365 7.08859L7.25214 7.09259C7.3259 7.09259 7.39463 7.06967 7.44947 7.0298C7.50428 6.98994 7.54714 6.93214 7.57006 6.86239L8.15007 5.06461C8.21982 4.84934 8.35337 4.68991 8.51682 4.58627C8.66331 4.4936 8.83273 4.44775 9.00014 4.44775C9.16756 4.44775 9.33698 4.4936 9.48347 4.58627C9.64772 4.68991 9.78128 4.84934 9.85103 5.06461Z" fill="#FB8500"/></svg>
                    <div class="firstRow">
                        <span class="tokens">{{ Auth::user()->tokens }}</span>{{ __("TokensLeft") }}
                    </div>
                </button>
            </li>
            <li>
                <button id="about-user">
                    <img src="{{ Storage::url(Auth::user()->avatar) }}">
                </button>
            </li>
        </ul>
    </nav>
</header>

<header id="mobileHeader">
    <nav>
        <ul>
            <li>
                <button id="openMenu">
                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_204_1983)"><path d="M17.875 8.25H1.375C0.960786 8.25 0.625 8.58579 0.625 9C0.625 9.41422 0.960786 9.75001 1.375 9.75001H17.875C18.2892 9.75001 18.625 9.41422 18.625 9C18.625 8.58579 18.2892 8.25 17.875 8.25Z" fill="#13B8A6"/><path d="M17.875 3H1.375C0.960786 3 0.625 3.33579 0.625 3.75C0.625 4.16421 0.960786 4.5 1.375 4.5H17.875C18.2892 4.5 18.625 4.16421 18.625 3.75C18.625 3.33579 18.2892 3 17.875 3Z" fill="#13B8A6"/><path d="M17.875 13.5H1.375C0.960786 13.5 0.625 13.8358 0.625 14.25C0.625 14.6642 0.960786 15 1.375 15H17.875C18.2892 15 18.625 14.6642 18.625 14.25C18.625 13.8358 18.2892 13.5 17.875 13.5Z" fill="#13B8A6"/></g><defs><clipPath id="clip0_204_1983"><rect width="18" height="18" fill="white" transform="translate(0.625)"/></clipPath></defs></svg>
                </button>
            </li>
            <li>
                <button id="openChats">
                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_334_2405)"><path d="M15.125 0.75H4.625C3.6308 0.751191 2.67767 1.14666 1.97466 1.84966C1.27166 2.55267 0.876191 3.5058 0.875 4.5L0.875 13.5C0.876191 14.4942 1.27166 15.4473 1.97466 16.1503C2.67767 16.8533 3.6308 17.2488 4.625 17.25H15.125C16.1192 17.2488 17.0723 16.8533 17.7753 16.1503C18.4783 15.4473 18.8738 14.4942 18.875 13.5V4.5C18.8738 3.5058 18.4783 2.55267 17.7753 1.84966C17.0723 1.14666 16.1192 0.751191 15.125 0.75ZM4.625 2.25H15.125C15.7217 2.25 16.294 2.48705 16.716 2.90901C17.1379 3.33097 17.375 3.90326 17.375 4.5V5.25H2.375V4.5C2.375 3.90326 2.61205 3.33097 3.03401 2.90901C3.45597 2.48705 4.02826 2.25 4.625 2.25ZM15.125 15.75H4.625C4.02826 15.75 3.45597 15.5129 3.03401 15.091C2.61205 14.669 2.375 14.0967 2.375 13.5V6.75H17.375V13.5C17.375 14.0967 17.1379 14.669 16.716 15.091C16.294 15.5129 15.7217 15.75 15.125 15.75ZM15.125 9.75C15.125 9.94891 15.046 10.1397 14.9053 10.2803C14.7647 10.421 14.5739 10.5 14.375 10.5H5.375C5.17609 10.5 4.98532 10.421 4.84467 10.2803C4.70402 10.1397 4.625 9.94891 4.625 9.75C4.625 9.55109 4.70402 9.36032 4.84467 9.21967C4.98532 9.07902 5.17609 9 5.375 9H14.375C14.5739 9 14.7647 9.07902 14.9053 9.21967C15.046 9.36032 15.125 9.55109 15.125 9.75ZM12.125 12.75C12.125 12.9489 12.046 13.1397 11.9053 13.2803C11.7647 13.421 11.5739 13.5 11.375 13.5H5.375C5.17609 13.5 4.98532 13.421 4.84467 13.2803C4.70402 13.1397 4.625 12.9489 4.625 12.75C4.625 12.5511 4.70402 12.3603 4.84467 12.2197C4.98532 12.079 5.17609 12 5.375 12H11.375C11.5739 12 11.7647 12.079 11.9053 12.2197C12.046 12.3603 12.125 12.5511 12.125 12.75ZM3.125 3.75C3.125 3.60166 3.16899 3.45666 3.2514 3.33332C3.33381 3.20999 3.45094 3.11386 3.58799 3.05709C3.72503 3.00032 3.87583 2.98547 4.02132 3.01441C4.1668 3.04335 4.30044 3.11478 4.40533 3.21967C4.51022 3.32456 4.58165 3.4582 4.61059 3.60368C4.63953 3.74917 4.62468 3.89997 4.56791 4.03701C4.51114 4.17406 4.41501 4.29119 4.29168 4.3736C4.16834 4.45601 4.02334 4.5 3.875 4.5C3.67609 4.5 3.48532 4.42098 3.34467 4.28033C3.20402 4.13968 3.125 3.94891 3.125 3.75ZM5.375 3.75C5.375 3.60166 5.41899 3.45666 5.5014 3.33332C5.58381 3.20999 5.70094 3.11386 5.83799 3.05709C5.97503 3.00032 6.12583 2.98547 6.27132 3.01441C6.4168 3.04335 6.55044 3.11478 6.65533 3.21967C6.76022 3.32456 6.83165 3.4582 6.86059 3.60368C6.88953 3.74917 6.87468 3.89997 6.81791 4.03701C6.76114 4.17406 6.66501 4.29119 6.54168 4.3736C6.41834 4.45601 6.27334 4.5 6.125 4.5C5.92609 4.5 5.73532 4.42098 5.59467 4.28033C5.45402 4.13968 5.375 3.94891 5.375 3.75ZM7.625 3.75C7.625 3.60166 7.66899 3.45666 7.7514 3.33332C7.83381 3.20999 7.95094 3.11386 8.08799 3.05709C8.22503 3.00032 8.37583 2.98547 8.52132 3.01441C8.6668 3.04335 8.80044 3.11478 8.90533 3.21967C9.01022 3.32456 9.08165 3.4582 9.11059 3.60368C9.13953 3.74917 9.12468 3.89997 9.06791 4.03701C9.01114 4.17406 8.91502 4.29119 8.79168 4.3736C8.66834 4.45601 8.52334 4.5 8.375 4.5C8.17609 4.5 7.98532 4.42098 7.84467 4.28033C7.70402 4.13968 7.625 3.94891 7.625 3.75Z" fill="#13B8A6"/></g><defs><clipPath id="clip0_334_2405"><rect width="18" height="18" fill="white" transform="translate(0.875)"/></clipPath></defs></svg>
                </button>
            </li>
        </ul>
        <ul>
            <li>
                <button id="tokensLeft">
                    <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.00002 0C11.4854 0 13.7356 1.00751 15.364 2.63587C16.9934 4.26424 17.9999 6.51449 17.9999 8.99989C17.9999 11.4853 16.9934 13.7355 15.364 15.3639C13.7356 16.9923 11.4854 17.9998 9.00002 17.9998C6.51461 17.9998 4.26538 16.9923 2.636 15.3639C1.00763 13.7355 0.00012207 11.4853 0.00012207 8.99989C0.00012207 6.51449 1.00763 4.26428 2.63603 2.63587C4.26538 1.00754 6.51461 0 9.00002 0Z" fill="#FFB703"/><path d="M9 1.771C10.9961 1.771 12.8038 2.58019 14.1123 3.88867C15.4198 5.19616 16.229 7.0039 16.229 9C16.229 10.9961 15.4198 12.8039 14.1123 14.1113C12.8038 15.4198 10.9961 16.229 9 16.229C7.0039 16.229 5.19715 15.4198 3.88867 14.1113C2.58019 12.8039 1.771 10.9961 1.771 9C1.771 7.0039 2.58019 5.19616 3.88867 3.88867C5.19715 2.58019 7.0039 1.771 9 1.771Z" fill="#FCD227"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.77089C10.9961 1.77089 12.8038 2.58008 14.1123 3.88856L15.364 2.63591C13.7356 1.00754 11.4854 0 9 0V1.77089Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.1123 3.88867C15.4198 5.19617 16.229 7.0039 16.229 9.00001H17.9999C17.9999 6.5146 16.9934 4.26439 15.364 2.63599L14.1123 3.88867Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.229 8.99979C16.229 10.9959 15.4198 12.8037 14.1123 14.1111L15.364 15.3638C16.9933 13.7354 17.9999 11.4852 17.9999 8.99976H16.229V8.99979Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.1123 14.1113C12.8038 15.4198 10.9961 16.229 9 16.229V17.9999C11.4854 17.9999 13.7356 16.9923 15.364 15.364L14.1123 14.1113Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.99997 16.229C7.00387 16.229 5.19712 15.4198 3.88864 14.1113L2.63599 15.364C4.26534 16.9924 6.51456 17.9999 9.00001 17.9999V16.229H8.99997Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.88868 14.1113C2.5802 12.8039 1.77101 10.9961 1.77101 9H0.00012207C0.00012207 11.4854 1.00763 13.7357 2.63603 15.364L3.88868 14.1113Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M1.77101 9.00001C1.77101 7.0039 2.5802 5.19617 3.88868 3.88867L2.63603 2.63599C1.00763 4.26439 0.00012207 6.5146 0.00012207 9.00001H1.77101Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.88867 3.88856C5.19715 2.58008 7.0039 1.77089 9.00001 1.77089V0C6.5146 0 4.26537 1.00751 2.63599 2.63587L3.88867 3.88856Z" fill="#FF9831"/><path d="M9.85103 5.06461L10.431 6.86239C10.454 6.93214 10.4958 6.98994 10.5506 7.0298C10.6064 7.06967 10.6742 7.09259 10.749 7.09259L12.6374 7.08859C12.8647 7.08859 13.058 7.16533 13.2075 7.28891C13.34 7.39951 13.4357 7.546 13.4885 7.70547C13.5403 7.86691 13.5483 8.04132 13.5064 8.20772C13.4586 8.39608 13.347 8.57345 13.1626 8.70598L11.6329 9.81316C11.5721 9.857 11.5302 9.91578 11.5093 9.97959C11.4884 10.0434 11.4884 10.1151 11.5113 10.1869L12.0983 11.9817C12.1691 12.1959 12.1551 12.4042 12.0824 12.5846C12.0193 12.7435 11.9121 12.8812 11.7734 12.9812C11.6379 13.0799 11.4735 13.1427 11.3011 13.1536C11.1078 13.1656 10.9065 13.1148 10.7231 12.9812L9.19737 11.8681C9.13757 11.8242 9.0688 11.8033 9.00004 11.8033C8.93127 11.8033 8.86251 11.8242 8.80373 11.8681L7.27801 12.9812C7.09464 13.1148 6.89235 13.1656 6.70001 13.1536C6.52662 13.1427 6.36318 13.0799 6.22765 12.9812C6.0911 12.8836 5.98251 12.746 5.91771 12.5846C5.84596 12.4042 5.832 12.1959 5.90179 11.9817L6.48876 10.1869C6.51266 10.1151 6.51168 10.0434 6.49076 9.97959C6.47083 9.91582 6.42797 9.857 6.36817 9.81316L4.83747 8.70598C4.65311 8.57345 4.54251 8.39608 4.49466 8.20772C4.4518 8.04132 4.46077 7.86691 4.51259 7.70547C4.56441 7.546 4.66109 7.39951 4.79363 7.28891C4.94209 7.16533 5.13545 7.08859 5.36365 7.08859L7.25214 7.09259C7.3259 7.09259 7.39463 7.06967 7.44947 7.0298C7.50428 6.98994 7.54714 6.93214 7.57006 6.86239L8.15007 5.06461C8.21982 4.84934 8.35337 4.68991 8.51682 4.58627C8.66331 4.4936 8.83273 4.44775 9.00014 4.44775C9.16756 4.44775 9.33698 4.4936 9.48347 4.58627C9.64772 4.68991 9.78128 4.84934 9.85103 5.06461Z" fill="#FB8500"/></svg>
                    <span class="tokens">{{ Auth::user()->tokens }}</span>
                </button>
            </li>
        </ul>
    </nav>
</header>
