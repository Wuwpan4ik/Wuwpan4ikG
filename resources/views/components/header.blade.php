<header id="mainHeader">
    <nav class="navbar">
        <ul class="first-col">
            <li>
                <a href="/" class="active">
                    {{ __("Chat") }}
                </a>
            </li>
            <li>
                <a href="{{ route('prompts.index') }}">
                    {{ __("Library") }}
                </a>
            </li>
            <li>
                <a href="{{ route('role.index') }}">
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
                    <span class="tokens">{{ Auth::user()->tokens }}</span>{{ __("TokensLeft") }}

                </button>
            </li>
        </ul>
    </nav>
</header>
