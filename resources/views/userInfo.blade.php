@extends('layouts.admin_layout')


@push('title')
    <title>User Info</title>
@endpush

@section('content')
    User Info<br>
    <form action="/user-info" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}}<br>
        @enderror
        <input type="password" name="password" placeholder="password"><br>
        @error('password')
            {{$message}}<br>
        @enderror
        <input type="password" name="confirm_password" placeholder="confirm_password"><br>
        @error('confirm_password')
            {{$message}}<br>
        @enderror
        <input type="submit" value="Submit">
    </form>
@endsection
