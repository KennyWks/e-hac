@extends('user.layouts.main')
@section('content')
    <h1>Hello, {{ $title }}!</h1>
    <form action="/logout" method="post">
        @csrf
        <button class="nav-link px-3 bg-dark border-0" type="submit">Keluar <span data-feather="log-out"></span></button>
    </form>
@endsection
