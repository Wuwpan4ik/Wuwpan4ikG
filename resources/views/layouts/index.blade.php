<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Meta GPT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/highlight.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
</head>

<body class="dark">
<header id="mainHeader">
    <nav class="navbar">
        <ul class="first-col">
            <li>
                <a href="/chats/" class="active">
                    {{ __("Chat") }}
                </a>
            </li>
            <li>
                <a href="/chats/">
                    {{ __("Library") }}
                </a>
            </li>
            <li>
                <a href="/chats/>">
                    {{ __("Catalog") }}
                </a>
            </li>
        </ul>
        <ul class="second-col">
            <li>
                <button id="settings">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_747)"><path d="M0.75 3.56269H2.802C2.96298 4.15499 3.31438 4.67787 3.80199 5.05064C4.28961 5.42342 4.88634 5.62539 5.50012 5.62539C6.11391 5.62539 6.71064 5.42342 7.19826 5.05064C7.68587 4.67787 8.03727 4.15499 8.19825 3.56269H17.25C17.4489 3.56269 17.6397 3.48368 17.7803 3.34302C17.921 3.20237 18 3.01161 18 2.81269C18 2.61378 17.921 2.42302 17.7803 2.28236C17.6397 2.14171 17.4489 2.06269 17.25 2.06269H8.19825C8.03727 1.4704 7.68587 0.947524 7.19826 0.574746C6.71064 0.201968 6.11391 0 5.50012 0C4.88634 0 4.28961 0.201968 3.80199 0.574746C3.31438 0.947524 2.96298 1.4704 2.802 2.06269H0.75C0.551088 2.06269 0.360322 2.14171 0.21967 2.28236C0.0790176 2.42302 0 2.61378 0 2.81269C0 3.01161 0.0790176 3.20237 0.21967 3.34302C0.360322 3.48368 0.551088 3.56269 0.75 3.56269V3.56269ZM5.49975 1.50019C5.75934 1.50019 6.0131 1.57717 6.22894 1.72139C6.44478 1.86561 6.613 2.07059 6.71234 2.31042C6.81168 2.55025 6.83767 2.81415 6.78703 3.06875C6.73639 3.32335 6.61138 3.55722 6.42783 3.74077C6.24427 3.92433 6.01041 4.04933 5.75581 4.09998C5.50121 4.15062 5.23731 4.12463 4.99748 4.02529C4.75765 3.92595 4.55267 3.75772 4.40845 3.54188C4.26423 3.32604 4.18725 3.07228 4.18725 2.81269C4.18765 2.46472 4.32606 2.13111 4.57211 1.88506C4.81817 1.639 5.15178 1.50059 5.49975 1.50019V1.50019Z" fill="#13B8A6"/><path d="M17.25 8.24921H15.198C15.0373 7.65678 14.686 7.13372 14.1985 6.76079C13.7109 6.38785 13.1141 6.18579 12.5002 6.18579C11.8864 6.18579 11.2896 6.38785 10.802 6.76079C10.3145 7.13372 9.96321 7.65678 9.8025 8.24921H0.75C0.551088 8.24921 0.360322 8.32823 0.21967 8.46888C0.0790176 8.60953 0 8.8003 0 8.99921C0 9.19812 0.0790176 9.38889 0.21967 9.52954C0.360322 9.67019 0.551088 9.74921 0.75 9.74921H9.8025C9.96321 10.3416 10.3145 10.8647 10.802 11.2376C11.2896 11.6106 11.8864 11.8126 12.5002 11.8126C13.1141 11.8126 13.7109 11.6106 14.1985 11.2376C14.686 10.8647 15.0373 10.3416 15.198 9.74921H17.25C17.4489 9.74921 17.6397 9.67019 17.7803 9.52954C17.921 9.38889 18 9.19812 18 8.99921C18 8.8003 17.921 8.60953 17.7803 8.46888C17.6397 8.32823 17.4489 8.24921 17.25 8.24921ZM12.5002 10.3117C12.2407 10.3117 11.9869 10.2347 11.7711 10.0905C11.5552 9.94629 11.387 9.74131 11.2877 9.50148C11.1883 9.26165 11.1623 8.99776 11.213 8.74316C11.2636 8.48856 11.3886 8.25469 11.5722 8.07114C11.7557 7.88758 11.9896 7.76258 12.2442 7.71193C12.4988 7.66129 12.7627 7.68728 13.0025 7.78662C13.2424 7.88596 13.4473 8.05419 13.5916 8.27003C13.7358 8.48587 13.8127 8.73962 13.8127 8.99921C13.8124 9.34719 13.6739 9.68079 13.4279 9.92685C13.1818 10.1729 12.8482 10.3113 12.5002 10.3117V10.3117Z" fill="#13B8A6"/><path d="M17.25 14.4377H8.19825C8.03727 13.8454 7.68587 13.3225 7.19826 12.9497C6.71064 12.577 6.11391 12.375 5.50012 12.375C4.88634 12.375 4.28961 12.577 3.80199 12.9497C3.31438 13.3225 2.96298 13.8454 2.802 14.4377H0.75C0.551088 14.4377 0.360322 14.5167 0.21967 14.6574C0.0790176 14.798 0 14.9888 0 15.1877C0 15.3866 0.0790176 15.5774 0.21967 15.718C0.360322 15.8587 0.551088 15.9377 0.75 15.9377H2.802C2.96298 16.53 3.31438 17.0528 3.80199 17.4256C4.28961 17.7984 4.88634 18.0004 5.50012 18.0004C6.11391 18.0004 6.71064 17.7984 7.19826 17.4256C7.68587 17.0528 8.03727 16.53 8.19825 15.9377H17.25C17.4489 15.9377 17.6397 15.8587 17.7803 15.718C17.921 15.5774 18 15.3866 18 15.1877C18 14.9888 17.921 14.798 17.7803 14.6574C17.6397 14.5167 17.4489 14.4377 17.25 14.4377ZM5.49975 16.5002C5.24016 16.5002 4.9864 16.4232 4.77056 16.279C4.55472 16.1348 4.3865 15.9298 4.28716 15.69C4.18782 15.4501 4.16183 15.1862 4.21247 14.9316C4.26311 14.677 4.38812 14.4432 4.57167 14.2596C4.75523 14.0761 4.98909 13.9511 5.24369 13.9004C5.49829 13.8498 5.76219 13.8758 6.00202 13.9751C6.24185 14.0744 6.44683 14.2427 6.59105 14.4585C6.73527 14.6743 6.81225 14.9281 6.81225 15.1877C6.81166 15.5356 6.67318 15.8691 6.42717 16.1151C6.18116 16.3611 5.84766 16.4996 5.49975 16.5002V16.5002Z" fill="#13B8A6"/></g><defs><clipPath id="clip0_5_747"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                </button>
            </li>
            <li class="nonActive">
                <button id="search">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_11_805)"><path d="M17.7801 16.7203L13.3033 12.2435C14.5233 10.7515 15.1231 8.84758 14.9787 6.92568C14.8343 5.00378 13.9567 3.21091 12.5275 1.9179C11.0983 0.624891 9.22678 -0.069323 7.30007 -0.0211491C5.37336 0.0270248 3.53886 0.8139 2.17605 2.17672C0.813229 3.53954 0.0263534 5.37403 -0.0218205 7.30074C-0.0699943 9.22745 0.624219 11.099 1.91723 12.5282C3.21023 13.9574 5.00311 14.835 6.92501 14.9794C8.84691 15.1238 10.7508 14.524 12.2428 13.304L16.7196 17.7808C16.861 17.9174 17.0505 17.993 17.2471 17.9913C17.4438 17.9896 17.6319 17.9107 17.771 17.7716C17.91 17.6326 17.9889 17.4445 17.9906 17.2478C17.9923 17.0512 17.9167 16.8617 17.7801 16.7203ZM7.49984 13.5005C6.31315 13.5005 5.15311 13.1486 4.16642 12.4893C3.17972 11.83 2.41069 10.893 1.95656 9.79661C1.50243 8.70025 1.38361 7.49385 1.61512 6.32997C1.84664 5.16608 2.41808 4.09698 3.2572 3.25787C4.09631 2.41875 5.16541 1.84731 6.3293 1.6158C7.49318 1.38428 8.69958 1.5031 9.79594 1.95723C10.8923 2.41136 11.8294 3.18039 12.4887 4.16709C13.1479 5.15378 13.4998 6.31382 13.4998 7.50051C13.4981 9.09126 12.8653 10.6163 11.7405 11.7412C10.6157 12.866 9.09059 13.4987 7.49984 13.5005Z" fill="#13B8A6"/></g><defs><clipPath id="clip0_11_805"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                </button>
            </li>
            <li>
                <button id="tokensLeft">
                    <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.00002 0C11.4854 0 13.7356 1.00751 15.364 2.63587C16.9934 4.26424 17.9999 6.51449 17.9999 8.99989C17.9999 11.4853 16.9934 13.7355 15.364 15.3639C13.7356 16.9923 11.4854 17.9998 9.00002 17.9998C6.51461 17.9998 4.26538 16.9923 2.636 15.3639C1.00763 13.7355 0.00012207 11.4853 0.00012207 8.99989C0.00012207 6.51449 1.00763 4.26428 2.63603 2.63587C4.26538 1.00754 6.51461 0 9.00002 0Z" fill="#FFB703"/><path d="M9 1.771C10.9961 1.771 12.8038 2.58019 14.1123 3.88867C15.4198 5.19616 16.229 7.0039 16.229 9C16.229 10.9961 15.4198 12.8039 14.1123 14.1113C12.8038 15.4198 10.9961 16.229 9 16.229C7.0039 16.229 5.19715 15.4198 3.88867 14.1113C2.58019 12.8039 1.771 10.9961 1.771 9C1.771 7.0039 2.58019 5.19616 3.88867 3.88867C5.19715 2.58019 7.0039 1.771 9 1.771Z" fill="#FCD227"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.77089C10.9961 1.77089 12.8038 2.58008 14.1123 3.88856L15.364 2.63591C13.7356 1.00754 11.4854 0 9 0V1.77089Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.1123 3.88867C15.4198 5.19617 16.229 7.0039 16.229 9.00001H17.9999C17.9999 6.5146 16.9934 4.26439 15.364 2.63599L14.1123 3.88867Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.229 8.99979C16.229 10.9959 15.4198 12.8037 14.1123 14.1111L15.364 15.3638C16.9933 13.7354 17.9999 11.4852 17.9999 8.99976H16.229V8.99979Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.1123 14.1113C12.8038 15.4198 10.9961 16.229 9 16.229V17.9999C11.4854 17.9999 13.7356 16.9923 15.364 15.364L14.1123 14.1113Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.99997 16.229C7.00387 16.229 5.19712 15.4198 3.88864 14.1113L2.63599 15.364C4.26534 16.9924 6.51456 17.9999 9.00001 17.9999V16.229H8.99997Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.88868 14.1113C2.5802 12.8039 1.77101 10.9961 1.77101 9H0.00012207C0.00012207 11.4854 1.00763 13.7357 2.63603 15.364L3.88868 14.1113Z" fill="#FF9831"/><path fill-rule="evenodd" clip-rule="evenodd" d="M1.77101 9.00001C1.77101 7.0039 2.5802 5.19617 3.88868 3.88867L2.63603 2.63599C1.00763 4.26439 0.00012207 6.5146 0.00012207 9.00001H1.77101Z" fill="#FFB703"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.88867 3.88856C5.19715 2.58008 7.0039 1.77089 9.00001 1.77089V0C6.5146 0 4.26537 1.00751 2.63599 2.63587L3.88867 3.88856Z" fill="#FF9831"/><path d="M9.85103 5.06461L10.431 6.86239C10.454 6.93214 10.4958 6.98994 10.5506 7.0298C10.6064 7.06967 10.6742 7.09259 10.749 7.09259L12.6374 7.08859C12.8647 7.08859 13.058 7.16533 13.2075 7.28891C13.34 7.39951 13.4357 7.546 13.4885 7.70547C13.5403 7.86691 13.5483 8.04132 13.5064 8.20772C13.4586 8.39608 13.347 8.57345 13.1626 8.70598L11.6329 9.81316C11.5721 9.857 11.5302 9.91578 11.5093 9.97959C11.4884 10.0434 11.4884 10.1151 11.5113 10.1869L12.0983 11.9817C12.1691 12.1959 12.1551 12.4042 12.0824 12.5846C12.0193 12.7435 11.9121 12.8812 11.7734 12.9812C11.6379 13.0799 11.4735 13.1427 11.3011 13.1536C11.1078 13.1656 10.9065 13.1148 10.7231 12.9812L9.19737 11.8681C9.13757 11.8242 9.0688 11.8033 9.00004 11.8033C8.93127 11.8033 8.86251 11.8242 8.80373 11.8681L7.27801 12.9812C7.09464 13.1148 6.89235 13.1656 6.70001 13.1536C6.52662 13.1427 6.36318 13.0799 6.22765 12.9812C6.0911 12.8836 5.98251 12.746 5.91771 12.5846C5.84596 12.4042 5.832 12.1959 5.90179 11.9817L6.48876 10.1869C6.51266 10.1151 6.51168 10.0434 6.49076 9.97959C6.47083 9.91582 6.42797 9.857 6.36817 9.81316L4.83747 8.70598C4.65311 8.57345 4.54251 8.39608 4.49466 8.20772C4.4518 8.04132 4.46077 7.86691 4.51259 7.70547C4.56441 7.546 4.66109 7.39951 4.79363 7.28891C4.94209 7.16533 5.13545 7.08859 5.36365 7.08859L7.25214 7.09259C7.3259 7.09259 7.39463 7.06967 7.44947 7.0298C7.50428 6.98994 7.54714 6.93214 7.57006 6.86239L8.15007 5.06461C8.21982 4.84934 8.35337 4.68991 8.51682 4.58627C8.66331 4.4936 8.83273 4.44775 9.00014 4.44775C9.16756 4.44775 9.33698 4.4936 9.48347 4.58627C9.64772 4.68991 9.78128 4.84934 9.85103 5.06461Z" fill="#FB8500"/></svg>
                    <span class="tokens">1000</span>{{ __("TokensLeft") }}

                </button>
            </li>
        </ul>
    </nav>
