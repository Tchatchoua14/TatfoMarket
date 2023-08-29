<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users=User::orderBy('id','ASC')->paginate(10);
        return view('back.user.index')->with('users',$users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'email'=>'string|required|unique:users',
            'password'=>'string|required',
            'role'=>'required|in:admin,user',
            'status'=>'required|in:active,inactive',
            'photo'=>'nullable|string|required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        
        $file = $request->file('photo');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $path, file_get_contents($file));
      
        
        User::create([
            'photo' => $path,
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->description = $request->description;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->photo = $request->photo;
        $user['password']=Hash::make($request->password);
        $user->save();

        return back()->with('message', "L'utilisateur a bien été creée !");

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
    public function edit(Request $request)
    {
        // $user=User::findOrFail($id);
        // return view('back.user.edit')->with('user',$user);
        if(Auth::user()->role=="admin"){
        return view('back.user.edit', ['user' => $request->user(),]);
        }
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
        $user=User::findOrFail($id);
        $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'email'=>'string|required',
            'role'=>'required|in:admin,user',
            'status'=>'required|in:active,inactive',
            'photo'=>'nullable|string|required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        $file = $request->file('photo');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $path, file_get_contents($file));
      
        
        User::update([
            'photo' => $path,
        ]);
        
        $user->fill($data)->save();
        // if($status){
        //     request()->session()->flash('success','Successfully updated');
        // }
        // else{
        //     request()->session()->flash('error','Error occured while updating');
        // }
        // return redirect()->route('users.index');
        // return back()->with('message', "L'utilisateur a bien été modifiée !");
        return Redirect::route('back.user.edit')->with('status', 'profile-updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=User::findorFail($id);
        $delete->delete();
    }
}
