function userLogin(email, password)
{
  if (firebase.apps.length === 0)
  {
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyC0iaIzgFDpfpwxbR_ZaeEk-4ezaAO8l-o",
      authDomain: "grambeast.firebaseapp.com",
      databaseURL: "https://grambeast.firebaseio.com",
      storageBucket: "grambeast.appspot.com",
      messagingSenderId: "167935763173"
    };
    firebase.initializeApp(config);
  }
  //check if user logged in
  if (firebase.auth().currentUser)
  {
      // [START signout]
      firebase.auth().signOut();
      // [END signout]
  }
     firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
       return false;
   });
   return true;

}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate(email) {
  if (validateEmail(email)) {
    return true;
  }
  else {
    return false;
  }
  return false;
}

function validatePassword(p) {
        errors = [];
    if (p.length < 8) {
        return false;
    }
    if (p.search(/[a-z]/i) < 0) {
        return false;
    }
    if (p.search(/[0-9]/) < 0) {
        return false;
    }
    return true;
}
