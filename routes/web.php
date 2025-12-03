<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/our-services', function () {
    return view('our-services');
})->name('our-services');

Route::get('/products', function () {
    $products = [
        [
            'id' => 1,
            'name' => 'Enterprise Resource Planning',
            'slug' => 'enterprise-resource-planning',
            'description' => 'Comprehensive ERP solution for modern businesses',
            'image' => 'erp.jpg',
            'price' => '$999/month',
            'features' => ['Inventory Management', 'Financial Tracking', 'HR Management', 'Analytics Dashboard']
        ],
        [
            'id' => 2,
            'name' => 'Customer Relationship Management',
            'slug' => 'customer-relationship-management',
            'description' => 'Powerful CRM to manage customer interactions',
            'image' => 'crm.jpg',
            'price' => '$499/month',
            'features' => ['Contact Management', 'Sales Pipeline', 'Email Integration', 'Reporting Tools']
        ],
        [
            'id' => 3,
            'name' => 'Project Management Suite',
            'slug' => 'project-management-suite',
            'description' => 'Complete project management and collaboration platform',
            'image' => 'pms.jpg',
            'price' => '$299/month',
            'features' => ['Task Management', 'Team Collaboration', 'Time Tracking', 'Gantt Charts']
        ],
        [
            'id' => 4,
            'name' => 'Business Intelligence Platform',
            'slug' => 'business-intelligence-platform',
            'description' => 'Advanced analytics and data visualization tools',
            'image' => 'bi.jpg',
            'price' => '$799/month',
            'features' => ['Data Visualization', 'Custom Reports', 'Predictive Analytics', 'Real-time Dashboards']
        ],
    ];
    
    return view('products', compact('products'));
})->name('products');

Route::get('/products/{slug}', function ($slug) {
    $products = [
        'enterprise-resource-planning' => [
            'id' => 1,
            'name' => 'Enterprise Resource Planning',
            'slug' => 'enterprise-resource-planning',
            'description' => 'Comprehensive ERP solution for modern businesses',
            'long_description' => 'Our Enterprise Resource Planning system is designed to streamline your business operations, integrate all facets of your organization, and provide real-time insights into your business performance. With modules for finance, HR, inventory, and more, our ERP solution grows with your business.',
            'image' => 'erp.jpg',
            'price' => '$999/month',
            'features' => [
                'Inventory Management',
                'Financial Tracking',
                'HR Management',
                'Analytics Dashboard',
                'Multi-location Support',
                'Automated Workflows',
                'Custom Reporting',
                'Mobile Access'
            ],
            'benefits' => [
                'Increase operational efficiency by 40%',
                'Reduce manual data entry errors',
                'Real-time business insights',
                'Scalable architecture'
            ]
        ],
        'customer-relationship-management' => [
            'id' => 2,
            'name' => 'Customer Relationship Management',
            'slug' => 'customer-relationship-management',
            'description' => 'Powerful CRM to manage customer interactions',
            'long_description' => 'Transform your customer relationships with our advanced CRM platform. Track every interaction, manage your sales pipeline, and deliver exceptional customer experiences. Our CRM integrates seamlessly with your existing tools and provides actionable insights to drive growth.',
            'image' => 'crm.jpg',
            'price' => '$499/month',
            'features' => [
                'Contact Management',
                'Sales Pipeline',
                'Email Integration',
                'Reporting Tools',
                'Lead Scoring',
                'Marketing Automation',
                'Customer Segmentation',
                'API Integration'
            ],
            'benefits' => [
                'Increase sales conversion by 30%',
                'Improve customer retention',
                'Automate follow-up tasks',
                'Better customer insights'
            ]
        ],
        'project-management-suite' => [
            'id' => 3,
            'name' => 'Project Management Suite',
            'slug' => 'project-management-suite',
            'description' => 'Complete project management and collaboration platform',
            'long_description' => 'Manage projects of any size with our comprehensive project management suite. From planning to execution, track progress, collaborate with your team, and deliver projects on time and within budget. Perfect for teams of all sizes.',
            'image' => 'pms.jpg',
            'price' => '$299/month',
            'features' => [
                'Task Management',
                'Team Collaboration',
                'Time Tracking',
                'Gantt Charts',
                'Resource Allocation',
                'File Sharing',
                'Milestone Tracking',
                'Agile Boards'
            ],
            'benefits' => [
                'Deliver projects 25% faster',
                'Improve team collaboration',
                'Better resource utilization',
                'Enhanced visibility'
            ]
        ],
        'business-intelligence-platform' => [
            'id' => 4,
            'name' => 'Business Intelligence Platform',
            'slug' => 'business-intelligence-platform',
            'description' => 'Advanced analytics and data visualization tools',
            'long_description' => 'Make data-driven decisions with our powerful Business Intelligence platform. Visualize complex data, create custom reports, and uncover insights that drive your business forward. Our BI tools are designed for both technical and non-technical users.',
            'image' => 'bi.jpg',
            'price' => '$799/month',
            'features' => [
                'Data Visualization',
                'Custom Reports',
                'Predictive Analytics',
                'Real-time Dashboards',
                'Data Integration',
                'AI-powered Insights',
                'Export Capabilities',
                'Scheduled Reports'
            ],
            'benefits' => [
                'Make faster decisions',
                'Identify trends early',
                'Reduce reporting time by 60%',
                'Democratize data access'
            ]
        ],
    ];
    
    $product = $products[$slug] ?? abort(404);
    
    return view('product-detail', compact('product'));
})->name('product-detail');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

