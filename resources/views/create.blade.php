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
               <!-- <internlist-component :internlist= /> -->


               <br><br>     
               @if ($message = Session::get('success'))
                   <div class="alert alert-success">
                       <p></p>
                   </div>
               @endif
               <div class="overflow-x-auto">
                  
                           <div class="bg-white shadow-md rounded ">
                               <table class="border-collapse w-full">
                       <thead>
                           <tr class=>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ID</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Last Name</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">First Name</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Contact Number</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Department</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Position</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Intern Start</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Intern End</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Required OJT Hours</th>
                       <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Action</th>
                   </tr>
               </thead>
           <tbody>
                   @foreach ( $internlists as $internlist )
                       <tr class="p-3">
                           <div class="flex align-items-center">
                         <td class="p-3">{{ $internlist->id }}</td>
                         <td class="p-3">{{ $internlist->last_name }}</td>
                         <td class="p-3">{{ $internlist->first_name }}</td>
                         <td class="p-3">{{ $internlist->contact_number }}</td>
                         <td class="p-3">{{ $internlist->department }}</td>
                         <td class="p-3">{{ $internlist->position }}</td>
                         <td class="p-3">{{ $internlist->intern_start }}</td>
                         <td class="p-3">{{ $internlist->intern_end }}</td>
                         <td class="p-3">{{ $internlist->required_hours }}</td>
           
                           <td>
                               <form action="{{ route('internlists.destroy', $internlist->id) }}" method="POST">
           
                                   <button type="submit" class="bg-gray-500 text-center m py-2 px-1 rounded hover:bg-green-400  transition">
                                       <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                
                                    @method('DELETE')
                                    @csrf
           
                                   <a class="btn btn-info bg-gray-500 text-center m py-2 px-1 rounded hover:bg-green-400  transition" href="{{ route('internlists.show', $internlist->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>   
           
                               <a class="btn btn-primary bg-gray-500 text-center m py-2 px-1 rounded hover:bg-green-400 transition" href="{{ route('internlists.edit', $internlist->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                               </form>
                           </td>
                       </tr>
                   @endforeach
               </table>
         <div class="p-2 container mx-auto max-w-full">
             {!!  $internlists->links() !!}
                           </div>
            </div>
               
    
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>
