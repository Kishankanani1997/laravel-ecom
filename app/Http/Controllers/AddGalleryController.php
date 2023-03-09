<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddGalleryModel;

class AddGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('navbar.addgallery');
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
        //here we write validation 
        $request->validate([
            "galleryname"=>'required',
            "uploadimage"=>'required',
        ]);

        //data store in Elequent ORM model
        $path=rand().'.'.$request->uploadimage->extension();
        $request->uploadimage->move(public_path('assets/uploads/gallery/'),$path);
        
        $data=array(
            "galleryname"=>$request->galleryname,
            "uploadimage"=>$path
        );

        
    //ORM elequent query builiding here
    AddGalleryModel::create($data);
    return redirect('/navbar.managegallery')->with('success','Upload Image Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddGalleryModel::all();
        return view('navbar.managegallery',['data'=>$data]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editgall=AddGalleryModel::where('id',$id)->first();
        return view('navbar.editgallery',['editgall'=>$editgall]);
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
        //data store in Elequent ORM model
        $path=rand().'.'.$request->uploadimage->extension();
        $request->uploadimage->move(public_path('assets/uploads/gallery/'),$path);
        
        $data=array(
            "galleryname"=>$request->galleryname,
            "uploadimage"=>$path
        );

        
    //ORM elequent query builiding here
    AddGalleryModel::where('id',$id)->update($data);
    return redirect('/navbar.managegallery')->with('updatesuc','Update Image Successfully');
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
        AddGalleryModel::where('id',$id)->delete();
        return redirect('/navbar.managegallery')->with('dele','Image deleted Successfully');
    }
}
