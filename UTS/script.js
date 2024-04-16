let firstNameInput = $("#first-name-input");
let firstNameError = $("#first-name-error");
let emptyFirstNameError = $("#empty-first-name-input");

let lastNameInput = $("#last-name-input");
let lastNameError = $("#last-name-error");
let emptyLastNameError = $("#empty-last-name-input");

let emailInput = $("#email-name-input");
let emailError = $("#email--error");
let emptyemailError = $("#empty-email-input");

let phoneInput = $("#phone-input");
let phoneError = $("#phone-error");
let emptyPhoneError = $("#empty-phone-input");

let alamatInput = $("#alamat-input");
let alamatError = $("#alamat-error");
let emptyalamatError = $("#empty-alamat-input");

let submitButton = $("#submit-button");

let validClasses = $("#valid");
let invalidClasses = $("#error");

$(document).ready(function() {
    $('#show-barcode-button').click(function() {
        $('.barcode').slideToggle(1000);
    });
});