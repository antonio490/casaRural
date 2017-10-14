
(function()) {

// Set the configuration for your app
  // TODO: Replace with your project's config object

  const config = {
    apiKey: "AIzaSyBZ9LMOczrrzFh0qE-hgDAW4gYPkQ_UPv4",
    authDomain: "casarural-78aea.firebaseapp.com",
    databaseURL: "https://casarural-78aea.firebaseio.com",
    storageBucket: "casarural-78aea.appspot.com"
  };
  firebase.initializeApp(config);

  // Get a reference to the database service
  var database = firebase.database();

  const preObject = document.getElementById('object');

  const dbRefObject = firebase.datebase.ref().child('object');

  dbRefObject.on('value', snap => console.log(snap.val()));

}());
