(function {
  // input our firebase instance
  var config = {
    apiKey: "AIzaSyC0iaIzgFDpfpwxbR_ZaeEk-4ezaAO8l-o",
    authDomain: "grambeast.firebaseapp.com",
    databaseURL: "https://grambeast.firebaseio.com",
    storageBucket: "grambeast.appspot.com",
    messagingSenderId: "167935763173"
  };
  firebase.initializeApp(config);

  // retrieve client elements
  var txtEmail = document.getElementById("txtEmail");
  var txtPassword = document.getElementById("txtPassword");
  var btnLogin = document.getElementById("btnLogin");
  var btnSignup = document.getElementById("btnSignup");
  var btnSignout = document.getElementById("btnSignout");

  // add event listeners
  btnLogin.addEventListener("click", e => {
    // get email and pass 
    var email = txtEmail.value;
    var pass = txtPassword.value;
    const auth = firebase.auth();

    // actual sign in
    const promise = auth.signInWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));
  });

  btnSignup.addEventListener("click", e => {
    // get email and pass
    // TODO: Check for proper email and password input, this automatically accepts anything until fixed.
    var email = txtEmail.value;
    var pass = txtPassword.value;
    const auth = firebase.auth();

    // actual sign up
    const promise = auth.createUserWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));
  });

  btnLogout.addEvenListener("click", e => {
    firebase.auth().signOut();
  });

  // add realtime listener
  firebase.auth().onAuthStateChanged(firebaseUser => {
    if (firebaseUser){
      console.log(firebaseUser);
      btn.Logout.classList.remove("hide");
    } else {
      console.log("User not logged in");
      btn.Logout.classList.add("hide");
    }
  })
}());

