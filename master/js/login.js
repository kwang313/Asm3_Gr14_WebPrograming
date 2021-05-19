'use strict';

// function
function loginValidation() {
    let errMsg = {
        olEmail: [],
    }
    let userID = document.querySelector('#uId').value;
    let resultEmail = validateEmail(userID);

    if (resultEmail.length > 0) {
        errMsg.olEmail.push(resultEmail[0]);
    }

    displayValidation(errMsg);
    if (checkAllValidation(errMsg)){
        localStorage.userCurrentId = userID;
        return true;
    }
    return false;
}
