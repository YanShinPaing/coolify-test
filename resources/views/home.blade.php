@extends('layouts.app')

@section('title', 'Home - MMS Connections')

@section('content')
    <!-- Hero Section -->
    <section class="relative gradient-primary hero-pattern overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center text-white animate-fade-in-up">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6">
                    Welcome to <span class="text-sky-200">MMS Connections</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-sky-100 max-w-3xl mx-auto">
                    Transforming businesses through innovative software solutions and cutting-edge technology
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('products') }}"
                        class="bg-white text-sky-600 hover:bg-sky-50 font-semibold py-4 px-8 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Explore Products
                    </a>
                    <a href="{{ route('contact-us') }}"
                        class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-sky-600 font-semibold py-4 px-8 rounded-lg transition-all duration-300">
                        Get Started
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-sky-400 rounded-full opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-96 h-96 bg-sky-300 rounded-full opacity-10 blur-3xl"></div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title">Why Choose Us</h2>
                <p class="section-subtitle">We deliver excellence through innovation and expertise</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card text-center group hover:scale-105">
                    <div
                        class="w-16 h-16 bg-gradient-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Fast Performance</h3>
                    <p class="text-gray-600">Lightning-fast solutions optimized for maximum efficiency and productivity</p>
                </div>

                <div class="card text-center group hover:scale-105">
                    <div
                        class="w-16 h-16 bg-gradient-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Secure & Reliable</h3>
                    <p class="text-gray-600">Enterprise-grade security with 99.9% uptime guarantee for your peace of mind
                    </p>
                </div>

                <div class="card text-center group hover:scale-105">
                    <div
                        class="w-16 h-16 bg-gradient-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Dedicated support team available around the clock to assist you</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-20 gradient-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">Comprehensive solutions tailored to your business needs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Custom Development</h3>
                    <p class="text-gray-600">Tailored software solutions built to your exact specifications</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Cloud Solutions</h3>
                    <p class="text-gray-600">Scalable cloud infrastructure and migration services</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Consulting</h3>
                    <p class="text-gray-600">Expert guidance for your digital transformation journey</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-t-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Maintenance</h3>
                    <p class="text-gray-600">Ongoing support and updates for your systems</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('our-services') }}" class="btn-primary inline-block">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-sky-400 mb-2">500+</div>
                    <div class="text-gray-400">Happy Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-sky-400 mb-2">1000+</div>
                    <div class="text-gray-400">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-sky-400 mb-2">15+</div>
                    <div class="text-gray-400">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-sky-400 mb-2">99.9%</div>
                    <div class="text-gray-400">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Ready to Transform Your Business?
            </h2>
            <p class="text-xl text-gray-600 mb-8">
                Let's discuss how our solutions can help you achieve your goals
            </p>
            <a href="{{ route('contact-us') }}" class="btn-primary inline-block">
                Contact Us Today
            </a>
        </div>
    </section>
@endsection