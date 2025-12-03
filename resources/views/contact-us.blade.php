@extends('layouts.app')

@section('title', 'Contact Us - MMS Connections')

@section('content')
    <!-- Page Header -->
    <section class="gradient-primary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-sky-100">We'd love to hear from you. Let's start a conversation.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                    <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you within 24 hours.</p>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">First Name
                                    *</label>
                                <input type="text" id="first_name" name="first_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-600 focus:border-transparent transition-all">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-2">Last Name
                                    *</label>
                                <input type="text" id="last_name" name="last_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-600 focus:border-transparent transition-all">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address
                                *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-600 focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-600 focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">Company</label>
                            <input type="text" id="company" name="company"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-600 focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject *</label>
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-600 focus:border-transparent transition-all">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="sales">Sales</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Partnership Opportunities</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-600 focus:border-transparent transition-all resize-none"></textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" id="newsletter" name="newsletter"
                                class="mt-1 h-4 w-4 text-sky-600 focus:ring-sky-600 border-gray-300 rounded">
                            <label for="newsletter" class="ml-2 text-sm text-gray-600">
                                I would like to receive updates and newsletters from MMS Connections
                            </label>
                        </div>

                        <button type="submit" class="btn-primary w-full">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                    <p class="text-gray-600 mb-8">Prefer to reach out directly? Here's how you can contact us.</p>

                    <div class="space-y-6 mb-12">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Office Address</h3>
                                <p class="text-gray-600">123 Business Street<br>Tech City, TC 12345<br>United States</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                                <p class="text-gray-600">Main: (555) 123-4567<br>Support: (555) 123-4568<br>Sales: (555)
                                    123-4569</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                                <p class="text-gray-600">General: info@mmsconnections.com<br>Support:
                                    support@mmsconnections.com<br>Sales: sales@mmsconnections.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Business Hours</h3>
                                <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00
                                    PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="bg-gradient-light rounded-xl p-8 text-center">
                        <div class="w-20 h-20 bg-sky-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Find Us on the Map</h3>
                        <p class="text-gray-600 mb-4">Visit our office or schedule a meeting</p>
                        <a href="#" class="text-sky-600 font-semibold hover:text-sky-700 transition-colors">
                            View on Google Maps →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Quick answers to common questions</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">What is your response time?</h3>
                    <p class="text-gray-600">We typically respond to all inquiries within 24 hours during business days. For
                        urgent matters, please call our support line.</p>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Do you offer free consultations?</h3>
                    <p class="text-gray-600">Yes! We offer a free 30-minute consultation to discuss your project
                        requirements and how we can help.</p>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">What industries do you serve?</h3>
                    <p class="text-gray-600">We work with clients across various industries including healthcare, finance,
                        retail, education, and more.</p>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Can you work with our existing systems?</h3>
                    <p class="text-gray-600">Absolutely! We specialize in integrating with existing systems and can work
                        with a wide range of technologies.</p>
                </div>
            </div>
        </div>
    </section>
@endsection