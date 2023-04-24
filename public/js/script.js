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

const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");
const msgerSendBtn = get(".msger-send-btn");


// Icons made by Freepik from www.flaticon.com
const PERSON_IMG = "../assets/user.jpg";
const BOT_IMG = "../assets/botlogo.jpg";
const BOT_NAME = "Meta GPT";
const PERSON_NAME = "User";

async function sendMessage(event){
    event.preventDefault();
    const msgText = msgerInput.value;
    if (!msgText) return;
    if (document.querySelector('.welcome-chat')) document.querySelector('.welcome-chat').remove()
    await appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
    sendMsg(msgText)
    msgerInput.value = "";
}


if (msgerForm) {
    msgerForm.addEventListener("submit", event => {
        sendMessage(event);
    });

    msgerForm.addEventListener('keydown', event => {
        if(event.keyCode == 13){
            sendMessage(event)
        }
    })
}


function typeText(element, text) {
    let index = 0
    let interval = setInterval(() => {
        if (index < text.length) {
            element.innerHTML += text.charAt(index)
            index++;
        } else {
            var md = window.markdownit();
            var result = md.render(String(text));
            element.innerHTML = result;
            copyBtnPre();
            clearInterval(interval)
        }
    }, 20)
}

function renderAllMessages(){
    let messageText = document.querySelectorAll('.msger-chat .msg-text'),
    md = window.markdownit();
    messageText.forEach(function(text){
        var result = md.render(String(text.innerHTML));
        text.innerHTML = result;
        copyBtnPre();
    })
}

