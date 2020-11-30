@extends('templates.master')

@section('title')
Product Not Found
@endsection

@section('content')
<h2>Product {{$id}} Not Found</h2>

<p>Hmmmm, we can't seem to find the product you were looking for</p>

<a href='/products'>Check out our other products...</a>

@endsection