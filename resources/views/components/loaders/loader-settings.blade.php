<!--Сохранение настроек-->
<div class="loaderResponse error" id="loaderResponseSuccess">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="{{ asset('assets/success.json') }}"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>{{__('loaderSettingsHead')}}</p>
            <span>{{__('loaderSettingsDesc')}}</span>
        </div>
    </div>
    <div class="secondRow">

    </div>
    <div class="under-loader"></div>
</div>