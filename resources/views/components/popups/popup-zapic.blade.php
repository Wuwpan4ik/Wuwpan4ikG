    <!--Попап записаться на тестирование-->
    <div class="popup" id="popup-zapic">
        <div class="popupContent">
            <div class="popup-inner">
                <div class="form-popup">
                    <form id="telegram" action="{{ route('telegram') }}" method="post">
                        @csrf
                        <div class="form-inner">
                            <input type="text" name="zayavka" value="Заявка на умного бота" hidden>
                            <div class="form-image">
                                <img src="../assets/asset-zapic.jpg" alt="Запись">
                            </div>
                            <div class="form-text">
                                <h2>{{__('popupZapicHeading')}}</h2>
                                <div class="form-input">
                                    <label for="email">
                                        {{__('popupZapicEmail')}}*
                                    </label>
                                    <input type="text" name="email" placeholder="example@gmail.com" required>
                                </div>
                                <div class="form-input">
                                    <label for="telegram">
                                        {{__('popupZapicTg')}}*
                                    </label>
                                    <input type="text" name="telegram" placeholder="@telegram" required>
                                </div>
                                <div class="form-input">
                                    <label for="prof">
                                        {{__('popupZapicProf')}}
                                    </label>
                                    <input type="text" name="prof" placeholder="{{__('popupZapucProfPlaceholder')}}" required>
                                </div>
                                <div class="form-input">
                                    <label for="question">
                                        {{__('WhyFor')}}
                                    </label>
                                    <textarea name="question" placeholder="{{__('whyForPlaceholder')}}" required></textarea>
                                </div>
                                <div class="send-mess">
                                    <button type="submit">
                                        {{__('btnZapic')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="closeBtnBuy">
                    <button>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_73_1622)"><path d="M12.0001 6.00009C11.8594 5.85949 11.6687 5.7805 11.4698 5.7805C11.271 5.7805 11.0802 5.85949 10.9396 6.00009L9.00008 7.93959L7.06058 6.00009C6.91913 5.86347 6.72968 5.78788 6.53303 5.78959C6.33639 5.7913 6.14828 5.87017 6.00922 6.00923C5.87016 6.14828 5.79129 6.33639 5.78958 6.53304C5.78787 6.72969 5.86347 6.91914 6.00008 7.06059L7.93958 9.00009L6.00008 10.9396C5.86347 11.081 5.78787 11.2705 5.78958 11.4671C5.79129 11.6638 5.87016 11.8519 6.00922 11.991C6.14828 12.13 6.33639 12.2089 6.53303 12.2106C6.72968 12.2123 6.91913 12.1367 7.06058 12.0001L9.00008 10.0606L10.9396 12.0001C11.081 12.1367 11.2705 12.2123 11.4671 12.2106C11.6638 12.2089 11.8519 12.13 11.9909 11.991C12.13 11.8519 12.2089 11.6638 12.2106 11.4671C12.2123 11.2705 12.1367 11.081 12.0001 10.9396L10.0606 9.00009L12.0001 7.06059C12.1407 6.91995 12.2197 6.72922 12.2197 6.53034C12.2197 6.33147 12.1407 6.14074 12.0001 6.00009Z" fill="white"/><path d="M9 0C7.21997 0 5.47991 0.527841 3.99987 1.51677C2.51983 2.50571 1.36628 3.91131 0.685088 5.55585C0.00389957 7.20038 -0.17433 9.00998 0.172937 10.7558C0.520204 12.5016 1.37737 14.1053 2.63604 15.364C3.89472 16.6226 5.49836 17.4798 7.24419 17.8271C8.99002 18.1743 10.7996 17.9961 12.4442 17.3149C14.0887 16.6337 15.4943 15.4802 16.4832 14.0001C17.4722 12.5201 18 10.78 18 9C17.9974 6.61384 17.0484 4.32616 15.3611 2.63889C13.6738 0.951621 11.3862 0.00258081 9 0V0ZM9 16.5C7.51664 16.5 6.0666 16.0601 4.83323 15.236C3.59986 14.4119 2.63856 13.2406 2.07091 11.8701C1.50325 10.4997 1.35473 8.99168 1.64411 7.53682C1.9335 6.08197 2.64781 4.74559 3.6967 3.6967C4.7456 2.64781 6.08197 1.9335 7.53683 1.64411C8.99168 1.35472 10.4997 1.50325 11.8701 2.0709C13.2406 2.63856 14.4119 3.59985 15.236 4.83322C16.0601 6.06659 16.5 7.51664 16.5 9C16.4978 10.9885 15.7069 12.8948 14.3009 14.3009C12.8948 15.7069 10.9885 16.4978 9 16.5V16.5Z" fill="white"/></g><defs><clipPath id="clip0_73_1622"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
