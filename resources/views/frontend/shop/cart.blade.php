@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div class="container mt-5 pt-5">
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <h2 class="featurette-heading"><u>iBenefits Cart</u></h2>

            <div class="row mb-2 mt-5 pt-5"></div>
        </div>

<!-- Shopping cart ---->

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h3>My Cart</h3></th>
                            <th></th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="col-sm-8 col-md-6 pb-5">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163def6c30e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163def6c30e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" style="width: 100px; height: 100px;"> </a>
                                    <div class="media-body ml-5">
                                        <p class="media-heading"><a href="#">Product name</a></p>
                                        <p class="media-heading"><a href="#"><u>Remove</u></a></p>
                                    </div>
                                </div>
                            </td>
                            <div>


                            </div>
                            <td></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center">£4.87</td>
                            <td class="col-sm-1 col-md-1 text-center">£14.61</td>
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><p>Subtotal</p></td>
                            <td class="text-right"><p>£24.59</p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><p>Estimated shipping</p></td>
                            <td class="text-right"><p>£6.94</p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>£31.53</strong></h3></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td colspan="2"><button type="button" class="btn btn-secondary btn-lg pl-5 pr-5 w-100">Checkout</button></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
