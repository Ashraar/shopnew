<x-shop-layout>
    <div class="container mx-auto py-8 order-history-container">
        <h1 class="text-3xl font-bold mb-8 text-center text-blue-800">Order History</h1>
        @forelse($orders as $order)
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6 border border-gray-300 order-card">
                <h2 class="text-2xl font-semibold mb-3 text-blue-700">Order #{{ $order->id }}</h2>
                <p class="mb-3 text-gray-700"><strong>Date:</strong> {{ $order->created_at->format('d M Y') }}</p>
                <p class="mb-3 text-gray-700"><strong>Status:</strong> <span class="status {{ strtolower($order->status) }}">{{ $order->status }}</span></p>
                <p class="mb-3 text-gray-700"><strong>Total:</strong> Rs. {{ $order->total }}</p>
                <h3 class="text-xl font-semibold mt-5 text-blue-700">Items:</h3>
                <ul class="list-disc list-inside text-gray-800">
                    @foreach($order->items as $item)
                        <li>{{ $item->product->name }} - Quantity: {{ $item->qty }} - Price: Rs{{ $item->price }}</li>
                    @endforeach
                </ul>
            </div>
        @empty
            <p class="text-center text-gray-700">You have no orders.</p>
        @endforelse
    </div>
</x-shop-layout>

<style>
    /* Custom styles for the Order History page */
    .order-history-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
    }

    .order-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .order-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }

    .order-card h2 {
        color: #1a202c;
    }

    .order-card p {
        color: #2d3748;
    }

    .order-card ul {
        color: #2d3748;
    }

    .status {
        padding: 2px 8px;
        border-radius: 4px;
        font-weight: bold;
    }

    .status.pending {
        background-color: #f6ad55;
        color: #fff;
    }

    .status.completed {
        background-color: #48bb78;
        color: #fff;
    }

    .status.cancelled {
        background-color: #e53e3e;
        color: #fff;
    }
</style>
