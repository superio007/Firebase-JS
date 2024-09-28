<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/74e6741759.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <script type="module" src="./register.js"></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');

html{
    height: 100%;
}
#formdiv {
    width: -webkit-fill-available;
    height: 100vh;
    /* background: #15151515;  fallback for old browsers */
    margin: 0;
    font-family: 'Open Sans', sans-serif;
    background-color: #0707076b;
    background-size: 20px 20px;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3f3c4f', endColorstr='#3c3b4d', GradientType=0 );
}
#formdiv a{
    color: #3c3b4d;
    margin-top: 12px;
    display: block;
    &:hover{
        text-decoration: none;
    }
}
#formdiv .form {
    max-width: calc(100vw - 40px);
    width: 420px;
    height: auto;
    background: rgba(255, 255, 255, 1);
    padding: 30px;
    box-sizing: border-box;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
#formdiv .form:before{
    content: "";
    background-color: rgba(255, 255, 255, 0.9);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
}
#formdiv .form h2 {
    margin: 0;
    padding-bottom: 10px;
    color: #1e439b;
    font-size: 22px;
    border-bottom: 3px solid #ff5501;
    font-weight: 600;
    margin-bottom: 40px;
    text-align: center;
}
#formdiv label{
    text-transform: uppercase;
    font-weight: 700;
}
#formdiv input {
    width: 60%;
    padding: 10px;
    box-sizing: border-box;
    background: none;
    outline: none;
    resize: none;
    border: 0;
    font-family: 'Montserrat', sans-serif;
    border: 2px solid #bebed2;
}
#formdiv .form p:before {
    content: attr(type);
    display: block;
    margin: 10px 0 0;
    font-size: 13px;
    color: #5a5a5a;
    float: left;
    width: 40%;
}
#formdiv button {
    padding: 8px 12px;
    margin: 4px 0;
    font-family: 'Montserrat', sans-serif;
    border: 2px solid #78788c;
    background: 0;
    color: #5a5a6e;
    cursor: pointer;
    transition: all .3s;
}
#formdiv button:hover {
    background: #646171;
    color: #fff;
    border-color: #646171;
    box-shadow: 0px 0 5px 0 #646171;
}
#formdiv .login-btn{
    margin-top: 20px;
}

