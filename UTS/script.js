const { readyException } = require("jquery");

let firstNameInput = document.getElementById( "first-name-input" );
let firstNameError = document.getElementById( "last-name-error" );
let emptyFirstNameError = document.getElementById( "empty-first-name-input" );

let lastNameInput = document.getElementById( "last-name-input" );
let lastNameError = document.getElementById( "last-name-error" );
let emptylastNameError = document.getElementById( "empty-last-name-input" );

let emailInput = document.getElementById( "email-input" );
let emailError = document.getElementById( "email-error" );
let emptyemailError = document.getElementById( "empty-email-input" );

let phoneInput = document.getElementById( "phone" );
let phoneError = document.getElementById( "phone-error" );
let emptyPhoneError = document.getElementById( "empty-phone-input" );

let alamatInput = document.getElementById( "alamat-input" );
let alamatError = document.getElementById( "alamat-error" );
let emptyalamatError = document.getElementById( "empty-alamat-input" );

let submitButton=document.getElementById("submit-button");

let validClasses = document.getElementById("valid");
let invalidClasses = document.getElementById("error");





