@extends('Product.layouts.contents')
@section('content')
<style>
    body {
    background-color: #a2dfe0;
    
}

.container{
    
    height:100vh;
}

.card {
    background-color: #c1e8ed;
    width: 400px;
    padding: 10px;
    border: 1px solid #eee
}

.inner-card {
    background: #fff;
    padding: 10px;
    border-radius: 5px
}

.heart {
    cursor: pointer;
    height: 35px;
    width: 35px;
    font-size: 13px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #beb4aa;
    border-radius: 50%;
    background-color: #eee
}

.btn:focus {
    color: #fff;
    background-color: #025ce2;
    border-color: #0257d5;
    box-shadow: none
}
</style>
<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
    
    <div class="card">
        <div class="inner-card"> <img src="https://i.imgur.com/4qXhMAM.jpg" class="img-fluid rounded">
            <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                <h4>Worksheet chair </h4> <span class="heart"><i class="fa fa-heart"></i></span>
            </div>
            <div class="mt-2 px-2"> <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</small> </div>
            <div class="px-2">
                <h3>$500</h3>
            </div>
            <div class="px-2 mt-3"> <button class="btn btn-primary px-3">Buy Now</button> <button class="btn btn-outline-primary px-3">Add to cart</button> </div>
        </div>
    </div>
    
    </div>
@endsection
