<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta GPT - {{__('catalogTitle')}}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="@if(session()->get('theme')){{ session()->get('theme') }} @else dark @endif">
    @include('components.header')
    <div class="sidebarMain left">
        <!--Новый чат и новая папка-->
        <div class="first-col">
            <div class="folderRow">
                <h2>
                    {{__("templatesRoles")}}
                </h2>
            </div>
            <div class="tablinks-container">
                <div class="tablinks-library roles">
                <button class="tablink-library system" style="background: #262119 !important;color: #F59E0B !important;">
                        <svg class="svgPath" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_47_2036)"><path style="fill:#F59E0B !important;" d="M17.4167 0.916077H4.58333C3.3682 0.917532 2.20326 1.40089 1.34403 2.26011C0.484808 3.11934 0.00145554 4.28428 0 5.49941L0 12.8327C0.00145554 14.0479 0.484808 15.2128 1.34403 16.072C2.20326 16.9313 3.3682 17.4146 4.58333 17.4161H10.0833V19.2494H6.41667C6.17355 19.2494 5.94039 19.346 5.76849 19.5179C5.59658 19.6898 5.5 19.923 5.5 20.1661C5.5 20.4092 5.59658 20.6423 5.76849 20.8143C5.94039 20.9862 6.17355 21.0827 6.41667 21.0827H15.5833C15.8264 21.0827 16.0596 20.9862 16.2315 20.8143C16.4034 20.6423 16.5 20.4092 16.5 20.1661C16.5 19.923 16.4034 19.6898 16.2315 19.5179C16.0596 19.346 15.8264 19.2494 15.5833 19.2494H11.9167V17.4161H17.4167C18.6318 17.4146 19.7967 16.9313 20.656 16.072C21.5152 15.2128 21.9985 14.0479 22 12.8327V5.49941C21.9985 4.28428 21.5152 3.11934 20.656 2.26011C19.7967 1.40089 18.6318 0.917532 17.4167 0.916077V0.916077ZM20.1667 12.8327C20.1667 13.5621 19.8769 14.2616 19.3612 14.7773C18.8455 15.293 18.146 15.5827 17.4167 15.5827H4.58333C3.85399 15.5827 3.15451 15.293 2.63879 14.7773C2.12306 14.2616 1.83333 13.5621 1.83333 12.8327V5.49941C1.83333 4.77006 2.12306 4.07059 2.63879 3.55487C3.15451 3.03914 3.85399 2.74941 4.58333 2.74941H17.4167C18.146 2.74941 18.8455 3.03914 19.3612 3.55487C19.8769 4.07059 20.1667 4.77006 20.1667 5.49941V12.8327ZM18.3333 9.16608C18.3333 9.40919 18.2368 9.64235 18.0648 9.81426C17.8929 9.98617 17.6598 10.0827 17.4167 10.0827H14.6988L13.1404 12.4248C13.0564 12.5507 12.9426 12.6539 12.809 12.725C12.6754 12.7962 12.5263 12.8332 12.375 12.8327C12.3558 12.8327 12.3365 12.8327 12.3182 12.8327C12.1578 12.8229 12.0028 12.771 11.8688 12.6824C11.7348 12.5937 11.6264 12.4714 11.5546 12.3277L9.51133 8.23841L8.55433 9.67483C8.4706 9.80033 8.35718 9.90323 8.22413 9.97439C8.09109 10.0455 7.94254 10.0828 7.79167 10.0827H4.58333C4.34022 10.0827 4.10706 9.98617 3.93515 9.81426C3.76324 9.64235 3.66667 9.40919 3.66667 9.16608C3.66667 8.92296 3.76324 8.6898 3.93515 8.5179C4.10706 8.34599 4.34022 8.24941 4.58333 8.24941H7.30125L8.85958 5.90733C8.9478 5.77218 9.07056 5.66308 9.21514 5.59136C9.35972 5.51963 9.52085 5.48788 9.68183 5.49941C9.84221 5.50929 9.99718 5.56115 10.1312 5.6498C10.2652 5.73845 10.3736 5.86077 10.4454 6.00449L12.4887 10.0919L13.4457 8.65549C13.5296 8.53033 13.6431 8.42779 13.7762 8.35696C13.9092 8.28612 14.0576 8.24919 14.2083 8.24941H17.4167C17.6598 8.24941 17.8929 8.34599 18.0648 8.5179C18.2368 8.6898 18.3333 8.92296 18.3333 9.16608Z" fill="#F59E0B"/></g><defs><clipPath id="clip0_47_2036"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>
                        {{__("systemRoles")}}
                    </button>
                </div>
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
                <div class="library-title">
                    <div class="library-item-titles">
                        {{__("systemRoles")}}
                    </div>
                    <!--Выводим кол-во подсказок-->
                    <div class="library-item-count">
                        {{ count($roles) }} {{__('rolesCount')}}
                    </div>
                </div>
                <div class="library-items-container">
                    @foreach($roles as $role)
                        <div class="library-item">
                            @if($role->title)
                                <h2 class="library-item-title">{{ $role->title }}</h2>
                            @endif
                            <span>{{ $role->description }}</span>
                            <p style="display:none;">{{ $role->role }}</p>
                            <div class="hoverItems">
                                <button class="copyRole">
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
                        </div>
                    @endforeach
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
            Каталог ролей — это список возможных персонажей или ролей, которые пользователь может выбрать для взаимодействия с чат-ботом.
        </p>
        <p class="aboutRazdel">
            Эти роли могут быть абстрактными (например, "учитель" или "путешественник") или конкретными (например, "Джон Смит" или "Мэри Джейн").
        </p>
        <p class="aboutRazdel">
            Каталог ролей позволяет пользователям получить более индивидуальный и интерактивный опыт общения с чат-ботом, что позволяет добиваться большей четкости и продуктивности в ответах GPT.
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
        //Копирование ролей
        let btnCopies = document.querySelectorAll('.library-item button.copyRole');
        for(let i = 0; i < btnCopies.length; i++){
            btnCopies[i].onclick = () =>{
                var copyTextarea = document.createElement("textarea");
                copyTextarea.style.position = "fixed";
                copyTextarea.style.opacity = "0";
                copyTextarea.textContent = String(btnCopies[i].parentElement.parentElement.querySelector('p').innerHTML).trim();
                document.body.appendChild(copyTextarea);
                copyTextarea.select();
                document.execCommand("copy");
                document.body.removeChild(copyTextarea);
                let lastSvg = btnCopies[i].innerHTML;
                btnCopies[i].innerHTML = `<svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
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
        }
    </script>
</body>
</html>
