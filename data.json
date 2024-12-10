const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = process.env.PORT || 3000;

// Middleware to parse JSON
app.use(bodyParser.json());

// Route to receive the message from ESP32
app.post('/receive_message', (req, res) => {
  const message = req.body.message;
  if (message) {
    // Handle the message (e.g., save it to a file or send it to another service)
    console.log("Message received: ", message);
    res.status(200).send('Message received');
  } else {
    res.status(400).send('No message sent');
  }
});

// Start the server
app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
