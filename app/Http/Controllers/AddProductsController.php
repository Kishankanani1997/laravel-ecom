<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddProductsModel; 
use DB;

class AddProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod=DB::table('add_category_tbl')->get();
        $produ=DB::table('add_subcategory_tbl')->get();
        return view('navbar.addproducts',["prod"=>$prod,"produ"=>$produ]); 

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
            "subcatename"=>'required',
            "proname"=>'required',
            "proimage"=>'required',
            "prodetails"=>'required',
            "prooldprice"=>'required',
            "pronewprice"=>'required',
            "proqty"=>'required'
        ]);

        //here we write orm elequent query
        $path=rand().'.'.$request->proimage->extension();
        $request->proimage->move(public_path('assets/uploads/product'),$path);

        $data=array(
            "cat_id"=>$request->catename,
            "subcat_id"=>$request->subcatename,
            "pro_name"=>$request->proname,
            "pro_image"=>$path,
            "pro_details"=>$request->prodetails,
            "pro_oldprice"=>$request->prooldprice,
            "pro_newprice"=>$request->pronewprice,
            "pro_qty"=>$request->proqty
        );

        //here we write query dor data entry
        // dd($data);
        AddProductsModel::create($data);
        return redirect('/navbar.manageproducts')->with('success','Product successfully added');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB::table('add_products_tbl')
            ->join('add_category_tbl','add_category_tbl.id','=','add_products_tbl.cat_id')->join('add_subcategory_tbl','add_subcategory_tbl.id','=','add_products_tbl.subcat_id')
            ->select('add_products_tbl.*','add_category_tbl.cat_name','add_subcategory_tbl.subcat_name')->get();

        return view('navbar.manageproducts',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editprod=AddProductsModel::where('id',$id)->first();
        return view('navbar.editproducts',['editprod'=>$editprod]);
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
        //here we write orm elequent query
        $path=rand().'.'.$request->proimage->extension();
        $request->proimage->move(public_path('assets/uploads/product'),$path);

        $data=array(
            "cat_id"=>$request->catename,
            "subcat_id"=>$request->subcatename,
            "pro_name"=>$request->proname,
            "pro_image"=>$path,
            "pro_deatils"=>$request->prodetails,
            "pro_oldprice"=>$request->prooldprice,
            "pro_newprice"=>$request->pronewprice,
            "pro_qty"=>$request->proqty
        );
        
    //ORM elequent query builiding here
    AddProductsModel::where('id',$id)->update($data);
    return redirect('/navbar.manageproducts')->with('updatesuc','Update SubCategory Successfully');

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
         AddProductsModel::where('id',$id)->delete();
         return redirect('/navbar.manageproducts')->with('dele','Category deleted Successfully');
    }
}
