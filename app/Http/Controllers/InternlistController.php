<?php

namespace App\Http\Controllers;

use App\Models\Internlist;
use App\Http\Resources\InternlistResource;
use Illuminate\Http\Request;

class InternlistController extends Controller
{
    //

    public function index()
    {

        $paginate = request('paginate',10);
        $search_term = request('search', '');

        $internlists = Internlist::latest()
        ->search(trim($search_term))
        ->paginate($paginate);
        return InternlistResource::collection($internlists);
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'last_name' => 'required',
            'first_name' => 'required',
            'date_of_birth' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'address' => 'required',
            'department' => 'required',
            'position' => 'required',
            'intern_start'=> 'required',
            'intern_end' => 'required',
            'required_hours' => 'required'
        ]);

        Internlist::create($request->all());

        return redirect()->route('create')
        ->with('success', 'Created Succesfully');
    }

    public function show($id)
    {
        $internlists = Internlist::findOrfail($id);
        return view('show', compact('internlists'));
    }

    public function edit($id)
    {
        $internlists = Internlist::findOrfail($id);
        return view('edit', compact('internlists'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           
            'last_name' => 'required',
            'first_name' => 'required',
            'date_of_birth' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'address' => 'required',
            'department' => 'required',
            'position' => 'required',
            'intern_start'=> 'required',
            'intern_end' => 'required',
            'required_hours' => 'required',

        ]);

        $internlists=array(
           
            'last_name' =>  $request->last_name,
            'first_name' => $request->first_name,
            'date_of_birth' => $request->date_of_birth,
            'contact_number' =>  $request->contact_number,
            'email_address' =>  $request->email_address,
            'address' => $request->address,
            'department' =>  $request->department,
            'position' =>  $request->position,
            'intern_start'=>  $request->intern_start,
            'intern_end' =>  $request->intern_end,
            'required_hours' => $request->required_hours,

        );

            Internlist::whereId($id)->update($internlists);
        return redirect()->route('create')
            ->with('success', 'Updated successfully');
        
    }
    public function destroy(Internlist $internlists)
    {
     $internlists->delete();
     return response()->noContent();
    
    }    
}
