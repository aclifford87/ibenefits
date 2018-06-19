@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div class="container pt-5 mt-lg-5">
            <hr class="featurette-divider">
            <h2 class="featurette-heading"><u>iBenefits Product</u></h2>

            <div class="pt-5 mb-5 row">
                <div class="col-sm-6 col-md-6">
                    <img src="{{ $product->image_url }}" height="400px" width="400px">
                </div>
                <div class="col-sm-6 col-md-6">
                    <h3 class="product title mb-1">
                        <a class="text-dark" >{{ $product->name }}</a>
                    </h3>

                    <div class="product-price mt-3 mb-2">£{{ $product->price }}</div>

                    <div class="mt-3 mb-3 text-muted pr-2">Quantity

                        {{--<div class="input-group-button ml-2">--}}
                            {{--<button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">--}}
                                {{--<i class="fa fa-minus" aria-hidden="true"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        <input class="input-group-field" type="number" name="quantity" value="0">
                        {{--<div class="input-group-button">--}}
                            {{--<button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity">--}}
                                {{--<i class="fa fa-plus" aria-hidden="true"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    </div>

                    <button type="button" class="btn btn-secondary w-100 btn-lg pl-5 pr-5">Add to Cart</button>

                    <div class="card flex-md-row mt-3">
                        <div class="card-body d-flex flex-column">
                            <h3 class="mb-2">
                                <a class="text-dark">Product Description</a>
                            </h3>
                            <p class="card-text mb-auto">{{ $product->description }}</p>
                        </div>
                    </div>

                    <div class="pt-3">
                        @if(!empty($product->link_1) || !empty($product->link_2) || !empty($product->link_3))
                            <h3>PDF Links</h3>
                        @endif
                        @if(!empty($product->link_1))
                                @if(empty($product->link_1_display))
                                <a href="{{ $product->link_1 }}" target="_blank">{{ $product->link_1 }}</a>
                                <br>
                                @else
                                    <a href="{{ $product->link_1 }}">{{ $product->link_1_display }}</a>
                                    <br>
                                @endif
                        @endif
                        @if(!empty($product->link_2))
                                @if(empty($product->link_2_display))
                                    <a href="{{ $product->link_2 }}" target="_blank">{{ $product->link_2 }}</a>
                                    <br>
                                @else
                                    <a href="{{ $product->link_2 }}">{{ $product->link_2_display }}</a>
                                    <br>
                                @endif
                        @endif
                        @if(!empty($product->link_3))
                                @if(empty($product->link_3_display))
                                    <a href="{{ $product->link_3 }}" target="_blank">{{ $product->link_3 }}</a>
                                    <br>
                                @else
                                    <a href="{{ $product->link_3 }}">{{ $product->link_3_display }}</a>
                                    <br>
                                @endif
                        @endif
                    </div>
                </div>
            </div>

            <div class="container mb-5">
                <ul class="nav nav-tabs">
                    <li class="active"><a class="nav-link active" data-toggle="tab" href="#product-info">PRODUCT INFO</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#returns">RETURN AND REFUND POLICY</a></li>
                </ul>

                <div class="tab-content">
                    <div id="product-info" class="pt-3 tab-pane active">
                    <h3>PRODUCT INFO</h3>
                    <p>{{ $product->product_info }}</p>
                    </div>
                    <div id="returns" class="pt-3 tab-pane fade">
                    <h3>RETURN AND REFUND POLICY</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nam iaculis bibendum est, nec interdum metus convallis vel. Etiam sit amet ipsum in ante lobortis consectetur vel eu nisi. Etiam porttitor risus vel porta laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi viverra eu leo ut cursus. Donec convallis justo ut metus tristique tincidunt. Nunc id sagittis libero. Duis eu porta neque. Pellentesque eu rhoncus dolor. Nunc tempor molestie dolor, id ultricies ipsum condimentum non. Aenean non vehicula augue, vitae feugiat elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
