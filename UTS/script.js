let firstNameInput = $("#first-name-input");
let firstNameError = $("#first-name-error");
let emptyFirstNameError = $("#empty-first-name-input");

let lastNameInput = $("#last-name-input");
let lastNameError = $("#last-name-error");
let emptyLastNameError = $("#empty-last-name-input");

let playerNameInput = $("#player-name-input");
let playerNameError = $("#player-name-error");
let emptyPlayerNameError = $("#empty-player-name-input");

let phoneInput = $("#phone");
let phoneError = $("#phone-error");
let emptyPhoneError = $("#empty-phone-input");

let provinsiInput = $("#provinsi-name-input");
let provinsiError = $("#provinsi-name-error");
let emptyProvinsiError = $("#empty-provinsi-name-input");

let submitButton = $("#submit-button");

let validClasses = $("#valid");
let invalidClasses = $("#error");

$(document).ready(function() {
    $('#show-barcode-button').click(function() {
        $('.barcode').slideToggle(1000);
    });
});