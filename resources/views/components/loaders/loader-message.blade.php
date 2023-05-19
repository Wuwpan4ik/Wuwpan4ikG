<!--При отправке сообщения-->
<div class="loaderResponse" id="loaderResponse">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="{{asset('assets/bot-thinks.json')}}"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>Meta GPT</p>
            <span>{{__('loaderResponse1')}}</span>
        </div>
    </div>
    <div class="secondRow">
        <button id="responseStop">
            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_814_3187)"><path d="M9.24991 2.24472C9.25174 2.36073 9.28745 2.47367 9.35264 2.56964C9.41783 2.66561 9.50966 2.74043 9.61682 2.78489C10.5748 3.2064 11.3849 3.9046 11.9432 4.78987C12.5014 5.67513 12.7824 6.70705 12.7499 7.75314C12.7273 9.14553 12.1525 10.4719 11.152 11.4405C10.1515 12.4091 8.80713 12.9406 7.41474 12.918C6.02235 12.8954 4.69597 12.3206 3.72737 11.3201C2.75878 10.3195 2.22732 8.97519 2.24991 7.58281C2.25125 6.56561 2.54808 5.5707 3.10429 4.71904C3.6605 3.86737 4.45215 3.19563 5.38299 2.78547C5.4902 2.74075 5.58203 2.6657 5.6472 2.56954C5.71238 2.47338 5.74807 2.36029 5.74991 2.24414C5.75006 2.1486 5.72674 2.05448 5.68199 1.97006C5.63725 1.88564 5.57246 1.8135 5.49331 1.75998C5.41416 1.70647 5.32307 1.67321 5.22806 1.66314C5.13305 1.65307 5.03702 1.66649 4.94841 1.70222C3.59466 2.28914 2.48454 3.32467 1.80504 4.6344C1.12554 5.94413 0.918174 7.44803 1.21788 8.89277C1.51758 10.3375 2.30604 11.6348 3.45045 12.5662C4.59485 13.4976 6.02528 14.0061 7.50078 14.0061C8.97629 14.0061 10.4067 13.4976 11.5511 12.5662C12.6955 11.6348 13.484 10.3375 13.7837 8.89277C14.0834 7.44803 13.876 5.94413 13.1965 4.6344C12.517 3.32467 11.4069 2.28914 10.0532 1.70222C9.96441 1.6661 9.86814 1.65239 9.77284 1.66231C9.67754 1.67224 9.58615 1.70548 9.50675 1.7591C9.42735 1.81273 9.36238 1.88509 9.31758 1.96979C9.27279 2.05448 9.24954 2.14891 9.24991 2.24472Z" fill="white"/><path d="M8.08342 0.583333C8.08342 0.261167 7.82225 0 7.50008 0C7.17792 0 6.91675 0.261167 6.91675 0.583333V4.08333C6.91675 4.4055 7.17792 4.66667 7.50008 4.66667C7.82225 4.66667 8.08342 4.4055 8.08342 4.08333V0.583333Z" fill="white"/></g><defs><clipPath id="clip0_814_3187"><rect width="14" height="14" fill="white" transform="translate(0.5)"/></clipPath></defs></svg>
            {{__('stopResponse')}}
        </button>
    </div>
</div>
<!--Ошибка при обработке сообщения-->
<div class="loaderResponse error" id="loaderResponseError">
    <div class="firstRow">
        <div class="loaderGif">
            <lottie-player src="https://assets2.lottiefiles.com/temp/lf20_QYm9j9.json"  background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="responseStat">
            <p>{{__('loaderResponseError')}}</p>
            <span>{{__("loaderResponseDesc")}}</span>
        </div>
    </div>
    <div class="secondRow">

    </div>
    <div class="under-loader"></div>
</div>