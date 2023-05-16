    <!--Попап записаться на тестирование-->
    <div class="popup" id="popup-zapic">
        <div class="popupContent">
            <div class="popup-inner">
                <div class="form-popup">
                    <form action="{{ route('store_test') }}" method="post">
                        @csrf
                        <div class="form-inner">
                            <div class="form-image">
                                <img src="../assets/asset-zapic.jpg" alt="Запись">
                            </div>
                            <div class="form-text">
                                <h2>Запишитесь на тестирование новых фукнций прямо сейчас</h2>
                                <div class="form-input">
                                    <label for="user-email">
                                        Введите ваш email *
                                    </label>
                                    <input type="text" name="user-email" placeholder="example@gmail.com" required>
                                </div>
                                <div class="form-input">
                                    <label for="user-tg">
                                        Введите ваш telegram*
                                    </label>
                                    <input type="text" name="user-tg" placeholder="@telegram" required>
                                </div>
                                <div class="form-input">
                                    <label for="user-prof">
                                        Укажите вашу профессию
                                    </label>
                                    <input type="text" name="user-prof" placeholder="Веб-дизайнер" required>
                                </div>
                                <div class="form-input">
                                    <label for="user-ask">
                                        Зачем вы хотите участвовать в тестировании?
                                    </label>
                                    <textarea name="user-ask" placeholder="Я хочу..." required> </textarea>
                                </div>
                                <div class="send-mess">
                                    <button type="submit">
                                        Записаться
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
