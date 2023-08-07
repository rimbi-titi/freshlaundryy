<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'telepon', 'service_id', 'alamat', 'status_id', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        // Calculate and set the 'harga' attribute before saving the model
        static::saving(function ($order) {
            // Get the corresponding service's price_per_kg based on 'service_id'
            $service = Service::find($order->service_id);
            if ($service) {
                // Calculate the 'harga' based on 'price_per_kg' and 'bobot'
                $order->harga = $service->price_per_kg * $order->bobot;
            }
        });
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class ,'status_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
