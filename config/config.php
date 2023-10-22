<?php

declare(strict_types=1);

return [
    'main_subscription_tag' => 'main',
    'fallback_plan_tag' => null,
    // Database Tables
    'tables' => [
        'plans' => 'plans',
        'plan_combinations' => 'plan_combinations',
        'plan_features' => 'plan_features',
        'plan_subscriptions' => 'plan_subscriptions',
        'plan_subscription_features' => 'plan_subscription_features',
        'plan_subscription_schedules' => 'plan_subscription_schedules',
        'plan_subscription_usage' => 'plan_subscription_usage',
    ],

    // Models
    'models' => [
        'plan' => \sfwcybersecurity\subscriptions\Models\Plan::class,
        'plan_combination' => \sfwcybersecurity\subscriptions\Models\PlanCombination::class,
        'plan_feature' => \sfwcybersecurity\subscriptions\Models\PlanFeature::class,
        'plan_subscription' => \sfwcybersecurity\subscriptions\Models\PlanSubscription::class,
        'plan_subscription_feature' => \sfwcybersecurity\subscriptions\Models\PlanSubscriptionFeature::class,
        'plan_subscription_schedule' => \sfwcybersecurity\subscriptions\Models\PlanSubscriptionSchedule::class,
        'plan_subscription_usage' => \sfwcybersecurity\subscriptions\Models\PlanSubscriptionUsage::class,
    ],

    'services' => [
        'payment_methods' => [
            'free' => \sfwcybersecurity\subscriptions\Services\PaymentMethods\Free::class
        ]
    ]
];