window.addEventListener('DOMContentLoaded', renderAllMessages);

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
    var md = window.markdownit();
    var result = md.render(String(text));
    const msgHTML = `
    <div class="msg ${side}-msg">
        <div class="msg-header">
            <div class="msg-img" style="background-image: url(${img})"></div>
            <div class="msg-info-name">${name}</div>
            <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>
      <div class="msg-bubble">
        <div class="msg-text" id=${id}></div>
      </div>
      ${side == "right" ? `<div class='msg-options'><button class="btnCopyMessage" onclick="copyCommandBtn(this)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_742)"><path d="M19.9491 5.53646L16.4651 2.05046C15.8164 1.3986 15.045 0.881789 14.1953 0.529917C13.3457 0.178046 12.4347 -0.001909 11.5151 0.000457924H7.00012C5.67453 0.00204578 4.40368 0.52934 3.46634 1.46668C2.529 2.40402 2.00171 3.67486 2.00012 5.00046V19.0005C2.00171 20.3261 2.529 21.5969 3.46634 22.5342C4.40368 23.4716 5.67453 23.9989 7.00012 24.0005H17.0001C18.3257 23.9989 19.5966 23.4716 20.5339 22.5342C21.4712 21.5969 21.9985 20.3261 22.0001 19.0005V10.4855C22.0026 9.56588 21.8226 8.65495 21.4705 7.80543C21.1185 6.95591 20.6014 6.1847 19.9491 5.53646ZM18.5351 6.95046C18.8405 7.2646 19.1031 7.61765 19.3161 8.00046H15.0001C14.7349 8.00046 14.4806 7.8951 14.293 7.70756C14.1055 7.52003 14.0001 7.26567 14.0001 7.00046V2.68446C14.3831 2.89738 14.7364 3.15962 15.0511 3.46446L18.5351 6.95046ZM20.0001 19.0005C20.0001 19.7961 19.6841 20.5592 19.1214 21.1218C18.5588 21.6844 17.7958 22.0005 17.0001 22.0005H7.00012C6.20447 22.0005 5.44141 21.6844 4.8788 21.1218C4.31619 20.5592 4.00012 19.7961 4.00012 19.0005V5.00046C4.00012 4.20481 4.31619 3.44175 4.8788 2.87914C5.44141 2.31653 6.20447 2.00046 7.00012 2.00046H11.5151C11.6791 2.00046 11.8381 2.03246 12.0001 2.04746V7.00046C12.0001 7.79611 12.3162 8.55917 12.8788 9.12178C13.4414 9.68439 14.2045 10.0005 15.0001 10.0005H19.9531C19.9681 10.1625 20.0001 10.3205 20.0001 10.4855V19.0005Z" fill="#374957"/></g><defs><clipPath id="clip0_8_742"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button></div>` : `<div class='msg-options'>
        <button class="btnRefreshMessage">
        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_17_3988)">
            <path d="M5.00009 0.833326C5.5528 0.83514 6.09967 0.946551 6.60904 1.16111C7.11841 1.37567 7.58016 1.68913 7.96759 2.08333H6.66676C6.55625 2.08333 6.45027 2.12723 6.37213 2.20537C6.29399 2.28351 6.25009 2.38949 6.25009 2.49999C6.25009 2.6105 6.29399 2.71648 6.37213 2.79462C6.45027 2.87276 6.55625 2.91666 6.66676 2.91666H8.39301C8.59818 2.91655 8.79493 2.83499 8.94001 2.68991C9.08509 2.54483 9.16665 2.34809 9.16676 2.14291V0.41666C9.16676 0.306153 9.12286 0.200172 9.04472 0.122032C8.96658 0.0438916 8.8606 -7.0852e-06 8.75009 -7.0852e-06C8.63958 -7.0852e-06 8.5336 0.0438916 8.45546 0.122032C8.37732 0.200172 8.33342 0.306153 8.33342 0.41666V1.28249C7.64475 0.662265 6.797 0.245997 5.88513 0.080305C4.97326 -0.0853869 4.03327 0.00603956 3.17042 0.344346C2.30757 0.682653 1.55593 1.25448 0.999679 1.99579C0.443427 2.73711 0.104525 3.61864 0.0209241 4.54166C0.0155421 4.59968 0.0223056 4.65819 0.0407836 4.71346C0.0592616 4.76872 0.0890489 4.81954 0.128248 4.86265C0.167446 4.90577 0.215197 4.94025 0.268457 4.9639C0.321717 4.98754 0.379318 4.99984 0.437591 4.99999C0.539502 5.00129 0.63823 4.96451 0.714448 4.89685C0.790667 4.82918 0.838888 4.73551 0.849674 4.63416C0.94243 3.59697 1.41966 2.63195 2.18762 1.92868C2.95559 1.2254 3.95876 0.834698 5.00009 0.833326Z" fill="white"/>
            <path d="M9.56298 5.00009C9.46106 4.9988 9.36234 5.03558 9.28612 5.10324C9.2099 5.17091 9.16168 5.26458 9.15089 5.36593C9.08202 6.15895 8.78711 6.91556 8.30116 7.54602C7.81522 8.17647 7.15863 8.65431 6.40929 8.92283C5.65995 9.19136 4.84931 9.2393 4.07354 9.06098C3.29777 8.88266 2.58943 8.48555 2.03256 7.91677H3.33339C3.4439 7.91677 3.54988 7.87287 3.62802 7.79473C3.70616 7.71659 3.75006 7.61061 3.75006 7.5001C3.75006 7.38959 3.70616 7.28361 3.62802 7.20547C3.54988 7.12733 3.4439 7.08343 3.33339 7.08343H1.60714C1.50552 7.08338 1.40488 7.10335 1.31098 7.14222C1.21708 7.18109 1.13176 7.23808 1.0599 7.30994C0.988037 7.3818 0.931045 7.46712 0.89218 7.56102C0.853315 7.65492 0.833338 7.75556 0.833393 7.85718V9.58344C0.833393 9.69395 0.877292 9.79993 0.955432 9.87807C1.03357 9.95621 1.13955 10.0001 1.25006 10.0001C1.36057 10.0001 1.46655 9.95621 1.54469 9.87807C1.62283 9.79993 1.66673 9.69395 1.66673 9.58344V8.7176C2.35541 9.33783 3.20315 9.7541 4.11502 9.91979C5.02689 10.0855 5.96688 9.99406 6.82973 9.65575C7.69258 9.31745 8.44422 8.74562 9.00047 8.0043C9.55672 7.26298 9.89563 6.38145 9.97923 5.45843C9.98461 5.4004 9.97784 5.3419 9.95937 5.28663C9.94089 5.23136 9.9111 5.18055 9.8719 5.13743C9.8327 5.09432 9.78495 5.05983 9.73169 5.03619C9.67843 5.01254 9.62083 5.00025 9.56256 5.00009H9.56298Z" fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_17_3988">
            <rect width="10" height="10" fill="white"/>
            </clipPath>
            </defs>
            </svg>
        </button>
        <button class="btnCopyMessage" onclick="copyCommandBtn(this)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_742)"><path d="M19.9491 5.53646L16.4651 2.05046C15.8164 1.3986 15.045 0.881789 14.1953 0.529917C13.3457 0.178046 12.4347 -0.001909 11.5151 0.000457924H7.00012C5.67453 0.00204578 4.40368 0.52934 3.46634 1.46668C2.529 2.40402 2.00171 3.67486 2.00012 5.00046V19.0005C2.00171 20.3261 2.529 21.5969 3.46634 22.5342C4.40368 23.4716 5.67453 23.9989 7.00012 24.0005H17.0001C18.3257 23.9989 19.5966 23.4716 20.5339 22.5342C21.4712 21.5969 21.9985 20.3261 22.0001 19.0005V10.4855C22.0026 9.56588 21.8226 8.65495 21.4705 7.80543C21.1185 6.95591 20.6014 6.1847 19.9491 5.53646ZM18.5351 6.95046C18.8405 7.2646 19.1031 7.61765 19.3161 8.00046H15.0001C14.7349 8.00046 14.4806 7.8951 14.293 7.70756C14.1055 7.52003 14.0001 7.26567 14.0001 7.00046V2.68446C14.3831 2.89738 14.7364 3.15962 15.0511 3.46446L18.5351 6.95046ZM20.0001 19.0005C20.0001 19.7961 19.6841 20.5592 19.1214 21.1218C18.5588 21.6844 17.7958 22.0005 17.0001 22.0005H7.00012C6.20447 22.0005 5.44141 21.6844 4.8788 21.1218C4.31619 20.5592 4.00012 19.7961 4.00012 19.0005V5.00046C4.00012 4.20481 4.31619 3.44175 4.8788 2.87914C5.44141 2.31653 6.20447 2.00046 7.00012 2.00046H11.5151C11.6791 2.00046 11.8381 2.03246 12.0001 2.04746V7.00046C12.0001 7.79611 12.3162 8.55917 12.8788 9.12178C13.4414 9.68439 14.2045 10.0005 15.0001 10.0005H19.9531C19.9681 10.1625 20.0001 10.3205 20.0001 10.4855V19.0005Z" fill="#374957"/></g><defs><clipPath id="clip0_8_742"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button>
      </div>`}
    </div>
  `;
    msgerChat.insertAdjacentHTML("beforeend", msgHTML);
    let block = document.querySelectorAll('.msg-text');
    typeText(block[block.length - 1], text);

    msgerChat.scrollTop += 500;
}

