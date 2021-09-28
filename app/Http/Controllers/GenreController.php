<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use DataTables;

class GenreController extends Controller
{
    public function index()
    {
        return view('backend.genre');
    }

    public function getlistData(Request $request)
    {

        $data = Genre::latest()->get();

        return  Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function(Genre $genre) {
                        return $genre->name;
                    })
                    ->addColumn('action', function($row){
                        
                        $btn = "<div class=''>";
                        

                        $btn .= "<button type='button' class='btn btn-inverse-warning btn-icon mr-2' data-toggle='tooltip' data-placement='top' title='Edit'>
                                    <i class='ti-pencil font-weight-bolder'></i>
                                </button>";
                        $btn .= "<button type='button' class='btn btn-inverse-danger btn-icon mr-2' data-toggle='tooltip' data-placement='top' title='Remove'>
                                    <i class='ti-close font-weight-bolder'></i>
                                </button>";

                        $btn .="</div>";
                        
                        return $btn;
                    })
                    ->rawColumns(['name'], ['action'])
                    ->make(true);
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Cinema $cinema)
    {
        //
    }

    public function edit(Cinema $cinema)
    {
        //
    }

    public function update(Request $request, Cinema $cinema)
    {
        //
    }

    public function destroy(Cinema $cinema)
    {
        //
    }
}
