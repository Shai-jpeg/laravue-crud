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
    <div class="col-lg-5 margin-tb">
        
        <div class="pull-right">
            <a class="btn btn-success bg-gray-500 text-center m py-2 px-8 rounded hover:bg-green-400 transition" href="{{ route('internlists.index') }}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Kindly please enter information of Intern</strong>
        <ul>
            @foreach ($errors->all() as $error)
          
            @endforeach
        </ul>
    </div>
@endif

<form class="bg-gradient-green-500 to-gray-300 shadow-md rounded px-8 pt-5 pb-5 mb-2" action="{{ route('internlists.store')}}" method="POST">
    @csrf

    <div class="row">
        
           <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Last Name</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="text" name="last_name" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">First Name</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="first_name" />
      </div>
    </div>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Date of Birth</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="date" name="date_of_birth" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Contact Number</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="contact_number" />
      </div>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Email Address</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="email" name="email_address" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Department</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="department" />
      </div>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Required OJT Hours</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="text" name="required_hours" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Position</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="position" />
      </div>
    </div>

 <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Address</label>
      <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
      type="text" name="address"/>
    </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Intern Start</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="date" name="intern_start" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Intern End</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="date" name="intern_end" />
      </div>
    </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button  
            class="w-full px-2 py-2 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-gray-500 hover:bg-green-900 hover:shadow-lg focus:outline-none"
             type="submit" >Add</button>
        </div>
    </div>

</form>  
        </div>
    </div>
</body>
</html>