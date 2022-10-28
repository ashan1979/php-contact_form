// lets get all required elements

const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=> {
    e.preventDefault(); //preveinting form form submitting
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); //creating new xml Object.
    xhr.open("POST", "message.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.response;
            if(response.indexOf("Email and Password Field is Required!") != -1 || response.indexOf("Enter a Valid Email Address") || response.indexOf("Sorry, Failed to Send Your Message!")) {
               statusTxt.style.color = "red";
            }
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData()
    xhr.send(formData);
}