@extends('layout.main')

@section('content')
            <form class="log_wraps" method="POST" action="{{url('store')}}">
                @csrf
                      <div class="log__heads">
                            <h4 class="mt-0 logs_title">Sign <span class="theme-cl">In</span></h4>
                        </div>

                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name" placeholder="NAME HERE">
                        </div>

                        <div class="form-group">
                            <label>Emain Address *</label>
                            <input type="email" class="form-control" name="email" placeholder="themezhub@gmail.com">
                        </div>

                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" placeholder="*******">
                        </div>

                        <div class="form-group">
                            <label>Confirm Password *</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="*******">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn_apply w-100" value="Sign In"/>
                        </div>

                        <div class="text-center">
                            Already have an account? <a href="{{url('login')}}" class="theme-cl">Sign In</a>
                        </div>
                    </form>
@endsection
