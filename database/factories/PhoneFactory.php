<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{

    protected $model = Phone::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'phone' => $this->faker->phoneNumber(),
            'contact_id' => Contact::factory(),
        ];
    }
}
