const signinBtn = document.querySelector(".signinBtn");
const signupBtn = document.querySelector(".signupBtn");
const formBx = document.querySelector(".formBx");
const checkPassSignUp = document.querySelector("#checkPassSignUp");
const checkPassSignIn = document.querySelector("#checkPassSignIn");
const loginBtn = document.querySelector("#loginBtn");
const body = document.querySelector("body");



loginBtn.onclick = (e) => {
    e.preventDefault();
    let loginData = {
        username: document.querySelector("#nameSignIn").value,
        pass: document.querySelector("#passSignIn").value
    };
    document.querySelector("#nameSignIn").value = "";
    document.querySelector("#passSignIn").value = "";
    if (loginData.pass !== "" && loginData.username !== "") {

    } else {
        info_toastr("Les champs sont obligatoires.");
    }
};

signupBtn.onclick = function() {
    formBx.classList.add("active");
    body.classList.add("active");
};

signinBtn.onclick = function() {
    formBx.classList.remove("active");
    body.classList.remove("active");
};

checkPassSignIn.onchange = () => {
    if (checkPassSignIn.checked) {
        document.querySelector("#passSignIn").type = "text";
    } else {
        document.querySelector("#passSignIn").type = "password";
    }
};

checkPassSignUp.onchange = () => {
    if (checkPassSignUp.checked) {
        document.querySelector("#confPass").type = "text";
        document.querySelector("#pass").type = "text";
    } else {
        document.querySelector("#confPass").type = "password";
        document.querySelector("#pass").type = "password";
    }
};


toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut"
    // "rtl": true
};

function success_toastr(message) {
    toastr.success(message);
}

function error_toastr(message) {
    toastr.error(message);
}

function info_toastr(message) {
    toastr.info(message);
}

function warning_toastr(message) {
    toastr.warning(message);
}
