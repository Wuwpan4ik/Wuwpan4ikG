<!--Ошибка при недостаточном кол-ве токенов-->
<div class="loaderResponse error showed" id="loaderResponseNoTokens">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="{{asset('assets/we-have-an-error.json')}}"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>{{__('loaderResponseNoTokens')}}</p>
            <span>{{__("loaderResponseNoTokensH")}}</span>
        </div>
    </div>
    <div class="secondRow">

    </div>
    <div class="under-loader"></div>
</div>