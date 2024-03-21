<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccessLogRequest;
use App\Models\AccessLog;
use Illuminate\Http\Request;

class AccessLogController extends Controller
{
    public function index(AccessLogRequest $request) {

        // Retrieve query parameters
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        // Query builder, will gather results if startDate or endDate params come in the query. 
        $accessLogs = AccessLog::when($startDate, function ($query) use ($startDate) {
            return $query->whereDate('access_time', '>=', $startDate);
        })
        ->when($endDate, function ($query) use ($endDate) {
            return $query->whereDate('access_time', '<=', $endDate);
        })
        ->get();

        return response()->json($accessLogs);
    }
}
