@foreach($messages as $message)
    <div class="msg @if($message->is_bot) left-msg @else right-msg @endif">
        <div class="msg-img" style="background-image: url(https://api.dicebear.com/5.x/micah/svg?seed=42425763-11a6-4741-bf7d-dc916907fab5)"></div>
        <div class="msg-bubble">
            <div class="msg-info">
                <div class="msg-info-name">@if($message->is_bot) Bot @else You @endif</div>
                <div class="msg-info-time">17:02</div>
            </div>
            <div class="msg-text" id="undefined">{{ $message->message }}</div>
        </div>
    </div>
@endforeach
