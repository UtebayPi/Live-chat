<!DOCTYPE html>
<head>
  <title>Live-chat от Парасата!</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
        <li class="nav-item"><a href="/site" class="nav-link">О сайте</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Об о мне</a></li>
        <li class="nav-item"><a href="https://github.com/UtebayPi/Live-chat" class="nav-link" target="_blank">Github код сайта</a></li>
        <li class="nav-item"><a href="https://pusher.com/" class="nav-link" target="_blank">Pusher API</a></li>
      </ul>
    </header>
  </div>
@yield('content')
</body>