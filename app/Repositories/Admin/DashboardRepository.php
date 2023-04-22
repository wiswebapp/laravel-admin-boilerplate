<?php

namespace App\Repositories\Admin;

use App\Models\Banner;
use App\Models\Category;
use App\Models\User;

class DashboardRepository
{
    public function getDashboardData()
    {
        return [
            'totalActiveUser' => User::where('status', 'Active')->count(),
            'totalInActiveUser' => User::where('status', 'InActive')->count(),
            'totalCategory' => Category::where('status', 'InActive')->count(),
            'totalBanner' => Banner::where('status', 'Active')->count(),
        ];
    }
}
