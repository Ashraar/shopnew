<x-shop-layout>
    <section class="relative bg-cover bg-center h-35 p-4" style="background-image: url(assets/images/banner-image-1-1920x500.jpg);">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="container relative z-10 text-center">
            <h2 class="text-5xl font-bold text-white">Easy <span class="text-yellow-400">Checkout</span></h2>
            <p class="mt-2 text-lg text-gray-300">Complete your order in just a few steps!</p>
        </div>
    </section>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mx-4 mt-4 rounded-lg shadow-md" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <section class="py-12 bg-gray-50">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Billing Information -->
                <div class="md:w-2/3 bg-white shadow-lg rounded-lg p-8 border border-gray-200">
                    <h3 class="text-2xl font-semibold mb-6 text-gray-800">Billing Information</h3>
                    <form action="{{ route('save-order') }}" method="post" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Title:</label>
                                <select name="title" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    <option value="">-- Choose --</option>
                                    <option value="dr">Dr.</option>
                                    <option value="miss">Miss</option>
                                    <option value="mr">Mr.</option>
                                    <option value="mrs">Mrs.</option>
                                    <option value="ms">Ms.</option>
                                    <option value="other">Other</option>
                                    <option value="prof">Prof.</option>
                                    <option value="rev">Rev.</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Name:</label>
                                <input type="text" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Email:</label>
                                <input type="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Phone:</label>
                                <input type="text" name="phone" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Address 1:</label>
                                <input type="text" name="address1" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Address 2:</label>
                                <input type="text" name="address2" class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-lg font-medium text-gray-700">City:</label>
                                <input type="text" name="city" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                            <div>
                                <label class="block text-lg font-medium text-gray-700">State:</label>
                                <input type="text" name="state" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Zip:</label>
                                <input type="text" name="zip" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Country:</label>
                                <input type="text" name="country" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-lg font-medium text-gray-700">Payment Method:</label>
                                <select name="payment_method" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    <option value="">-- Choose --</option>
                                    <option value="bank">Bank account</option>
                                    <option value="cash">Cash</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                            </div>
                            <div>
    <!-- Display the captcha image from the provided URL -->
    <img src="https://images.app.goo.gl/cPMviqTxLEVw7ZyY8" alt="Captcha Image" class="mb-4">

    <label class="block text-lg font-medium text-gray-700">Captcha:</label>
    <input type="text" name="captcha" required class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
</div>

                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 mt-4">Pay</button>
                    </form>
                </div>

                <!-- Order Summary -->
                <div class="md:w-1/3 bg-white shadow-lg rounded-lg p-8 border border-gray-200">
                    <h3 class="text-2xl font-semibold mb-6 text-gray-800">Order Summary</h3>
                    <ul class="space-y-4">
                        @php $total = 0; @endphp
                        @foreach ($cartItem as $item)
                            @php $total += $item->product->price * $item->quantity; @endphp
                            <li class="flex justify-between text-gray-700">
                                <span>{{ $item->product->name }} (x{{ $item->quantity }})</span>
                                <span>${{ number_format($item->product->price * $item->quantity, 2) }}</span>
                            </li>
                        @endforeach
                        <li class="flex justify-between font-bold text-gray-800">
                            <span>Total Amount:</span>
                            <span>Rs. {{ number_format($total, 2) }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-shop-layout>
