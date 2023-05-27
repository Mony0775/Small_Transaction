<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;

class StockController extends Controller
{
    public function inventories()
    {
        $inventories = Product::all();
        $product_id = [];
        foreach ($inventories as $inventory) {
            $product_id[] = $inventory->id;
            $order = OrderDetail::get('product_id', $product_id);
        }
        dd($order);
        $sale = Order::all()->sum('payment_amount');
        return view('admin.inventory.inventories', compact('inventories'));
    }
    public function order()
    {
        // $transactions = Transaction::latest()->get();
        $transactions = DB::table('transactions')
                        ->select('transactions.*', 'users.name as employeeName', 'customers.customer_name as CustomerName', 'shippers.shipper_name as ShipperName', 'payments.*')
                        ->leftJoin('users', 'users.id', 'transactions.employee_id')
                        ->leftJoin('customers', 'customers.id', 'transactions.customer_id')
                        ->leftJoin('shippers', 'shippers.id', 'transactions.shipper_id')
                        ->leftJoin('payments', 'payments.id', 'transactions.payment_id')
                        ->where('transactions.type', 'order')
                        ->get();
        // dd($transactions);
        return view('admin.inventory.order', compact('transactions'));
    }
    public function purchasing()
    {
        $transactions = DB::table('transactions')
                        ->select('transactions.*', 'users.name as employeeName', 'shippers.shipper_name as ShipperName','suppliers.supplier_name as supplierName', 'payments.*')
                        ->leftJoin('users', 'users.id', 'transactions.employee_id')
                        ->leftJoin('shippers', 'shippers.id', 'transactions.shipper_id')
                        ->leftJoin('suppliers', 'suppliers.id', 'transactions.supplier_id')
                        ->leftJoin('payments', 'payments.id', 'transactions.payment_id')
                        ->where('transactions.type', 'purchase')
                        ->get();
        return view('admin.inventory.purchase', compact('transactions'));
    }

}
