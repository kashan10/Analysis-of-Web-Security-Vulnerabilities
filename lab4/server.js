const express = require('express');
const jwt = require('jsonwebtoken');
const app = express();
const secretKey = "mysecretkey";

// Login route
app.post('/login', (req, res) => {
    // Create JWT payload
    const payload = {
        userId: 1,
        username: 'example'
    };

    // Sign the JWT
    const token = jwt.sign(payload, secretKey);

    // Send the JWT to the client
    res.json({ token });
});

// Protected resource route
app.get('/checksignature', (req, res) => {
    // Get the JWT from the request headers
    const token = req.headers['x-access-token'];

    // Verify the JWT
    jwt.verify(token, secretKey, (err, decoded) => {
        if (err) {
            // Send error message if JWT is not valid
            res.json({ message: 'Invalid token' });
        } else {
            // Send success message if JWT is valid
            res.json({ message: 'Access granted' });
        }
    });
});
// Unprotected resource route
app.get('/wochecksignature', (req, res) => {
    // Get the JWT from the request headers
    const token = req.headers['x-access-token'];

    // Decode the JWT
    const decoded = jwt.decode(token);

    if(decoded){
        // Send success message if JWT is valid
        res.json({ message: 'Access granted' });
    }else{
        // Send error message if JWT is not valid
        res.json({ message: 'Invalid token' });
    }
});
// This code still gets the JWT from the request headers and calls the decode() method to decode it, but it does not perform any validation or verification on the JWT. It does not check the signature, expiration date, or any other information in the JWT.

// It's important to note that using this method is not secure and can expose your application to various types of attacks. You should not rely on the decode() method alone to authenticate users or protect sensitive resources.

// As I mentioned before, It is not safe to use the decode() method instead of the verify() method. Because this method does not check the signature or the expiration date, you can't trust the information inside the payload if you didn't verify the JWT.

// It's important to properly validate and verify JWTs to ensure the authenticity and integrity of the information contained in them, and to protect your application from potential attacks.

app.listen(3000, () => {
    console.log('Server started on port 3000');
});
