require("dotenv").config()
const express = require("express")
const cors = require("cors")
const app = express();
const port = process.env.PORT || 30001
// allowing all origins
app.use(cors())
app.use(express.urlencoded({ extended: false }))
app.use(express.json())

// testing 
app.get("/", (req, res) => res.json("Hello, This Works"));

app.use("/api/email", require("./router/email"));

app.listen(port, () => console.log(`http://localhost:${port}`))