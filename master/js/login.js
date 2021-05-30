'use strict';

// function
function loginValidation() {
    let errMsg = {
        olEmail: [],
    }
    displayValidation(errMsg);
    if (checkAllValidation(errMsg)){
        localStorage.userCurrentId = userID;
        return true;
    }
    return false;
}
