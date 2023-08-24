<form method="post" action="{{route('profile-update',$user->id)}}"  enctype="multipart/form-data">
              @csrf 
              @method('PATCH')
              <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Name</label>
                <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$user->name}}" class="form-control">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                  <label for="inputEmail" class="col-form-label">Email</label>
                <input id="inputEmail" type="email" name="email" placeholder="Enter email"  value="{{$user->email}}" class="form-control">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              {{-- <div class="form-group">
                  <label for="inputPassword" class="col-form-label">Password</label>
                <input id="inputPassword" type="password" name="password" placeholder="Enter password"  value="{{$user->password}}" class="form-control">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div> --}}

             <div class="form-group">
                <label for="inputPhoto" class="col-form-label">Photo</label>
                    <div class="input-group">
                                <span class="custom-file">
                                    <input type="file" class="custom-file-input" name="photo" id="thumbnail" value="{{$user->photo}}">
                                    <label class="custom-file-label" for="exampleInputFile">insérer une image</label>
                                </span>
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
             </div>
                        @php 
                        $roles=DB::table('users')->select('role')->where('id',$user->id)->get();
                        // dd($roles);
                        @endphp
                        <div class="form-group">
                            <label for="role" class="col-form-label">Role</label>
                            <select name="role" class="form-control">
                                <option value="">-----Select Role-----</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->role}}" {{(($role->role=='admin') ? 'selected' : '')}}>Admin</option>
                                    <option value="{{$role->role}}" {{(($role->role=='user') ? 'selected' : '')}}>User</option>
                                @endforeach
                            </select>
                            @error('role')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="status" class="col-form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                                <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
                            </select>
                            @error('status')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
              <div class="form-group mb-3">
                <button class="btn btn-success" type="submit">Update</button>
              </div>
</form>


<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choisir une image
                            </a>


                            @if($user->status=='active')
                             <span class="badge badge-success">{{$user->status}}</span>
                            @else
                             <span class="badge badge-warning">{{$user->status}}</span>
                            @endif






                            @if (Auth::user()->role=="admin") 
                         <li><a href="{{ route('index') }}">Voir Interface Admin</a></li>
                         @else
                         @if (Route::has('login'))
                         @auth 
                         @if (Auth::user()->role=="user") 
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('Logout') }}</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li>
                          <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart" style="margin-top: -2px; margin-right: 1px;"></i> Wishlist</a></li>
                          @else
                          <li> <a href="{{ route('login') }}"><span class="icon-lock"></span>Login</a> </li> 
                            @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}"><i class="fa fa-user" style="margin-top: -2px; margin-right: 1px;"></i>Create Account</a> </li>
                            @endif
                            @endif
                           @endauth      
                         @endif
                         @endif