<?php

namespace Tests\Feature;

use App\Models\Laptop;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaptopUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_edit_page_shows_existing_laptop_data(): void
    {
        $laptop = Laptop::create(['brand' => 'Asus', 'model' => 'Zenbook', 'processor' => 'i5', 'ram' => 8]);

        $this->get(route('edit-laptop', $laptop->id))
            ->assertOk()
            ->assertSee('value="Zenbook"', false);
    }

    public function test_laptop_can_be_updated(): void
    {
        $laptop = Laptop::create(['brand' => 'Asus', 'model' => 'Zenbook', 'processor' => 'i5', 'ram' => 8]);

        $this->post(route('update-laptop'), [
            'id' => $laptop->id,
            'brand' => 'Lenovo',
            'model' => 'ThinkPad',
            'processor' => 'i7',
            'ram' => 16,
        ])->assertRedirect('/');

        $this->assertDatabaseHas('laptops', ['id' => $laptop->id, 'brand' => 'Lenovo', 'ram' => 16]);
    }

    public function test_editing_missing_laptop_returns_404(): void
    {
        $this->get(route('edit-laptop', 999))->assertNotFound();
    }
}
