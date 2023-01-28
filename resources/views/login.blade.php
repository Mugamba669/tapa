@extends('layout.main')
@section('content')
				<form class="log_wraps" name="" method="POST" action="{{url('userlogin')}}">
                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                @csrf
                    <div class="log__heads">
                        <h4 class="mt-0 logs_title">Sign <span class="theme-cl">In</span></h4>
                    </div>

                    <div class="form-group">
                        <label>Emain Address*</label>
                        <input type="email" class="form-control" name="email" placeholder="themezhub@gmail.com" />
                    </div>

                    <div class="form-group">
                        <label>Password*</label>
                        <input type="password" name="password" class="form-control" placeholder="*******" />
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn_apply w-100" value="Sign In"/>
                    </div>

                    <div class="text-center mb-0 mt-3">
                        You Have't Any Account? <a href="{{url('register')}}" class="theme-cl">SignUp</a>
                    </div>
                </form>

			@endsection
