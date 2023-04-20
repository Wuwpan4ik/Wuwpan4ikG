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
                    <textarea class="msger-input" placeholder="{{__('enterMessage')}}" required></textarea>
                    <button type="submit" class="msger-send-btn">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 15.8379L11.144 10.2709L16.712 4.70193L13 15.8379ZM15.298 3.28793L9.73 8.85593L4.162 6.99993L15.298 3.28793ZM19.99 0.94793C19.985 0.85493 19.968 0.76493 19.937 0.67793C19.927 0.64693 19.916 0.61693 19.902 0.58693C19.854 0.47993 19.793 0.37893 19.707 0.29293C19.621 0.20693 19.52 0.14593 19.412 0.0979297C19.383 0.0839297 19.354 0.0729297 19.323 0.0629297C19.234 0.0319297 19.143 0.0139297 19.048 0.00892969C19.026 0.00792969 19.006 0.00292969 18.983 0.00292969C18.883 0.00492969 18.782 0.0189297 18.684 0.0509297L0.684 6.05093C0.275 6.18793 0 6.56893 0 6.99993C0 7.43093 0.275 7.81293 0.684 7.94893L9.209 10.7909L12.052 19.3169C12.188 19.7249 12.569 19.9999 13 19.9999C13.431 19.9999 13.812 19.7249 13.948 19.3169L19.948 1.31693C19.98 1.21793 19.995 1.11793 19.996 1.01793C19.997 0.99393 19.991 0.97193 19.99 0.94793V0.94793Z" fill="white"/>
                        </svg>
                    </button>
                </form>
                <!--Подсказки пользователя-->
                <div class="prompts">
                    <button class="promptBtn">
                        Обобщите текст
                    </button>
                    <button class="promptBtn">
                        Правильная грамматика
                    </button>
                    <button class="promptBtn">
                        Создай код
                    </button>
                    <button class="promptBtn">
                        Сделай ветер
                    </button>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        function myFunction(id) {
            $.each($('.tablink'), function (index, val) {
                val.classList.remove('active')
            })

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
            var element = document.querySelector(".msger-chat");
            element.scrollTop = element.scrollHeight;
            $('.sidebarMain.right').load(`/chat/role/${id}`)
            $('.tokens_chat').load(`/messages-cost/get/${id}`);
        }
    </script>
@endsection
