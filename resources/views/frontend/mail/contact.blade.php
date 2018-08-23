<h4>Please find your order below:</h4>
<hr>
@foreach($order as $item)
    <p><strong>Product Name:</strong> {{ $item->name }}</p>
    <p><strong>Product Qty:</strong> {{ $item->qty }}</p>
    <p><strong>Product Price:</strong> {{ $item->price }}</p>
    <hr>
@endforeach

{{--<p><strong>Product Name:</strong>{{ $order->name }}</p>--}}
{{--<p><strong>Product Qyt:</strong>{{ $order->name }}</p>--}}
{{--<p><strong>Product Cost:</strong>{{ $order->name }}</p>--}}
{{--<p><strong>Product Name:</strong>{{ $order->name }}</p>--}}
