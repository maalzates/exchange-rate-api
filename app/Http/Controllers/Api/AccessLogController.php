<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccessLogRequest;
use App\Models\AccessLog;
use App\Services\AccessLogService;
use Illuminate\Http\Request;

class AccessLogController extends Controller
{                         
    
    protected $accessLogService;

    public function __construct(AccessLogService $accessLogService)
    {
        $this->accessLogService = $accessLogService;
    }
    
    // Here we use custom Request, for validating input data: query params startDate endDate
    public function index(AccessLogRequest $request) {

        // Retrieve query parameters
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        $accessLogs = $this->accessLogService->getLogs($startDate, $endDate);

        return response()->json($accessLogs);
    }
}
