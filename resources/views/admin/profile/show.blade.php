@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Profil Admin</div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
            </div>
        </div>
    </div>
@endsection
