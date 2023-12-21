<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Auth::user()->role=="admin"){
            $users = User::all();
            return view('back.user.index')->with('users',$users);
            }
            else
            {
            return view('font.404');  
            }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = new User();

        return view('back.user.create', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            "photo" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",    
        ]);

        // $path = $request->file('photo')->store('images', 'public');
        $file = $request->file('photo');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/images/' . $path, file_get_contents($file));

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->photo = $path;
        $user['password']=Hash::make($request->password); 
        $user->save();

        return redirect()->route('user.index')->with('success', 'the user has been create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $user = User::find($id);

        // return view('backuser.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource. 
     */
    public function edit(string $id)
    {
        //
        $user = User::find($id);
        return view('back.user.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
            "photo" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",    
        ]);
   
        $file = $request->file('photo');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/images/' . $path, file_get_contents($file));

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->photo = $path;
        $user->save();

        return redirect()->route('user.index', $id)->with('success', 'the user has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
 
        $user->delete();

        return redirect()->route('user.index')->with('success', 'the user has been deleted');
    }
}
