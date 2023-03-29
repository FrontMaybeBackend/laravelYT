@extends('layouts.app')


@section('content')
    <div class="container">
            <div class="row">
        <div class="col-6">
            <h1>Lista produktów </h1>
        </div>
            <div class="col-6">
                <a class="float-end" href="{{ route('products.create') }}">
                    <button type="button" class="btn btn-primary">Dodaj</button>
                </a>
    </div>
            </div>
        <div class="row">
    <table class="table table-hover ">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Description</th>
            <th scope="col">Ilosc</th>
            <th scope="col">Cena</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->amount}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a class="" href="{{ route('products.show', $product->id) }}">
                    <button type="button" class="btn btn-primary">P</button>
                </a>
                <a class="" href="{{ route('products.edit', $product->id) }}">
                    <button type="button" class="btn btn-info">E</button>
                </a>
                <button
                    class="  btn btn-danger  delete" data-id="{{$product->id}}">X
                </button>
            </td>
        </tr>
        <tr>
        @endforeach
        </tbody>
    </table>
        {{ $products->links() }}
    </div>
@endsection
@section('javascript')

    $( document ).ready(function() {
    $('.delete').click(function(){
        $.ajax({
                method: "DELETE",
                url: "{{ url('products') }}/" + $(this).data("id"),
                  data: { id:$(this).data("id")}
     })
                .done(function( response ) {
                window.location.reload();
    })
    .fail(function (response){
    alert ("Error")
    });

    });
    });

@endsection
