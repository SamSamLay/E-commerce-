@props(['product'])
<div class="button-group">
                    <a href="/cart/{{ $product->name }}"><button class="btn border-2 text-green-500 bg-white border-green-500 px-8 py-1">Add to cart</button></a>
                    
                    <div class="second-row">
                    <a href="/cart/{{ $product->name }}"><button class="btn text-white"><i class="fas fa-share text-white"></i>Share</button></a>
                    <a href="/cart/{{ $product->name }}"><button class="btn text-white"><i class="fas fa-exchange-alt text-white"></i>Compare</button></a>
                    <a href="/cart/{{ $product->name }}"><button class="btn text-white"><i class="fas fa-heart text-white"></i>Like</button></a>
                    </div>
</div>
<!--<a href="/product/{{ $product->slug }}">-->