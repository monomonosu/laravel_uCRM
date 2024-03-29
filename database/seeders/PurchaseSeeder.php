<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Purchase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Item::all();
        Purchase::factory(30000)->create()->each(function (Purchase $purchase) use ($items) {
            $purchase->items()->attach($items->random(rand(1, 3))->pluck('id')->toArray(), ['quantity' => rand(1, 5)]);
        });
    }
}
