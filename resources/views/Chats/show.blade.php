@extends('layouts.index', ["show" => true])
@section('content')
<head>
    <!--Lottie-->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
    <div class="mainWrapper @if(session()->get('show_sidebar')) switchedSidebar @endif">
        <section class="msger">
            <!--
            <header class="msger-header">
                <div class="msger-header-title">
                    <i class="fas fa-comment-alt"></i> ChatGPT
                    &nbsp;| ID: <input type="text" id="id" hidden> <span class="id_session"></span>
                </div>
                <div class="msger-header-options" style="display:none;">
                    <button id="delete-button">Delete History</button>
                </div>
            </header>
            -->
            <main class="msger-chat">
                <!--Плашка в начале чата-->
                @include('components.message')
                <!--Кнопка скролла вниз-->
            </main>
            <div class="messageInput">
                <!--Кнопка скролла вверх-->
                <button id="scrollBottomBtn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.7099 12.71C17.617 12.6162 17.5064 12.5418 17.3845 12.4911C17.2627 12.4403 17.1319 12.4142 16.9999 12.4142C16.8679 12.4142 16.7372 12.4403 16.6154 12.4911C16.4935 12.5418 16.3829 12.6162 16.2899 12.71L12.9999 16V5.99997C12.9999 5.73475 12.8946 5.4804 12.707 5.29286C12.5195 5.10533 12.2652 4.99997 11.9999 4.99997C11.7347 4.99997 11.4804 5.10533 11.2928 5.29286C11.1053 5.4804 10.9999 5.73475 10.9999 5.99997V16L7.70994 12.71C7.61697 12.6162 7.50637 12.5418 7.38451 12.4911C7.26266 12.4403 7.13195 12.4142 6.99994 12.4142C6.86793 12.4142 6.73722 12.4403 6.61536 12.4911C6.4935 12.5418 6.3829 12.6162 6.28994 12.71C6.10369 12.8973 5.99915 13.1508 5.99915 13.415C5.99915 13.6792 6.10369 13.9326 6.28994 14.12L10.5899 18.41C10.9633 18.7856 11.4704 18.9977 11.9999 19C12.526 18.9951 13.029 18.7831 13.3999 18.41L17.6999 14.12C17.8875 13.9339 17.9939 13.6812 17.9957 13.417C17.9976 13.1528 17.8949 12.8987 17.7099 12.71Z" fill="#374957"/></svg>
                </button>
                <!--Токены, которые пользователь потратил в определенном чате-->
                <div class="tokens_chat">
                    <button id="openPrompts">
                        <p class="openPromptsPc">{{__("openPrompts")}}</p>
                        <p class="openPromptsMob">Подсказки</p>
                    </button>
                    <div class="tokensSpent">
                        @include('components.tokens_in_chat')
                    </div>
                </div>
                <form class="msger-inputarea">
                    @csrf
                    <input type="hidden" id="chat_id" name="chat_id" value="{{ $chat->id  }}">
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth()->id() }}">
                    @if (Auth::user()->tokens <= 0)
                        <textarea class="msger-input" placeholder="{{(__('enterMessage'))}}" required disabled></textarea>
                    @else
                        <textarea class="msger-input" oninput="autoResize(this);" placeholder="{{(__('enterMessage'))}}" required></textarea>
                        <button type="submit" class="msger-send-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 15.8379L11.144 10.2709L16.712 4.70193L13 15.8379ZM15.298 3.28793L9.73 8.85593L4.162 6.99993L15.298 3.28793ZM19.99 0.94793C19.985 0.85493 19.968 0.76493 19.937 0.67793C19.927 0.64693 19.916 0.61693 19.902 0.58693C19.854 0.47993 19.793 0.37893 19.707 0.29293C19.621 0.20693 19.52 0.14593 19.412 0.0979297C19.383 0.0839297 19.354 0.0729297 19.323 0.0629297C19.234 0.0319297 19.143 0.0139297 19.048 0.00892969C19.026 0.00792969 19.006 0.00292969 18.983 0.00292969C18.883 0.00492969 18.782 0.0189297 18.684 0.0509297L0.684 6.05093C0.275 6.18793 0 6.56893 0 6.99993C0 7.43093 0.275 7.81293 0.684 7.94893L9.209 10.7909L12.052 19.3169C12.188 19.7249 12.569 19.9999 13 19.9999C13.431 19.9999 13.812 19.7249 13.948 19.3169L19.948 1.31693C19.98 1.21793 19.995 1.11793 19.996 1.01793C19.997 0.99393 19.991 0.97193 19.99 0.94793V0.94793Z" fill="white"/>
                            </svg>
                        </button>
                    @endif
                </form>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <!--Попап библиотеки подсказок-->
    <div class="popup popup-show popup-library" id="popup-library">
        <div class="popupWrapper"></div>
        <div class="popupContent">
            <div class="popup-inner">
                <h2>
                    Библиотека подсказок
                </h2>
                <div class="prompts-category">
                    @foreach($prompts_category as $prompt)
                        <button class="tablink-library" onclick="promptsBlock({{ $prompt->id }})" style="background-color: {{ $prompt->main_background_color }}; color: {{ $prompt->main_color }}">
                            {!! $prompt->main_image !!}
                            {{ $prompt->title }}
                        </button>
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
    @include('components.loaders.loader-message')
    @include('components.loaders.loader-profile')
    @include('components.loaders.loader-settings')
    @include('components.popups.popup-roles')
    @include('components.popups.popup-about')
    @include('components.popups.popup-develop')
    @include('components.popups.popup-zapic')
    @include('components.popups.popup-zapic2')
    @include('components.popups.popup-profile')
    <!--Скрипты-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('js/markdown-it.min.js') }}"></script>
    {{--Код для добавления чата--}}
    <script>
        function updateProfile(elem) {
            let form = $('.form__profile');
            $.ajax({
                type: "PATCH",    // Метод отправки данных (POST, GET и т.д.)
                url: form.attr('action'),     // URL-адрес, куда отправляются данные формы
                data: form.serialize(),      // Сериализуем данные формы в строку
                success: function(response) { // Callback-функция, которая вызывается при успешной отправке формы
                },
                error: function(xhr, ajaxOptions, thrownError) { // Callback-функция, которая вызывается при ошибке отправки формы
                }
            });
        }
    </script>
    {{-- Восстановление пароля в профиле --}}
    <script>
        function forgotPass(item){
            document.getElementById('resetPasswordLoader').classList.add('showed');
            setTimeout(()=>{
                document.getElementById('resetPasswordLoader').classList.remove('showed');
            }, 2500)
        }
    </script>
    {{-- Активация промокода в профиле --}}
    <script>
        function activatePromo(item){
            document.getElementById('resetPasswordLoader').classList.add('showed');
            setTimeout(()=>{
                document.getElementById('resetPasswordLoader').classList.remove('showed');
            }, 2500)
        }
    </script>
    {{-- Открытие попапа настроек в мобильной версии --}}
    <script>
        document.getElementById('settingsMob').onclick = () =>{
            document.querySelector('.sidebarMain.right').classList.add('opened');
        }
    </script>
    {{-- Ресайз инпута сообщения --}}
    <script>
        window.onresize = ()=>{
            $("main.msger-chat").scrollTop($("main.msger-chat")[0].scrollHeight);
            autoResize(document.querySelector('textarea.msger-input'));
        }
        window.addEventListener('DOMContentLoaded', ()=>{
            autoResize(document.querySelector('textarea.msger-input'));
            $("main.msger-chat").scrollTop($("main.msger-chat")[0].scrollHeight);
        });
    </script>
    <script>
        function add_new_chat(form) {
            let key = form.querySelector('input[name=_token]').value;
            let dataInput = {}
            if(document.querySelector('.sidebarMain.left').classList.contains('active')){
                document.querySelector('.sidebarMain.left').classList.remove('active');
            }
            if (form.classList.contains('folder__chat')) {
                dataInput = {
                    'folder_id': form.querySelector('.folder_id').value
                }
            }
            fetch(form.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(dataInput)}).then(
                response => response.text(),
            ).then(data => {
                $('.tablinks-container').load('/chat_sidebar/' + {{ $chat->id }});
                setTimeout(function () {
                    initDelete();
                    document.querySelector(`.tablink[data-uuid="${JSON.parse(data)['uuid']}"]`).click()
                    document.querySelector(`.tablink[data-uuid="${JSON.parse(data)['uuid']}"]`).parentElement.parentElement.classList.add('opened')
                }, 500)
            })

        }
    </script>

    {{--Код для добавления папок--}}
    <script>
        function add_new_folder(form) {
            let key = form.querySelector('input[name=_token]').value;
            fetch(form.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: {}}).then(
                response => response.text(),
            ).then(data => {
                $('.tablinks-container').load('/chat_sidebar/' + {{ $chat->id }});
                setTimeout(function() {
                    initDelete();
                }, 300)

            })
        }
    </script>

    {{-- Код для смены названия чата --}}
    <script>
        // $('form').on('submit', function(e) {
        //     e.preventDefault(); // прерываем отправку на сервер
        //     $(this).submit()
        // });
        function renChat(item) {
            let form;
            if (item.classList.contains('chat__update-form')) {
                form = item;
            } else {
                form = item.parentElement.parentElement.parentElement.parentElement.querySelector('.chat__update-form')
            }
            fetch(form.action, {
                headers: {
                    'Content-Type': 'application/json;charset=utf-8',
                    "X-CSRF-Token": $(form).find('input[name="_token"]').val()
                },
                method: "PATCH",
                body: JSON.stringify({'title': form.querySelector('input[name="title"]').value})
            })
            form.parentElement.querySelector('.chat__name').innerHTML = form.querySelector('input[name="title"]').value
            renameChat(item.parentElement.parentElement.querySelector("button.renameChat"))
        }
    </script>

    {{-- Код для смены названия папки --}}
    <script>
        function renFolder(item) {
            let form;
            if (item.classList.contains('chat__update-form')) {
                form = item;
            } else {
                form = item.parentElement.parentElement.parentElement.parentElement.querySelector('.chat__update-form')
            }
            fetch(form.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": form.querySelector('input[name="_token"]').value}, method: "PATCH", body: JSON.stringify({'title': form.querySelector('#renameFolderInput').value})})
            form.parentElement.querySelector('.folderName').innerHTML = form.querySelector('#renameFolderInput').value
            renameFolder(item)
        }
    </script>

    {{-- Код для удаления чата --}}
    <script>
        function delChat(item) {
            fetch(item.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": $(item).find('input[name="_token"]').val()}, method: "DELETE"})
            item.parentElement.parentElement.parentElement.remove()
            setTimeout(function () {
                if (document.querySelector('.tablink')) {
                    document.querySelector('.tablink').click()
                } else {
                    window.location.replace('/')
                }
            }, 300)
        }
    </script>

    {{-- Код для удаления папки --}}
    <script>
        function delFolder(item) {
            item.addEventListener('submit', function(e) {
                e.preventDefault()
                this.parentElement.parentElement.parentElement.parentElement.parentElement.remove()
                if (document.querySelector('.tablink')) {
                    document.querySelector('.tablink').click()
                } else {
                    window.location.replace('/')
                }
                fetch(this.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": $(this).find('input[name="_token"]').val()}, method: "DELETE"})
            })
        }
    </script>

    {{-- Код для смены системной роли --}}
    <script>
        function changeRole(item) {
            item.preventDefault()
            let form = item.target
            fetch(form.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": form.querySelector('input[name="_token"]').value}, method: "POST", body: JSON.stringify({'role': form.querySelector('#systemRoleText').value})})
            document.querySelector('.systemRole button.renameChat').click();
            let formText = form.querySelector('#systemRoleText').value;
            document.querySelector('.systemRole p').textContent = String(formText).trim();
            document.querySelector('.systemRole p').classList.remove('display-none');
            setTimeout(function () {
                $('.msger-chat').load(`/messages/get/${id}`);
            }, 300)
            document.querySelector('#popup-catalog').classList.remove('active');
            document.querySelector('.formSystemRole').classList.add('nonActive');
        }
    </script>

    {{-- Отправка настроек и сохранение их --}}
    <script>
        function chat__settings() {
            // Получаем форму
            var form = $('#chatSettings-form');
            var loader = $('#loaderResponseSuccess');
            loader.addClass('showed');
            setTimeout(function() {
                loader.removeClass('showed');
            }, 2500)
            form.submit(function(event) {
                // Отменяем стандартное поведение браузера
                event.preventDefault();

                // Отправляем форму асинхронным POST-запросом с помощью jQuery AJAX
                $.ajax({
                    type: "PATCH",    // Метод отправки данных (POST, GET и т.д.)
                    url: form.attr('action'),     // URL-адрес, куда отправляются данные формы
                    data: form.serialize(),      // Сериализуем данные формы в строку
                    success: function(response) { // Callback-функция, которая вызывается при успешной отправке формы
                        console.log(response);      // Выводим в консоль ответ сервера
                        // Здесь можно выполнить дополнительные действия после успешной отправки формы
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Callback-функция, которая вызывается при ошибке отправки формы
                        console.log(xhr.status);    // Выводим в консоль код ошибки
                        console.log(thrownError);   // Выводим в консоль сообщение об ошибке
                        // Здесь можно выполнить дополнительные действия при ошибке отправки формы
                    }
                });
            });
            form.submit();
        }
    </script>

    <script>
        //Открытие попапа библиотеки подсказок
        document.getElementById('openPrompts').onclick = () =>{
            promptsBlock(1);
            document.getElementById('popup-library').classList.add('active');
            closePopContainer('popup-library', '#popup-library .popupContent');
        }
    </script>

    <script>
        //Открытие попапа каталога ролей
        function open_catalog() {
            document.getElementById('popup-catalog').classList.add('active');
        }
    </script>

    <script src="{{ asset('js/script.js') }}"></script>
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
        //Редактирование профиля
        let editProfile = document.querySelectorAll('.coolInput .hoverItems button.rename-profile'),
        editProfileInput = document.querySelectorAll('.coolInput .input-span input'),
        editProfileP = document.querySelectorAll('.coolInput .input-span p'),
        editProfileConfirm = document.querySelectorAll('.coolInput .hoverItems .rename-confirm'),
        editProfileHoverItems = document.querySelectorAll('.coolInput .hoverItems');

        for(let i = 0; editProfile.length > i; i++){
                editProfile[i].onclick = () =>{
                editProfile.forEach(item => item.classList.remove('nonActive'));
                editProfileHoverItems.forEach(item=>item.classList.remove('active'));
                editProfileConfirm.forEach(item=>item.classList.add('nonActive'));
                editProfileInput.forEach(item=>item.classList.add('nonActive'));
                editProfileP.forEach(item=>item.classList.remove('nonActive'));
                //Скрипт
                editProfile[i].classList.add('nonActive');
                editProfileHoverItems[i].classList.add('active');
                editProfileConfirm[i].classList.remove('nonActive');
                editProfileInput[i].classList.remove('nonActive');
                editProfileInput[i].value = String(editProfileP[i].innerText).trim();
                editProfileP[i].classList.add('nonActive');
                let lastText = String(editProfileP[i].innerText).trim();
                //Да
                editProfileConfirm[i].querySelector('button.renameProfileYes').onclick = () =>{
                    editProfile[i].classList.remove('nonActive');
                    editProfileHoverItems[i].classList.remove('active');
                    editProfileConfirm[i].classList.add('nonActive');
                    editProfileInput[i].classList.add('nonActive');
                    editProfileP[i].classList.remove('nonActive');
                    editProfileP[i].innerText = editProfileInput[i].value;
                    if(lastText != editProfileP[i].innerText){
                        document.getElementById('profileSuccess').classList.add('showed');
                        setTimeout(()=>{
                            document.getElementById('profileSuccess').classList.remove('showed');
                        }, 2000)
                    }
                }
                //Нет
                editProfileConfirm[i].querySelector('button.renameProfileNo').onclick = () =>{
                    editProfile[i].classList.remove('nonActive');
                    editProfileHoverItems[i].classList.remove('active');
                    editProfileConfirm[i].classList.add('nonActive');
                    editProfileInput[i].classList.add('nonActive');
                    editProfileP[i].classList.remove('nonActive');
                }
            }
        }
    </script>
    <script>
        function hideButtonScroll(elem) {
            if($(elem).scrollTop() + 1000 > elem.scrollHeight) {
                $('#scrollBottomBtn').hide();
            } else {
                $('#scrollBottomBtn').show();
            }
        }
        function scrollInit() {
            if (document.querySelector('.msger-chat').clientHeight < document.querySelector('.msger-chat').scrollHeight) {
                hideButtonScroll(document.querySelector('.msger-chat'))
                document.querySelector('.msger-chat').addEventListener('scroll', function () {
                    hideButtonScroll(this)
                })
                $('#scrollBottomBtn').click(function(){
                    $(".msger-chat").animate({
                        scrollTop: $('.msger-chat')[0].scrollHeight
                    }, 800);
                    return false;
                });
            } else {
                $('#scrollBottomBtn').hide();
            }
        }
        scrollInit();


    </script>
    <script>
        function promptsBlock(id) {
            $('.prompts-in-category').load(`/prompts/${id}/main/0`);
            setTimeout(()=>{
                document.querySelectorAll('.prompts-in-category button.copyRole').forEach((item)=>{
                    item.innerHTML = `
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_16_2165)"><path d="M6.29239 10.4166C6.139 10.4167 5.98709 10.3866 5.84535 10.3279C5.70362 10.2693 5.57484 10.1833 5.46639 10.0748L3.25906 7.91703C3.14844 7.80873 3.08537 7.66093 3.08373 7.50613C3.08209 7.35134 3.14201 7.20223 3.25031 7.09161C3.3586 6.98099 3.50641 6.91793 3.6612 6.91629C3.816 6.91465 3.96511 6.97456 4.07572 7.08286L6.28831 9.24528L10.2585 5.33694C10.3704 5.23843 10.5159 5.18654 10.6649 5.19193C10.8139 5.19732 10.9552 5.25959 11.0598 5.36593C11.1643 5.47227 11.2242 5.61461 11.227 5.76371C11.2299 5.91281 11.1755 6.05734 11.0751 6.16761L7.11256 10.08C7.0047 10.1873 6.87673 10.2723 6.736 10.33C6.59526 10.3878 6.44452 10.4172 6.29239 10.4166ZM14.1674 11.5833V7.69828C14.1891 5.90012 13.5299 4.1603 12.3219 2.82813C11.114 1.49596 9.44676 0.670065 7.65506 0.516277C6.65502 0.44631 5.65162 0.591958 4.71274 0.943366C3.77387 1.29477 2.92143 1.84374 2.21309 2.55313C1.50475 3.26252 0.957048 4.11577 0.607033 5.05517C0.257018 5.99456 0.112857 6.99818 0.184306 7.99811C0.442139 11.7046 3.71522 14.4999 7.79914 14.4999H11.2507C12.024 14.499 12.7653 14.1914 13.3121 13.6446C13.8589 13.0979 14.1665 12.3565 14.1674 11.5833ZM7.57572 1.68061C9.07282 1.81305 10.4643 2.50714 11.4707 3.62343C12.477 4.73973 13.0237 6.19551 13.0007 7.69828V11.5833C13.0007 12.0474 12.8163 12.4925 12.4882 12.8207C12.16 13.1489 11.7149 13.3333 11.2507 13.3333H7.79914C4.27931 13.3333 1.56739 11.0583 1.34864 7.91761C1.29121 7.11762 1.39937 6.31437 1.66637 5.55807C1.93337 4.80176 2.35346 4.10864 2.90041 3.522C3.44735 2.93537 4.1094 2.46783 4.84518 2.14859C5.58096 1.82935 6.37467 1.66527 7.17672 1.66661C7.30914 1.66661 7.44272 1.67186 7.57572 1.68061Z" fill="white"/></g><defs><clipPath id="clip0_16_2165"><rect width="14" height="14" fill="white" transform="translate(0.16748 0.5)"/></clipPath></defs></svg>
                    Выбрать
                    `
                    item.onclick = () =>{
                        document.querySelector('textarea.msger-input').value = String(item.parentElement.parentElement.querySelector('p').innerText).trim();
                        autoResize(document.querySelector('textarea.msger-input'));
                        document.getElementById('popup-library').classList.remove('active');
                    }
                })
            }, 300)
        }

        function myFunction(id, uuid) {
            $.each($('.tablink'), function (index, val) {
                val.classList.remove('active')
            })
            $('.msger-chat').load(`/messages/get/${id}`);

            let stateObj = { id: "100" };
            window.history.replaceState(stateObj,
                "Page 3", `/chats/${uuid}`);
            $('#chat_id').val(id);
            $.each($('.tablink'), function (index, val) {
                val.classList.remove('active')
            })
            $(".msger-chat").scrollTop($(".msger-chat")[0].scrollHeight);

            $('.sidebarMain.right').load(`/chat/role/${id}`)
            $('.tokensSpent').load(`/messages-cost/get/${id}`);
            document.querySelector(`.tablink[data-uuid="${uuid}"]`).classList.add('active');
            scrollInit();
            setTimeout(function() {
                $(".msger-chat").scrollTop($(".msger-chat")[0].scrollHeight);
            }, 300)
        }
    </script>
@endsection
