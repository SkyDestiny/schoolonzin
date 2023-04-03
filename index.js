const express = require('express');
const app = express();
const PORT = process.env.PORT || 80;
const path = require('path')
app.use(express.static(path.join(__dirname, 'public')));
const server = app.listen(PORT, () => console.log(`Server listening on port: ${PORT}`));