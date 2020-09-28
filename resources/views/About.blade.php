<!DOCTYPE html>
<head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body{
        background-image: url('img.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">Dhiazumar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link {{ Request::path() === '/home' ? 'bg-primary' : ''}}" href="/home">Home</a>
            <a class="nav-link {{ Request::path() === '/about' ? 'bg-primary' : ''}}" href="/about">About</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>My Profile</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>
            <strong>Hello. On this occasion, allow me to make an introduction to who I am. My name Dhiazumar Falih Gani Ramadhan, you can call me zumar. I was born in Surabaya, Juli 18th 2003. Currently, I live in Jl.Asem Jaya V 40A, Surabaya.</strong>
            </p>
          </div>
          <div class="col-md-5">
            <p>
            <strong>Speaking of my hobby, playing game is one of my hobby, i can play the game more than 2 hour in one day. Besides that traveling is also one of my hobbies, one of the cities that i often visit is Jogja</strong>
            </p>
          </div>
        </div>
      </div>
    </section>
</body>