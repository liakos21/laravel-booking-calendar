<?php

declare(strict_types=1);

namespace Tests;

use Gajus\Dindent\Indenter;
use Laravel-booking-calendar\Laravel-booking-calendar\Laravel-booking-calendarServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            Laravel-booking-calendarServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
