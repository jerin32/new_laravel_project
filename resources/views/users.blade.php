<ul>
    @if (count($users) > 2)
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    @else
        <p>No users found.</p>
    @endif
</ul>
@extends('layouts.app')
@section('title', 'User List')
@section('content')
    <ul>
        @if (count($users) > 0)
            @foreach ($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        @else
            <p>No users found.</p>
        @endif
    </ul>
@endsection