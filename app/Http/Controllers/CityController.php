<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;

use Illuminate\Http\Request;
use DataTables;

class CityController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('name')->get();
        return view('backend.city',compact('countries'));
    }

    public function getlistData(Request $request)
    {

        $data = City::latest()->get();

        return  Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function(City $city) {
                        return $city->name;
                    })
                    ->addColumn('country', function(City $city) {
                        return $city->country->name;
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
                    ->rawColumns(['name'], ['country'], ['action'])
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
