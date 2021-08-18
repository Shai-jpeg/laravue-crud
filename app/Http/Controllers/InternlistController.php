<?php

namespace App\Http\Controllers;

use App\Models\Internlist;
use Illuminate\Http\Request;

class InternlistController extends Controller
{
    //

    public function index()
    {

        $internlists = Internlist::latest()->paginate(10);

        return view('create', compact('internlists'))
        ->with('i', (request()->input('page',1)-1) *10);
    }


    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'last_name' => 'required',
            'first_name' => 'required',
            'date_of_birth' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'department' => 'required',
            'position' => 'required',
            'intern_start'=> 'required',
            'intern_end' => 'required',
            'required_hours' => 'required'
        ]);

        Internlist::create($request->all());

        return redirect()->route('internlists')
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
            'department' =>  $request->department,
            'position' =>  $request->position,
            'intern_start'=>  $request->intern_start,
            'intern_end' =>  $request->intern_end,
            'requried_hours' => $request->required_ojt_hours,

        );

            Internlist::whereId($id)->update($internlists);
        return redirect()->route('index')
            ->with('success', 'Updated successfully');
        
    }
    public function destroy($id)
    {
        $internlists = Internlist::findOrfail($id);
        $internlists->delete();

        return redirect()->route('index')
            ->with('success', 'Deleted successfully');
    }    
}
