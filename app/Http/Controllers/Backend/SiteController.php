<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $start = $request->get('start');
        $end = $request->get('end');
        $revenue = Order::where('status', 3)
            ->where(function ($query) use ($start, $end) {
                if (isset($start) && isset($end)) {
                    $query->whereDate('created_at', '>=', $start)->whereDate('created_at', '<=', $end);
                }
            })->sum('total_price');
        $pending = Order::where('status', 1)->where(function ($query) use ($start, $end) {
            if (isset($start) && isset($end)) {
                $query->whereDate('created_at', '>=', $start)->whereDate('created_at', '<=', $end);
            }
        })->count();
        $canceled = Order::where('status', 4)->where(function ($query) use ($start, $end) {
            if (isset($start) && isset($end)) {
                $query->whereDate('created_at', '>=', $start)->whereDate('created_at', '<=', $end);
            }
        })->count();
        return view('backend.index', [
            'start' => $start,
            'end' => $end,
            'revenue' => $revenue,
            'pending' => $pending,
            'canceled' => $canceled
        ]);
    }
}
