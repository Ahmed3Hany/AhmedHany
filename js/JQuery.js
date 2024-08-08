/*global $, window*/

$(document).ready(function () {
   
    'use strict';
    
    // Trigger Mixitup
    
    var mixer = mixitup('#Container');
    
    // Adjust Shuffle Links
    
    $('.shuffle li').click(function(){
        
        $(this).addClass('active').siblings().removeClass('active');
        
    });

});

//Contact Me Form
function contform() {
  document.getElementById('contact-form-wrapper').classList.add("active");
  setTimeout(() => {
    var form = document.getElementById('contact-form');
    form.classList.add("show");
  }, 100);
}

function excontform() {
  var form3 = document.getElementById('contact-form');
  form3.classList.remove("show");
  setTimeout(() => {
    document.getElementById('contact-form-wrapper').classList.remove("active");
  }, 300);
}

function excontformwrap() {
  if (event.target === document.getElementById('contact-form-wrapper')) {
    var form4 = document.getElementById('contact-form');
    form4.classList.remove("show");
    setTimeout(() => {
      document.getElementById('contact-form-wrapper').classList.remove("active");
    }, 300);
  }
}

///////////
function whatsform() {
  console.log("Hello, JavaScript!");
  document.getElementById('Whats-form-wrapper').classList.add("active");
  setTimeout(() => {
    var form = document.getElementById('Whats-form');
    form.classList.add("show");
  }, 100);
}

function exWhatsform() {
  var form3 = document.getElementById('Whats-form');
  form3.classList.remove("show");
  setTimeout(() => {
    document.getElementById('Whats-form-wrapper').classList.remove("active");
  }, 300);
}

function exWhatsformwrap() {
  if (event.target === document.getElementById('Whats-form-wrapper')) {
    var form4 = document.getElementById('Whats-form');
    form4.classList.remove("show");
    setTimeout(() => {
      document.getElementById('Whats-form-wrapper').classList.remove("active");
    }, 300);
  }
}

//////////////

//Sign Up Form
function signform() {
  var form20 = document.getElementById("login-form");
  form20.classList.remove("show");
  setTimeout(() => {
    document.getElementById("login-form-wrapper").classList.remove("active");
  }, 300);
  document.getElementById('sign-form-wrapper').classList.add("active");
  setTimeout(() => {
    var form5 = document.getElementById('sign-form');
    form5.classList.add("show");
  }, 100);
}

function exsignform() {
  var form6 = document.getElementById('sign-form');
  form6.classList.remove("show");
  setTimeout(() => {
    document.getElementById('sign-form-wrapper').classList.remove("active");
  }, 300);
}

function exsignformwrap() {
  if (event.target === document.getElementById('sign-form-wrapper')) {
    var form7 = document.getElementById('sign-form');
    form7.classList.remove("show");
    setTimeout(() => {
      document.getElementById('sign-form-wrapper').classList.remove("active");
    }, 300);
  }
}

//Log In Form
function logform() {
  var form10 = document.getElementById("sign-form");
  form10.classList.remove("show");
  setTimeout(() => {
    document.getElementById("sign-form-wrapper").classList.remove("active");
  }, 300);
  document.getElementById("login-form-wrapper").classList.add("active");
  setTimeout(() => {
    var form8 = document.getElementById("login-form");
    form8.classList.add("show");
  }, 100);
}

function exlogform() {
  var form9 = document.getElementById('login-form');
  form9.classList.remove("show");
  setTimeout(() => {
    document.getElementById('login-form-wrapper').classList.remove("active");
  }, 300);
}

function exlogformwrap() {
  if (event.target === document.getElementById('login-form-wrapper')) {
    var form7 = document.getElementById('login-form');
    form7.classList.remove("show");
    setTimeout(() => {
      document.getElementById('login-form-wrapper').classList.remove("active");
    }, 300);
  }
}

//Forgot pass In Form
function forgotpassform() {
  var form20 = document.getElementById("login-form");
  form20.classList.remove("show");
  setTimeout(() => {
    document.getElementById("login-form-wrapper").classList.remove("active");
  }, 300);
  document.getElementById("forgot-form-wrapper").classList.add("active");
  setTimeout(() => {
    var form21 = document.getElementById("forgot-form");
    form21.classList.add("show");
  }, 100);
}

function exforgotpassform() {
  var form22 = document.getElementById('forgot-form');
  form22.classList.remove("show");
  setTimeout(() => {
    document.getElementById('forgot-form-wrapper').classList.remove("active");
  }, 300);
}

function exforgotpassformwrap() {
  if (event.target === document.getElementById('forgot-form-wrapper')) {
    var form7 = document.getElementById('forgot-form');
    form7.classList.remove("show");
    setTimeout(() => {
      document.getElementById('forgot-form-wrapper').classList.remove("active");
    }, 300);
  }
}
var duration = 120; // Countdown duration in seconds
var timerElement = document.getElementById('timer');

function startCountdown() {
  var timer = setInterval(function() {
    duration--;
    timerElement.textContent = formatTime(duration);

    if (duration <= 0) {
      clearInterval(timer);
      var link = document.createElement('a');
      link.href = 'php/ForgotPass.php';
      link.textContent = 'Resend Code';
      timerElement.appendChild(link);
      var expired = document.getElementById('verifyform-f');
      expired.addEventListener('submit', function(event) {
        event.preventDefault();
        alert("Verification Code is Expired, Click 'Resend Code' to Send Another One");
      });
    }
  }, 1000);
}

