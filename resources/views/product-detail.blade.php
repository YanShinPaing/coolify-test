@extends('layouts.app')

@section('title', $product['name'] . ' - MMS Connections')

@section('content')
    <!-- Product Header -->
    <section class="gradient-primary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-white">
                <div class="mb-4">
                    <a href="{{ route('products') }}"
                        class="text-sky-100 hover:text-white transition-colors inline-flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Products
                    </a>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-4">{{ $product['name'] }}</h1>
                <p class="text-xl text-sky-100">{{ $product['description'] }}</p>
            </div>
        </div>
    </section>

    <!-- Product Details -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Overview</h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            {{ $product['long_description'] }}
                        </p>
                    </div>

                    <!-- Features -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Key Features</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($product['features'] as $feature)
                                <div class="flex items-start bg-gradient-light rounded-lg p-4">
                                    <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700 font-medium">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Benefits</h2>
                        <div class="space-y-4">
                            @foreach($product['benefits'] as $benefit)
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-sky-600 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-lg text-gray-700">{{ $benefit }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Technical Specifications -->
                    <div class="bg-gray-50 rounded-xl p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Technical Specifications</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Deployment</h3>
                                <p class="text-gray-600">Cloud-based or On-premise</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Platform</h3>
                                <p class="text-gray-600">Web, iOS, Android</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Security</h3>
                                <p class="text-gray-600">Enterprise-grade encryption</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Support</h3>
                                <p class="text-gray-600">24/7 dedicated support</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Updates</h3>
                                <p class="text-gray-600">Regular feature updates</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Integration</h3>
                                <p class="text-gray-600">RESTful API available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky top-24">
                        <!-- Pricing Card -->
                        <div class="card bg-gradient-light border-2 border-sky-600 mb-6">
                            <div class="text-center mb-6">
                                <div class="text-sm text-gray-600 mb-2">Starting at</div>
                                <div class="text-5xl font-bold text-sky-600 mb-2">{{ $product['price'] }}</div>
                                <div class="text-sm text-gray-600">per month</div>
                            </div>

                            <div class="space-y-3 mb-6">
                                <a href="{{ route('contact-us') }}" class="btn-primary w-full text-center block">
                                    Get Started
                                </a>
                                <a href="{{ route('contact-us') }}" class="btn-secondary w-full text-center block">
                                    Request Demo
                                </a>
                            </div>

                            <div class="border-t border-gray-300 pt-4">
                                <div class="text-sm text-gray-600 space-y-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-sky-600 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Free 30-day trial
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-sky-600 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        No credit card required
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-sky-600 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Cancel anytime
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Card -->
                        <div class="card bg-gray-900 text-white">
                            <h3 class="text-xl font-bold mb-4">Need Help?</h3>
                            <p class="text-gray-300 mb-4">Our team is here to answer your questions</p>
                            <div class="space-y-3 text-sm">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-sky-400 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    (555) 123-4567
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-sky-400 mr-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    sales@mmsconnections.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="section-title">Other Products</h2>
                <p class="section-subtitle">Explore our complete product suite</p>
            </div>

            <div class="text-center">
                <a href="{{ route('products') }}" class="btn-primary inline-block">
                    View All Products
                </a>
            </div>
        </div>
    </section>
@endsection