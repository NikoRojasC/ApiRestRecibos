<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Customer::factory()->count(25)->hasInvoices(10)->create();
        Customer::factory()->count(43)->hasInvoices(2)->create();
        Customer::factory()->count(40)->create();
        Customer::factory()->count(35)->hasInvoices(1)->create();
    }
}
