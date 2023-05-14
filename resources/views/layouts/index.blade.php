<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meta GPT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
</head>

<body class="@if(session()->get('theme')){{ session()->get('theme') }} @else dark @endif">
@include('components.header')
<div class="hiddenContent" id="userNameProf">
    {{ Auth::user()->name }}
</div>
<div class="hiddenContent" id="userImageProf">
    <img src="{{ Storage::url(Auth::user()->avatar) }}">
</div>
<div class="sidebarMain left">
    <!--Новый чат и новая папка-->
    <div class="first-col">
        <div class="folderRow">
            <!--Создание чата-->
            <form class="create__chat" action="{{ route('chats.store') }}" method="POST">
                @csrf
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
            <!--Создание папки-->
            <form action="{{ route('folder.store') }}" method="POST">
                @csrf
                <button type="button" class="add-folder" onclick="add_new_folder(this.parentElement)">
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
        <div class="tablinks-container">
            @include('components.sidebar_index')
        </div>
    </div>
    <div class="menu-items footer__menu-items">
        <div class="colorSheme">
            <div class="firstCol">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_751_3205)"><path d="M12.75 10.5C12.3522 10.5 11.9706 10.658 11.6893 10.9393C11.408 11.2206 11.25 11.6022 11.25 12C11.25 12.3978 11.408 12.7794 11.6893 13.0607C11.9706 13.342 12.3522 13.5 12.75 13.5C13.1478 13.5 13.5294 13.342 13.8107 13.0607C14.092 12.7794 14.25 12.3978 14.25 12C14.25 11.6022 14.092 11.2206 13.8107 10.9393C13.5294 10.658 13.1478 10.5 12.75 10.5Z" fill="white" fill-opacity="0.3"/><path d="M5.99987 8.25C5.20422 8.25 4.44116 8.56607 3.87856 9.12868C3.31595 9.69129 2.99988 10.4543 2.99988 11.25C2.99988 12.0456 3.31595 12.8087 3.87856 13.3713C4.44116 13.9339 5.20422 14.25 5.99987 14.25C6.79552 14.25 7.55858 13.9339 8.12119 13.3713C8.6838 12.8087 8.99987 12.0456 8.99987 11.25C8.99987 10.4543 8.6838 9.69129 8.12119 9.12868C7.55858 8.56607 6.79552 8.25 5.99987 8.25ZM5.99987 12.75C5.60205 12.75 5.22052 12.592 4.93921 12.3107C4.65791 12.0293 4.49988 11.6478 4.49988 11.25C4.49988 10.8522 4.65791 10.4706 4.93921 10.1893C5.22052 9.90803 5.60205 9.75 5.99987 9.75C6.3977 9.75 6.77923 9.90803 7.06053 10.1893C7.34184 10.4706 7.49987 10.8522 7.49987 11.25C7.49987 11.6478 7.34184 12.0293 7.06053 12.3107C6.77923 12.592 6.3977 12.75 5.99987 12.75Z" fill="white" fill-opacity="0.3"/><path d="M16.1919 5.02518L10.3134 0.636926C9.67816 0.208008 8.92597 -0.0141984 8.15967 0.000703356C7.39337 0.0156051 6.65039 0.266887 6.03235 0.720176C3.60431 2.53718 1.78783 5.05116 0.825101 7.92693C0.814233 7.96528 0.806211 8.00439 0.801101 8.04393C0.718476 8.2059 0.647545 8.37358 0.588851 8.54568C-0.199051 10.7815 -0.199051 13.2196 0.588851 15.4554C0.840906 16.1981 1.31944 16.843 1.95714 17.2995C2.59484 17.7559 3.35961 18.001 4.14385 18.0002H6.86185C7.18711 17.995 7.50226 17.8863 7.76149 17.6898C8.02073 17.4933 8.21054 17.2192 8.30335 16.9074C8.37934 16.6835 8.52357 16.4889 8.7158 16.3512C8.90803 16.2134 9.1386 16.1393 9.3751 16.1393C9.61161 16.1393 9.84217 16.2134 10.0344 16.3512C10.2266 16.4889 10.3709 16.6835 10.4469 16.9074C10.5397 17.2192 10.7295 17.4933 10.9887 17.6898C11.2479 17.8863 11.5631 17.995 11.8884 18.0002H14.2501C15.2443 17.999 16.1974 17.6035 16.9004 16.9005C17.6034 16.1975 17.9989 15.2444 18.0001 14.2502V8.63043C17.9984 7.93051 17.8342 7.24054 17.5205 6.6149C17.2067 5.98926 16.7518 5.44506 16.1919 5.02518ZM6.9301 1.92168C7.29364 1.6556 7.72994 1.50723 8.18032 1.4965C8.63069 1.48578 9.07356 1.61321 9.44935 1.86168L14.9919 6.00018H4.1446C3.85263 5.99989 3.56164 6.03387 3.2776 6.10143C4.19579 4.47258 5.43902 3.04989 6.9301 1.92168ZM16.5001 14.2502C16.5001 14.8469 16.263 15.4192 15.8411 15.8412C15.4191 16.2631 14.8468 16.5002 14.2501 16.5002L11.8756 16.4507C11.6998 15.9216 11.3606 15.4619 10.9068 15.1379C10.4531 14.8139 9.9082 14.6423 9.35068 14.6479C8.79316 14.6534 8.25178 14.8357 7.80451 15.1686C7.35724 15.5014 7.02717 15.9677 6.86185 16.5002H4.14385C3.67323 16.5004 3.21439 16.353 2.8319 16.0789C2.4494 15.8047 2.16251 15.4174 2.0116 14.9717C1.33097 13.0494 1.33097 10.9517 2.0116 9.02943C2.16301 8.58377 2.45011 8.19667 2.83263 7.92242C3.21516 7.64817 3.67392 7.50052 4.1446 7.50018H16.2751C16.4224 7.85884 16.4988 8.24268 16.5001 8.63043V14.2502Z" fill="white" fill-opacity="0.3"/></g><defs><clipPath id="clip0_751_3205"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                {{__("colorSheme")}}
            </div>
            <div class="secondCol">
                <button type="button" class="switchTheme @if(session()->get('theme') == 'dark' || !session()->get('theme')) active @endif" data-theme="dark">
                    <svg class="svgPath" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_302_2326)"><path d="M10.6673 18.0002C8.28114 17.9976 5.99345 17.0486 4.30618 15.3613C2.61891 13.6741 1.66987 11.3864 1.66729 9.00023C1.55254 2.28322 9.19054 -2.23852 15.0105 1.13198L16.1753 1.77848L15.018 2.43848C9.99304 5.20447 10.3605 12.841 15.618 15.118L16.8338 15.6662L15.7335 16.4207C14.2436 17.4478 12.477 17.9986 10.6673 18.0002ZM10.6673 1.50023C8.67884 1.50241 6.77245 2.29329 5.3664 3.69934C3.96035 5.10539 3.16948 7.01177 3.16729 9.00023C3.05104 14.338 8.98954 18.1502 13.7835 15.8117C12.6612 15.0585 11.7308 14.053 11.0668 12.8756C10.4029 11.6983 10.0238 10.3818 9.95991 9.03166C9.89605 7.6815 10.1492 6.33515 10.6991 5.10039C11.249 3.86563 12.0803 2.77676 13.1265 1.92098C12.337 1.64081 11.5051 1.49849 10.6673 1.50023Z" fill="white"/></g><defs><clipPath id="clip0_302_2326"><rect width="18" height="18" fill="white" transform="translate(0.166992)"/></clipPath></defs></svg>
                </button>
                <button type="button" class="switchTheme @if(session()->get('theme') == 'light') active @endif" data-theme="light">
                    <svg class="svgPath" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_302_2329)"><path d="M18 9.75V8.25H14.196C14.1362 7.83293 14.0259 7.42468 13.8675 7.03425L17.1615 5.1165L16.407 3.8205L13.1115 5.739C12.8595 5.42228 12.5722 5.13541 12.255 4.884L14.1675 1.59525L12.8715 0.84075L10.959 4.1295C10.5706 3.97254 10.1647 3.86324 9.75 3.804V0H8.25V3.804C7.83857 3.86249 7.43568 3.97026 7.05 4.125L5.1405 0.84075L3.8445 1.59525L5.75325 4.875C5.43438 5.12744 5.14572 5.41585 4.893 5.7345L1.605 3.8205L0.8505 5.1165L4.13475 7.02825C3.97492 7.42043 3.86384 7.83075 3.804 8.25H0V9.75H3.804C3.86389 10.1673 3.9742 10.5758 4.1325 10.9665L0.85575 12.8738L1.61025 14.1705L4.88925 12.261C5.13857 12.5751 5.4229 12.8597 5.73675 13.1093L3.825 16.3988L5.12175 17.1532L7.03275 13.8668C7.42359 14.0256 7.83236 14.1362 8.25 14.196V18H9.75V14.196C10.1716 14.1356 10.5843 14.0235 10.9785 13.8622L12.8925 17.1532L14.1885 16.3988L12.2715 13.1025C12.5838 12.8532 12.8668 12.5694 13.1152 12.2565L16.4025 14.1705L17.1525 12.8738L13.866 10.9605C14.0245 10.5718 14.1353 10.1653 14.196 9.75H18ZM12.75 9C12.5925 13.956 5.40675 13.9545 5.25 9C5.4075 4.044 12.5933 4.0455 12.75 9Z" fill="white" fill-opacity="0.3"/></g><defs><clipPath id="clip0_302_2329"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                </button>
            </div>
        </div>
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
        <a href="https://t.me/starlinkprod" class="menu-item" target="_blank">
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
<div class="theme" style="display: none;"></div>
<!--Попапы-->
@include('components.popups.popup-pay')
<div class="popup" id="menu-mob">
    <div class="popupContent">
        <div class="popup-inner">
            <div class="menu-header">
                <x-menu>
                </x-menu>
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
                    <a href="https://t.me/starlinkprod" class="menu-item" target="_blank">
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
        </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.0/showdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
@yield('script')
<script src="https://widget.cloudpayments.ru/bundles/cloudpayments.js"></script>
<script>
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
    $(".changeLang").click(function(){
        fetch("{{ route('changeLanguage') }}" + "?lang="+ $(this).data("lang"))
    });

    $(".switchTheme").click(function(){
        $.each($(".switchTheme"), function (num, item) {
            item.classList.remove('active')
        })
        $(this).addClass('active')

        fetch("{{ route('changeTheme') }}" + "?theme="+ $(this).data("theme"))

        // $('body').toggleClass('dark light');
    });
</script>
</body>

</html>
