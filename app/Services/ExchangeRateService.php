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
        $response = Http::get("{$this->baseUrl}/latest.json", [
            'app_id' => $this->apiKey,
        ]);
    
        if ($response->successful()) {
            return $response->json();
        }
    
        // Handle error or throw an exception
        throw new \Exception('Failed to retrieve exchange rates.');
    }
}