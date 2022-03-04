@extends('layout')

@section('title', 'Home')

@section('content')
    @include('shopping-cart.products')
    @include('table.create')
@endsection