<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'billing_email',
        'billing_name',
        'billing_address',
        'billing_city',
        'billing_country',
        'billing_phone',
        'billing_total',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }

    public static function saveOrders($request)
    {
        $inputs = $request->all();

        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $inputs['billing_email'],
            'billing_name' => $inputs['billing_name'],
            'billing_address' => $inputs['billing_address'],
            'billing_city' => $inputs['billing_city'],
            'billing_country' => $inputs['billing_country'],
            'billing_phone' => $inputs['billing_phone'],
            'billing_total' => \Cart::getTotal(),
        ]);

        $items = \Cart::getContent();
        foreach ($items as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
            ]);
        }

        return $order;
    }
}
