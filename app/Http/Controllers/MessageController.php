<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index(){
        $messages=Message::paginate(20);
        return view('back.message.index')->with('messages',$messages);
    }
    public function messageFive()
    {
        $message=Message::whereNull('read_at')->limit(5)->get();
        return response()->json($message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        $message = new Message();
            return view('font.contact')->with('message',$message);
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
            'name'=>'string|required|min:2',
            'email'=>'email|required',
            'message'=>'required|min:20|max:200',
            'subject'=>'string|required',
            'phone'=>'numeric|required'
        ]);
        // return $request->all();

        // $message=Message::create($request->all());
            // return $message; 
        // $data=array();
        // $data['url']=route('message.show',$message->id);
        // $data['date']=$message->created_at->format('F d, Y h:i A');
        // $data['name']=$message->name;
        // $data['email']=$message->email;
        // $data['phone']=$message->phone; 
        // $data['message']=$message->message;
        // $data['subject']=$message->subject;
        // $data['photo']=Auth()->user()->photo;
        // $data->save();  
        // return $data;    
        // event(new MessageSent($data));
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->subject = $request->subject;
        $message->save();
        
       return redirect()->route('contact.create')->with('success', 'message has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $message=Message::find($id);
        if($message){
            $message->read_at=\Carbon\Carbon::now();
            $message->save();
            return view('back.message.show')->with('message',$message);
        }
        else{
            return back();
        }
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
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('message.index')->with('success', 'Le message a bien été suprimé');
    }
}
