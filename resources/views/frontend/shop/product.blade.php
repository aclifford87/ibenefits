@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div class="container pt-5 mt-lg-5">
            <hr class="featurette-divider">
            <h2 class="featurette-heading"><u>iBenefits Product</u></h2>
            <div class="row pt-5 mt-3 mb-5 ml-2">
                <div class="col">
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb"
                         alt="Thumbnail [200x250]" style="width: 400px; height: 400px;"
                         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163def6c30e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163def6c30e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                         data-holder-rendered="true">
                </div>
                <div class="col container">
                    <h3 class="product title mb-1">
                        <a class="text-dark" >Product Name</a>
                    </h3>

                    <div class="product-code mb-3 text-muted">SKU: 0001</div>

                    <div class="product-price mt-3 mb-2">£ 123.00</div>
                    <div class="product-Quantity input-group plus-minus-input mt-3 mb-3 text-muted">Quantity

                        <div class="input-group-button">
                            <button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <input class="input-group-field" type="number" name="quantity" value="0">
                        <div class="input-group-button">
                            <button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>

                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary w-75 btn-lg pl-5 pr-5">Add to Cart</button>

                    <div class="col-md-12 mt-3 mr-5">
                        <div class="card flex-md-row">
                            <div class="card-body d-flex flex-column">
                                <h3 class="mb-2">
                                    <a class="text-dark">Product Description</a>
                                </h3>
                                <p class="card-text mb-auto">Phasellus mollis magna eget mi sollicitudin, scelerisque posuere lorem tempor. Donec sodales lorem eget ex bibendum dapibus. Praesent nec posuere neque. Sed elementum viverra sapien a molestie.</p>
                            </div>
                        </div>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa nisl, cursus et diam id, commodo blandit diam. Donec dictum eu purus et suscipit. Nam varius elementum velit, vitae molestie urna convallis at. Praesent gravida, odio non fermentum malesuada, ex orci pretium augue, vel vehicula sapien arcu a quam. Morbi sit amet neque semper, malesuada nisi in, gravida mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris efficitur gravida eros, ut euismod lectus iaculis nec. Sed et ultrices quam, quis maximus ex. Nam ac ex non metus vestibulum consectetur id eu quam. Sed eleifend metus quis arcu gravida, quis semper odio euismod. Mauris congue tellus id purus ultrices consectetur. Sed euismod a sem sit amet molestie. Praesent sed risus in metus mollis faucibus.</p>
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
