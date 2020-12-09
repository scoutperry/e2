@extends('templates.master')

@section('title')
All Rounds

@endsection

@section('content')
<!--
<h2>All Rounds</h2>
<div id='product-index'>
    @foreach($rounds as $round)
    <a href='/product?id={{ $product['id'] }}'>
        <div class='product'>
            <div class='product-name'>{{ $product['name'] }}</div>
            <img class='product-thumb' src="/images/products/{{ $product['id'] }}.jpg">
        </div>
    </a>
    @endforeach
</div>
<form method='POST' id='product-new' action='/products/new'>
    <h3>Add a Product</h3>
    <div class='form-group'>
        <label for='name'>Name</label>
        <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
    </div>

    <div class='form-group'>
        <label for='description'>Description</label>
        <textarea name='description' id='description' class='form-control'>{{ $app->old('description') }}</textarea>
    </div>

    <div class='form-group'>
        <label for='price'>Price</label>
        <input type='text' class="form-control" name='price' id='price' value='{{ $app->old("price") }}'>
    </div>

    <div class='form-group'>
        <label for='available'>Available</label>
        <input type='text' class="form-control" name='available' id='available' value='{{ $app->old("available") }}'>
    </div>

    <div class='form-group'>
        <label for='weight'>Weight</label>
        <input type='text' class="form-control" name='weight' id='weight' value='{{ $app->old("weight") }}'>
    </div>

    <div class='form-group'>
        <label for='perishable'>Perishable</label>
        <input type='checkbox' class="form-control" name='perishable' id='perishable' value='perishable'>
    </div>

    <button type='submit' class='btn btn-primary'>Submit Review</button>
</form> -->
@endsection