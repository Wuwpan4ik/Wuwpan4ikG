if (document.getElementById("id")) {
        if (getCookie("id") == "") {
            uuid = uuidv4()
            document.cookie = "id=" + uuid
            document.getElementById("id").value = uuid
        } else {
            document.getElementById("id").value = getCookie("id");
        }
    const idSession = get(".id_session");
    const USER_ID = document.getElementById("id").value;
    idSession.textContent = USER_ID
}

const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");
const msgerSendBtn = get(".msger-send-btn");
const navigator = window.navigator;
const userAgent = navigator.userAgent;
let SafariBrowser = false;

if(userAgent.indexOf("Safari") > -1){
    SafariBrowser = true;
}

let userName = 'User';
let userImg = '../assets/user.jpg';
if(document.querySelector('#userNameProf')){
    userName = document.getElementById('userNameProf').textContent;
}

if(document.querySelector('#userImageProf')){
    userImg = document.querySelector('#userImageProf img').src;
}

// Icons made by Freepik from www.flaticon.com
const PERSON_IMG = userImg;
const BOT_IMG = "../assets/botlogo.jpg";
const BOT_NAME = "Meta GPT";
//Сюда вставляем имя пользователя
const PERSON_NAME = userName;

var entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': '&quot;',
    "'": '&#39;',
    "/": '&#x2F;'
};

function escapeHtml(string) {
    return String(string).replace(/[&<>"'/]/g, function (s) {
      return entityMap[s];
    });
}

async function sendMessage(event){
    event.preventDefault();
    let textar = String(msgerInput.value).trim();
    if (!textar) return;
    if (document.querySelector('.welcome-chat')) document.querySelector('.welcome-chat').remove()
    await appendMessage(PERSON_NAME, PERSON_IMG, "right", textar);
    sendMsg(textar)
    msgerInput.value = "";
    autoResize(msgerInput);
}

if (msgerForm) {
    msgerForm.addEventListener("submit", event => {
        sendMessage(event);
    });
    msgerForm.addEventListener("keydown", evt => {
        if (evt.keyCode == 13 && !evt.shiftKey) {
            sendMessage(evt);
        }
    })
}

// Copy to clipboard
function copyCommand(target){
    var textArea = document.createElement('textarea')
    textArea.setAttribute('style','width:1px;border:0;opacity:0;')
    document.body.appendChild(textArea)
    textArea.value = String(target.innerText).trim();
    textArea.select();
    document.execCommand('copy');
    document.body.removeChild(textArea);
}

function copyBtnPre(){
    var copy = function(target) {
        var textArea = document.createElement('textarea')
        textArea.setAttribute('style','width:1px;border:0;opacity:0;')
        document.body.appendChild(textArea)
        textArea.value = target.innerHTML
        textArea.select()
        document.execCommand('copy')
        document.body.removeChild(textArea)
    }

    var pres = document.querySelectorAll(".msg-text pre")
    pres.forEach(function(pre){
      var button = document.createElement("button")
      button.className = "btn btn-sm"
      button.innerHTML = "copy"
      if(pre.querySelector('.btn-sm') == false){
        pre.append(button);
      }
      button.addEventListener('click', function(e){
        e.preventDefault()
        copy(pre.childNodes[0])
      })
    });
}


