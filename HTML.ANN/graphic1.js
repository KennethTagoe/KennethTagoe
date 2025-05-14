// Firebase Configuration
const firebaseConfig = {
    apiKey: "YOUR_API_KEY",
    authDomain: "YOUR_PROJECT.firebaseapp.com",
    databaseURL: "https://YOUR_PROJECT.firebaseio.com",
    projectId: "YOUR_PROJECT",
    storageBucket: "YOUR_PROJECT.appspot.com",
    messagingSenderId: "YOUR_SENDER_ID",
    appId: "YOUR_APP_ID"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const database = firebase.database();

document.getElementById("newsletterForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const email = document.getElementById("newsletterEmail").value;

    database.ref("subscribers").push({ email })
        .then(() => {
            alert("Subscription successful!");
            document.getElementById("newsletterForm").reset();
        })
        .catch((error) => {
            alert("Error: " + error.message);
        });
});
