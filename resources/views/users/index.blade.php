@extends('layouts.app')


@section('content')
    <div class="container">
    <table class="table table-hover ">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{$user->email}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>
                <button
                    class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">X
                </button>
            </td>
        </tr>
        <tr>
        @endforeach
        </tbody>
    </table>
        {{ $users->links() }}
    </div>
@endsection
@section('javascript')

    $( document ).ready(function() {
    $('.delete').click(function(){
        Swal.fire("hello world");
       /*$.ajax({
            method: "DELETE",
            url: "http://laravel.test/users/" + $(this).data("id")
           // data: { id:$(this).data("id")}
    })
        .done(function( response ) {
         window.location.reload();
            })
        .fail(function (response){
            alert ("Error")
                });
    */
        });
    });
    @endsection
