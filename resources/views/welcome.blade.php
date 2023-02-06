@extends('template.frontend')
@section('dolci')
<!-- Product Section Begin -->
<section class="product spad">
        <div class="container">
            <div class="row">
            @foreach ($vetrina as $value)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-{{rand(1,12)}}.jpg">
                            <div class="product__label">
                                <span>{{$value->dolce->nome}}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{$value->dolce->nome}}</a></h6>
                            <div class="product__item__price">{{$value->prezzo_nuovo}}€</div>
                            <div class="cart_add">
                            @foreach ($value->dolce()->get()[0]->ingredienti()->get() as $ingrediente)
                                <a href="#">{{$ingrediente->nome}}</a>                 
                             @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach   
            </div>
        </div>
    </section>
    <!-- Product Section End -->
 @endsection