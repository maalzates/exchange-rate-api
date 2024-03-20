<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AccessLog;
use Illuminate\Http\Request;

class AccessLogController extends Controller
{
    public function index() {
        
        $access_logs = AccessLog::all();

        return response()->json($access_logs);
    }
}