function appendMessage(name, img, side, text, id) {
    //   Simple solution for small apps
    const msgHTML = `
    <div class="msg ${side}-msg">
        <div class="msg-header">
            <div class="firstRow">
                <div class="msg-img">${img.includes('user.jpg') ? `<div class="msg-info-avatar">${String(userName).trim()[0]}</div>` : `<img src="${img}" alt="">`}</div>
                <div class="msg-info-name">${name}</div>
                <div class="msg-info-time">${formatDate(new Date())}</div>
            </div>
            <div class="secondRow">
                ${side == "right" ?
                `<div class='msg-options'>
                <button class="btnCopyMessage" onclick="copyCommandBtn(this)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_742)"><path d="M19.9491 5.53646L16.4651 2.05046C15.8164 1.3986 15.045 0.881789 14.1953 0.529917C13.3457 0.178046 12.4347 -0.001909 11.5151 0.000457924H7.00012C5.67453 0.00204578 4.40368 0.52934 3.46634 1.46668C2.529 2.40402 2.00171 3.67486 2.00012 5.00046V19.0005C2.00171 20.3261 2.529 21.5969 3.46634 22.5342C4.40368 23.4716 5.67453 23.9989 7.00012 24.0005H17.0001C18.3257 23.9989 19.5966 23.4716 20.5339 22.5342C21.4712 21.5969 21.9985 20.3261 22.0001 19.0005V10.4855C22.0026 9.56588 21.8226 8.65495 21.4705 7.80543C21.1185 6.95591 20.6014 6.1847 19.9491 5.53646ZM18.5351 6.95046C18.8405 7.2646 19.1031 7.61765 19.3161 8.00046H15.0001C14.7349 8.00046 14.4806 7.8951 14.293 7.70756C14.1055 7.52003 14.0001 7.26567 14.0001 7.00046V2.68446C14.3831 2.89738 14.7364 3.15962 15.0511 3.46446L18.5351 6.95046ZM20.0001 19.0005C20.0001 19.7961 19.6841 20.5592 19.1214 21.1218C18.5588 21.6844 17.7958 22.0005 17.0001 22.0005H7.00012C6.20447 22.0005 5.44141 21.6844 4.8788 21.1218C4.31619 20.5592 4.00012 19.7961 4.00012 19.0005V5.00046C4.00012 4.20481 4.31619 3.44175 4.8788 2.87914C5.44141 2.31653 6.20447 2.00046 7.00012 2.00046H11.5151C11.6791 2.00046 11.8381 2.03246 12.0001 2.04746V7.00046C12.0001 7.79611 12.3162 8.55917 12.8788 9.12178C13.4414 9.68439 14.2045 10.0005 15.0001 10.0005H19.9531C19.9681 10.1625 20.0001 10.3205 20.0001 10.4855V19.0005Z" fill="#374957"/></g><defs><clipPath id="clip0_8_742"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button>
                </div>`
                :
              `<div class='msg-options'>
               <button class="btnCopyMessage" onclick="copyCommandBtn(this)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_742)"><path d="M19.9491 5.53646L16.4651 2.05046C15.8164 1.3986 15.045 0.881789 14.1953 0.529917C13.3457 0.178046 12.4347 -0.001909 11.5151 0.000457924H7.00012C5.67453 0.00204578 4.40368 0.52934 3.46634 1.46668C2.529 2.40402 2.00171 3.67486 2.00012 5.00046V19.0005C2.00171 20.3261 2.529 21.5969 3.46634 22.5342C4.40368 23.4716 5.67453 23.9989 7.00012 24.0005H17.0001C18.3257 23.9989 19.5966 23.4716 20.5339 22.5342C21.4712 21.5969 21.9985 20.3261 22.0001 19.0005V10.4855C22.0026 9.56588 21.8226 8.65495 21.4705 7.80543C21.1185 6.95591 20.6014 6.1847 19.9491 5.53646ZM18.5351 6.95046C18.8405 7.2646 19.1031 7.61765 19.3161 8.00046H15.0001C14.7349 8.00046 14.4806 7.8951 14.293 7.70756C14.1055 7.52003 14.0001 7.26567 14.0001 7.00046V2.68446C14.3831 2.89738 14.7364 3.15962 15.0511 3.46446L18.5351 6.95046ZM20.0001 19.0005C20.0001 19.7961 19.6841 20.5592 19.1214 21.1218C18.5588 21.6844 17.7958 22.0005 17.0001 22.0005H7.00012C6.20447 22.0005 5.44141 21.6844 4.8788 21.1218C4.31619 20.5592 4.00012 19.7961 4.00012 19.0005V5.00046C4.00012 4.20481 4.31619 3.44175 4.8788 2.87914C5.44141 2.31653 6.20447 2.00046 7.00012 2.00046H11.5151C11.6791 2.00046 11.8381 2.03246 12.0001 2.04746V7.00046C12.0001 7.79611 12.3162 8.55917 12.8788 9.12178C13.4414 9.68439 14.2045 10.0005 15.0001 10.0005H19.9531C19.9681 10.1625 20.0001 10.3205 20.0001 10.4855V19.0005Z" fill="#374957"/></g><defs><clipPath id="clip0_8_742"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button>
               </div>`}
            </div>
        </div>
      <div class="msg-bubble">
        <div class="msg-text" id=${id}>
            ${side == "right" ? `<p>${escapeHtml(text.trim())}</p>` : ``}
        </div>
      </div>
    </div>
  `;
    msgerChat.insertAdjacentHTML("beforeend", msgHTML);
    $("main.msger-chat").scrollTop($("main.msger-chat")[0].scrollHeight);
}


