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
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index()
    {
        if(Auth::user()->role=="admin"){
        // $users=User::orderBy('id','ASC')->paginate(1);
        $users=User::all();
        return view('back.user.index')->with('users',$users);
        }
        else
        {
        return view('font.404');  
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('user.create');
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

        
        // $file = $request->file('photo');
        // $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        // Storage::disk('local')->put('public/' . $path, file_get_contents($file));
      
        $path = $request->file('photo')->store('images', 'public');

        User::create([
            'photo' => $path,
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->photo = $path;
        $user['password']=Hash::make($request->password);
        $user->save();

        return back()->with('message', "the product has been created");

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
    public function update(Request $request, User $user)
    {
       $data = $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'email'=>'string|required',
            'role'=>'required|in:admin,user',
            'status'=>'required|in:active,inactive',
            // 'photo'=>'nullable|string|required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'photo' => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);
        

        $path = $request->file('photo')->store('images', 'public');
    
        // $file = $request->file('photo');
        // $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        // Storage::disk('local')->put('public/' . $path, file_get_contents($file));
        
        $user->update([
        'name' => $request->name,
        'email' => $request->priceReduction,
        'role' => $request->role,
        'status' => $request->status,
        'photo' => $path,
        ]);

       
        
        // User::update([
        //     'photo' => $path,
        // ]);
        
        // $user->fill($data)->save();
        return redirect()->route('liste')->with('success', 'the user has been updated');

    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    { 
        $user->delete();
        return redirect()->route('liste')->with('success', 'the user has been deleted');
    }
}
