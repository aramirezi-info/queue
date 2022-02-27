<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrdersController extends Controller
{
    public function index(): View
    {
        $orders = Order::paginate(10);

        return view('orders.index', compact('orders'));
    }
}
