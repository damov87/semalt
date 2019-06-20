@extends ('layout')

@section('title', 'Home')

@section ('content')
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

  <div class="container col-lg-3 offset-lg-1">
    <ul type="none">
    <h1 class="text-success text-center">Алгоритмы:</h1>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/1">Задание №1</a></li>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/2">Задание №2</a></li>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/3">Задание №3</a></li>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/4">Задание №4</a></li>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/5">Задание №5</a></li>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/6">Задание №6</a></li>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/7">Задание №7</a></li>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="/tasks/8">Задание №8</a></li>
    </ul>
  </div>

@endsection