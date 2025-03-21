@props(['product'])

    <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
        <div class="relative container">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-72 object-cover">
            <!--<div class="absolute top-2 right-2 bg-red-500 text-white text-sm font-bold w-12 h-12 flex items-center justify-center rounded-full">
                -30%
            </div>-->
            <x-hover-product :product="$product"/>
        </div>
        <div class="p-4">
            <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
            <p class="text-gray-500 text-sm">{{ $product->description }}</p>
            <div class="flex items-center gap-2">
                <span class="text-gray-900 font-bold">Rp {{ $product->price }}</span>
                <!--<span class="text-gray-500 text-sm">Rp {{ $product->price }}</span> <a href="/product/{{ $product->slug }}">-->
            </div>
        </div>
    </div>

