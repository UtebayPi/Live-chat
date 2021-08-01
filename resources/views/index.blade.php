@extends('header')
@section('content')
<div class="text-center">
    <h3>Live-Chat от Парасат Утебай. C использованием Laravel и Pusher API.</h3>
</div>
<div class="container d-flex justify-content-center">
  <form class="me-lg-auto d-flex" id='message_form'>
    @csrf
    <button type="submit" class="btn btn-primary mb-3 me-3">Отправить</button>
    <input type="text" id='message_input' size="100" class="form-control mb-3" placeholder="Введите сообщение...">
  </form>

  <div class="me-lg-auto">
    <input type="text" id='username' class="form-control mb-3" placeholder="Введите ваше имя...">
  </div>
</div>

<div class="p-3" id='messages'></div>

<script src="{{mix('js/app.js')}}"></script>
@endsection
