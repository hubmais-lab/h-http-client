<?php
return [
    # Endpoint the customization access
    'endpoint' => env('HCLIENT_ENPOINT', 'https://teste.api.payments.hubmais.tec.br'),

    # MarketplaceId provided by the provider
    'marketplace_id' => env('HCLIENT_MARKETPLACE_ID', ''),

    # SellerId provided by the provider
    'seller_id' => env('HCLIENT_SELLER_ID', ''),

    # Token access API
    'token' => env('HCLIENT_TOKEN', ''),

    # Timeout in seconds
    'timeout' => env('HCLIENT_TIMEOUT', 30),
];