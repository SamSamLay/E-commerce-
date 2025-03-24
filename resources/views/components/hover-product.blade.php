@props(['product'])

<div class="button-group">
    <button 
        onclick="openPopup('{{ $product->name }}')" 
        class="btn border-2 text-green-500 bg-white border-green-500 px-8 py-1"
    >
        Add to cart
    </button>

    <div class="second-row">
        <a href="/cart/{{ $product->name }}"><button class="btn text-white"><i class="fas fa-share text-white"></i> Share</button></a>
        <a href="/cart/{{ $product->name }}"><button class="btn text-white"><i class="fas fa-exchange-alt text-white"></i> Compare</button></a>
        <a href="/cart/{{ $product->name }}"><button class="btn text-white"><i class="fas fa-heart text-white"></i> Like</button></a>
    </div>
</div>

<!-- ✅ POPUP MODAL -->
<div id="popup-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
<div class="relative p-4 w-full max-w-2xl max-h-full">

    <div class="bg-white rounded-lg shadow-lg p-6 text-center w-80">
        <p class="text-lg font-semibold mb-4">Add to cart?</p>
        <div class="flex justify-around">
            <button 
                id="confirmBtn"
                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
            >
                Yes
            </button>
            <button 
                onclick="closePopup()" 
                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
            >
                No
            </button>
        </div>
    </div>
</div>
</div>

<script>
    let selectedProduct = '';

    function openPopup(productName) {
        selectedProduct = productName;
        document.getElementById('popup-modal').classList.remove('hidden');
        document.getElementById('popup-modal').classList.add('flex');
    }

    function closePopup() {
        document.getElementById('popup-modal').classList.add('hidden');
    }

    document.getElementById('confirmBtn').addEventListener('click', function () {
        window.location.href = `/cart/${selectedProduct}`;
    });
</script>

<!--<a href="/product/{{ $product->slug }}">-->