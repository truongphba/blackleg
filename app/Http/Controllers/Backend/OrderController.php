<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $status = $request->get('status');
        $start = $request->get('start');
        $end = $request->get('end');
        $list = Order::orderBy('created_at', 'desc')
            ->where(function ($query) use ($keyword) {
                $query->where('id', 'like', '%' . $keyword . '%')
                    ->orWhere('created_by', 'like', '%' . $keyword . '%')
                    ->orWhere('ship_phone', 'like', '%' . $keyword . '%')
                    ->orWhereHas('product', function ($query) use ($keyword) {
                        $query->where('name', 'like', '%' . $keyword . '%');
                    });
            })
            ->where(function ($query) use ($status) {
                if (isset($status) && $status != 0) {
                    $query->where('status', $status);
                }
            })
            ->where(function ($query) use ($start, $end) {
                if (isset($start) && isset($end)) {
                    $query->whereDate('created_at', '>=', $start)->whereDate('created_at', '<=', $end);
                }
            })
            ->paginate(10)
            ->appends($request->only('keyword'))->appends($request->only('start'))->appends($request->only('end'));

        $revenue = Order::where('status',3)
            ->where(function ($query) use ($start, $end) {
                if (isset($start) && isset($end)) {
                    $query->whereDate('created_at', '>=', $start)->whereDate('created_at', '<=', $end);
                }
            })->sum('total_price');

        return view('backend.order.index', [
            'list' => $list,
            'keyword' => $keyword,
            'status' => $status,
            'start' => $start, 'end' => $end,
            'revenue' => $revenue
        ]);
    }

    public function pendingSelected(Request $request)
    {
        $ids = $request->get('ids');
        Order::whereIn('id', $ids)->update(['status' => 1]);
        return $ids;
    }

    public function shippingSelected(Request $request)
    {
        $ids = $request->get('ids');
        Order::whereIn('id', $ids)->update(['status' => 2]);
        return $ids;
    }

    public function doneSelected(Request $request)
    {
        $ids = $request->get('ids');

        DB::beginTransaction();
        try {
            Order::whereIn('id', $ids)->update(['status' => 3]);
            $orders = Order::whereIn('id', $ids)->get();
            foreach ($orders as $order) {
                foreach ($order->product as $orderDetail) {
                    $size = DB::table('product_size')
                        ->where('product_id', $orderDetail->pivot->product_id)
                        ->where('size_id', $orderDetail->pivot->size_id)->first();
                    if ($size->quantity > 0 ){
                        $quantity = $size->quantity - ($orderDetail->pivot->quantity);
                    }
                    else{
                        $quantity = 0;
                    }
                    DB::table('product_size')
                        ->where('product_id', $orderDetail->pivot->product_id)
                        ->where('size_id', $orderDetail->pivot->size_id)->update(['quantity' => $quantity]);
                }
            }
            DB::commit();
        }
        catch (\Exception $e){
            DB::rollback();
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'error' => false,
        ], 200);
    }

    public function canceledSelected(Request $request)
    {
        $ids = $request->get('ids');
        Order::whereIn('id', $ids)->update(['status' => 4]);
        return $ids;
    }
}
