<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @tags Test
 */
class TestController extends Controller
{

    /**
     * Health check.
     *
     * Ping server status.
     */
    public function ping(Request $request)
    {
        return response()->json(['health' => 'OK'], 200);
    }
}
