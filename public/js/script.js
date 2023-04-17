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
const BOT_IMG = "../assets/botlogo.svg";
const BOT_NAME = "Meta GPT";
const PERSON_NAME = "User";

function sendMessage(event){
    event.preventDefault();
    const msgText = msgerInput.value;
    if (!msgText) return;
    appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
    sendMsg(msgText)
    msgerInput.value = "";
}

msgerForm.addEventListener("submit", event => {
    sendMessage(event);
});

msgerForm.addEventListener('keydown', event => {
    if(event.keyCode == 13){
        sendMessage(event)
    }
})

function appendMessage(name, img, side, text, id) {
    //   Simple solution for small apps
    const msgHTML = `
    <div class="msg ${side}-msg">
        <div class="msg-header">
            <div class="msg-img" style="background-image: url(${img})"></div>
            <div class="msg-info-name">${name}</div>
            <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>
      <div class="msg-bubble">
        <div class="msg-text" id=${id}>${text}</div>
      </div>
    </div>
  `;

    msgerChat.insertAdjacentHTML("beforeend", msgHTML);
    msgerChat.scrollTop += 500;
}
if (document.querySelectorAll('.ajax_form')) {
    document.querySelectorAll('.ajax_form').forEach(item => {
        item.addEventListener('submit', event => {
            event.preventDefault()
            fetch(item.action, {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": item.querySelector('input[name=_token]').value}, method: 'POST', body: $(item).serialize()})
        })
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

    fetch('/sendMessage', {headers: {'Content-Type': 'application/json;charset=utf-8', "X-CSRF-Token": key}, method: 'POST', body: JSON.stringify(params)})
        .then(response => response.json())
        .then(data => {
            let uuid = uuidv4()
            fetch(`/event-stream/${data}?msg=${msg}`, {headers: {'Content-Type': 'charset=utf-8'}})
                .then(response => response.text())
                .then(response => {
                    msgerSendBtn.disabled = false;
                    appendMessage(BOT_NAME, BOT_IMG, "left", response, uuid);
                    $('.tokens_chat').load(`/messages-cost/get/${data}`);
                })
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

//Folder button

//Открытие попапа настроек

document.getElementById('settings').onclick = () =>{
    if(document.getElementById('settings').classList.contains('active')){
        document.getElementById('settings').classList.remove('active');
        document.getElementById('settingsTab').classList.remove('active');
    }else{
        document.getElementById('settings').classList.add('active');
        document.getElementById('settingsTab').classList.add('active');
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


//Закрытие попапа оплаты

document.querySelector('.closeBtnBuy button').onclick = () =>{
    document.querySelector('#pay-popup').classList.remove('active');
}

document.getElementById('tokensLeft').onclick = () =>{
    document.querySelector('#pay-popup').classList.add('active');
}

//Папки - открытие и закрытие

let foldersBtn = document.querySelectorAll('div.folderBtn');

foldersBtn.forEach((item)=>{
    item.onclick = () =>{
        item.parentElement.querySelector('.folderBtn').classList.toggle('opened');
    }
})
