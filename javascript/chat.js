const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox=document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault(); // preventing form from submitting
    
}

sendBtn.onclick=()=>{
    // Let's start Ajax
    let xhr = new XMLHttpRequest(); // Creating XML object
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                inputField.value = ""; // once message inserted into the database then leave the input field blank
            }
        }
    }
    // We have to send the form data through Ajax to php
    let formData = new FormData(form); // Creating new formData Object
    xhr.send(formData); // Sending the form data to php
}

setInterval(() => {
    // Let's start Ajax
    let xhr = new XMLHttpRequest(); // Creating XML object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                chatBox.innerHTML=data;
            }
        }
    }
    // We have to send the form data through Ajax to php
    let formData = new FormData(form); // Creating new formData Object
    xhr.send(formData); // Sending the form data to php
}, 500); // This function will run frequently after 500ms