<!DOCTYPE html>
<html>
<head>
<title>INSAT IAS</title>
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<meta name="viewport" type="text/css" content="width=device-width, initial-scale=1">
<!--TODO DEV ONLY -->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<!-- DEV ONLY -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
 </head>
<body>

<div class="loaders-container">
  <div class="container">
    <div class="wavecontainer">
      <div class="wave"></div>
      <div class="wave"></div>
      <div class="wave"></div>
      <div class="wave"></div>
      <div class="wave"></div>
    </div>
  </div>
</div>

<?php header("HTTP/1.1 200 OK");?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="img/blank.png" alt="IAS"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link about" href="" >About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link activities" href="">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link publications" href="">Publications</a>
            </li>
            <li class="nav-item">
            <a href="" class="nav-link tools">Forms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/membership">Membership</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
            </li>
            </ul>
        </div>
    </div>
    </nav>

    <div id="about" class="overlay myNav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="overlay-content">
    <a href="/about">About Us</a> 

    <a href="/volunteers">Volunteers</a>
    <a href="/participations">Participations</a>
    <a href="/gallery">Gallery</a>
    </div>

    </div>

    <div id="activit" class="overlay myNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="overlay-content">
    <a href="/conferences">Conferences</a>
    <a href="/industrialsVisits">Industrial Visits</a>
    <a href="/workshops">Workshops</a>
	<a href="/events">Events</a>
    <a href="/trainingSessions">Training sessions</a>
    <a href="/getFun">Get Fun</a>

    </div>

    </div>

    <div id="publications" class="overlay myNav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">

    <a href="/magazines">INSAT IEEE Magazine</a>
    <a href="/newsletters">Newsletters</a>
    <a href="/pathways">Pathways</a>
    <a href="/articles">Articles</a>

    </div>

    </div>
    <div id="tools" class="overlay myNav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">

    <a href="/3d">3D Printer</a>
    <a href="/lab"> LabView </a>

    </div>

    </div>


    
