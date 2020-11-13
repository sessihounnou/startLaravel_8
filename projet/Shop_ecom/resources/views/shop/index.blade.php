@extends('home')
@section('content')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section mb-5 col-12">
                <h2 class="text-uppercase">Popular Products</h2>
            </div>
        </div>
        <div class="row">
            @foreach($produits as $produit)
            <div class="col-lg-4 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="{{asset('images/'.$produit->photo_principale)}}" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">{{$produit->nom}}</a></h2>
                <strong class="item-price">{{'$ '.$produit->prix_ht}}</strong>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
