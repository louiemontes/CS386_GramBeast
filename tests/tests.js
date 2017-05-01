QUnit.test( "Login Test", function( assert ) {
  assert.ok(userLogin("student@nau.edu","password"), "User Logged in Through Firebase Authentication!");
});

QUnit.test( "Check If Email is Valid", function( assert ) {
  assert.ok(validate("student@nau.edu"), "Email is Valid!");
});

QUnit.test( "Check If Email is Invalid", function( assert ) {
  assert.ok(!validate("student@nau"), "Detected Invalid email!");
});

QUnit.test( "Check If Password is Valid", function( assert ) {
  assert.ok(validatePassword("PasswordThatWorks12"), "Password is Valid!");
});

QUnit.test( "Check If Password is Invalid", function( assert ) {
  assert.ok(!validatePassword("error"), "Detected Invalid password!");
});
