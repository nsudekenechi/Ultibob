// const { readFile } = require("fs/promises");
const nodemailer = require("nodemailer");
// const path = require("path")
// const ejs = require("ejs");

const transporter = nodemailer.createTransport({
    // host: process.env.EMAIL_HOST,
    // port: process.env.EMAIL_PORT,
    // secure: true,
    service: "gmail",
    auth: {
        user: process.env.EMAIL_ADDRESS,
        pass: process.env.EMAIL_PASSWORD
    }
})
const sendEmail = async (from, subject, message) => {
    try {
        const mailOptions = {
            from,
            to: process.env.EMAIL_ADDRESS,
            subject,
            text: message
        };
        const email = await transporter.sendMail(mailOptions);
        return true
    } catch (err) {
        console.error(err);
        throw err;
    }
}

module.exports = sendEmail