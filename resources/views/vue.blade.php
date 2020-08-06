<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/vue.css') }}">
    
</head>
<body>
    <h1>Blade</h1>
    <div id="app">
      <router-link to="/" class="navbar-item">Home</router-link>
      <router-link to="/vue1" class="navbar-item">Vue1</router-link>
      <router-link to="/vue2" class="navbar-item">Vue2</router-link>
      <router-view></router-view>
    </div>
    <script type="text/javascript"  src="{{ asset('js/vue.js') }}"></script>
</body>
</html>