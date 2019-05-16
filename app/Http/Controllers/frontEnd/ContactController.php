<?php

namespace App\Http\Controllers\frontEnd;
use Mail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mymodel\Contact;
use App\Mymodel\Subscribe;
use App\Mymodel\Officeinfo;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $officeInfo = Officeinfo::findorfail(1);

       return view('frontEnd.contactus',compact('officeInfo'));
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
        $this->validate($request,[
            'g-recaptcha-response'=>'required|captcha',
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
    // return ($request->all());
        $message  = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        Mail::send('email',
        array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'user_message' => $request->message
        ), function($message)
    {
        $message->from('saquib.gt@gmail.com');
        $message->to('nasimabegume12@gmail.com', 'Admin')->subject('Contact Message');
    });
        // Mail::to("nasimabegume12@gmail.com")->send(new WelcomeMail($data));
        return redirect('/contact-us')->with('success','Message Sent Successfully');;
        // return response()->json('success');
    }
    public function subscribe(Request $request){
      $data = new Subscribe();
      $data->email = $request->email;
      $data->save();
      return response()->json('Success');
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
