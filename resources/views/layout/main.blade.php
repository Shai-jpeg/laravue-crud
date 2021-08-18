<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intern Lists</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gradient-to-b from-gray-400 to-green-500 opacity-75 inset-0 z-0">
    <div class="w-screen flex flex-col items-center justify-center">
    <div class="container">
      
        @yield('page-content')
           
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>