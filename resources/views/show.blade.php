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
 
</head>

<body class="bg-gradient-to-b from-gray-400 to-green-500 opacity-75 inset-0 z-0">
    <div class="py-32 px-10 min-h-screen ">
        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-success bg-gray-500 text-center m py-2 px-8 rounded hover:bg-green-400 transition"  href="{{  route('internlist.index') }}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> </a>
            </div>
        </div>
    </div>
    <br> <br>

    <div class="row">
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Last Name:</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                >        {{ $internlists->last_name}}</center>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">First Name:</strong>
         <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
         >       {{ $internlists->first_name }} </center>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Contact Number:</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
         >       {{ $internlists->contact_number }}</center>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Email Address:</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                >        {{ $internlists->email_address }}</center>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Department:</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                >        {{ $internlists->department }}</center>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Position:</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                >      {{ $internlists->position }}</center>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Intern Start:</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                >         {{ $internlists->intern_start}}</center>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Intern End:</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
         >       {{ $internlists->intern_end }} </center>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Required OJT Hours</strong>
                <center  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
         >       {{ $internlists->required_hours }} </center>
            </div>
        </div>
        <br>
    </div>
        </div>
    </div>
</body>
</html>