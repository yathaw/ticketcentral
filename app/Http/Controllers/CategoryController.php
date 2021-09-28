<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category');
    }

    public function getlistData(Request $request)
    {

        $data = Category::latest()->get();

        return  Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function(Category $category) {
                        return $category->name;
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

