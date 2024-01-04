
@extends('master')

@section('panier')

<!-- 
  Bootstrap docs: https://getbootstrap.com/docs
  Get more snippet on https://bootstraptor.com/snippets
-->
@if (Cart::count()> 0)
    

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach (Cart::content() as $produit)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="{{$produit->image}}" alt="image" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>ndffdd</h4>
                                    <p class="font-weight-light">{{$produit->titre}}</p>
                                </div>
                            </div>
                        </td>
                        {{-- {{$produit->getPrix()}} --}}
                        <td data-th="Price">1000 FCFA</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <form action="{{route('cart.destroy',$produit->rowId)}}" class="d-flex" method="GET">
                                {{-- <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button> --}}
                               
                            @csrf
                            @method('delete')
                            <button class="btn btn-white border-secondary bg-danger btn-md mb-2">
                                <i class="fas fa-trash"></i>
                            </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Prix total:</h4>
                <h1>{{getPrice(Cart::total())}}</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Payemment</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="catalog.html">
                <i class="fas fa-arrow-left mr-2"></i> Continuer les achats</a>
        </div>
    </div>
</div>
</section>
    
@else
<div class="col-md-12">
    <p >Votre panier est vide </p>
</div>


@endif
@endsection