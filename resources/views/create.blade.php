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
 
     <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>

          
<body class="bg-gradient-to-b from-gray-400 to-green-500 opacity-75 inset-0 z-0">
    <div class="py-32 px-10 min-h-screen ">
        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
            
            
            <div id="app">
            
<br>
<section>
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
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Last Name:</strong>
                <input type="text" name="last_name"  
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
               
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                <strong class="block text-gray-700 text-sm font-bold mb-2">First Name:</strong>
                <input type="text" name="first_name"  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                
               
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Date of Birth:</strong>
                <input type="date" name="date_of_birth"  
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
               
                
                />
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Contact Number:</strong>
                <input type="text" name="contact_number"  
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
               
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Email Address:</strong>
                <input type="email" name="email_address"
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
               
                
                />
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Complete Address:</strong>
                <input type="address" name="address"
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                
                
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Department:</strong>
                <input type="text" name="department"  
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
           
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Position:</strong>
                <input type="text" name="position"  
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
               
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Intern Start:</strong>
                <input type="date" name="intern_start" 
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
              
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Intern End:</strong>
                <input type="date" name="intern_end"
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
              
                />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="block text-gray-700 text-sm font-bold mb-2">Required OJT hours:</strong>
                <input type="text" name="required_hours"  
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-purple-500"
                
                />
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button  
            class="w-full px-2 py-2 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-gray-500 hover:bg-green-900 hover:shadow-lg focus:outline-none" type="submit" >Add</button>
        </div>
    </div>

</form>  
</section>
<br>

               <intern-component/>
               
            <!--kapag po nilalagyan ng :internlist="$internlist" for pagination po di na lumalabas yung table-->
            </div>
            </div>
            </div>
               
    
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
