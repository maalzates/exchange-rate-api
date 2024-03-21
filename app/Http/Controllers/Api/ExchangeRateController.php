<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ExchangeRateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExchangeRateController extends Controller
{
    protected $exchangeRateService;

    public function __construct(ExchangeRateService $exchangeRateService)
    {
        $this->exchangeRateService = $exchangeRateService;
    }

    public function index() {

        try {
            $rates =  $this->exchangeRateService->getRates();

            return response()->json($rates);

        } catch (\Throwable $e) {
            Log::error('ExchangeRateService error: ' . $e->getMessage());

            return response()->json(['error' => 'An unexpected error occurred while fetching exchange rates.'], 500);
        }

    }
}