function copyCommandBtn(item){
    let lastSvg = item.innerHTML,
    textItem = item.parentElement.parentElement.querySelector('.msg-text');
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

function sendMsg(msg) {
    msgerSendBtn.disabled = true
    let key = document.querySelector('input[name=_token]').value;
    let user_id = document.querySelector("#user_id").value;
    let params = {
        chat_id: document.querySelector('#chat_id').value,
        message: msg
    }
    const res = fetch('/sendMessage', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
        .then(
            response => response.json(),
        )
        .then(data => {
            let uuid = uuidv4()
            appendMessage(BOT_NAME, BOT_IMG, "left", "", uuid);
            const stream = new EventSource(`/event-stream/${data}?message=${msg}`);
            const div = document.getElementById(uuid);
            stream.onmessage = function (e) {
                if (e.data == "[DONE]") {
                    msgerSendBtn.disabled = false
                    stream.close();
                } else {
                    let txt = JSON.parse(e.data).choices[0].delta.content
                    if (txt !== undefined) {
                        div.innerHTML += txt.replace(/(?:\r\n|\r|\n)/g, '<br>');
                    }
                }
            };
            $('.tokens').load(`/get_tokens`);
            $('.tokens_chat').load(`/messages-cost/get/${data}`);

            // fetch(`/event-stream/${data}?message=${msg}`, {headers: {'Content-Type': 'charset=utf-8'}})
            //     .then(response => {
            //         if (response.ok) {
            //             return response.text()
            //         } else {
            //             // Вот тут открывай любые попапы
            //             $('#tokensLeft').click()
            //             return Promise.reject('error 404')
            //             msgerSendBtn.disabled = false;
            //         }
            //     })
            //     .then(response => {
            //         msgerSendBtn.disabled = false;
            //         appendMessage(BOT_NAME, BOT_IMG, "left", response, uuid);
            //         $('.tokens').load(`/get_tokens`);
            //         $('.tokens_chat').load(`/messages-cost/get/${data}`);
            //     })
        })
        .catch(error => console.error(error));
}

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
      // hljs.highlightElement(el);
    });
});

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
    let priceAll = document.querySelector('.finalPrice span');
    priceAll.textContent = document.querySelector('input#priceStealer').value;
    //Токены
    document.querySelector(".howMuchTokens").textContent = numberWithSpaces(Math.round(document.querySelector('input#priceStealer').value / 0.69)*1000);
    //Слова
    document.querySelector(".words span").textContent = numberWithSpaces(Math.round(document.querySelector('input#priceStealer').value / 0.69)*750);
    //Страницы
    document.querySelector(".papers span").textContent = numberWithSpaces(Math.floor((( document.querySelector('input#priceStealer').value / 0.69)*1000) / 1800));
}

