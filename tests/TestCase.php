<?php

namespace Coleshirley\FilamentPackageTestsLifecycleExample\Tests;

use Filament\FilamentServiceProvider;
use Filament\Support\SupportServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentServiceProvider::class,
            LivewireServiceProvider::class,
            SupportServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        config()->set('filament.resources', [
            'namespace' => 'Coleshirley\FilamentPackageTestsLifecycleExample\Tests\\Filament\\Resources',
            'path' => __DIR__ . '/Filament/Resources',
            'register' => [],
        ]);

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-package-tests-lifecycle-example_table.php.stub';
        $migration->up();
        */
    }
}
