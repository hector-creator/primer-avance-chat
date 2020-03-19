<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scalable=1.0, minimum-scale=1.0 shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<style>
.list-group{
  overflow-y: scroll;
  height: 200px;
}
</style>

<title >Sala de chat</title>
</head>

<body>
  <div class="container">
<div class="row" id="app">
  <div class="offset-4 col-4 offset-sm-1 col-sm-10">
    <li class="list-group-item active">Sala de chat
      <span class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span></li>
    <div class="badge badge-pill badge-primary">
@{{ typing }}
    </div>
    <ul class="list-group" v-chat-scroll>

          <message
          v-for="value, index in chat.message"
          :key = value.index
          :color = chat.color[index]
          :user = chat.user[index]
          :time = chat.time[index]
          >
          @{{ value }}</message>
    </ul>
    <input type="text" class="form-control" placeholder="Escribe tu mensaje aquí..."
     v-model='message' @keyup.enter='send'>
  </div>

</div>
  </div>

  <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
