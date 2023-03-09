<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddSubCategoryModel;
use DB;

class AddSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=DB::table('add_category_tbl')->get();
        return view('navbar.addsubcategory',["category"=>$category]);
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
            "catename"=>'required',
            "subcatname"=>'required'
        ]);

        $data=array(
            "cat_id"=>$request->catename,
            "subcat_name"=>$request->subcatname
        );

        //here we write query dor data entry
        AddSubCategoryModel::create($data);
        return redirect('/navbar.managesubcategory')->with('success','SubCategory successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //here we join two data or show all subcategory data
            // $users = DB::table('users')
            // ->join('contacts', 'users.id', '=', 'contacts.user_id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            // ->select('users.*', 'contacts.phone', 'orders.price')
            // ->get();

            $data=DB::table('add_subcategory_tbl')
            ->join('add_category_tbl','add_category_tbl.id','=','add_subcategory_tbl.cat_id')
            ->select('add_subcategory_tbl.*','add_category_tbl.cat_name')->get();

            return view('/navbar.managesubcategory',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editsubcat=AddSubCategoryModel::where('id',$id)->first();
        return view('navbar.editsubcategory',['editsubcat'=>$editsubcat]);
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
            "cat_id"=>$request->catename,
            "subcat_name"=>$request->subcatname
        );

        
    //ORM elequent query builiding here
    AddSubCategoryModel::where('id',$id)->update($data);
    return redirect('/navbar.managesubcategory')->with('updatesuc','Update SubCategory Successfully');
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
        AddSubCategoryModel::where('id',$id)->delete();
        return redirect('/navbar.managesubcategory')->with('dele','Category deleted Successfully');
    }
}
