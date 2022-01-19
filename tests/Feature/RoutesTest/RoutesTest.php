<?php

namespace Tests\Feature\RoutesTest;

use App\Models\Phone;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    public function user_try_access_home_page()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }

    /** @test */
    public function user_try_access_create_page()
    {
        $response = $this->get(route('contact.create.page'));

        $response->assertStatus(200);
    }

    /** @test */
    public function user_try_access_update_page()
    {

        $phone = Phone::factory()->create();
        $id = $phone->contact_id;
        $response = $this->get(route('contact.update.page', ['id' => $id]));

        $response->assertStatus(200);
    }

    /** @test */
    public function user_try_access_show_page()
    {
        $phone = Phone::factory()->create();
        $id = $phone->contact_id;
        $response = $this->get(route('contact.show', ['id' => $id]));

        $response->assertStatus(200);
    }
}
