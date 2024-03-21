<?php

namespace App\Services;

use App\Models\AccessLog;

class AccessLogService
{
    public function getLogs($startDate, $endDate)
    {
        
        // Query builder, will gather results if startDate or endDate params come in the query. 
        return AccessLog::when($startDate, function ($query) use ($startDate) {
                return $query->whereDate('access_time', '>=', $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                return $query->whereDate('access_time', '<=', $endDate);
            })
            ->get();
    }
}