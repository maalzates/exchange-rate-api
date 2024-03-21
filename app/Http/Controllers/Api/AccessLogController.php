<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccessLogRequest;
use App\Services\AccessLogService;
use Illuminate\Support\Facades\Log;

class AccessLogController extends Controller
{                         
    
    protected $accessLogService;

    public function __construct(AccessLogService $accessLogService)
    {
        $this->accessLogService = $accessLogService;
    }
    
    // Here we use custom Request, for validating input data: query params startDate endDate
    public function index(AccessLogRequest $request) {
        try {
            // Retrieve query parameters
            $startDate = $request->query('start_date');
            $endDate = $request->query('end_date');

            $accessLogs = $this->accessLogService->getLogs($startDate, $endDate);

            return response()->json($accessLogs);
        } catch (\Throwable $e) {
            // Log cases of error for internal review
            Log::error('Error fetching access logs: ' . $e->getMessage());

            return response()->json(['message' => 'Unable to retrieve access logs at this moment. Please try again later.'], 500);
        }
    }
}
