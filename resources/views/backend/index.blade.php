@extends('backend.layout')

@section('title', 'Backend Dashboard')

@section('content')
    @auth('admin')
    <p>Hello: <?= $user->name ?></p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-block">logout</button>
    </form>
    @endauth
@endsection
