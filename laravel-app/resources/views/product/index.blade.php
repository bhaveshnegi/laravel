<x-layout>

<h1>Products</h1>

<a href="{{ route('products.create') }}">New Product</a>

<!-- <?php foreach ($products as $product): ?>

    <h2><?= htmlspecialchars($product->name)?></h2>
    <p><?= htmlspecialchars($product->description)?></p>
    <p><?= htmlspecialchars($product->size)?></p>

<?php endforeach; ?> -->

@foreach ($products as $product)

<h2>{{$product->name}}</h2>
<p>{{$product->description}}</p>
<p>{{$product->size}}</p>

@endforeach
</x-layout>