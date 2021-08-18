<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Mini Project</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"/>
    <script src="https://use.fontawesome.com/b494c279b5.js"></script>
 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
 
     <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>

<body class="bg-gray-300">
            <br>
            <div id="app">
                
                    <div class="pull-right right-10">
                    <a class="btn btn-success mr-8 bg-gray-500 text-center m py-2 px-8 rounded hover:bg-green-400  transition" href="{{ route('internlists.create') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
                
                <internlist-component :internlist="{{$internlists}}">


            </div>
               
    
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>
