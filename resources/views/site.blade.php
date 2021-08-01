@extends('header')
@section('content')
<div class="container">
    <h1 class="">О сайте</h1>
    Это чат который в реальном времени отправляет и принимает сообщения. Я использовал Laravel, JavaScript и Pusher API для его реализаций. <br> <a href="https://github.com/UtebayPi/Live-chat"  target="_blank">Github код сайта</a> <br>
    Сообщения не хранятся в базе данных, потому испаряются при перезагрузке. Дизайн сайта делал используя примеры из <a href='https://getbootstrap.com/docs/5.0/examples/' target="_blank">Bootstrap Examples.</a><br>
    Если нашли какой то баг на этом сайте, сообщите мне. Мои контакты в секций "Об о мне".
  </div>

@endsection
