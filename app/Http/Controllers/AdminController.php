<?php

namespace App\Http\Controllers;

use App\Models\AdminContactLog;

class AdminController extends Controller
{
    public function viewContactLogs()
    {
        $logs = AdminContactLog::latest()->paginate(10);
        return view('admin.contact-logs', compact('logs'));
    }
}
