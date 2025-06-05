@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ARMAN soft</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn-logout">Logout</button>
    </form>
@stop

@section('css')
    <style>
        .btn-logout {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-logout:hover {
            background-color: #0056b3;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi"); </script>
@stop