#formdiv .relative{
    position: relative;
}
#formdiv .relative i.fa{
    position: absolute;
    top: 10px;
    left: 0;
    width: 30px;
    color: #9b9aa3;
    text-align: center;
    border-radius: 0 4px 4px 0;
    transition: all 0.15s ease-in-out;
}
#formdiv input:focus + .fa{
    color: #3e3b4e;
    transform: rotate(360deg);
}
#formdiv .form-group{
    margin-bottom: 20px;
}
#formdiv .form-control{
    width: -webkit-fill-available;
    font-size: 14px;
    padding-left: 40px;
    border: none;
    border-bottom: 1px solid #3c3b4d;
    border-radius: 0;
    background-color: transparent;
}
#formdiv .form-control:focus{
    border-color: #1e439b;
    box-shadow: inset 0 0px 0px rgba(0,0,0,.075), 0 3px 4px -3px rgb(30, 102, 195);
    background-color: transparent;
}
#formdiv .sign-up{
    margin-top: 30px;
    text-align: center;
    position: relative;
    margin-bottom: -15px;
}
#formdiv .login-text{
    position: absolute;
    top: -11px;
    text-align: center;
    width: 30%;
    background-color: #fff;
    left: 50%;
    transform: translateX(-50%);
}
#formdiv hr{
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
    border-top: 1px solid rgba(0, 0, 0, 0.4);
}
/* --- Animated Buttons --- */
#formdiv .movebtn{
    background-color: transparent;
    display:inline-block;
    width:100%;
    background-image: none;
    padding: 8px 10px;
    border-radius: 0;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    -webkit-transition-timing-function: cubic-bezier(0.5, 1.65, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.5, 1.65, 0.37, 0.66);
}
#formdiv .movebtnre {
    border: 2px solid #ff5501;
    box-shadow: inset 0 0 0 0 #ff5501;
    color:#ff5501;
}
#formdiv .movebtnsu {
    border: 2px solid #3e3b4e;
    color: #ffffff;
    background-color: #3e3b4e;
}
#formdiv .google, #formdiv .facebook{
    width: 50%;
    float: left;
}
#formdiv .google {
    border: 2px solid #e04c40;
    color: #ffffff;
    background-color: #e04c40;
}
#formdiv .facebook {
    border: 2px solid #2e4da7;
    color: #ffffff;
    background-color: #2e4da7;
}
#formdiv .google:focus,
#formdiv .google:hover,
#formdiv .google:active {
    background-color: #ea3728;
    color: #FFF;
    border-color: #ea3728;
    box-shadow: none;
}
#formdiv .facebook:focus,
#formdiv .facebook:hover,
#formdiv .facebook:active {
    background-color: #1e439b;
    color: #FFF;
    border-color: #1e439b;
    box-shadow: none;
}
</style>
<body>
    <div id="formdiv">
        <div class="form">
            <!-- Login Form -->
            <form class="form-horizontal signin" method="post">
                <div class="form-wrap" style="position: relative;">
                  <h2>Login</h2>
                  <div class="form-group">
                      <div class="relative">
                          <input class="form-control" name="loginEmail" id="loginEmail" type="email" placeholder="Email">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="relative">
                          <input class="form-control myinput" name="loginPassword" id="loginPassword" type="password" placeholder="Password">
                          <i class="fa fa-key"></i>
                      </div>
                      <span class="pull-right" id="forgot"><small><a href="#">Forgot Password?</a></small></span>
                  </div> 
                                  
                  <div class="login-btn">
                      <button class="movebtn movebtnsu" id="loginbtn">Login <i class="fa fa-fw fa-lock"></i></button>
                      <div class="relative"><hr><span class="login-text">or login with</span></div>
                      <div class="clearfix"></div>
                      <div class="social-btn clearfix">
                          <button class="movebtn google" type="button">Google <i class="fa fa-fw fa-google"></i></button>
                          <button class="movebtn facebook" type="button">Facebook <i class="fa fa-fw fa-facebook"></i></button>
                      </div>
                  </div>
                </div>
                <div class="sign-up">
                  <a href="#" class="signbtn"><small>Not a member? Sign Up <i>(Click me)</i></small></a>
              </div>
            </form>
        
            <!-- Registration Form -->
            <form class="form-horizontal signup" method="post">
                <div class="form-wrap" style="position: relative;">
                <h2>Sign Up</h2>

                <div class="form-group">
                    <div class="relative">
                        <input class="form-control" name="signUpEmail" type="email" id="signUpEmail" placeholder="Email Address">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="relative">
                        <input class="form-control myinput" name="signUpPassword" id="signUpPassword" type="password"  placeholder="Password">
                        <i class="fa fa-key"></i>
                    </div>
                    <span class="pull-right"><small><a href="#" id="showhide">show / hide</a></small></span>
                </div> 
                                
                <div class="login-btn">
                    <button class="movebtn movebtnsu"  id="SignBtn">Submit <i class="fa fa-fw fa-paper-plane"></i></button>
                </div>
                </div>
                <div class="sign-up">
                <button type="button" class="signbtn" id="signbtn"><small>Already member? Sign in <i>(Click me)</i></small></button>
                </div>
            </form>

            <!-- Forgoot Password -->
             <form class="form-horizontal mail d-none" method="post">
                <div class="form-wrap" style="position: relative;">
                    <h2>Forgot Password</h2>
    
                    <div class="form-group">
                        <div class="relative">
                            <input class="form-control" name="sendEmail" type="email" id="sendEmail" placeholder="Email Address">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <span class="pull-right" id="backToLogin"><small><a href="#">Go back to login!</a></small></span>
                    </div>
                    <div class="login-btn">
                        <button class="movebtn movebtnsu"  id="sendmail">Send Email<i class="fa fa-fw fa-paper-plane"></i></button>
                    </div>
                </div>
             </form>
        </div>
    </div>
    <script type="module">
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-app.js";
      import {
        getAuth,
        signInWithPopup,
        GoogleAuthProvider,
        createUserWithEmailAndPassword,
        signInWithEmailAndPassword,
        sendPasswordResetEmail,
        FacebookAuthProvider,
      } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-auth.js";
      const firebaseConfig = {
        apiKey: "AIzaSyAvhaYa16Y7sa0xwztecBcnK09CMqxY7eQ",
        authDomain: "turtledownau.firebaseapp.com",
        projectId: "turtledownau",
        storageBucket: "turtledownau.appspot.com",
        messagingSenderId: "1067055316391",
        appId: "1:1067055316391:web:9be7d88614fc122e5b0a82",
      };
      const app = initializeApp(firebaseConfig);
      const auth = getAuth(app);
      const provider = new GoogleAuthProvider();
      const facebookProvider = new FacebookAuthProvider();
      auth.languageCode = "en";
      // for google popup and registration
      document.querySelector(".google").addEventListener("click", (event) => {
        event.preventDefault();
        console.log("google opening");
        signInWithPopup(auth, provider)
          .then((result) => {
            // This gives you a Google Access Token. You can use it to access the Google API.
            const credential = GoogleAuthProvider.credentialFromResult(result);
            const token = credential.accessToken;
            // The signed-in user info.
            const user = result.user;
            console.log(user);
            window.location.href = "dashboard.html";
            // ...
          })
          .catch((error) => {
            // Handle Errors here.
            const errorCode = error.code;
            const errorMessage = error.message;
          });
      });
      // for facebook popup and registration
      document.querySelector(".facebook").addEventListener("click", (event) => {
        event.preventDefault();
        console.log("facebook opening");
        signInWithPopup(auth, facebookProvider)
          .then((result) => {
            const user = result.user;
            const credential = FacebookAuthProvider.credentialFromResult(result);
            const accessToken = credential.accessToken;
            console.log(user);
            window.location.href = "dashboard.html";
          })
          .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
          });
      });
      // email sign up for registration
      document.getElementById("SignBtn").addEventListener("click", (event) => {
        event.preventDefault();
        console.log("Sign in");
        let email = document.getElementById("signUpEmail").value;
        let password = document.getElementById("signUpPassword").value;
        const auth = getAuth();
        createUserWithEmailAndPassword(auth, email, password)
          .then((userCredential) => {
            // Signed up
            const user = userCredential.user;
            console.log("sign up verified",user);
            window.location.reload();
          })
          .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ..
          });
      });
      //email login for sign in
      document.getElementById("loginbtn").addEventListener("click", (event) => {
        event.preventDefault();
        console.log("Log in");
        let email = document.getElementById("loginEmail").value;
        let password = document.getElementById("loginPassword").value;
        const auth = getAuth();
        signInWithEmailAndPassword(auth, email, password)
          .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            console.log(user);
            window.location.href = "dashboard.html";
            // ...
          })
          .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
          });
      });
      //send forgot mail
      document.getElementById("sendmail").addEventListener("click", (event) => {
        event.preventDefault();
        const auth = getAuth();
        let email = document.getElementById("sendEmail").value;
        sendPasswordResetEmail(auth, email)
          .then(() => {
            console.log("mail sent");
            location.reload();
          })
          .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ..
          });
      });

        $(".signup").css("display", "none");

        $(".signbtn").click(function(){
            $("form").animate({ height:"toggle", opacity: "toggle"}, "slow");
        });

        document.getElementById("forgot").addEventListener("click",(event)=>{
            event.preventDefault();
            document.querySelector(".mail").classList.remove("d-none");
            document.querySelector(".signin").classList.add("d-none");
        })

        document.getElementById("backToLogin").addEventListener("click",(event)=>{
            window.location.reload();
        })

        $("#showhide").click(function(){
            var pass = $(".myinput");
            if (pass.attr("type") === "password") {
                pass.attr("type", "text");
            } else {
                pass.attr("type", "password");
            }
        });
    </script>
</body>
</html>
