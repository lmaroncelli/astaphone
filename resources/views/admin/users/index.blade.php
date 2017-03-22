@extends('admin.layouts.backend')

@section('title')
    Utenti
@stop

@section('content')

    {{-- creare nuovo utente --}}
    <a class="btn btn-primary" href="{{ route('users.create') }}">Nuovo utente</a>

    {{-- Elenco degli utenti --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th> 
                <th>Name</th> 
                <th>Username</th> 
                <th>Edit</th> 
                <th>Delete</th> 
            </tr>
            </thead>
            <tbody> 
            @foreach ($users as $count => $user)
                <tr>
                    <th scope="row">{{$count+1}}</th>
                    <td><a href="{{ route('users.edit',$user->id) }}">{{$user->name}}</a></td> 
                    <td>{{$user->email}}</td> 
                    <td><a href="{{ route('users.edit',$user->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="{{ route('users.confirm',$user->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            @endforeach
            </tbody> 
    </table>
    {{$users->render()}}

@endsection
