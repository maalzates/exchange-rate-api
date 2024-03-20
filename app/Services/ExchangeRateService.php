<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ExchangeRateService {
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.exchange_api.base_url');
        $this->apiKey = config('services.exchange_api.api_key');
    }

    public function getRates()
    {
        // Using our baseUrl gotten in the construct and passing the apiKey as app_id parameter for fetching data. 
        $response = Http::get("{$this->baseUrl}/latest.json", [
            'app_id' => $this->apiKey,
        ]);
    
        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Failed to retrieve exchange rates.');
    }
}