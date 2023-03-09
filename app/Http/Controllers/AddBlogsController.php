<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddBlogsModel;


class AddBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('navbar.addblogs');
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
            "blogtitle"=>'required',
            "addblog"=>'required',
            "blogdate"=>'required|max:255',
            "blogimage"=>'required|image',
        ]);

        //here we write orm elequent query
        $path=rand().'.'.$request->blogimage->extension();
        $request->blogimage->move(public_path('assets/uploads/blog'),$path);

        $data=array(
            "blogtitle"=>$request->blogtitle,
            "addblog"=>$request->addblog,
            "blogdate"=>$request->blogdate,
            "blogimage"=>$path 
        );

        //ORM elequent query builiding here
        AddBlogsModel::create($data);
        return redirect('/navbar.manageblogs')->with('success','Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddBlogsModel::all();
        return view('navbar.manageblogs',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editblogs=AddBlogsModel::where('id',$id)->first();
        //dd($editblogs);
        return view('navbar.editblogs',['editblogs'=>$editblogs]);
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
        $path=rand().'.'.$request->blogimage->extension();
        $request->blogimage->move(public_path('assets/uploads/blog/'),$path);
        
        $data=array(
            "blogtitle"=>$request->blogtitle,
            "addblog"=>$request->addblog,
            "blogdate"=>$request->blogdate,
            "blogimage"=>$path 
        );

        
    //ORM elequent query builiding here
    AddBlogsModel::where('id',$id)->update($data);
    return redirect('/navbar.manageblogs')->with('blogsuc','Update Image Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddBlogsModel::where('id',$id)->delete();
        return redirect('/navbar.manageblogs')->with("dele","Blog Deleted Successfully");
    }
}
