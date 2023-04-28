@extends('layouts.index', ["show" => true])
@section('content')
    <div class="mainWrapper">
        <section class="msger">
            <header class="msger-header">
                <div class="msger-header-title">
                    <i class="fas fa-comment-alt"></i> ChatGPT
                    &nbsp;| ID: <input type="text" id="id" hidden> <span class="id_session"></span>
                </div>
                <!--Удаление истории чата-->
                <div class="msger-header-options" style="display:none;">
                    <button id="delete-button">Delete History</button>
                </div>
            </header>

            <main class="msger-chat">
                <!--Плашка в начале чата-->
                @include('components.message')
                <!--Кнопка скролла вниз-->
            </main>
            <div class="messageInput">
                <!--Токены, которые пользователь слил в определенном чате-->
                <div class="tokens_chat">
                    @include('components.tokens_in_chat')
                </div>
                <form class="msger-inputarea">
                    @csrf
                    <input type="hidden" id="chat_id" name="chat_id" value="{{ $chat->id  }}">
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth()->id() }}">
                    @if (Auth::user()->tokens <= 0)
                        <textarea class="msger-input" placeholder="Enter your message..." required disabled></textarea>
                    @else
                        <textarea class="msger-input" placeholder="Enter your message..." required></textarea>
                        <button type="submit" class="msger-send-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 15.8379L11.144 10.2709L16.712 4.70193L13 15.8379ZM15.298 3.28793L9.73 8.85593L4.162 6.99993L15.298 3.28793ZM19.99 0.94793C19.985 0.85493 19.968 0.76493 19.937 0.67793C19.927 0.64693 19.916 0.61693 19.902 0.58693C19.854 0.47993 19.793 0.37893 19.707 0.29293C19.621 0.20693 19.52 0.14593 19.412 0.0979297C19.383 0.0839297 19.354 0.0729297 19.323 0.0629297C19.234 0.0319297 19.143 0.0139297 19.048 0.00892969C19.026 0.00792969 19.006 0.00292969 18.983 0.00292969C18.883 0.00492969 18.782 0.0189297 18.684 0.0509297L0.684 6.05093C0.275 6.18793 0 6.56893 0 6.99993C0 7.43093 0.275 7.81293 0.684 7.94893L9.209 10.7909L12.052 19.3169C12.188 19.7249 12.569 19.9999 13 19.9999C13.431 19.9999 13.812 19.7249 13.948 19.3169L19.948 1.31693C19.98 1.21793 19.995 1.11793 19.996 1.01793C19.997 0.99393 19.991 0.97193 19.99 0.94793V0.94793Z" fill="white"/>
                            </svg>
                        </button>
                    @endif

                </form>
                <!--Подсказки пользователя-->
                <div class="prompts">
                    <button class="promptBtn">
                        Обобщите текст
                        <div class="promptText">
                            Обобщи нормальный текст
                        </div>
                    </button>
                    <button class="promptBtn">
                        Правильная грамматика
                        <div class="promptText">
                            Обобщи нормальный текстasdadad
                        </div>
                    </button>
                    <button class="promptBtn">
                        Создай код
                        <div class="promptText">
                            Обобщи нормальный текст
                        </div>
                    </button>
                    <button class="promptBtn">
                        Сделай ветер
                        <div class="promptText">
                            Обобщи нормальный текст
                        </div>
                    </button>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <div class="loaderResponse nonActive">
        <div class="firstRow">
            <div class="loaderGif">

            </div>
            <div class="responseStat">
                <p>Meta GPT обрабатывает ваш запрос</p>
                <span>Дождитесь ответа</span>
            </div>
        </div>
        <div class="secondRow">
            <button id="responseStop">
                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_17_1429)"><path d="M9.87819 0.622361C9.80006 0.544248 9.6941 0.500366 9.58361 0.500366C9.47313 0.500366 9.36716 0.544248 9.28903 0.622361L5.00028 4.91111L0.711527 0.622361C0.633391 0.544248 0.527429 0.500366 0.416944 0.500366C0.306459 0.500366 0.200497 0.544248 0.122361 0.622361C0.0442476 0.700497 0.000366211 0.806459 0.000366211 0.916944C0.000366211 1.02743 0.0442476 1.13339 0.122361 1.21153L4.41111 5.50028L0.122361 9.78903C0.0442476 9.86716 0.000366211 9.97313 0.000366211 10.0836C0.000366211 10.1941 0.0442476 10.3001 0.122361 10.3782C0.200497 10.4563 0.306459 10.5002 0.416944 10.5002C0.527429 10.5002 0.633391 10.4563 0.711527 10.3782L5.00028 6.08944L9.28903 10.3782C9.36716 10.4563 9.47313 10.5002 9.58361 10.5002C9.6941 10.5002 9.80006 10.4563 9.87819 10.3782C9.95631 10.3001 10.0002 10.1941 10.0002 10.0836C10.0002 9.97313 9.95631 9.86716 9.87819 9.78903L5.58944 5.50028L9.87819 1.21153C9.95631 1.13339 10.0002 1.02743 10.0002 0.916944C10.0002 0.806459 9.95631 0.700497 9.87819 0.622361Z" fill="white"/></g><defs><clipPath id="clip0_17_1429"><rect width="10" height="10" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
            </button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('.msger-chat').addEventListener('scroll', function () {
                if($(this).scrollTop() + 1000 > document.querySelector('.msger-chat').scrollHeight) {
                    $('#scrollBottomBtn').hide();
                } else {
                    $('#scrollBottomBtn').show();
                }
            })
            $('#scrollBottomBtn').click(function(){
                $(".msger-chat").animate({
                    scrollTop: $('.msger-chat')[0].scrollHeight
                }, 800);
                return false;
            });
        })

    </script>
    <script>
        function myFunction(id) {
            $.each($('.tablink'), function (index, val) {
                val.classList.remove('active')
            })
            console.log()
            event.target.classList.add('active');
            $('.msger-chat').load(`/messages/get/${id}`);

            let stateObj = { id: "100" };
            window.history.replaceState(stateObj,
                "Page 3", `/chats/${id}`);
            $('#chat_id').val(id);
            $.each($('.tablink'), function (index, val) {
                val.classList.remove('active')
            })
            event.target.classList.add('active');
            $(".msger-chat").scrollTop($(".msger-chat")[0].scrollHeight);

            $('.sidebarMain.right').load(`/chat/role/${id}`)
            $('.tokens_chat').load(`/messages-cost/get/${id}`);
        }
    </script>
@endsection
