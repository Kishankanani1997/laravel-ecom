<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
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
            'fname'=>'required',
            'lname'=>'required',
            'number'=>'required',
            'city'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $data=array(
          "fname"=>$request->fname,
          "lname"=>$request->lname,
          "number"=>$request->number,
          "city"=>$request->city,
          "email"=>$request->email,
          "message"=>$request->message,
        );

        ContactModel::create($data);
        Mail::to('kpkishanpatel990@gmail.com')->send(new SendEmail($data));
        return redirect('contact')->with('success','Inquiry Successfully Submitted we will get you shortly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
