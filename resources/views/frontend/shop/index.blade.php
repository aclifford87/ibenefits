@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div class="container">
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <h2 class="featurette-heading"><u>iBenefits Products</u></h2>

            <div class="row mb-2 pt-3">

            @foreach($products as $value=>$product)
                <?php
                    $sumOdd = 0;
                    if ($value % 2 == 0){ ?>

                        <div class="col-md-6">
                            <a href="#" style="text-decoration: none">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3 class="mb-0">
                                        {{ $product->name }}
                                    </h3>
                                    <br/>
                                    <p class="card-text mb-auto">{{ $product->description }}</p>
                                </div>
                                <img class="card-img-right flex-auto d-none d-lg-block"
                                     src="{{ $product->image_url }}"
                                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;">
                            </div>
                            </a>
                        </div>

                    <?php

                    } else { ?>

                    <div class="col-md-6">
                        <a href="#" style="text-decoration: none">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3 class="mb-0">
                                        {{ $product->name }}
                                    </h3>
                                    <br/>
                                    <p class="card-text mb-auto">{{ $product->description }}</p>
                                </div>
                                <img class="card-img-right flex-auto d-none d-lg-block"
                                     src="{{ $product->image_url }}"
                                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;">
                            </div>
                        </a>
                    </div>

                <?php
                    $sumOdd += $value;
                    }
                ?>
            @endforeach
            </div>


        </div><!-- /.container -->
    </main>
@endsection
