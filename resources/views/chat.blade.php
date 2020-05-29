<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
  <div class="offset-5 col-5 offset-sm-1 col-sm-10">
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

  <a class="btn btn-primary" href="/home" role="button">Ir al inicio</a>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
