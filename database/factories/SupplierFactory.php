<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition()
    {
        return [
            'SupplierName' => $this->faker->company,
            'ContactInfo' => $this->faker->phoneNumber,
        ];
    }
}