document.querySelector('input#priceStealer').oninput = countTokens;

document.querySelector('.closeBtnBuy button').onclick = () =>{
    document.querySelector('#pay-popup').classList.remove('active');
    tokensLeftBtn.forEach((item)=>{
        item.classList.remove('active');
    })
}

//Папки - открытие и закрытие

let foldersBtn = document.querySelectorAll('div.folderBtn .buttonOpen'),
folderInputBtn = document.querySelectorAll('div.folderBtn .buttonOpen input');

for(let i = 0; i < foldersBtn.length;i++){
    foldersBtn[i].onclick = () =>{
        if(folderInputBtn[i].classList.contains('nonActive')){
            foldersBtn[i].parentElement.classList.toggle('opened');
        }else{
            return false;
        }
    }
    folderInputBtn[i].onclick = () =>{
        return false;
    }
}


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
        btnDelete.classList.remove('nonActive');
        nameChat.classList.remove('nonActive');
    }else{
        hoverItems.classList.add('active');
        input.classList.remove('nonActive');
        confirmRename.classList.remove('nonActive');
        item.classList.add('nonActive');
        btnDelete.classList.add('nonActive');
        input.value = nameChat.innerHTML;
        nameChat.classList.add('nonActive');
    }
}
document.querySelectorAll('.renameChatYes').forEach(item => {
    item.addEventListener('click', function () {
        item.parentElement.parentElement.parentElement.parentElement.querySelector('#submit_rename').click()
    })
})

document.querySelectorAll('.chat__update-form').forEach(item => {
    item.addEventListener('submit', function (event) {
        // event.preventDefault();
        // let key = document.querySelector('input[name="_token"]').value
        // let params = {
        //     'title': document.querySelector('#renameChatInput').value
        // }
        // fetch(item.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'PATCH', body: JSON.stringify(params)})
    })
})

for(let i =0; i < renameChats.length;i++){
    renameChats[i].onclick = () =>{
        renameChat(renameChats[i]);
    }
    renameChatNo[i].onclick = () =>{
        renameChat(renameChats[i]);
    }
}


//Удаление чата

let deleteChatBtns = document.querySelectorAll('.tablink button.deleteChat'),
deleteChatNo = document.querySelectorAll('.tablink button.deleteChatNo');

