/* Register the validate function for the form submit event */
let form = document.getElementById("accountForm");
//form.onsubmit= validate;

//make all error messages invisible
function clearErrors(){
    let errors = document.getElementsByClassName("text-danger");
    for (let i=0; i<errors.length; i++){
        errors[i].classList.add("d-none");
    }
}

function validate() {

    clearErrors();

    let isValid = true;

    // error check first name
    let fname = document.getElementById("fname").value;
    if (fname === "") {
        let errFname = document.getElementById("err-fname");
        errFname.classList.remove("d-none");
        isValid = false;
    }

    // error check last name
    let lname = document.getElementById("lname").value;
    if (lname === "") {
        let errLname = document.getElementById("err-lname");
        errLname.classList.remove("d-none");
        isValid = false;
    }

    //validate linkedIn
    let linkedIn = document.getElementById("linkedIn").value;
    if (linkedIn !== "") {
        if (!linkedIn.startsWith("http")) {
            let errLinkedIn = document.getElementById("err-linkedIn");
            errLinkedIn.classList.remove("d-none");
            isValid = false;
        } else if (!linkedIn.includes(".com")) {
            let errLinkedIn2 = document.getElementById("err-linkedIn2");
            errLinkedIn2.classList.remove("d-none");
            isValid = false;
        }
    }

    //validate email
    let email = document.getElementById("email").value;
    if (email != "") {
      if (!email.includes(".")) {
            let errEmail2 = document.getElementById("err-email2");
            //alert("First name is required");
            errEmail2.classList.remove("d-none");
            isValid = false; //stay on the page
        }
    }

    //validate how we met
    let howWeMet = document.getElementById("met").value;
    if(howWeMet === "0"){
        let errMet = document.getElementById("err-met");
        errMet.classList.remove("d-none");
        isValid = false; //stay on the page
    }

    return isValid;
}

document.getElementById("mailingList").onclick = showEmailButtons;
// show email format buttons
function showEmailButtons(){
    let mailingList = document.getElementById("mailingList");
    let emailFormat = document.getElementById("emailSection");

    if(mailingList.checked === true){
        emailFormat.classList.remove("d-none");
    }else{
        emailFormat.classList.add("d-none");
    }

}

//show other section only if other is chosen on dropdown
document.getElementById("met").onclick = showOtherBox;
function showOtherBox(){
    let howWeMet = document.getElementById("met").value;
    let commentSection = document.getElementById("otherContext");
    if(howWeMet === "5"){
        commentSection.classList.remove("d-none");
    }else{
        commentSection.classList.add("d-none");
    }
}