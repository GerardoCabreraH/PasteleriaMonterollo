<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductObserver
{
    /**
     * Handle the User "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function creating(Product $producto)
    {
        $count = $producto->whereYear('created_at', '=', now()->year)->count();
        $code = str_pad(++$count, 3, "0", STR_PAD_LEFT);
        $producto->code = 'M'.$code.date('y');
        $producto->slug = Str::slug($producto->code);
        if ($image = request()->file('image')) {
            $destinationPath = 'assets/img/products/';
            $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $producto->image = "$profileImage";
        }
    }

    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    /**
     * Handle the User "updating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updating(Product $producto)
    {
        if ($image = request()->file('image')) {
            $destinationPath = 'assets/img/products/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $producto->image = "$profileImage";
        } else {
            unset($producto->image);
        }
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * Handle the User "deleting" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleting(Product $producto)
    {
        $count = $producto->whereYear('created_at', '=', now()->year)->count();
        --$count;
        if (File::exists(public_path('assets/img/products/' . $producto->image))) {
            File::delete(public_path('assets/img/products/' . $producto->image));
        }
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
