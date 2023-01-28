{{-- @auth
{{-- {{ route('routeName', ['id'=>1]) }} --}
    @extends("home")
@endauth --}}
{{-- @if (Route::has('login')) --}}
    @extends("login")

    {{-- @elseif(Route::has('register'))
            @extends('register')
@endif --}}
