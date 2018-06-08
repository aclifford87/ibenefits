@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Add a Product</h3>
    <form>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Product Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" placeholder="Product Price">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="10" cols="100" name="description"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Visible on Page?</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="visible">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Upload Image</div>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </div>
    </form>
@endsection