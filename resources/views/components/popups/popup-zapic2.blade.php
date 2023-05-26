<!--Попап "Хотите обучить?"-->
<div class="popup" id="popup-zapic2">
    <div class="popupContent">
            <div class="popup-inner">
                <div class="form-popup">
                    <form id="telegram" action="{{ route('telegram') }}" method="post">
                        @csrf
                        <div class="form-inner">
                            <input type="text" name="zayavka" value="Заявка на внедрение умного бота" hidden>
                            <div class="form-image">
                                <img src="../assets/asset-zapic.jpg" alt="Запись">
                            </div>
                            <div class="form-text">
                                <h2>{{__('popupZapic2Heading')}}</h2>
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
                                        {{__('tellAboutPrjct')}}
                                    </label>
                                    <textarea name="prof" placeholder="{{__('tellAboutPrjctPlaceholder')}}" required></textarea>
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
            </div>
        </div>
    </div>
