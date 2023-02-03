// Import the functions you need from the SDKs you need
import {
    initializeApp
} from "https://www.gstatic.com/firebasejs/9.16.0/firebase-app.js";
import {
    getStorage,
    ref,
    getDownloadURL
} from "https://www.gstatic.com/firebasejs/9.16.0/firebase-storage.js";
import {
    getAnalytics
} from "https://www.gstatic.com/firebasejs/9.16.0/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyDOegAvDgm88yd3WHrhqKWo3pRn_mBprd0",
    authDomain: "borisochieng.firebaseapp.com",
    projectId: "borisochieng",
    storageBucket: "borisochieng.appspot.com",
    messagingSenderId: "896652236948",
    appId: "1:896652236948:web:8af61bca9a60761d563c81",
    measurementId: "G-T30TMFCF66"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const storage = getStorage(app);
const analytics = getAnalytics(app);

//download file from URL
const downloadButton = document.getElementById("downloadCV");

downloadButton.addEventListener('click', function() {
    getDownloadURL(ref(storage, 'downloads/BORIS_OCHIENG_OCHOLA_CV.pdf'))
        .then((url) => {
            // `url` is the download URL for 'downloads/BORIS_OCHIENG_OCHOLA_CV.pdf'

            // This can be downloaded directly:
            const xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = (event) => {
                const blob = xhr.response;
                const blobUrl = URL.createObjectURL(blob)
                const link = document.createElement('a')
                link.href = blobUrl
                link.download = 'BORIS_OCHIENG_OCHOLA_CV.pdf'
                link.click()
            };
            xhr.open('GET', url);
            xhr.send();
        })
        .catch((error) => {
            // Handle any errors
            switch (error.code) {
                case 'storage/object-not-found':
                    // File doesn't exist
                    break;
                case 'storage/unauthorized':
                    // User doesn't have permission to access the object
                    break;
                case 'storage/unauthenticated':
                    //USer is unauthenticated
                    break;
                case 'storage/unknown':
                    // Unknown error occurred, inspect the server response
                    break;
                case 'storage/invalid-url':
                    //Invalid URL
                    break;
            }
        });
});