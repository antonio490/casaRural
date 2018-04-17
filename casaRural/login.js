
(function(){

  //const variables
  const txtEmail = document.getElementById('email');
  const txtPass = document.getElementById('password');
  const btnLogin = document.getElementById('btnSubmit');
  const btnAdmin = document.getElementById('btnAdmin');
  const btnLogout = document.getElementById('btnLogout');

  btnLogin.addEventListener('click', e => {
    const email = txtEmail.value;
    const password = txtPass.value;
    const auth = firebase.auth();

    const promise = auth.signInWithEmailAndPassword(email, password)
    .then(function(firebaseUser){
      btnAdmin.style.Visibility = 'hidden';
      btnLogout.style.Visibility = 'visible';
      window.open("controlPanel.html", "_self");
    })
    .catch(function (error){
      console.log(e.message);
    })

  });


  firebase.auth().onAuthStateChanged(firebaseUser => {
    if(firebaseUser){
      //logged in
      console.log('logged in')
      btnAdmin.style.Visibility = 'hidden';
      btnLogout.style.Visibility = 'visible';
    }else{
      console.log('not logged in');}
  })

}());
