<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->XE

    @foreach($products as $product)
        <p>
            {{$product->name}}
        </p>
        <p>
            {{$product->desc}}
        </p>
    @endforeach
</div>
