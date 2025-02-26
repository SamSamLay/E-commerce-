@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Cart Section -->
            <div class="w-full md:w-2/3 bg-white p-6 rounded-lg shadow">
                <h1 class="text-2xl font-bold mb-4">Shopping Cart</h1>
                <div class="space-y-4">
                    <div class="p-4 border rounded-lg flex justify-between items-center">
                        <span>Item 1</span>
                        <span>$100</span>
                    </div>
                    <div class="p-4 border rounded-lg flex justify-between items-center">
                        <span>Item 2</span>
                        <span>$188.08</span>
                    </div>
                </div>
            </div>

            <!-- Order Summary Section -->
            <div class="w-full md:w-1/3">
                @include('components.order-summary')
            </div>
        </div>
    </div>
@endsection