// Копировать сообщение
function copyCommandBtn(item){
    let lastSvg = item.innerHTML,
    textItem = item.parentElement.parentElement.parentElement.parentElement.querySelector('.msg-text');
    copyCommand(textItem);
    item.innerHTML = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_8_718)">
        <path d="M19.9499 5.53642L16.4639 2.05042C15.8155 1.3985 15.0442 0.881645 14.1947 0.529765C13.3452 0.177884 12.4344 -0.00203383 11.5149 0.000421525H6.99988C5.67428 0.00200938 4.40344 0.529304 3.4661 1.46664C2.52876 2.40398 2.00147 3.67483 1.99988 5.00042V19.0004C2.00147 20.326 2.52876 21.5969 3.4661 22.5342C4.40344 23.4715 5.67428 23.9988 6.99988 24.0004H16.9999C18.3255 23.9988 19.5963 23.4715 20.5337 22.5342C21.471 21.5969 21.9983 20.326 21.9999 19.0004V10.4854C22.0023 9.56594 21.8224 8.6551 21.4705 7.80561C21.1187 6.95612 20.6018 6.18485 19.9499 5.53642ZM18.5359 6.95042C18.8409 7.26483 19.1035 7.61783 19.3169 8.00042H14.9999C14.7347 8.00042 14.4803 7.89507 14.2928 7.70753C14.1052 7.51999 13.9999 7.26564 13.9999 7.00042V2.68342C14.3825 2.89681 14.7355 3.15937 15.0499 3.46442L18.5359 6.95042ZM19.9999 19.0004C19.9999 19.7961 19.6838 20.5591 19.1212 21.1217C18.5586 21.6844 17.7955 22.0004 16.9999 22.0004H6.99988C6.20423 22.0004 5.44117 21.6844 4.87856 21.1217C4.31595 20.5591 3.99988 19.7961 3.99988 19.0004V5.00042C3.99988 4.20477 4.31595 3.44171 4.87856 2.8791C5.44117 2.31649 6.20423 2.00042 6.99988 2.00042H11.5149C11.6799 2.00042 11.8379 2.03242 11.9999 2.04742V7.00042C11.9999 7.79607 12.3159 8.55913 12.8786 9.12174C13.4412 9.68435 14.2042 10.0004 14.9999 10.0004H19.9529C19.9679 10.1624 19.9999 10.3204 19.9999 10.4854V19.0004ZM16.7239 13.3114C16.9065 13.5035 17.0054 13.7602 16.9988 14.0252C16.9922 14.2901 16.8808 14.5416 16.6889 14.7244L13.0999 18.1384C12.5357 18.6937 11.775 19.0035 10.9834 19.0003C10.1918 18.9971 9.43355 18.6812 8.87388 18.1214L7.33388 16.7474C7.13576 16.5708 7.01593 16.3227 7.00074 16.0577C6.99321 15.9265 7.01161 15.7951 7.05487 15.671C7.09814 15.5469 7.16542 15.4325 7.25288 15.3344C7.34034 15.2363 7.44626 15.1564 7.56461 15.0993C7.68295 15.0421 7.81139 15.0088 7.9426 15.0013C8.20759 14.9861 8.46776 15.0768 8.66588 15.2534L10.2509 16.6674C10.3416 16.7693 10.4522 16.8516 10.576 16.9091C10.6997 16.9667 10.8338 16.9983 10.9702 17.002C11.1066 17.0058 11.2423 16.9816 11.369 16.9309C11.4957 16.8802 11.6107 16.8042 11.7069 16.7074L15.3069 13.2764C15.4021 13.1854 15.5143 13.1141 15.6371 13.0666C15.76 13.019 15.891 12.9963 16.0226 12.9995C16.1543 13.0028 16.284 13.032 16.4044 13.0855C16.5247 13.139 16.6333 13.2158 16.7239 13.3114Z" fill="#374957"/>
        </g>
        <defs>
        <clipPath id="clip0_8_718">
        <rect width="24" height="24" fill="white"/>
        </clipPath>
        </defs>
        </svg>
    `;
    setTimeout(()=>{
        item.innerHTML = lastSvg;
    }, 500);
}

//Переотправка сообщения
function refreshCommandBtn(item){
    let lastSvg = item.innerHTML,
        textItem = item.parentElement.parentElement.querySelector('.msg-text').innerText;
    document.querySelector('.msger-input').innerHTML = textItem;
    document.querySelector('.msger-send-btn').click()
}

if (document.querySelector('.settings_form')) {
    let form = document.querySelector('.settings_form');
    form.addEventListener('submit', function(e) {
        e.preventDefault()
        let key = document.querySelector("input[name='_token']").value
        let params = {
            'model_id': form.querySelector('select[name="model_id"]').value,
            'user_id': form.querySelector('input[name="user_id"]').value,
            'max_tokens': form.querySelector('input[name="max_tokens"]').value,
            'temperature': form.querySelector('input[name="temperature"]').value,
            'frequency': form.querySelector('input[name="frequency"]').value,
            'top_p': form.querySelector('input[name="top_p"]').value,
            'presence': form.querySelector('input[name="presence"]').value
        }
        fetch('/settings/store', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
    })
}

//Функция блокирования всего

function blockAll(status){
    let chats = document.querySelectorAll('div.tablink.addChatIcon'),
    folders = document.querySelectorAll('div.folderBtn'),
    roleSidebar = document.querySelector('.sidebarMain.right'),
    statusClass = "disabled",
    settingsMob = document.getElementById('settingsMob'),
    chatsMob = document.getElementById('openChats');

    if(status == true){
        chats.forEach((item)=>{
            item.classList.add(statusClass);
        });

        folders.forEach((item)=>{
            item.classList.add(statusClass);
        });

        roleSidebar.classList.add(statusClass);

        //Моб версия
        settingsMob.classList.add(statusClass);
        chatsMob.classList.add(statusClass);
    }else{
        chats.forEach((item)=>{
            item.classList.remove(statusClass);
        });

        folders.forEach((item)=>{
            item.classList.remove(statusClass);
        });

        roleSidebar.classList.remove(statusClass);

        //Моб версия
        settingsMob.classList.remove(statusClass);
        chatsMob.classList.remove(statusClass);
    }
}

//Функция копирования кода

function copyToClipboard(item){
    let text = item.parentElement.parentElement.querySelector('code');
    copyCommand(text);
    let lastSvg = item.innerHTML;
    item.innerHTML = `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M22 11.1V6.9C22 3.4 20.6 2 17.1 2H12.9C9.4 2 8 3.4 8 6.9V8H11.1C14.6 8 16 9.4 16 12.9V16H17.1C20.6 16 22 14.6 22 11.1Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 17.1V12.9C16 9.4 14.6 8 11.1 8H6.9C3.4 8 2 9.4 2 12.9V17.1C2 20.6 3.4 22 6.9 22H11.1C14.6 22 16 20.6 16 17.1Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.08008 14.9998L8.03008 16.9498L11.9201 13.0498" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>`
    setTimeout(()=>{
        item.innerHTML = lastSvg;
    }, 1000)
}
let stream;

