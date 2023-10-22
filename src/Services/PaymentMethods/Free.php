<?php

declare(strict_types=1);

namespace sfwcybersecurity\subscriptions\Services\PaymentMethods;

use sfwcybersecurity\subscriptions\Contracts\PaymentMethodService;
use sfwcybersecurity\subscriptions\Traits\IsPaymentMethod;

class Free implements PaymentMethodService
{
    use IsPaymentMethod;

    /**
     * Charge desired amount
     * @return void
     */
    public function charge()
    {
        // Nothing is charged, no exception is raised
    }
}
