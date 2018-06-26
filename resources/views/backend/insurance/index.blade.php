@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Products</h3>
    <table id="insurance" class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Visible</th>
            <th></th>
        </tr>
        </thead>
    </table>


@endsection