@extends('layout.app')
@section('content')
    <div class="container">
        <x-top-bar :user="$name" />
        <x-side-bar />
    </div>
@endsection
