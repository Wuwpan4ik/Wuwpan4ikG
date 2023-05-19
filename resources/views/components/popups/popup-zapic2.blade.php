<!--Попап "Хотите обучить?"-->
<div class="popup" id="popup-zapic2">
    <div class="popupContent">
            <div class="popup-inner">
                <div class="form-popup">
                    <form action="" method="post">
                        <div class="form-inner">
                            <div class="form-image">
                                <img src="../assets/asset-zapic.jpg" alt="Запись">
                            </div>
                            <div class="form-text">
                                <h2>{{__('popupZapic2Heading')}}</h2>
                                <div class="form-input">
                                    <label for="user-email">
                                    {{__('popupZapicEmail')}}*
                                    </label>
                                    <input type="text" name="user-email" placeholder="example@gmail.com" required>
                                </div>
                                <div class="form-input">
                                    <label for="user-tg">
                                    {{__('popupZapicTg')}}*
                                    </label>
                                    <input type="text" name="user-tg" placeholder="@telegram" required>
                                </div>
                                <div class="form-input">
                                    <label for="user-project">
                                        {{__('tellAboutPrjct')}}
                                    </label>
                                    <textarea name="user-project" placeholder="{{__('tellAboutPrjctPlaceholder')}}" required></textarea>
                                </div>
                                <div class="form-input">
                                    <label for="user-ask">
                                        {{__('WhyFor')}}
                                    </label>
                                    <textarea name="user-ask" placeholder="{{__('whyForPlaceholder')}}" required></textarea>
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