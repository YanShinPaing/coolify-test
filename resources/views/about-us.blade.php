@extends('layouts.app')

@section('title', 'About Us - MMS Connections')

@section('content')
    <!-- Page Header -->
    <section class="gradient-primary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">About Us</h1>
            <p class="text-xl text-sky-100">Discover the story behind MMS Connections</p>
        </div>
    </section>

    <!-- Company Story -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Founded in 2008, MMS Connections has been at the forefront of software innovation for over 15 years.
                        What started as a small team of passionate developers has grown into a leading software solutions
                        provider serving clients worldwide.
                    </p>
                    <p class="text-lg text-gray-600 mb-4">
                        Our mission is to empower businesses through technology, delivering solutions that drive growth,
                        efficiency, and innovation. We believe in building long-term partnerships with our clients,
                        understanding their unique challenges, and crafting solutions that exceed expectations.
                    </p>
                    <p class="text-lg text-gray-600">
                        Today, we're proud to serve over 500 clients across various industries, from startups to Fortune 500
                        companies, helping them navigate the digital landscape and achieve their business objectives.
                    </p>
                </div>
                <div class="bg-gradient-light rounded-2xl p-8 shadow-xl">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-sky-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Innovation First</h3>
                                <p class="text-gray-600">Cutting-edge solutions using the latest technologies</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-sky-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Client-Centric</h3>
                                <p class="text-gray-600">Your success is our top priority</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-sky-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Agile Approach</h3>
                                <p class="text-gray-600">Fast, flexible, and responsive development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title">Our Leadership Team</h2>
                <p class="section-subtitle">Meet the experts driving our success</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card text-center group">
                    <div
                        class="w-32 h-32 bg-gradient-primary rounded-full mx-auto mb-4 flex items-center justify-center text-white text-4xl font-bold group-hover:scale-110 transition-transform">
                        JD
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-1">John Doe</h3>
                    <p class="text-sky-600 font-semibold mb-3">CEO & Founder</p>
                    <p class="text-gray-600">15+ years of experience in software development and business strategy</p>
                </div>

                <div class="card text-center group">
                    <div
                        class="w-32 h-32 bg-gradient-primary rounded-full mx-auto mb-4 flex items-center justify-center text-white text-4xl font-bold group-hover:scale-110 transition-transform">
                        JS
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-1">Jane Smith</h3>
                    <p class="text-sky-600 font-semibold mb-3">CTO</p>
                    <p class="text-gray-600">Expert in cloud architecture and enterprise software solutions</p>
                </div>

                <div class="card text-center group">
                    <div
                        class="w-32 h-32 bg-gradient-primary rounded-full mx-auto mb-4 flex items-center justify-center text-white text-4xl font-bold group-hover:scale-110 transition-transform">
                        MJ
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-1">Mike Johnson</h3>
                    <p class="text-sky-600 font-semibold mb-3">Head of Operations</p>
                    <p class="text-gray-600">Specializes in project management and client relations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">The principles that guide everything we do</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-light rounded-xl p-6 border-l-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Excellence</h3>
                    <p class="text-gray-600">We strive for excellence in every project and interaction</p>
                </div>

                <div class="bg-gradient-light rounded-xl p-6 border-l-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Integrity</h3>
                    <p class="text-gray-600">Honesty and transparency in all our business dealings</p>
                </div>

                <div class="bg-gradient-light rounded-xl p-6 border-l-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Innovation</h3>
                    <p class="text-gray-600">Continuously pushing boundaries and embracing new technologies</p>
                </div>

                <div class="bg-gradient-light rounded-xl p-6 border-l-4 border-sky-600">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Collaboration</h3>
                    <p class="text-gray-600">Working together with clients as true partners</p>
                </div>
            </div>
        </div>
    </section>
@endsection