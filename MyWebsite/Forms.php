<div id="contresult"></div>
<div id="Whatsresult"></div>
<div id="logresult"></div>

<script>
    function dropdir(){
    var dropdownElement = document.getElementById('Drp');

    if (window.innerWidth >= 992) {
        dropdownElement.classList.add('dropstart');
        dropdownElement.classList.remove('dropend');
    }
    else {
        dropdownElement.classList.add('dropend');
        dropdownElement.classList.remove('dropstart');
    }
    }

    function contsubmitForm() {
    $.ajax({
        type: "POST",
        url: "php/Contactme.php",
        data: $("#contactform-f").serialize(),
        success: function(contresponse) {
        $("#contresult").html(contresponse);
        }
    });
    }
    function WhatssubmitForm() {
    $.ajax({
        type: "POST",
        url: "php/WhatsApp.php",
        data: $("#Whats-f").serialize(),
        success: function(contresponse) {
        $("#Whatsresult").html(contresponse);
        }
    });
    }
</script>

<div class="container">
    
    <div id="contact-form-wrapper" onclick="excontformwrap();">
    <div id="contact-form">
        <h2>Contact Me</h2>
        <form name="contusform" id="contactform-f" onsubmit="event.preventDefault(); contsubmitForm();">
        <label for="name">Name:</label>
        <input type="text" id="usernamecont" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="eemm" name="email" required>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" required>
        <label for="message">Message:</label>
        <textarea id="contmessage" name="message" required></textarea>
        <button id="contsubmit" name="submit" type="submit">Send</button>
        </form>
        <span class="close" onclick="excontform();">&times;</span>
    </div>
    </div>

    <div id="Whats-form-wrapper" onclick="exWhatsformwrap();">
    <div id="Whats-form">
        <h2>Whatsapp Me</h2>
        <form name="Whatsform" id="Whats-f" onsubmit="event.preventDefault(); WhatssubmitForm();">
        <label for="username">Name:</label>
        <input type="text" id="usernamewhats" name="username" required>
        <label for="Phone">Phone Number:</label>
        <input type="text" name="Phone" required>
        <label for="message">Message:</label>
        <textarea id="whatsmessage" name="message" required></textarea>
        <button id="Whatssubmit" name="submit" type="submit">Send</button>
        </form>
        <span class="close" onclick="exWhatsform();">&times;</span>
    </div>
    </div>

    <div id="sign-form-wrapper" onclick="exsignformwrap();">
    <div id="sign-form">
        <h2>Sign Up</h2>
        
        <form name="signupform" id="signform-f" method="post" action="php\Signup.php" enctype="multipart/form-data">
        <center>
            <div id="imageContainer">
            <i class="fa-solid fa-circle-user" style="color: #02a1e6; font-size:170px"></i>
            </div>
            <label for="imageInput" class="file-input-label">
            <input type="file" name="my_image" id="imageInput" class="file-input" onchange="displayImage(event)">
            <span class="file-input-button">
                <i class="fas fa-upload"></i> Upload Image
            </span>
            </label>
        </center>
        <label for="username">Name:</label>
        <input type="text" class="form-control" id="signupname" name="username" required>
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" required>  
        <label for="pass">Password:</label>
        <div class="input-group">
            <input type="password" class="form-control" style="width:50%; border-radius:0px !important;" id="signuppassword" name="pass" required>
            <div class="input-group-append">
            <a class="rounded-end" style="padding: 8.8px; border: none; background-color: #f5f5f5;" onclick="togglePasswordVisibility();" type="button"><i class="fa-solid fa-eye" style="color: #000000;"></i></a>
            </div>
        </div>
        <a id="ssubmit" onclick="logform();" class="alrhaveacc d-block mb-3">Already Have Account?</a> 
        <button id="signsubmit" name="submit" type="submit">Sign Up</button>
        </form>
        <span class="close" onclick="exsignform();">&times;</span>
    </div>
    </div>

    <div id="login-form-wrapper" onclick="exlogformwrap();">
    <div id="login-form">
        <h2>Sign In</h2>
        <form name="loginform" id="loginform-f" method="post" action="php/Signin.php">
        <label for="username">Name:</label>
        <input type="text" id="logusername" name="username" required>
        <label for="pass">Password:</label>
        <div class="input-group">
            <input type="password" class="form-control" style="width:50%; border-radius:0px !important;" id="logpassword" name="pass" required>
            <div class="input-group-append">
            <a class="rounded-end" style="padding: 8.8px; border: none; background-color: #f5f5f5;" onclick="togglelogPasswordVisibility();" type="button"><i class="fa-solid fa-eye" style="color: #000000;"></i></a>
            </div>
        </div>
        <input type="checkbox" name="remembercheck" id="remembercheck"><label for="remembercheck" class="mb-3 ps-1">Remember Me</label>
        <a id="forgotpass" onclick="forgotpassform();" class="alrhaveacc d-block mb-3">Forgot Password?</a>
        <a id="ssubmit" onclick="signform();" class="alrhaveacc mb-3 d-block">Create Account</a>
        <button id="loginsubmit" name="submit" type="submit" onmouseenter="mouseenterbtn()">Sign In</button>
        </form>
        <span class="close" onclick="exlogform();">&times;</span>
    </div>
    </div>

    <div id="forgot-form-wrapper" onclick="exforgotpassformwrap();">
    <div id="forgot-form">
        <h2>Forgot Password</h2>
        <form name="forgotform" id="forgotform-f" method="post" action="php/ForgotPass.php">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" required>  
        <button id="forgotsubmit" name="submit" type="submit">Send Verification Code</button>
        </form>
        <span class="close" onclick="exforgotpassform();">&times;</span>
    </div>
    </div>

    <div id="verify-form-wrapper">
    <div id="verify-form">
        <h2>Forgot Password</h2>
        <form name="verifyform" id="verifyform-f" method="post" action="php/VerifyCode.php">
        <label for="verf">Verification Code</label>
        <input type="text" id="verfbtn" class="form-control" name="verf" required>  
        <div id="timer"></div>
        <button id="verifysubmit" name="submit" type="submit">Submit</button>
        </form>
    </div>
    </div>

    <div id="createpass-form-wrapper">
    <div id="createpass-form">
        <h2>Create New Password</h2>
        <form name="createpassform" id="createpassform-f" method="post" action="php/CreatePass.php">
        <label for="newpass">New Password:</label>
        <div class="input-group">
            <input type="password" class="form-control" style="width:50%; border-radius:0px !important;" id="newpassword" name="newpass" required>
            <div class="input-group-append">
            <a class="rounded-end" style="padding: 8.8px; border: none; background-color: #f5f5f5;" onclick="togglenewPasswordVisibility();" type="button"><i class="fa-solid fa-eye" style="color: #000000;"></i></a>
            </div>
        </div>
        <label for="confpass">Confirm Password:</label>
        <div class="input-group">
            <input type="password" class="form-control" style="width:50%; border-radius:0px !important;" id="confpassword" name="confpass" required>
            <div class="input-group-append">
            <a class="rounded-end" style="padding: 8.8px; border: none; background-color: #f5f5f5;" onclick="toggleconfPasswordVisibility();" type="button"><i class="fa-solid fa-eye" style="color: #000000;"></i></a>
            </div>
        </div>
        <button id="createpasssubmit" name="submit" type="submit">Submit</button>
        </form>
    </div>
    </div>

</div>