</header>
<div class="sidebarMain left">
    <!--Новый чат и новая папка-->
    <div class="first-col">
        <div class="folderRow">
            <!--Создание чата-->
            <form action="{{ route('chats.store') }}" method="POST">
                @csrf
                <button type="submit" class="add-chat">
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
            <!--Создание папки-->
            <form action="{{ route('folder.store') }}" method="POST">
                @csrf
                <button type="submit" class="add-folder">
                    <svg class="svgPath" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_16_2292)">
                            <path d="M12.5 11.2502C12.5 11.4492 12.421 11.6399 12.2803 11.7806C12.1397 11.9212 11.9489 12.0002 11.75 12.0002H10.25V13.5002C10.25 13.6992 10.171 13.8899 10.0303 14.0306C9.88968 14.1712 9.69891 14.2502 9.5 14.2502C9.30109 14.2502 9.11032 14.1712 8.96967 14.0306C8.82902 13.8899 8.75 13.6992 8.75 13.5002V12.0002H7.25C7.05109 12.0002 6.86032 11.9212 6.71967 11.7806C6.57902 11.6399 6.5 11.4492 6.5 11.2502C6.5 11.0513 6.57902 10.8606 6.71967 10.7199C6.86032 10.5793 7.05109 10.5002 7.25 10.5002H8.75V9.00024C8.75 8.80133 8.82902 8.61057 8.96967 8.46991C9.11032 8.32926 9.30109 8.25024 9.5 8.25024C9.69891 8.25024 9.88968 8.32926 10.0303 8.46991C10.171 8.61057 10.25 8.80133 10.25 9.00024V10.5002H11.75C11.9489 10.5002 12.1397 10.5793 12.2803 10.7199C12.421 10.8606 12.5 11.0513 12.5 11.2502ZM18.5 6.00024V13.5002C18.4988 14.4944 18.1033 15.4476 17.4003 16.1506C16.6973 16.8536 15.7442 17.2491 14.75 17.2502H4.25C3.2558 17.2491 2.30267 16.8536 1.59966 16.1506C0.896661 15.4476 0.501191 14.4944 0.5 13.5002L0.5 4.50024C0.501191 3.50605 0.896661 2.55291 1.59966 1.84991C2.30267 1.14691 3.2558 0.751435 4.25 0.750244H6.146C6.49505 0.750534 6.83929 0.831653 7.15175 0.987244L9.51875 2.17524C9.62333 2.22544 9.738 2.25109 9.854 2.25024H14.75C15.7442 2.25144 16.6973 2.64691 17.4003 3.34991C18.1033 4.05291 18.4988 5.00605 18.5 6.00024ZM2 4.50024V5.25024H16.862C16.7074 4.81306 16.4216 4.43431 16.0435 4.16581C15.6655 3.89731 15.2137 3.75217 14.75 3.75024H9.854C9.50495 3.74995 9.16071 3.66884 8.84825 3.51324L6.48125 2.32899C6.37697 2.27751 6.2623 2.25057 6.146 2.25024H4.25C3.65326 2.25024 3.08097 2.4873 2.65901 2.90925C2.23705 3.33121 2 3.90351 2 4.50024ZM17 13.5002V6.75024H2V13.5002C2 14.097 2.23705 14.6693 2.65901 15.0912C3.08097 15.5132 3.65326 15.7502 4.25 15.7502H14.75C15.3467 15.7502 15.919 15.5132 16.341 15.0912C16.7629 14.6693 17 14.097 17 13.5002Z" fill="white" fill-opacity="0.3"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_16_2292">
                                <rect width="18" height="18" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __("newFolder") }}
                </button>
            </form>
        </div>

        @foreach($folders as $folder)
            <div class="folderBtn">
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
                        <p class="folderName">Новая папка</p>
                    </div>
                    <div class="hoverItems">
                        <div class="dropdownButton">
                            <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.9999 11.625C8.80294 11.6254 8.60786 11.5868 8.42586 11.5115C8.24387 11.4362 8.07855 11.3257 7.9394 11.1863L3.96965 7.21577L5.03015 6.15527L8.9999 10.125L12.9697 6.15527L14.0302 7.21577L10.0604 11.1855C9.92132 11.3251 9.75602 11.4357 9.57402 11.5111C9.39202 11.5866 9.19691 11.6253 8.9999 11.625Z" fill="white" fill-opacity="0.3"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="folderItems">
                    @foreach($folder->children as $chat)
                    @empty($show)
                        <a href="{{ route('chats.show', $chat->id) }}" class="tablink addChatIcon ">
                            @include('components.chat')
                        </a>
                    @else
                        <div onclick="myFunction({{ $chat->id }})" class="tablink addChatIcon tab__link-edit">
                            @include('components.chat')
                        </div>
                    @endempty
            @endforeach
            <form action="{{ route('chats.folder_store') }}" method="POST">
                @csrf
                <input type="hidden" name="folder_id" value="1">
                <button type="submit" class="add-chat">
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

        @foreach($chats as $chat)
            @empty($show)
                <a href="{{ route('chats.show', $chat->id) }}" class="tablink addChatIcon" onclick="openTab(event, 'tab1')">
                    @include('components.chat')
                </a>
            @else
                <div onclick="myFunction({{ $chat->id }})" class="tablink addChatIcon tab__link-edit">
                    @include('components.chat')
                </div>
            @endempty
        @endforeach
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
@yield('content')
<div class="sidebarMain right">
    @include('components.role')
</div>
<!--Попапы-->
@include('components.popups.popup-settings')
@include('components.popups.popup-pay')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>
<script src="{{asset('js/showdown.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@yield('script')
<script type="text/javascript">

    $(".changeLang").click(function(){
        window.location.href = "{{ route('changeLanguage') }}" + "?lang="+ $(this).data("lang");
    });

    $(".switchTheme").click(function(){
        window.location.href = "{{ route('changeTheme') }}" + "?theme="+ $(this).data("theme");
    });

</script>
</body>

</html>
