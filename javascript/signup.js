const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = document.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting

}

continueBtn.onclick = ()=>{
    // Let's start Ajax
    let xhr = new XMLHttpRequest(); // Creating XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data=xhr.response;
                if(data=="success"){
                    location.href="users.php";   
                }else{
                    errorText.textContent=data;
                    errorText.style.display="block";
                }
            }
        }
    }
    // We have to send the form data through Ajax to php
    let formData = new FormData(form); // Creating new formData Object
    xhr.send(formData); // Sending the form data to php
}