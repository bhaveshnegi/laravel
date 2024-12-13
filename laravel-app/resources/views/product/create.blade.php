<x-layout>

<h1>New Product</h1>

<form method="post" action="{{ route('products.store') }}">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="description">Description</label>
    <textarea type="text" name="description" id="description"></textarea>

    <label for="size">Size</label>
    <input type="text" name="size" id="size">

    <button>Save</button>
</form>

</x-layout>