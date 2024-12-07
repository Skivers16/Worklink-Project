<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkLink</title>
    <!-- Link ke Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Sonsie+One&display=swap');

        body {
            /*font-family: 'Arial', sans-serif;*/
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .hero {
            display: flex;
            flex-direction: row;
            /*align-items: center;*/
            justify-content: space-between;
            /*padding: 50px 10%;*/
            height: 100vh;
            margin-left: 50px;
        }
        .hero-text {
            max-width: 50%;
        }
        .hero-text .logo-container {
            display: flex;
            position: relative;
            top: 60px;
            left: 30px;
            margin-bottom: 20px;
        }
        .hero-text .logo-container img {
            height: 90px;
            margin-right: 10px;
        }
        .hero-text .logo-container span {
            font-family: "Sonsie One", system-ui;
            font-size: 3rem;
            font-weight: bold;
            color: #739AB9;
            position: relative;
            top: 14px;
        }
        .hero-text h1 {
            font-family: "Sonsie One", system-ui;
            font-size: 3rem;
            font-weight: bold;
            color: #739AB9;
            margin-bottom: 20px;
            position: relative;
            top: 150px;
            left: 120px;
        }
        .hero-buttons {
            margin-top: 20px;
        }
        .hero-buttons .btn {
            margin-right: 15px;
            font-size: 1.2rem;
        }
        .hero-image {
            position: relative;
            max-width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hero-image img {
            width: 100%;
            max-width: 400px;
            height: auto;
        }
        .circle {
            position: absolute;
            border-radius: 80%;
            opacity: 0.7;
        }
        .circle-orange {
            background-color: #ff8c00;
            width: 200px;
            height: 200px;
            top: 80px;
            right: 50px;
        }
        .circle-blue {
            background-color: #87cefa;
            width: 150px;
            height: 150px;
            top: 50px;
            right: 150px;
        }
        .circle-dark-blue {
            background-color: #4682b4;
            width: 180px;
            height: 180px;
            bottom: 30px;
            right: 100px;
        }
    </style>
</head>
<body>

<div class="container-fluid hero">
    <!-- Bagian Teks -->
    <div class="hero-text">
        <div class="logo-container">
            <img src="/img/logoworklink.png" alt="WorkLink Logo">
            <span>WorkLink</span>
        </div>
        <h1 >The Place</h1>
        <h1 >Where Careers</h1>
        <h1 >Begin........</h1>
        <div class="hero-buttons">
            <a href="/regis" class="btn btn-warning text-white">Register</a>
            <a href="/login" class="btn btn-outline-primary">Log in</a>
        </div>
    </div>
    
    <!-- Bagian Gambar -->
    <div class="hero-image">
        <div class="circle circle-orange"></div>
        <div class="circle circle-blue"></div>
        <div class="circle circle-dark-blue"></div>
        <img src="/img/Ilus Awal.png" alt="Career Image">
    </div>
</div>

<!-- Link ke Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
