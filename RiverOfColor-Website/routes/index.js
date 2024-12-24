const express = require('express');
const router = express.Router();

// Home Route
router.get('/', (req, res) => {
    res.render('index', { title: 'Consulting Business' });
});

// About Route
router.get('/about', (req, res) => {
    res.render('about', { title: 'About Us' });
});

// Contact Route
router.get('/contact', (req, res) => {
    res.render('contact', { title: 'Contact Us' });
});

module.exports = router;
