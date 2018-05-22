importScripts('https://www.gstatic.com/firebasejs/3.7.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.7.1/firebase-messaging.js');

// Initialize Firebase
  var config = {
    apiKey: "AIzaSyAPiYeHqRphhkQXTWlZIfg5xj4rdiHyIAk",
    authDomain: "my-push-notification-pro-22b56.firebaseapp.com",
    databaseURL: "https://my-push-notification-pro-22b56.firebaseio.com",
    projectId: "my-push-notification-pro-22b56",
    storageBucket: "my-push-notification-pro-22b56.appspot.com",
    messagingSenderId: "1089161823792"
  };
  firebase.initializeApp(config);
  
  const messaging = firebase.messaging();