function deleteChat(item){
    if(item.parentElement.parentElement.querySelector('.renameChat').classList.contains('nonActive')){
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

for(let i = 0; i < deleteChatBtns.length;i++){
    deleteChatBtns[i].onclick = () =>{
        deleteChat(deleteChatBtns[i]);
    }
    deleteChatNo[i].onclick = () =>{
        deleteChat(deleteChatBtns[i]);
    }
}


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
    if(document.getElementById('openSettings').classList.contains('active')){
        document.getElementById('openSettings').classList.remove('active');
    }
    if(document.getElementById('openMenu').classList.contains('active')){
        document.getElementById('openMenu').classList.remove('active');
    }
    if(document.getElementById('openChats').classList.contains('active')){
        document.getElementById('openChats').classList.remove('active');
    }
    if(document.getElementById('settings').classList.contains('active')){
        document.getElementById('settings').classList.remove('active');
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
//Открытие настроек на пк

document.getElementById('settings').onclick = () =>{
    if(document.getElementById('settings').classList.contains('active')){
        document.getElementById('settings').classList.remove('active');
        document.getElementById('settingsTab').classList.remove('active');
    }else{
        disableAllPops();
        document.getElementById('settings').classList.add('active');
        document.getElementById('settingsTab').classList.add('active');
    }
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
//Открытие настроек
document.getElementById('openSettings').onclick = () =>{
    if(document.getElementById('settingsTab').classList.contains('active')){
        document.getElementById('openSettings').classList.remove('active');
        document.getElementById('settingsTab').classList.remove('active');
    }else{
        disableAllPops();
        document.getElementById('openSettings').classList.add('active');
        document.getElementById('settingsTab').classList.add('active');
    }
}

//Закрытие / открытие попапа оплаты

tokensLeftBtn.forEach((item)=>{
    item.onclick = () =>{
        if(item.classList.contains('active')){
            item.classList.remove('active');
            document.querySelector('#pay-popup').classList.remove('active');
        }else{
            disableAllPops();
            item.classList.add('active');
            document.querySelector('#pay-popup').classList.add('active');
        }
    }
});

//Функции для папок

let folderRenameBtns = document.querySelectorAll('button#renameFolderBtn'),
folderRenameBtnsNo = document.querySelectorAll('button.renameFolderNo'),
folderDeleteBtns = document.querySelectorAll('button#deleteFolderBtn'),
folderDeleteBtnsNo = document.querySelectorAll('button.deleteFolderNo');

for(let i = 0; folderRenameBtns.length > i; i++){
    folderRenameBtns[i].onclick = () =>{
        renameFolder(folderRenameBtns[i]);
    }
    folderRenameBtnsNo[i].onclick = () =>{
        renameFolder(folderRenameBtnsNo[i]);
    }
    folderDeleteBtns[i].onclick = () =>{
        deleteFolder(folderDeleteBtns[i]);
    }
    folderDeleteBtnsNo[i].onclick = () =>{
        deleteFolder(folderDeleteBtnsNo[i]);
    }
}

function renameFolder(item){
    let input = item.parentElement.parentElement.parentElement.parentElement.querySelector('#renameFolderInput'),folderText = item.parentElement.parentElement.parentElement.parentElement.querySelector('p'),hoverItems = item.parentElement.parentElement.parentElement.parentElement.querySelector('.hoverItems'),buttonDelete = item.parentElement.parentElement.parentElement.parentElement.querySelector('#deleteFolderBtn'),buttonRename = item.parentElement.parentElement.parentElement.parentElement.querySelector('#renameFolderBtn'),confirmRename = item.parentElement.parentElement.parentElement.parentElement.querySelector('.renameFolderConfirm');
    if(input.classList.contains('nonActive')){
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

document.querySelectorAll('.removeFolderYes').forEach(item => {
    item.addEventListener('click', function () {
        item.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('.chat__update-form').submit();
    })
})

function deleteFolder(item){
    let confirmDelete = item.parentElement.parentElement.parentElement.parentElement.querySelector('.deleteFolderConfirm'),
    buttonDelete = item.parentElement.parentElement.parentElement.parentElement.querySelector('#deleteFolderBtn'),
    buttonRename = item.parentElement.parentElement.parentElement.parentElement.querySelector('#renameFolderBtn'),
    hoverItems = item.parentElement.parentElement.parentElement.parentElement.querySelector('.hoverItems');

    if(confirmDelete.classList.contains('nonActive')){
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
        console.log(item.parentElement.parentElement);
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
