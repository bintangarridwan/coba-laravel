@extends('layouts.main')
@section('container')

    <h1 class="mb-5">All authors</h1>

    <table class="table w-50" style="border: 2px solid black">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="/authors/{{ $user->username }}" class="text-decoration-none">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            
        </tr>
        @endforeach    
    </table>
@endsection

