<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use DataTables;

class CountryController extends Controller
{
    public function index()
    {
        return view('backend.country');
    }

    public function getlistData(Request $request)
    {

        $data = Country::latest()->get();

        return  Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function(Country $country) {
                        return $country->name;
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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