function formatTime(seconds) {
  var minutes = Math.floor(seconds / 60);
  var remainingSeconds = seconds % 60;

  return `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
}

function verifycodeform() {
  document.getElementById("verify-form-wrapper").classList.add("active");
  setTimeout(() => {
    var form21 = document.getElementById("verify-form");
    form21.classList.add("show");
  }, 100);

    startCountdown();
}

function CreateNePassform() {
  document.getElementById("createpass-form-wrapper").classList.add("active");
  setTimeout(() => {
    var form21 = document.getElementById("createpass-form");
    form21.classList.add("show");
  }, 100);
}

// Show/Hide Profile
function showprofile(){
  var form10 = document.getElementById('signup-btn');
  form10.classList.add("d-none");
  
  var form11 = document.getElementById('responsiveDr');
  form11.classList.remove("d-none");
}

function hideprofile(){
  var form12 = document.getElementById('signup-btn');
  form12.classList.remove("d-none");

  var form13 = document.getElementById('responsiveDr');
  form13.classList.add("d-none");
}
// Show/Hide Profile

//show password
function togglePasswordVisibility() {
  var passwordInput = document.getElementById('password');
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
}

function togglelogPasswordVisibility() {
  var passwordInput2 = document.getElementById('logpassword');
  if (passwordInput2.type === 'password') {
    passwordInput2.type = 'text';
  } else {
    passwordInput2.type = 'password';
  }
}

function togglenewPasswordVisibility() {
  var passwordInput2 = document.getElementById('newpassword');
  if (passwordInput2.type === 'password') {
    passwordInput2.type = 'text';
  } else {
    passwordInput2.type = 'password';
  }
}

function toggleconfPasswordVisibility() {
  var passwordInput2 = document.getElementById('confpassword');
  if (passwordInput2.type === 'password') {
    passwordInput2.type = 'text';
  } else {
    passwordInput2.type = 'password';
  }
}

//show password

//check form
var signupform = document.getElementById('signform-f');
var nameInput3 = document.getElementById('signupname');
var passInput3 = document.getElementById('signuppassword');
signupform.addEventListener('submit', function(event) {
  var nameValue3 = nameInput3.value;
  var nameLength3 = nameValue3.length;
  var passValue3 = passInput3.value;
  var passLength3 = passValue3.length;
  
  if (nameLength3 < 3) {
    event.preventDefault(); // Cancel form submission
    alert("Username Mustn't be Less than 3 character");
  }
  if (passLength3 < 8) {
    event.preventDefault(); // Cancel form submission
    alert("Password Mustn't be Less than 8 character");
  }
});
///
var loginform = document.getElementById('loginform-f');
var nameInput4 = document.getElementById('logusername');
var passInput4 = document.getElementById('logpassword');
loginform.addEventListener('submit', function(event) {
  var nameValue4 = nameInput4.value;
  var nameLength4 = nameValue4.length;
  var passValue4 = passInput4.value;
  var passLength4 = passValue4.length;
  
  if (nameLength4 < 3) {
    event.preventDefault(); // Cancel form submission
    alert("Username Mustn't be Less than 3 character");
  }
  if (passLength4 < 8) {
    event.preventDefault(); // Cancel form submission
    alert("Password Mustn't be Less than 8 character");
  }
});
///
var Createpassform = document.getElementById('createpassform-f');
var passInput5 = document.getElementById('newpassword');
var passInput6 = document.getElementById('confpassword');
Createpassform.addEventListener('submit', function(event) {
  var passValue5 = passInput5.value;
  var passLength5 = passValue5.length;
  var passValue6 = passInput6.value;
  var passLength6 = passValue6.length;
  
  if (passLength5 < 8 || passLength6 < 8) {
    event.preventDefault(); // Cancel form submission
    alert("Password Mustn't be Less than 8 character");
  }
  if(passValue5 != passValue6){
    event.preventDefault(); // Cancel form submission
    alert("The two Passwords Must be the same");
  }
});
///
//check form

//display profile image
function displayImage(event) {
  var file = event.target.files[0]; // Get the selected file
  var reader = new FileReader();

  reader.onload = function(event) {
    var imageUrl = event.target.result;
    var imageElement = document.createElement('img');
    imageElement.src = imageUrl;
    imageElement.id = "myImage";
    var imageContainer = document.getElementById('imageContainer');
    imageContainer.innerHTML = ''; // Clear existing content
    imageContainer.appendChild(imageElement);

  };

  reader.readAsDataURL(file);
}
//display profile image

//zooming Image
function handleDivClick(div) {
  var img = div.querySelector('img');
  var src = img.src;
  
  // Call your function with the src parameter
  zoomImage(src);
}

function zoomImage(image) {
  var zoomedContainer = document.getElementById("zoomedContainer");
  var zoomedImg = document.getElementById("zoomedImg");

  zoomedImg.src = image;
  zoomedContainer.style.opacity = 1;
  zoomedContainer.style.pointerEvents = "auto";
  document.body.classList.add("zoomed");
}

function closeZoom() {
  var zoomedContainer = document.getElementById("zoomedContainer");
  zoomedContainer.style.opacity = 0;
  zoomedContainer.style.pointerEvents = "none";
  document.body.classList.remove("zoomed");
}
//zooming Image

function mouseenterbtn(){
  var nametxt = document.getElementById('logusername');
  var btn = document.getElementById('loginsubmit');
  var textval = nametxt.value;
  var textlen = textval.length;
  if(textlen < 8){
      btn.classList.toggle('float-end');
  }
}