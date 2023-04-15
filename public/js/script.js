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
<<<<<<< HEAD
const PERSON_IMG = "https://api.dicebear.com/5.x/micah/svg?seed=" + document.getElementById("id").value
const BOT_NAME = "ChatGPT";
const PERSON_NAME = "You";

msgerForm.addEventListener("submit", event => {
    event.preventDefault();
    const msgText = msgerInput.value;
    if (!msgText) return;

    appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
    sendMsg(msgText)
    msgerInput.value = "";
});

function appendMessage(name, img, side, text, id) {
    //   Simple solution for small apps
    const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>
      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

=======
const BOT_IMG = "../assets/botlogo.svg";
const PERSON_IMG = "../assets/user.jpg";
const BOT_NAME = "ChatGPT";
const PERSON_NAME = "User Name";


msgerForm.addEventListener("submit", event => {
    event.preventDefault();

    const msgText = msgerInput.value;
    if (!msgText) return;

    appendMessage(PERSON_NAME, PERSON_IMG, msgText);
    msgerInput.value = "";

    sendMsg(msgText)
});

function appendMessage(name, img, text, id) {
    //   Simple solution for small apps
    const msgHTML = `
    <div class="msg">
        <div class="msg-header">
            <div class="msg-img" style="background-image: url(${img})"></div>
            <div class="msg-info-name">${name}</div>
            <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>
      <div class="msg-bubble">
>>>>>>> master
        <div class="msg-text" id=${id}>${text}</div>
      </div>
    </div>
  `;

    msgerChat.insertAdjacentHTML("beforeend", msgHTML);
    msgerChat.scrollTop += 500;
}

function sendMsg(msg) {
    msgerSendBtn.disabled = true
<<<<<<< HEAD
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
            fetch("/event-stream", {headers: {'Content-Type': 'charset=utf-8'}})
                .then(response => response.text())
                .then(response => {
                    msgerSendBtn.disabled = false;
                    appendMessage(BOT_NAME, PERSON_IMG, "left", response, uuid);
                })
        })
        .catch(error => console.error(error));

=======
    var formData = new FormData();
    fetch('/sendMessage', {headers: {_token: '{{csrf_token()}}'}, method: 'POST', body: formData})
        .then(response => response.json())
        .then(data => {
            let uuid = uuidv4()
            const eventSource = new EventSource(`/event-stream?chat_history_id=${data.id}&id=${encodeURIComponent(USER_ID)}`);
            appendMessage(BOT_NAME, BOT_IMG, "left", "", uuid);
            const div = document.getElementById(uuid);

            eventSource.onmessage = function (e) {
                if (e.data == "[DONE]") {
                    msgerSendBtn.disabled = false
                    eventSource.close();
                } else {
                    let txt = JSON.parse(e.data).choices[0].delta.content
                    if (txt !== undefined) {
                        div.innerHTML += txt.replace(/(?:\r\n|\r|\n)/g, '<br>');
                    }
                }
            };
            eventSource.onerror = function (e) {
                msgerSendBtn.disabled = false
                console.log(e);
                eventSource.close();
            };
        })
        .catch(error => console.error(error));
>>>>>>> master
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
<<<<<<< HEAD
=======

/* Системная роль */

//Copy btn system role
document.querySelector("button.copyBtn").onclick = function() {
    var copyTextarea = document.createElement("textarea");
    copyTextarea.style.position = "fixed";
    copyTextarea.style.opacity = "0";
    copyTextarea.textContent = String(document.getElementById("systemRole").textContent).trim();
    document.body.appendChild(copyTextarea);
    copyTextarea.select();
    document.execCommand("copy");
    document.body.removeChild(copyTextarea);
}

//Кнопка редактирования в системной роли
document.querySelector('.systemRole button.renameChat').onclick = () =>{
    document.querySelector('.formSystemRole').classList.remove('nonActive');
    document.querySelector('.systemRole .hoverItems').classList.add('nonActive');
    document.getElementById('systemRoleText').innerText = document.querySelector('.systemRole span').textContent;
    document.querySelector('.systemRole span').textContent = "";
}

//Кнопка отменить в системной роли
document.getElementById('dismissRole').onclick = () =>{
    document.querySelector('.formSystemRole').classList.add('nonActive');
    document.querySelector('.systemRole .hoverItems').classList.remove('nonActive');
    document.querySelector('.systemRole span').textContent = document.getElementById('systemRoleText').innerText;
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
>>>>>>> master
