<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PioneerWheels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background: #2a2929;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.svg"  width="60" height="40" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span>menu</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="index-page">
                    <a class="nav-link text-center" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item" id="about-page">
                    <a class="nav-link text-center" href="about.php">About</a>
                </li>
                <li class="nav-item" id="services-page">
                    <a class="nav-link text-center" href="">Services</a>
                </li>
                <li class="nav-item" id="contact-page">
                    <a class="nav-link text-center" href="">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>