function sendMsg(msg) {
    msgerSendBtn.disabled = true
    let key = document.querySelector('input[name=_token]').value;
    let user_id = document.querySelector("#user_id").value;
    let newDiv = document.createElement('div');
    newDiv.innerHTML = msg;
    let messagetext = String(newDiv.innerText).replace(/(?:\r\n|\r|\n)/g, '').trim();
    let params = {
        chat_id: document.querySelector('#chat_id').value,
        message: String(newDiv.innerText).replace(/(?:\r\n|\r|\n)/g, '').trim(),
    }
    const res = fetch('/sendMessage', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
        .then(
            response => response.json(),
        )
        .then(data => {
            let uuid = uuidv4()
            appendMessage(BOT_NAME, BOT_IMG, "left", "", uuid);
            stream = new EventSource(`/event-stream/${data}`);
            const div = document.getElementById(uuid);
            var isPaused = false;
            var scrollable = true;
            var loader = document.getElementById('loaderResponse');
            loader.classList.add('showed');
            let text = "",
            mdBuffer = "",
            html = "",
            msgerChatContainer = document.querySelector('main.msger-chat');
            showdownConverter = window.markdownit({
                html: true,
                linkify: true,
            });
            blockAll(true);
            //Кнопка остановки генерации ответа от гпт
            document.getElementById('responseStop').onclick = () =>{
                msgerSendBtn.disabled = false
                isPaused = true;
                params = {
                    'id': document.querySelector('#chat_id').value,
                    'txt': document.getElementById(uuid).innerHTML
                }
                fetch('/messages', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
                loader.classList.remove('showed');
                $("main.msger-chat").scrollTop($("main.msger-chat")[0].scrollHeight);
                fetch(`/message/getCostMessage/${data}`)
                $('.tokens').load("/get_tokens");
                $('.tokensSpent').load(`/messages-cost/get/${data}`);
                blockAll(false);
                stream.close();
            }
            stream.onmessage = function (e) {
                if (e.data == "[DONE]") {
                    stream.close();
                    msgerSendBtn.disabled = false
                    $('.tokens').load("/get_tokens");
                    $('.tokensSpent').load(`/messages-cost/get/${data}`);
                    isPaused = true;
                    params = {
                        'id': document.querySelector('#chat_id').value,
                        'txt': document.getElementById(uuid).innerHTML
                    }
                    fetch('/messages', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
                    loader.classList.remove('showed');
                    blockAll(false);
                    $("main.msger-chat").scrollTop($("main.msger-chat")[0].scrollHeight);
                } else {
                    text = JSON.parse(e.data).choices[0].delta.content;
                    if (text !== undefined) {
                        mdBuffer += text;
                        html = showdownConverter.render(mdBuffer);
                        div.innerHTML = html;

                        if(div.querySelector('.msg-text pre code')){
                            let el = div.querySelectorAll('.msg-text pre code');
                            el.forEach(function(item){
                                hljs.highlightElement(item);
                                item.parentElement.className = 'after-code';
                                let lastLang = String(item.className).replace('language-', ''),
                                lang = lastLang.replace('hljs', '');
                                lastIndex = lang.lastIndexOf("-"),
                                lastWord = lang.substring(lastIndex + 1);
                                if(lastWord === "undefined"){
                                    lastWord = 'text';
                                }
                                let blockInfo = document.createElement('div');
                                blockInfo.className = "block-info";
                                blockInfo.innerHTML = `<span>${lastWord}</span><button class="copy-code" onclick="copyToClipboard(this);"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 12.9V17.1C16 20.6 14.6 22 11.1 22H6.9C3.4 22 2 20.6 2 17.1V12.9C2 9.4 3.4 8 6.9 8H11.1C14.6 8 16 9.4 16 12.9Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M22 6.9V11.1C22 14.6 20.6 16 17.1 16H16V12.9C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2H17.1C20.6 2 22 3.4 22 6.9Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>`;
                                item.parentElement.insertBefore(blockInfo, item);
                            });
                        }

                        if(SafariBrowser == false){
                            msgerChatContainer.addEventListener('scroll', function(){
                                if (msgerChatContainer.scrollTop + msgerChatContainer.clientHeight === msgerChatContainer.scrollHeight) {
                                    scrollable = true;
                                }else{
                                    scrollable = false;
                                }
                            });
    
                            if(scrollable == true){
                                $("main.msger-chat").scrollTop($("main.msger-chat")[0].scrollHeight);
                            }
                        }
                        
                    }
                }
            };
            stream.onerror = function (e) {
                params = {
                    'id': document.querySelector('#chat_id').value,
                    'txt': document.getElementById(uuid).innerHTML
                }
                fetch('/messages', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
                fetch(`/message/getCostMessage/${data}`)
                loader.classList.remove('showed');
                blockAll(false);
                document.getElementById('loaderResponseError').classList.add('showed');
                setTimeout(() => {
                    document.getElementById('loaderResponseError').classList.remove('showed');
                }, 2500);
                stream.close();
            }
        })
        .catch(error => console.error(error));
}

// Utils
function get(selector, root = document) {
    return root.querySelector(selector);
}

function formatDate(date) {
    const h = "0" + date.getHours();
    const m = "0" + date.getMinutes();

    return `${h.slice(-2)}:${m.slice(-2)}`;
}

function random(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function uuidv4() {
    return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, c =>
        (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
    );
}

function deleteAllCookies() {
    const cookies = document.cookie.split(";");

    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const eqPos = cookie.indexOf("=");
        const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}

//попап оплаты
function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}
function countTokens(){
    let priceAll = document.querySelector('.finalPrice span'),
    priceLocale = document.querySelector('.finalPrice'),
    summLoc = 1;
    priceAll.textContent = document.querySelector('input#priceStealer').value;
    if(priceLocale.classList.contains('eng')){
        summLoc = 62.5;
    }
    //Токены
    document.querySelector(".howMuchTokens").textContent = numberWithSpaces(Math.round((document.querySelector('input#priceStealer').value / 0.69) * summLoc)*1000);
    //Слова
    document.querySelector(".words span").textContent = numberWithSpaces(Math.round((document.querySelector('input#priceStealer').value / 0.69) * summLoc)*750);
    //Страницы
    document.querySelector(".papers span").textContent = numberWithSpaces(Math.floor((((document.querySelector('input#priceStealer').value / 0.69) * summLoc)*1000) / 1800));
}


document.querySelector('input#priceStealer').oninput = countTokens;

//Папки - открытие и закрытие
function openFolder() {
    $('div.folderBtn .buttonOpen').click(function (evt) {
        if (evt.currentTarget === evt.target) {
            if (!evt.currentTarget.parentElement.classList.contains('opened')) {
                $('div.folderBtn').each(function () {
                    this.classList.remove('opened')
                })
                if (evt.currentTarget === evt.target || evt.target.classList.contains('folderName')) {
                    this.parentElement.classList.toggle('opened');
                }
            } else {
                this.parentElement.classList.remove('opened');
            }
        }
    });
}
openFolder();


//Переименовывание чата

let renameChats = document.querySelectorAll('.tablink button.renameChat'),
renameChatNo = document.querySelectorAll('.tablink button.renameChatNo');

function renameChat(item){
    let input = item.parentElement.parentElement.parentElement.querySelector('#renameChatInput');
    let nameChat = item.parentElement.parentElement.parentElement.querySelector('p');
    let hoverItems = item.parentElement.parentElement;
    let confirmRename = item.parentElement.parentElement.querySelector('.confirmRename');
    let btnDelete = item.parentElement.parentElement.querySelector('button.deleteChat');
    if(hoverItems.classList.contains('active')){
        hoverItems.classList.remove('active');
        input.classList.add('nonActive');
        confirmRename.classList.add('nonActive');
        item.classList.remove('nonActive');
        if (btnDelete) btnDelete.classList.remove('nonActive');
        nameChat.classList.remove('nonActive');
    }else{
        document.querySelectorAll('.addChatIcon .confirmRename').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('form.chat__update-form #renameChatInput').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('.addChatIcon p.chat__name').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems button.deleteChat').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems button.renameChat').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.addChatIcon .hoverItems').forEach(item=>item.classList.remove('active'));
        hoverItems.classList.add('active');
        input.classList.remove('nonActive');
        confirmRename.classList.remove('nonActive');
        item.classList.add('nonActive');

        if (btnDelete) btnDelete.classList.add('nonActive');
        input.value = nameChat.innerHTML;
        nameChat.classList.add('nonActive');
    }
}

for(let i =0; i < renameChats.length;i++){
    renameChats[i].onclick = () =>{
        renameChat(renameChats[i]);
    }
    renameChatNo[i].onclick = () =>{
        renameChat(renameChats[i]);
    }
}

//Удаление чата
function deleteChat(item){
    if(item.parentElement.parentElement.querySelector('.renameChat').classList.contains('nonActive')){
        document.querySelectorAll('.addChatIcon .confirmRename').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('form.chat__update-form #renameChatInput').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('.addChatIcon p.chat__name').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems button.deleteChat').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems button.renameChat').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.addChatIcon .hoverItems').forEach(item=>item.classList.remove('active'));
        item.parentElement.parentElement.querySelector('.renameChat').classList.remove('nonActive');
        item.parentElement.parentElement.querySelector('.confirmDelete').classList.add('nonActive');
        item.parentElement.parentElement.querySelector('.hoverItems').classList.remove('active');
        item.classList.remove('nonActive');
    }else{
        item.parentElement.parentElement.querySelector('.renameChat').classList.add('nonActive');
        item.parentElement.parentElement.querySelector('.confirmDelete').classList.remove('nonActive');
        item.parentElement.parentElement.querySelector('.hoverItems').classList.add('active');
        item.classList.add('nonActive');
    }
}
function initDelete() {
    let deleteChatBtns = document.querySelectorAll('.tablink button.deleteChat'),
        deleteChatNo = document.querySelectorAll('.tablink button.deleteChatNo');
    for(let i = 0; i < deleteChatBtns.length;i++){
        deleteChatBtns[i].onclick = () =>{
            deleteChat(deleteChatBtns[i]);
        }
    }

    for(let i = 0; i < deleteChatNo.length;i++){
        deleteChatNo[i].onclick = () =>{
            deleteChat(deleteChatNo[i].parentElement.parentElement.parentElement.querySelector('.deleteChat'));
        }
    }
}
initDelete()

$("#telegram").on('submit', function(e) {
    let form = $(this)
    e.preventDefault();
    $.ajax({
        type: "POST",    // Метод отправки данных (POST, GET и т.д.)
        url: form.attr('action'),     // URL-адрес, куда отправляются данные формы
        data: form.serialize(),      // Сериализуем данные формы в строку
        success: function(response) { // Callback-функция, которая вызывается при успешной отправке формы
            console.log(response);      // Выводим в консоль ответ сервера
            // Здесь можно выполнить дополнительные действия после успешной отправки формы
        },
        error: function(xhr, ajaxOptions, thrownError) { // Callback-функция, которая вызывается при ошибке отправки формы
            console.log(xhr.status);    // Выводим в консоль код ошибки
            console.log(thrownError);   // Выводим в консоль сообщение об ошибке
            // Здесь можно выполнить дополнительные действия при ошибке отправки формы
        }
    });
    $('#popup-zapic').removeClass('active');
})

//Копирование подсказок
let copyPromptBtns = document.querySelectorAll('button.promptBtn');

copyPromptBtns.forEach((item)=>{
    item.onclick = () =>{
        var textArea = document.querySelector('textarea.msger-input');
        textArea.value = String(item.querySelector('.promptText').innerText).trim();
    }
})

//Мобильные кнопки
//Открытие чатов
let tokensLeftBtn = document.querySelectorAll("#tokensLeft");
function disableAllPops(){
    let popups = document.querySelectorAll('.popup');
    let sidebar = document.querySelectorAll('.sidebarMain');
    if(document.getElementById('openMenu').classList.contains('active')){
        document.getElementById('openMenu').classList.remove('active');
    }
    if(document.getElementById('openChats').classList.contains('active')){
        document.getElementById('openChats').classList.remove('active');
    }
    if(document.querySelector('.sidebarMain.right').classList.contains('opened')){
        document.querySelector('.sidebarMain.right').classList.remove('opened');
    }
    tokensLeftBtn.forEach((item)=>{
        if(item.classList.contains('active')){
            item.classList.remove('active');
        }
    })
    popups.forEach((item)=>{
        item.classList.remove('active');
    })
    sidebar.forEach((item)=>{
        item.classList.remove('active');
    })
}


//Открытие чатов
document.getElementById('openChats').onclick = () =>{
    if(document.querySelector('.sidebarMain.left').classList.contains('active')){
        document.getElementById('openChats').classList.remove('active');
        document.querySelector('.sidebarMain.left').classList.remove('active');
    }else{
        disableAllPops();
        document.getElementById('openChats').classList.add('active');
        document.querySelector('.sidebarMain.left').classList.add('active');
    }
}
//Открытие меню
document.getElementById('openMenu').onclick = () =>{
    if(document.getElementById('openMenu').classList.contains('active')){
        document.getElementById('menu-mob').classList.remove('active');
        document.getElementById('openMenu').classList.remove('active');
    }else{
        disableAllPops();
        document.getElementById('menu-mob').classList.add('active');
        document.getElementById('openMenu').classList.add('active');
    }
}

//Закрытие / открытие попапа оплаты

tokensLeftBtn.forEach((item)=>{
    item.onclick = () =>{
        if(item.classList.contains('active')){
            item.classList.remove('active');
            document.getElementById('pay-popup').classList.remove('active');
        }else{
            disableAllPops();
            item.classList.add('active');
            document.querySelector('#pay-popup').classList.add('active');
        }
    }
});

//Функции для папо

function renameFolder(item){
    let input = item.parentElement.parentElement.parentElement.parentElement.querySelector('#renameFolderInput'),folderText = item.parentElement.parentElement.parentElement.parentElement.querySelector('p'),hoverItems = item.parentElement.parentElement.parentElement.parentElement.querySelector('.hoverItems'),buttonDelete = item.parentElement.parentElement.parentElement.parentElement.querySelector('#deleteFolderBtn'),buttonRename = item.parentElement.parentElement.parentElement.parentElement.querySelector('#renameFolderBtn'),confirmRename = item.parentElement.parentElement.parentElement.parentElement.querySelector('.renameFolderConfirm');
    if(input.classList.contains('nonActive')){
        document.querySelectorAll('.renameFolderConfirm').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('form.chat__update-form #renameFolderInput').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('.buttonOpen p.folderName').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems-folder #deleteFolderBtn').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems-folder #renameFolderBtn').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems.folder').forEach(item=>item.classList.remove('showed'));
        buttonDelete.classList.add('nonActive');
        buttonRename.classList.add('nonActive');
        hoverItems.classList.add('showed');
        input.classList.remove('nonActive');
        folderText.classList.add('nonActive');
        confirmRename.classList.remove('nonActive');
        input.value = folderText.innerText;
    }else{
        buttonDelete.classList.remove('nonActive');
        buttonRename.classList.remove('nonActive');
        hoverItems.classList.remove('showed');
        input.classList.add('nonActive');
        folderText.classList.remove('nonActive');
        confirmRename.classList.add('nonActive');
        input.value = folderText.innerText;
    }
}

function deleteFolder(item){
    let confirmDelete = item.parentElement.parentElement.parentElement.parentElement.querySelector('.deleteFolderConfirm'),
    buttonDelete = item.parentElement.parentElement.parentElement.parentElement.querySelector('#deleteFolderBtn'),
    buttonRename = item.parentElement.parentElement.parentElement.parentElement.querySelector('#renameFolderBtn'),
    hoverItems = item.parentElement.parentElement.parentElement.parentElement.querySelector('.hoverItems');
    if(confirmDelete.classList.contains('nonActive')){
        document.querySelectorAll('.deleteFolderConfirm').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('form.chat__update-form #renameFolderInput').forEach((item)=>item.classList.add('nonActive'));
        document.querySelectorAll('.buttonOpen p.folderName').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems-folder #deleteFolderBtn').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems-folder #renameFolderBtn').forEach(item=>item.classList.remove('nonActive'));
        document.querySelectorAll('.hoverItems.folder').forEach(item=>item.classList.remove('showed'));
        buttonDelete.classList.add('nonActive');
        buttonRename.classList.add('nonActive');
        confirmDelete.classList.remove('nonActive');
        hoverItems.classList.add('showed');
    }else{
        buttonDelete.classList.remove('nonActive');
        buttonRename.classList.remove('nonActive');
        confirmDelete.classList.add('nonActive');
        hoverItems.classList.remove('showed');
    }
}

//Функции в сообщениях
let copyMessagesBtns = document.querySelectorAll('.msg-options button#btnCopyMessage'),
btnsRefreshMessage = document.querySelectorAll('.msg-options button#btnRefreshMessage');

copyMessagesBtns.forEach((item)=>{
    item.onclick = () =>{
        let lastSvg = item.innerHTML;
        item.innerHTML = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_8_718)">
            <path d="M19.9499 5.53642L16.4639 2.05042C15.8155 1.3985 15.0442 0.881645 14.1947 0.529765C13.3452 0.177884 12.4344 -0.00203383 11.5149 0.000421525H6.99988C5.67428 0.00200938 4.40344 0.529304 3.4661 1.46664C2.52876 2.40398 2.00147 3.67483 1.99988 5.00042V19.0004C2.00147 20.326 2.52876 21.5969 3.4661 22.5342C4.40344 23.4715 5.67428 23.9988 6.99988 24.0004H16.9999C18.3255 23.9988 19.5963 23.4715 20.5337 22.5342C21.471 21.5969 21.9983 20.326 21.9999 19.0004V10.4854C22.0023 9.56594 21.8224 8.6551 21.4705 7.80561C21.1187 6.95612 20.6018 6.18485 19.9499 5.53642ZM18.5359 6.95042C18.8409 7.26483 19.1035 7.61783 19.3169 8.00042H14.9999C14.7347 8.00042 14.4803 7.89507 14.2928 7.70753C14.1052 7.51999 13.9999 7.26564 13.9999 7.00042V2.68342C14.3825 2.89681 14.7355 3.15937 15.0499 3.46442L18.5359 6.95042ZM19.9999 19.0004C19.9999 19.7961 19.6838 20.5591 19.1212 21.1217C18.5586 21.6844 17.7955 22.0004 16.9999 22.0004H6.99988C6.20423 22.0004 5.44117 21.6844 4.87856 21.1217C4.31595 20.5591 3.99988 19.7961 3.99988 19.0004V5.00042C3.99988 4.20477 4.31595 3.44171 4.87856 2.8791C5.44117 2.31649 6.20423 2.00042 6.99988 2.00042H11.5149C11.6799 2.00042 11.8379 2.03242 11.9999 2.04742V7.00042C11.9999 7.79607 12.3159 8.55913 12.8786 9.12174C13.4412 9.68435 14.2042 10.0004 14.9999 10.0004H19.9529C19.9679 10.1624 19.9999 10.3204 19.9999 10.4854V19.0004ZM16.7239 13.3114C16.9065 13.5035 17.0054 13.7602 16.9988 14.0252C16.9922 14.2901 16.8808 14.5416 16.6889 14.7244L13.0999 18.1384C12.5357 18.6937 11.775 19.0035 10.9834 19.0003C10.1918 18.9971 9.43355 18.6812 8.87388 18.1214L7.33388 16.7474C7.13576 16.5708 7.01593 16.3227 7.00074 16.0577C6.99321 15.9265 7.01161 15.7951 7.05487 15.671C7.09814 15.5469 7.16542 15.4325 7.25288 15.3344C7.34034 15.2363 7.44626 15.1564 7.56461 15.0993C7.68295 15.0421 7.81139 15.0088 7.9426 15.0013C8.20759 14.9861 8.46776 15.0768 8.66588 15.2534L10.2509 16.6674C10.3416 16.7693 10.4522 16.8516 10.576 16.9091C10.6997 16.9667 10.8338 16.9983 10.9702 17.002C11.1066 17.0058 11.2423 16.9816 11.369 16.9309C11.4957 16.8802 11.6107 16.8042 11.7069 16.7074L15.3069 13.2764C15.4021 13.1854 15.5143 13.1141 15.6371 13.0666C15.76 13.019 15.891 12.9963 16.0226 12.9995C16.1543 13.0028 16.284 13.032 16.4044 13.0855C16.5247 13.139 16.6333 13.2158 16.7239 13.3114Z" fill="#374957"/>
            </g>
            <defs>
            <clipPath id="clip0_8_718">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
            </defs>
            </svg>
        `;
        setTimeout(()=>{
            item.innerHTML = lastSvg;
        }, 500);
    }
})

//Функция закрытия попапа при клике вне контейнера
function closePopContainer(popid, containerid){
    $(document).mouseup(function (e) {
        var container = $(`${containerid}`);
        if (popid != "popup-midj" && container.has(e.target).length === 0){
            document.getElementById(`${popid}`).classList.remove('active');
            if(popid === 'pay-popup'){
                tokensLeftBtn.forEach((item)=>{
                    item.classList.remove('active');
                });
                document.getElementById('popup-library').classList.remove('active');
            }
            if(popid == 'popup-develop'){
                if(document.getElementById('popup-zapic').classList.contains('active') || document.getElementById('popup-zapic2').classList.contains('active')){
                    return;
                }
            }
        }
    });
}
//Открытие попапа профиля
document.querySelectorAll('button#about-user').forEach((item)=>{
    item.onclick = () =>{
        document.getElementById('profile-popup').classList.add('active');
        closePopContainer('profile-popup', '#profile-popup .popupContent');
    }
})

//Откытие попапа о проекте
document.querySelectorAll('a#aboutProject').forEach((item)=>{
    item.onclick = () =>{
        document.getElementById('about-popup').classList.add('active');
        closePopContainer('about-popup', '#about-popup .popupContent');
    }
});

//Открытие попапа Миджорни
document.querySelectorAll('a#chat-with-mdjrny').forEach((item)=>{
    item.onclick = () =>{
        document.getElementById('popup-midj').classList.add('active');
    }
});

//Открытие попапа в разработке
document.querySelectorAll('a#chat-with-base').forEach((item)=>{
    item.onclick = () =>{
        document.getElementById('popup-develop').classList.add('active');
    }    
})
//Функция скролла вниз

$('#scrollBottomBtn').onclick = () =>{
    $("main.msger-chat").scrollTop($("main.msger-chat")[0].scrollHeight);
}

//Auto height textarea

function pxToVw(px){
    let formula = 100 * px / window.innerWidth;
    return formula;
}

function autoResize(item) {
    if(window.innerWidth > 1000){
        item.style.height = 1 + "vw";
        item.style.height = pxToVw(item.scrollHeight) + "vw";
        if(pxToVw(item.scrollHeight) >= 40){
            item.classList.add('scroll-on');
        }else{
            item.classList.remove('scroll-on')
        }
    }
    else{
        item.style.height = 88 + "px";
        item.style.height = item.scrollHeight + "px";
        if(item.scrollHeight >= 250){
            item.classList.add('scroll-on');
        }else{
            item.classList.remove('scroll-on')
        }
    }

    if(document.querySelector('#mainHeader #tokensLeft span.tokens').innerText <= 0){
        document.getElementById('pay-popup').classList.add('active');
        if(window.innerWidth < 1000){
            document.querySelector('#mobileHeader #tokensLeft').classList.add('active');
        }else{
            document.querySelector('#mainHeader #tokensLeft').classList.add('active');
        }
    }
}

//Открытие попапа

function openPopUpZayavka(item){
    document.getElementById('popup-zapic2').classList.add('active');
    closePopContainer('popup-zapic2', '#popup-zapic2 .popupContent');
}

function openPopUpZayavka2(item){
    document.getElementById('popup-zapic').classList.add('active');
    closePopContainer('popup-zapic', '#popup-zapic .popupContent');
}

function openPopUpZayavka3(item){
    document.getElementById('popup-zapic3').classList.add('active');
    closePopContainer('popup-zapic3', '#popup-zapic3 .popupContent');
}

//Смена языка
document.querySelectorAll('button#switchLang').forEach((item) => {
    item.onclick = () =>{
        item.parentElement.classList.toggle('active');
    }
});

//Кнопка скрытия меню
function useSidebar() {
    let count = 0;
    if (!document.querySelector('.sidebarMain.right').classList.contains('switched')) {
        count = 1;
    }
    document.querySelector('.sidebarMain.right').classList.toggle('switched');
    document.querySelector('.mainWrapper').classList.toggle('switchedSidebar');
    fetch(`/settings/sidebarChange?show_sidebar=${count}`)
}

window.addEventListener('resize', function(){
    if(window.innerWidth < 1000){
        document.querySelector('.mainWrapper').classList.remove('switchedSidebar');
    }
    else if(window.innerWidth > 1000 && document.querySelector('#menu-mob').classList.contains('active')){
        document.querySelector('#menu-mob').classList.remove('active');
        document.getElementById('openMenu').classList.remove('active');
    }
    else if(window.innerWidth < 1000 && document.querySelector('.sidebarMain.right').classList.contains('switched')){
        document.querySelector('.mainWrapper').classList.add('switchedSidebar');
    }
    else if(window.innerWidth > 1000 && document.querySelector('.sidebarMain.right').classList.contains('switched')){
        document.querySelector('.mainWrapper').classList.add('switchedSidebar');
    }
});

document.addEventListener('DOMContentLoaded', function(){
    countTokens();
    if(window.innerWidth < 1000){
        document.querySelector('.mainWrapper').classList.remove('switchedSidebar');
        document.querySelector('.sidebarMain.right').classList.remove('switched');
    }
})

document.getElementById('popupPayBtnProf').onclick = () =>{
    document.getElementById('pay-popup').classList.add('active');
    document.getElementById('profile-popup').classList.remove('active');

    if(window.innerWidth <= 1000){
        document.querySelector('#mobileHeader #tokensLeft').classList.add('active');
    }

}

if(document.getElementById('closeSettingsMob')){
    document.getElementById('closeSettingsMob').onclick = () =>{
        document.querySelector('.sidebarMain.right').classList.remove('opened');
    }
}

if(document.getElementById('popupPayEng')){
    document.getElementById('popupPayEng').onclick = () =>{
        let tokensPay = document.querySelector('#pay-popup div.howMuchTokens').innerHTML,
        summPay = document.querySelector('#pay-popup .finalPrice').innerText.trim();
        document.getElementById('popup-zapic4').classList.add('active');
        document.querySelector('#popup-zapic4 input#tokensPayEng').value = tokensPay.trim();
        document.querySelector('#popup-zapic4 #summForPayEng').value = summPay;

        console.log(document.querySelector('#popup-zapic4 input#tokensPayEng').value)
    }
}