<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Cinema;

class CinemaController extends Controller
{
    public function index()
    {
        return view('backend.cinema');
    }

    public function getlistData(Request $request)
    {

        $data = Cinema::latest()->get();

        return  Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('logo', function(Cinema $cinema) {
                        $photo = "<img src='".$cinema->logo."' alt='image' style='object-fit:cover' />";
                        return $photo;
                    })
                    ->addColumn('name', function(Cinema $cinema) {
                        return $cinema->name;
                    })
                    ->addColumn('action', function($row){
                        
                        $btn = "<div class=''>";
                        
                        $btn .= "<button class='btn btn-inverse-primary btn-icon mr-2' data-toggle='tooltip' data-placement='top' title='Show More'>
                                    <i class='ti-info font-weight-bolder'></i>
                                </button>";

                        $btn .= "<button type='button' class='btn btn-inverse-warning btn-icon mr-2' data-toggle='tooltip' data-placement='top' title='Edit'>
                                    <i class='ti-pencil font-weight-bolder'></i>
                                </button>";
                        $btn .= "<button type='button' class='btn btn-inverse-danger btn-icon mr-2' data-toggle='tooltip' data-placement='top' title='Remove'>
                                    <i class='ti-close font-weight-bolder'></i>
                                </button>";

                        $btn .="</div>";
                        
                        return $btn;
                    })
                    ->rawColumns(['logo'], ['name'], ['action'])
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
