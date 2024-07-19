function validate(form){
    fail = validateForename(form.forename.value);
    fail += validateSurname(form.surname.value);
    fail += validateUsername(form.username.value);
    fail += validatePasword(form.password.value);
    fail += validateAge(form.age.value);
    fail += validateEmail(form.email.value);

    if (fail == "") return true;
    else { alert(fail); return false}

}