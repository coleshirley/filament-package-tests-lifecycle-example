<?php

use Coleshirley\FilamentPackageTestsLifecycleExample\Tests\Filament\Resources\UserResource;
use Filament\Facades\Filament;

it('can register components for tests', function () {
    expect(Filament::getResources())->toContain(UserResource::class);
});
