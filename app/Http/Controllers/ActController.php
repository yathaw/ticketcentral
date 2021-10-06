<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Act;

class ActController extends Controller
{

    public function index()
    {
        // $acts = Act::all();

        $actors = Act::where('status', '=', 'Actor')->get();
        $actresses = Act::where('status','=', 'Actress')->get();
        $directors = Act::where('status','=', 'Director')->get();

        return view('backend.act.index',compact('actors', 'actresses', 'directors'));
        
    }

    public function create()
    {
        return view('backend.act.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            "name"  =>  ['required', 'string', 'max:255', 'unique:acts'],
            "photo" =>  ['required', 'mimes:jpg,jpeg,png,bmp']
        ]);

        if($validator){
           $name = $request->name;
           $gender = $request->gender;
           $dob = $request->dob;
           $pob = $request->pob;
           $type = $request->type;
           $bio = $request->bio;

           // Upload File
           $photo = $request->photo;
           $extension = $photo->getClientOriginalExtension(); // png || jpeg || jpg
           // $filename = rand(11111,99999);
           $filename = time();

           $fileToStore = $filename.'.'.$extension; // 1111.png
           // php artisan storage:link
           $photo->move(public_path('/storage/act/'),$fileToStore);

           $dbpath = '/storage/act/'.$fileToStore; // storage/act/1111.png

           // ORM => object relational mapping
           $act = new Act();
           $act->name = $name;
           $act->gender = $gender;
           $act->dob = $dob;
           $act->pob = $pob;
           $act->bio = $bio;
           $act->status = $type;
           $act->photo = $dbpath;
           $act->save();

           // die();

           return Redirect()->route('master.act.index')->with('successMsg',"New Act is stored.");
        }else{
            return Redirect::back()->withErrors($validator);
        }
    }

    public function show(Act $act)
    {
        // $act = Act::find($id);

        return view('backend.act.detail',compact('act'));
    }

    public function edit(Act $act)
    {
        return view('backend.act.edit',compact('act'));
    }

    public function update(Request $request, Act $act)
    {
        $name = $request->name;
        $gender = $request->gender;
        $dob = $request->dob;
        $pob = $request->pob;
        $type = $request->type;
        $bio = $request->bio;

        $oldphoto = $request->oldphoto;

        if($request->hasFile('photo')){
            // Upload File
            $photo = $request->photo;
            $extension = $photo->getClientOriginalExtension(); // png || jpeg || jpg
            // $filename = rand(11111,99999);
            $filename = time();

            $fileToStore = $filename.'.'.$extension; // 1111.png
               // php artisan storage:link
            $photo->move(public_path('/storage/act/'),$fileToStore);

            $dbpath = '/storage/act/'.$fileToStore; // storage/act/1111.png
        }else{
            $dbpath = $oldphoto;
        }

        $act->name = $name;
        $act->gender = $gender;
        $act->dob = $dob;
        $act->pob = $pob;
        $act->bio = $bio;
        $act->status = $type;
        $act->photo = $dbpath;
        $act->save();

        return Redirect()->route('master.act.index')->with('successMsg',"Existing Act is updated.");
    }

    public function destroy(Act $act)
    {
        if(\File::exists(public_path($act->photo))){
            \File::delete(public_path($act->photo));
        }

        $act->delete();

        return response()->json(['success'=>'Act <b> DELETED </b> successfully.']);
    }
}
