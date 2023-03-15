<?php

namespace Database\Factories;

use App\Models\Saif\Office;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title'  => $this->facker->sentence,
            'description'  => $this->facker->paragraph,
            'lat'  => $this->facker->latitude,
            'lng'  => $this->facker->longtude,
            'address_line1'  => $this->facker->longitude,
            'address_line2'  => $this->facker->address,
            'approval_status'  => Office::APPROVAL_APPROVED,
            'hidden'  => false,
            'price_per_day'  => $this->facker->numberBetween(1000, 2000),
            'monthly_discount'  => 0,
        ];
    }
}
