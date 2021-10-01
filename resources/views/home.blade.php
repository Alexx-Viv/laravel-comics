<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DC Comics</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    <div class="container">
    <figure>
      <img src="{{ asset('img/dc-logo.png') }}" alt="DC Comics Logo">
    </figure>
    <ul>
      <li><a href="{{ route('characters') }}">Personaggi</a></li>
      <li><a href="{{ route('comics') }}">Fumetti</a></li>
      <li><a href="{{ route('movies') }}">Film</a></li>
    </ul>
    </div>
  </header>
  <h1>Home</h1>
  <footer>
    <div class="container">
      <div class="button"><a href="">Sign-up now!</a></div>
      <div class="social">
        <a href="">Follow us</a>
        <figure><img src=" {{ asset('img/footer-facebook.png') }}" alt=""></figure>
        <figure><img src=" {{ asset('img/footer-pinterest.png') }}" alt=""></figure>
        <figure><img src=" {{ asset('img/footer-twitter.png') }}" alt=""></figure>
        <figure><img src=" {{ asset('img/footer-youtube.png') }}" alt=""></figure>
      </div>
    </div>
  </footer>
</body>
</html>