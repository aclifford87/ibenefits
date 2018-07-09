@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div class="container">
            <!-- START THE FEATURETTES -->
            <h2 class="featurette-heading"><u>iBenefits Products</u></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">shop</li>
                </ol>
            </nav>
            <div class="row mb-2 pt-2">

            @foreach($products as $value=>$product)
                <?php
                    $sumOdd = 0;
                    if ($value % 2 == 0){ ?>

                        <div class="col-md-6">
                            <a href="{{ $product->url }}{{ $product->id }}" style="text-decoration: none">
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

                    <?php } else { ?>

                    <div class="col-md-6">
                        <a href="{{ $product->url }}{{ $product->id }}" style="text-decoration: none">
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
