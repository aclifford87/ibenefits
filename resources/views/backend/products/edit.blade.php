@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Edit Product</h3>
    <form method="post" enctype="multipart/form-data" action="">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input name="name" type="text"
                       class="form-control" id="name"
                       value="{{ $product->name }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Product Price</label>
            <div class="col-sm-10">
                <input name="price" type="text"
                       class="form-control" id="price"
                       placeholder="{{ $product->price }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="10" cols="100" name="description" required>
                    {{ $product->description }}
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Visible on Page?</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input name="visible" type="checkbox"
                           class="form-check-input" id="visible" value="{{ $product->visible }}"
                    <?php if ($product->visible == 1) { echo "checked='checked'"; } ?>>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Uploaded Image</div>
            <img src="{{ $product->image_url }}" height="40">
            <div class="col-sm-10">
                <input name="image" type="file" class="form-control-file" id="image">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </div>
    </form>
@endsection