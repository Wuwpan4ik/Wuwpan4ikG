@extends('layouts.index')
@section('content')
    @empty($settings)
        {{ $settings }}
    @endempty
    {{ session() }}
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
                <div class="welcome-chat-wrapper">
                    <div class="welcome-chat">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_47_1031)">
                                <path d="M25 20.8333C23.3424 20.8333 21.7527 20.1749 20.5806 19.0028C19.4085 17.8306 18.75 16.2409 18.75 14.5833C18.75 12.9257 19.4085 11.336 20.5806 10.1639C21.7527 8.99181 23.3424 8.33333 25 8.33333C26.6576 8.33333 28.2473 8.99181 29.4194 10.1639C30.5915 11.336 31.25 12.9257 31.25 14.5833C31.25 16.2409 30.5915 17.8306 29.4194 19.0028C28.2473 20.1749 26.6576 20.8333 25 20.8333V20.8333ZM18.6833 31.7687C19.1117 30.4303 19.9543 29.2625 21.0894 28.434C22.2246 27.6055 23.5936 27.159 24.999 27.159C26.4043 27.159 27.7733 27.6055 28.9085 28.434C30.0436 29.2625 30.8862 30.4303 31.3146 31.7687C31.4527 32.3042 31.7979 32.7628 32.2741 33.0437C32.7504 33.3246 33.3188 33.4048 33.8542 33.2667C34.3896 33.1285 34.8482 32.7834 35.1291 32.3071C35.41 31.8308 35.4902 31.2625 35.3521 30.7271C32.6208 20.4208 17.3729 20.425 14.65 30.7271C14.5748 30.9941 14.5537 31.2735 14.5879 31.5488C14.6221 31.8241 14.7109 32.0897 14.8492 32.3302C14.9874 32.5708 15.1723 32.7812 15.393 32.9493C15.6137 33.1174 15.8657 33.2397 16.1343 33.3091C16.4029 33.3784 16.6827 33.3935 16.9572 33.3533C17.2317 33.3131 17.4954 33.2185 17.7328 33.075C17.9702 32.9315 18.1766 32.7421 18.3398 32.5178C18.5031 32.2934 18.6198 32.0388 18.6833 31.7687V31.7687ZM25.0187 49.3021C23.9909 49.3027 22.9988 48.9253 22.2312 48.2417L14.4229 41.6667H8.33333C6.1232 41.6667 4.00358 40.7887 2.44078 39.2259C0.877974 37.6631 0 35.5435 0 33.3333V8.33333C0 6.1232 0.877974 4.00358 2.44078 2.44078C4.00358 0.877974 6.1232 0 8.33333 0L41.6667 0C43.8768 0 45.9964 0.877974 47.5592 2.44078C49.122 4.00358 50 6.1232 50 8.33333V33.3333C50 35.5435 49.122 37.6631 47.5592 39.2259C45.9964 40.7887 43.8768 41.6667 41.6667 41.6667H35.7229L27.7083 48.2917C26.9658 48.9465 26.0088 49.3061 25.0187 49.3021V49.3021ZM8.33333 4.16667C7.22826 4.16667 6.16846 4.60565 5.38705 5.38705C4.60565 6.16846 4.16667 7.22826 4.16667 8.33333V33.3333C4.16667 34.4384 4.60565 35.4982 5.38705 36.2796C6.16846 37.061 7.22826 37.5 8.33333 37.5H15.1854C15.6764 37.5 16.1515 37.6734 16.5271 37.9896L24.9562 45.0937L33.6479 37.9771C34.0214 37.6686 34.4906 37.4999 34.975 37.5H41.6667C42.7717 37.5 43.8315 37.061 44.6129 36.2796C45.3943 35.4982 45.8333 34.4384 45.8333 33.3333V8.33333C45.8333 7.22826 45.3943 6.16846 44.6129 5.38705C43.8315 4.60565 42.7717 4.16667 41.6667 4.16667H8.33333Z" fill="#13B8A6"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_47_1031">
                                    <rect width="50" height="50" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <h2 class="h3-title">
                            {{__("welcomeChat")}}
                        </h2>
                        <span class="subtitle">
                            {{__("welcomeChatSub")}}
                        </span>
                    </div>
                </div>
            </main>
        </section>
    </div>
@endsection
