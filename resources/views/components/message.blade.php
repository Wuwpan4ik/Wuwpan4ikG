@isset($messages[0])
    @foreach($messages as $message)
        <div class="msg @if($message->is_bot) left-msg @else right-msg @endif">
            <div class="msg-header">
                <div class="firstRow">
                    <div class="msg-img @if($message->is_bot) bot_img @else user_img @endif"></div>
                    <div class="msg-info-name">@if($message->is_bot) MetaGPT @else User @endif</div>
                    <div class="msg-info-time">{{ $message->created_at->format('H:i') }}</div>
                </div>
                <div class="secondRow">
                    <div class="msg-options">
                        @if($message->is_bot)
                            <button class="btnCopyMessage" onclick="copyCommandBtn(this)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_742)"><path d="M19.9491 5.53646L16.4651 2.05046C15.8164 1.3986 15.045 0.881789 14.1953 0.529917C13.3457 0.178046 12.4347 -0.001909 11.5151 0.000457924H7.00012C5.67453 0.00204578 4.40368 0.52934 3.46634 1.46668C2.529 2.40402 2.00171 3.67486 2.00012 5.00046V19.0005C2.00171 20.3261 2.529 21.5969 3.46634 22.5342C4.40368 23.4716 5.67453 23.9989 7.00012 24.0005H17.0001C18.3257 23.9989 19.5966 23.4716 20.5339 22.5342C21.4712 21.5969 21.9985 20.3261 22.0001 19.0005V10.4855C22.0026 9.56588 21.8226 8.65495 21.4705 7.80543C21.1185 6.95591 20.6014 6.1847 19.9491 5.53646ZM18.5351 6.95046C18.8405 7.2646 19.1031 7.61765 19.3161 8.00046H15.0001C14.7349 8.00046 14.4806 7.8951 14.293 7.70756C14.1055 7.52003 14.0001 7.26567 14.0001 7.00046V2.68446C14.3831 2.89738 14.7364 3.15962 15.0511 3.46446L18.5351 6.95046ZM20.0001 19.0005C20.0001 19.7961 19.6841 20.5592 19.1214 21.1218C18.5588 21.6844 17.7958 22.0005 17.0001 22.0005H7.00012C6.20447 22.0005 5.44141 21.6844 4.8788 21.1218C4.31619 20.5592 4.00012 19.7961 4.00012 19.0005V5.00046C4.00012 4.20481 4.31619 3.44175 4.8788 2.87914C5.44141 2.31653 6.20447 2.00046 7.00012 2.00046H11.5151C11.6791 2.00046 11.8381 2.03246 12.0001 2.04746V7.00046C12.0001 7.79611 12.3162 8.55917 12.8788 9.12178C13.4414 9.68439 14.2045 10.0005 15.0001 10.0005H19.9531C19.9681 10.1625 20.0001 10.3205 20.0001 10.4855V19.0005Z" fill="#374957"/></g><defs><clipPath id="clip0_8_742"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button>
                        @else
                            <button class="btnRefreshMessage" onclick="refreshCommandBtn(this)">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_17_3988)"><path d="M5.00009 0.833326C5.5528 0.83514 6.09967 0.946551 6.60904 1.16111C7.11841 1.37567 7.58016 1.68913 7.96759 2.08333H6.66676C6.55625 2.08333 6.45027 2.12723 6.37213 2.20537C6.29399 2.28351 6.25009 2.38949 6.25009 2.49999C6.25009 2.6105 6.29399 2.71648 6.37213 2.79462C6.45027 2.87276 6.55625 2.91666 6.66676 2.91666H8.39301C8.59818 2.91655 8.79493 2.83499 8.94001 2.68991C9.08509 2.54483 9.16665 2.34809 9.16676 2.14291V0.41666C9.16676 0.306153 9.12286 0.200172 9.04472 0.122032C8.96658 0.0438916 8.8606 -7.0852e-06 8.75009 -7.0852e-06C8.63958 -7.0852e-06 8.5336 0.0438916 8.45546 0.122032C8.37732 0.200172 8.33342 0.306153 8.33342 0.41666V1.28249C7.64475 0.662265 6.797 0.245997 5.88513 0.080305C4.97326 -0.0853869 4.03327 0.00603956 3.17042 0.344346C2.30757 0.682653 1.55593 1.25448 0.999679 1.99579C0.443427 2.73711 0.104525 3.61864 0.0209241 4.54166C0.0155421 4.59968 0.0223056 4.65819 0.0407836 4.71346C0.0592616 4.76872 0.0890489 4.81954 0.128248 4.86265C0.167446 4.90577 0.215197 4.94025 0.268457 4.9639C0.321717 4.98754 0.379318 4.99984 0.437591 4.99999C0.539502 5.00129 0.63823 4.96451 0.714448 4.89685C0.790667 4.82918 0.838888 4.73551 0.849674 4.63416C0.94243 3.59697 1.41966 2.63195 2.18762 1.92868C2.95559 1.2254 3.95876 0.834698 5.00009 0.833326Z" fill="white"/><path d="M9.56298 5.00009C9.46106 4.9988 9.36234 5.03558 9.28612 5.10324C9.2099 5.17091 9.16168 5.26458 9.15089 5.36593C9.08202 6.15895 8.78711 6.91556 8.30116 7.54602C7.81522 8.17647 7.15863 8.65431 6.40929 8.92283C5.65995 9.19136 4.84931 9.2393 4.07354 9.06098C3.29777 8.88266 2.58943 8.48555 2.03256 7.91677H3.33339C3.4439 7.91677 3.54988 7.87287 3.62802 7.79473C3.70616 7.71659 3.75006 7.61061 3.75006 7.5001C3.75006 7.38959 3.70616 7.28361 3.62802 7.20547C3.54988 7.12733 3.4439 7.08343 3.33339 7.08343H1.60714C1.50552 7.08338 1.40488 7.10335 1.31098 7.14222C1.21708 7.18109 1.13176 7.23808 1.0599 7.30994C0.988037 7.3818 0.931045 7.46712 0.89218 7.56102C0.853315 7.65492 0.833338 7.75556 0.833393 7.85718V9.58344C0.833393 9.69395 0.877292 9.79993 0.955432 9.87807C1.03357 9.95621 1.13955 10.0001 1.25006 10.0001C1.36057 10.0001 1.46655 9.95621 1.54469 9.87807C1.62283 9.79993 1.66673 9.69395 1.66673 9.58344V8.7176C2.35541 9.33783 3.20315 9.7541 4.11502 9.91979C5.02689 10.0855 5.96688 9.99406 6.82973 9.65575C7.69258 9.31745 8.44422 8.74562 9.00047 8.0043C9.55672 7.26298 9.89563 6.38145 9.97923 5.45843C9.98461 5.4004 9.97784 5.3419 9.95937 5.28663C9.94089 5.23136 9.9111 5.18055 9.8719 5.13743C9.8327 5.09432 9.78495 5.05983 9.73169 5.03619C9.67843 5.01254 9.62083 5.00025 9.56256 5.00009H9.56298Z" fill="white"/></g><defs><clipPath id="clip0_17_3988"><rect width="10" height="10" fill="white"/></clipPath></defs></svg>
                            </button>
                            <button class="btnCopyMessage" onclick="copyCommandBtn(this)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_742)"><path d="M19.9491 5.53646L16.4651 2.05046C15.8164 1.3986 15.045 0.881789 14.1953 0.529917C13.3457 0.178046 12.4347 -0.001909 11.5151 0.000457924H7.00012C5.67453 0.00204578 4.40368 0.52934 3.46634 1.46668C2.529 2.40402 2.00171 3.67486 2.00012 5.00046V19.0005C2.00171 20.3261 2.529 21.5969 3.46634 22.5342C4.40368 23.4716 5.67453 23.9989 7.00012 24.0005H17.0001C18.3257 23.9989 19.5966 23.4716 20.5339 22.5342C21.4712 21.5969 21.9985 20.3261 22.0001 19.0005V10.4855C22.0026 9.56588 21.8226 8.65495 21.4705 7.80543C21.1185 6.95591 20.6014 6.1847 19.9491 5.53646ZM18.5351 6.95046C18.8405 7.2646 19.1031 7.61765 19.3161 8.00046H15.0001C14.7349 8.00046 14.4806 7.8951 14.293 7.70756C14.1055 7.52003 14.0001 7.26567 14.0001 7.00046V2.68446C14.3831 2.89738 14.7364 3.15962 15.0511 3.46446L18.5351 6.95046ZM20.0001 19.0005C20.0001 19.7961 19.6841 20.5592 19.1214 21.1218C18.5588 21.6844 17.7958 22.0005 17.0001 22.0005H7.00012C6.20447 22.0005 5.44141 21.6844 4.8788 21.1218C4.31619 20.5592 4.00012 19.7961 4.00012 19.0005V5.00046C4.00012 4.20481 4.31619 3.44175 4.8788 2.87914C5.44141 2.31653 6.20447 2.00046 7.00012 2.00046H11.5151C11.6791 2.00046 11.8381 2.03246 12.0001 2.04746V7.00046C12.0001 7.79611 12.3162 8.55917 12.8788 9.12178C13.4414 9.68439 14.2045 10.0005 15.0001 10.0005H19.9531C19.9681 10.1625 20.0001 10.3205 20.0001 10.4855V19.0005Z" fill="#374957"/></g><defs><clipPath id="clip0_8_742"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="msg-bubble">
                <div class="msg-text" id="undefined">{{ $message->message }}</div>
            </div>
        </div>
    @endforeach
    <button id="scrollBottomBtn">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.7099 12.71C17.617 12.6162 17.5064 12.5418 17.3845 12.4911C17.2627 12.4403 17.1319 12.4142 16.9999 12.4142C16.8679 12.4142 16.7372 12.4403 16.6154 12.4911C16.4935 12.5418 16.3829 12.6162 16.2899 12.71L12.9999 16V5.99997C12.9999 5.73475 12.8946 5.4804 12.707 5.29286C12.5195 5.10533 12.2652 4.99997 11.9999 4.99997C11.7347 4.99997 11.4804 5.10533 11.2928 5.29286C11.1053 5.4804 10.9999 5.73475 10.9999 5.99997V16L7.70994 12.71C7.61697 12.6162 7.50637 12.5418 7.38451 12.4911C7.26266 12.4403 7.13195 12.4142 6.99994 12.4142C6.86793 12.4142 6.73722 12.4403 6.61536 12.4911C6.4935 12.5418 6.3829 12.6162 6.28994 12.71C6.10369 12.8973 5.99915 13.1508 5.99915 13.415C5.99915 13.6792 6.10369 13.9326 6.28994 14.12L10.5899 18.41C10.9633 18.7856 11.4704 18.9977 11.9999 19C12.526 18.9951 13.029 18.7831 13.3999 18.41L17.6999 14.12C17.8875 13.9339 17.9939 13.6812 17.9957 13.417C17.9976 13.1528 17.8949 12.8987 17.7099 12.71Z" fill="#374957"/></svg>
    </button>
@else
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
@endempty
