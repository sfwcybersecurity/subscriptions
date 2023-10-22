<?php

namespace sfwcybersecurity\subscriptions\Traits;

trait MorphsSchedules
{
    /**
     * Get all schedules.
     */
    public function schedules()
    {
        return $this->morphMany(config('sfw.models.plan_subscription_schedule'), 'scheduleable');
    }
}
