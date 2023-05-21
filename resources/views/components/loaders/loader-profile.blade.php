<!--Для профиля(при сохранении)-->
<div class="loaderResponse error" id="profileSuccess">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="{{ asset('assets/success.json') }}"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>{{__('loaderResponseProfileSuccess')}}</p>
        </div>
    </div>
    <div class="secondRow">
    </div>
    <div class="under-loader"></div>
</div>
<!--Восстановление пароля-->
<div class="loaderResponse error" id="resetPasswordLoader">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="{{ asset('assets/success.json') }}"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>{{__('loaderResponsePassword')}}</p>
        </div>
    </div>
    <div class="secondRow">
    </div>
    <div class="under-loader"></div>
</div>
<!--Для активации промокода(успех)-->
<div class="loaderResponse error" id="promocodeActivate">
    <div class="firstRow">
        <div class="loaderGif">
            🥳
        </div>
        <div class="responseStat">
            <p>{{__('loaderPromoActive')}}</p>
        </div>
    </div>
    <div class="secondRow">
    </div>
    <div class="under-loader"></div>
</div>
<!--Для активации промокода(неуспех)-->
<div class="loaderResponse error" id="promocodeActivateBad">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="{{asset('assets/error.json')}}"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>{{__('loaderPromoBad')}}</p>
        </div>
    </div>
    <div class="secondRow">
    </div>
    <div class="under-loader"></div>
</div>
<!--Для активации промокода(уже использован)-->
<div class="loaderResponse error" id="promocodeActivateUsed">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="{{asset('assets/error.json')}}"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>{{__('loaderPromoUsed')}}</p>
        </div>
    </div>
    <div class="secondRow">
    </div>
    <div class="under-loader"></div>
</div>