const sendEmail = require("../config/nodemailer")
const sendContactEmail = async (req, res) => {
    const { name, email, message } = req.body;
    if (!name || !email || !message) return res.status(400).json("All inputs are required")
    const send = await sendEmail(`${name}<${email}>`, `You Got A New Email From ${name}`, message)
    if (send) {
        return res.json("Email Sent!")
    }
}

module.exports = {
    sendContactEmail
}