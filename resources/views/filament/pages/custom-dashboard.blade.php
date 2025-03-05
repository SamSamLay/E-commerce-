<x-filament::page>
    <div class="space-y-6">
        <!-- Dashboard Header Section -->
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-gray-800">
                Welcome to Your Custom Dashboard
            </h2>
            <x-filament::button icon="heroicon-o-refresh" color="primary">
                Refresh
            </x-filament::button>
        </div>

        <!-- Dashboard Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Example Stat 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-xl font-bold text-gray-700">Users</div>
                <div class="mt-2 text-3xl font-semibold text-gray-900">1,245</div>
            </div>

            <!-- Example Stat 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-xl font-bold text-gray-700">Sales</div>
                <div class="mt-2 text-3xl font-semibold text-gray-900">$5,674</div>
            </div>

            <!-- Example Stat 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-xl font-bold text-gray-700">Products</div>
                <div class="mt-2 text-3xl font-semibold text-gray-900">487</div>
            </div>
        </div>

        <!-- Dashboard Chart Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="text-xl font-bold text-gray-700 mb-4">Sales Overview</div>
            <!-- Example Chart (you can replace this with your own chart component) -->
            <div class="h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                <span class="text-gray-500">Chart Here</span>
            </div>
        </div>
    </div>
</x-filament::page>
