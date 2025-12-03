@extends('layouts.app')

@section('title', 'Products - MMS Connections')

@section('content')
    <!-- Page Header -->
    <section class="gradient-primary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Our Products</h1>
            <p class="text-xl text-sky-100">Enterprise-grade software solutions to power your business</p>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($products as $product)
                    <div class="card group hover:scale-105">
                        <div class="bg-gradient-light rounded-lg p-8 mb-6">
                            <div class="w-20 h-20 bg-sky-600 rounded-xl flex items-center justify-center mx-auto">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $product['name'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $product['description'] }}</p>

                        <div class="mb-6">
                            <div class="text-3xl font-bold text-sky-600 mb-4">{{ $product['price'] }}</div>
                            <div class="space-y-2">
                                @foreach($product['features'] as $feature)
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-sky-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        {{ $feature }}
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <a href="{{ route('product-detail', $product['slug']) }}" class="btn-primary w-full text-center block">
                            Learn More
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features Comparison -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title">Why Choose Our Products</h2>
                <p class="section-subtitle">Built with the latest technology and best practices</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-md">
                    <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">High Performance</h3>
                    <p class="text-gray-600">Optimized for speed and efficiency, handling millions of transactions
                        seamlessly</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md">
                    <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Scalable Architecture</h3>
                    <p class="text-gray-600">Grow without limits with our cloud-native, scalable infrastructure</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md">
                    <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Easy Integration</h3>
                    <p class="text-gray-600">RESTful APIs and webhooks for seamless integration with your existing tools</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Need a Custom Solution?
            </h2>
            <p class="text-xl text-gray-600 mb-8">
                We can tailor our products to meet your specific business requirements
            </p>
            <a href="{{ route('contact-us') }}" class="btn-primary inline-block">
                Get in Touch
            </a>
        </div>
    </section>
@endsection