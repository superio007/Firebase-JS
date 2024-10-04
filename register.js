import {
  initializeApp
} from "https://www.gstatic.com/firebasejs/10.13.2/firebase-app.js";
import {
  getAuth,
  signInWithPopup,
  GoogleAuthProvider,
  createUserWithEmailAndPassword,
  signInWithEmailAndPassword,
  sendPasswordResetEmail,
  FacebookAuthProvider,
OAuthProvider
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
const yahooProvider = new OAuthProvider('yahoo.com');
const microsoftProvider = new OAuthProvider('microsoft.com');
auth.languageCode = "en";
microsoftProvider.setCustomParameters({
tenant: 'e602f402-567e-43ed-8194-c7cab9635313' // Replace with your Azure AD tenant ID
});
//for microsoft
document.querySelector('.Microsoft').addEventListener("click",(event) => {
event.preventDefault();
console.log("microsoft opening");
signInWithPopup(auth, microsoftProvider)
.then((result) => {
// User is signed in.
// IdP data available in result.additionalUserInfo.profile.

// Get the OAuth access token and ID Token
const credential = OAuthProvider.credentialFromResult(result);
const accessToken = credential.accessToken;
const idToken = credential.idToken;
const user = result.user;
localStorage.setItem('userCredential',JSON.stringify(user));
console.log(credential);
console.log(accessToken);
console.log(idToken);
window.location.href = "https://turtledownunder.com.au/packages_copy/";
})
.catch((error) => {
// Handle Errors here.
const errorCode = error.code;
const errorMessage = error.message;
console.log(errorMessage);
});
})
// for yahoo
document.querySelector('.Yahoo').addEventListener("click",(event) => {
event.preventDefault();
console.log("yahoo opening");
signInWithPopup(auth, yahooProvider)
.then((result) => {
const credential = OAuthProvider.credentialFromResult(result);
const accessToken = credential.accessToken;
const idToken = credential.idToken;
const user = result.user;
localStorage.setItem('userCredential',JSON.stringify(user));
console.log(credential);
console.log(accessToken);
console.log(idToken);
window.location.href = "https://turtledownunder.com.au/packages_copy/";

})
.catch((error) => {
// Handle Errors here.
const errorCode = error.code;
const errorMessage = error.message;
console.log(errorMessage);
});
}) 		
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
localStorage.setItem('userCredential',JSON.stringify(user));
          console.log(user);
          window.location.href = "https://turtledownunder.com.au/packages_copy/";
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
localStorage.setItem('userCredential',JSON.stringify(user));
          console.log(user);
          window.location.href = "https://turtledownunder.com.au/packages_copy/";
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
          console.log("sign up verified", user);
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
localStorage.setItem('userCredential',JSON.stringify(user));
          console.log(user);
          window.location.href = "https://turtledownunder.com.au/packages_copy/";
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
