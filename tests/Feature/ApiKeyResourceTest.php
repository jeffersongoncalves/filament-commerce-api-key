<?php

use JeffersonGoncalves\Commerce\ApiKey\Models\ApiKey;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Pages\CreateApiKey;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Pages\ListApiKey;
use Livewire\Livewire;

it('renders the api-key list page', function () {
    ApiKey::factory()->count(2)->create();

    Livewire::test(ListApiKey::class)->assertOk();
});

it('creates a api-key record through the panel', function () {
    Livewire::test(CreateApiKey::class)
        ->fillForm([
            'title' => 'Storefront',
            'token' => 'pk_test_123',
            'redacted' => 'pk_tes...123',
            'type' => 'publishable',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(ApiKey::query()->count())->toBe(1);
});
