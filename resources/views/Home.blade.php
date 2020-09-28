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
</body>