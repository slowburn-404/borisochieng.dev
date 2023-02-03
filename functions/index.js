const functions = require('firebase-functions');
const express = require('express');
const app = express();
const dotenv = require('dotenv');
dotenv.config();
const nodemailer = require('nodemailer');
//create admin object and initialize firebase-admin
const admin = require('firebase-admin');
admin.initializeApp();
const cors = require('cors');
const PORT = process.env.PORT || 5000;

const transporter = nodemailer.createTransport({
    service: process.env.EMAIL_SERVICE,
    host: process.env.EMAIL_HOST,
    port: parseInt(process.env.EMAIL_PORT),
    secure: true,
    auth: {
        user: process.env.EMAIL_ID,
        pass: process.env.EMAIL_PASSWORD
    }
});
// Automatically allow cross-origin requests
app.use(cors({
    origin: true
}));

//middleware to serve static files
app.use(express.static('../public'));
app.use(express.json());

//send get request
app.get('/', (req, res) => {
    res.sendFile(`${__dirname}../public/index.html`);
});
app.post('/', (req, res) => {
    console.log(req.body);
    const mailoptions = {
        from: req.body.email,
        to: process.env.EMAIL_ID,
        subject: req.body.subject,
        text: req.body.subject
    }

    transporter.sendMail(mailoptions, (error, info) => {
        if (error) {
            console.log(error);
            res.send('error');
        } else {
            console.log('Email sent:' + info.response);
            res.send('success');
        }
    })
});
app.listen(PORT, () => {
    console.log('Server is running on port ${PORT}')
});
exports.sendEMail = functions.https.onRequest((app));