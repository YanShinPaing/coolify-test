@extends('layouts.app')

@section('title', 'Our Services - MMS Connections')

@section('content')
    <!-- Page Header -->
    <section class="gradient-primary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Our Services</h1>
            <p class="text-xl text-sky-100">Comprehensive software solutions for your business</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Custom Software Development -->
            <div class="mb-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="inline-block bg-sky-100 text-sky-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            Core Service
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">Custom Software Development</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            We build tailored software solutions that perfectly align with your business needs. From concept
                            to deployment, our expert team delivers high-quality, scalable applications.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Web and mobile application development</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">API development and integration</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Legacy system modernization</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Microservices architecture</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card bg-gradient-light">
                        <div class="text-center p-8">
                            <div class="w-24 h-24 bg-sky-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Technologies We Use</h3>
                            <div class="flex flex-wrap gap-2 justify-center">
                                <span class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">React</span>
                                <span
                                    class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">Vue.js</span>
                                <span
                                    class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">Laravel</span>
                                <span
                                    class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">Node.js</span>
                                <span
                                    class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">Python</span>
                                <span class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">.NET</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cloud Solutions -->
            <div class="mb-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1 card bg-gradient-light">
                        <div class="text-center p-8">
                            <div class="w-24 h-24 bg-sky-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Cloud Platforms</h3>
                            <div class="flex flex-wrap gap-2 justify-center">
                                <span class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">AWS</span>
                                <span class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">Azure</span>
                                <span class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">Google
                                    Cloud</span>
                                <span
                                    class="bg-white px-4 py-2 rounded-lg text-sm font-semibold text-gray-700">DigitalOcean</span>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="inline-block bg-sky-100 text-sky-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            Infrastructure
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">Cloud Solutions</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            Leverage the power of cloud computing with our comprehensive cloud services. We help you
                            migrate, optimize, and manage your infrastructure in the cloud.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Cloud migration and deployment</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Infrastructure as Code (IaC)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Container orchestration (Kubernetes)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-sky-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Cloud security and compliance</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card border-t-4 border-sky-600">
                    <div class="w-16 h-16 bg-gradient-primary rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">IT Consulting</h3>
                    <p class="text-gray-600 mb-4">Strategic technology consulting to help you make informed decisions about
                        your IT infrastructure and digital transformation.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Technology assessment</li>
                        <li>• Digital strategy planning</li>
                        <li>• Architecture design</li>
                    </ul>
                </div>

                <div class="card border-t-4 border-sky-600">
                    <div class="w-16 h-16 bg-gradient-primary rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">DevOps Services</h3>
                    <p class="text-gray-600 mb-4">Streamline your development and operations with our DevOps expertise,
                        ensuring faster delivery and better quality.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• CI/CD pipeline setup</li>
                        <li>• Automated testing</li>
                        <li>• Monitoring and logging</li>
                    </ul>
                </div>

                <div class="card border-t-4 border-sky-600">
                    <div class="w-16 h-16 bg-gradient-primary rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Maintenance & Support</h3>
                    <p class="text-gray-600 mb-4">Keep your systems running smoothly with our comprehensive maintenance and
                        support services available 24/7.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• 24/7 technical support</li>
                        <li>• Regular updates</li>
                        <li>• Performance optimization</li>
                    </ul>
                </div>

                <div class="card border-t-4 border-sky-600">
                    <div class="w-16 h-16 bg-gradient-primary rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Data Analytics</h3>
                    <p class="text-gray-600 mb-4">Transform your data into actionable insights with our advanced analytics
                        and business intelligence solutions.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Data visualization</li>
                        <li>• Predictive analytics</li>
                        <li>• Custom dashboards</li>
                    </ul>
                </div>

                <div class="card border-t-4 border-sky-600">
                    <div class="w-16 h-16 bg-gradient-primary rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Mobile Development</h3>
                    <p class="text-gray-600 mb-4">Create engaging mobile experiences with our native and cross-platform
                        mobile app development services.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• iOS and Android apps</li>
                        <li>• React Native / Flutter</li>
                        <li>• App store optimization</li>
                    </ul>
                </div>

                <div class="card border-t-4 border-sky-600">
                    <div class="w-16 h-16 bg-gradient-primary rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Security Services</h3>
                    <p class="text-gray-600 mb-4">Protect your digital assets with our comprehensive security assessment and
                        implementation services.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Security audits</li>
                        <li>• Penetration testing</li>
                        <li>• Compliance consulting</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-primary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-xl text-sky-100 mb-8">
                Let's discuss how our services can help transform your business
            </p>
            <a href="{{ route('contact-us') }}"
                class="bg-white text-sky-600 hover:bg-sky-50 font-semibold py-4 px-8 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl inline-block">
                Contact Us Today
            </a>
        </div>
    </section>
@endsection