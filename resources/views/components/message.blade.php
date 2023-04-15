@foreach($messages as $message)
    <div class="msg @if($message->is_bot) left-msg @else right-msg @endif">
        <div class="msg-header">
            <div class="msg-img @if($message->is_bot) bot_img @else user_img @endif"></div>
            <div class="msg-info-name">@if($message->is_bot) MetaGPT @else User @endif</div>
            <div class="msg-info-time">17:02</div>
        </div>
        <div class="msg-bubble">
            <div class="msg-text" id="undefined">{{ $message->message }}</div>
        </div>
    </div>
@endforeach
