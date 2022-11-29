@extends('layouts.admin_layout')

@push('title')
    <title>Register</title>
@endpush

@section('content')
    Add Student<br>
    <form action="/register1" method="POST">
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
<br>
    <table border="2px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($data as $value )
            <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td><a href="/register1/{{$value->id}}/edit">Edit</a></td>
                <td>
                    <form action="/register1/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
