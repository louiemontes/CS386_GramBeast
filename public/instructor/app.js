(function() {
  // input our firebase instance
  const config = {
    apiKey: "AIzaSyC0iaIzgFDpfpwxbR_ZaeEk-4ezaAO8l-o",
    authDomain: "grambeast.firebaseapp.com",
    databaseURL: "https://grambeast.firebaseio.com",
    storageBucket: "grambeast.appspot.com",
    messagingSenderId: "167935763173"
  };
  firebase.initializeApp(config);

  // retrieve client elements
  const txtEmail = document.getElementById("txtEmail");
  const txtPassword = document.getElementById("txtPassword");
  const btnLogin = document.getElementById("btnLogin");
  const btnSignUp = document.getElementById("btnSignUp");
  const btnLogout = document.getElementById("btnLogout");

  // add event listeners
  btnLogin.addEventListener("click", e => {
    // get email and pass
    const email = txtEmail.value;
    const pass = txtPassword.value;
    const auth = firebase.auth();

    // actual sign in
    const promise = auth.signInWithEmailAndPassword(email, pass);
    promise
      .catch(e => console.log(e.message));
  });

  btnSignUp.addEventListener("click", e => {
    // get email and pass
    // TODO: Check for proper email and password input, this automatically accepts anything until fixed.
    var email = txtEmail.value;
    var pass = txtPassword.value;
    const auth = firebase.auth();

    // actual sign up
    const promise = auth.createUserWithEmailAndPassword(email, pass);
    promise
      .catch(e => console.log(e.message));
  });

  btnLogout.addEventListener("click", e => {
    firebase.auth().signOut();
  });

  // add realtime listener
  firebase.auth().onAuthStateChanged(firebaseUser => {
    if (firebaseUser){
      btn.Logout.classList.add("visibility");
      console.log("Login successful. Welcome:");
    } else {
      console.log("User not logged in");
    }
  });
}());
