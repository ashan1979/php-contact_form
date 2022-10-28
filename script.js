// lets get all required elements

const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=> {
    e.preventDefault(); //preveinting form form submitting
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); //creating new xml Object.
    xhr.open("POST", "message.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState == 4)
    }
    xhr.send();
}