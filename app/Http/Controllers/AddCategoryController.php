<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddCategoryModel;

class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('navbar.addcategory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "catname"=>'required'
        ]);

        $data=array(
            "cat_name"=>$request->catname
        );

        //here we write query dor data entry
        AddCategoryModel::create($data);
        return redirect('/navbar.managecategory')->with('success','Category successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data=AddCategoryModel::all();
       return view('/navbar.managecategory',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editcate=AddCategoryModel::where('id',$id)->first();
        return view('navbar.editcategory',['editcate'=>$editcate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $data=array(
            "cat_name"=>$request->catname
        );

        
    //ORM elequent query builiding here
    AddCategoryModel::where('id',$id)->update($data);
    return redirect('/navbar.managecategory')->with('updatesuc','Update Category Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // here we write code for delete the gallery image using id
        AddCategoryModel::where('id',$id)->delete();
        return redirect('/navbar.managecategory')->with('dele','Category deleted Successfully');
    }
}
