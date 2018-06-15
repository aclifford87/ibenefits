@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Edit Product</h3>
    {{--<form method="patch" enctype="multipart/form-data" action="{{ route('admin.products.update', $product->id) }}">--}}
        {{ Form::model($product, ['route' => ['admin.products.update', $product->id], 'class' => '',
         'method' => 'PATCH', 'files' => true]) }}
        {{ csrf_field() }}
        <input name="id" type="text" id="id" hidden>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Product Price</label>
            <div class="col-sm-10">
                {{ Form::text('price', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                {{ Form::textarea('description') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Visible on Page?</div>
            <div class="col-sm-10">
                <div class="form-check">
                    {{ Form::checkbox('visible', 1) }}
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Uploaded Image</div>
            <img src="{{ $product->image_url }}" height="40">
            <div class="col-sm-10">
                <input name="image_url" type="file" class="form-control-file" id="image">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </div>
    </form>
@endsection