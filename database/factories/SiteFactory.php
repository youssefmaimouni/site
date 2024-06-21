<?php
namespace Database\Factories;

use App\Models\categorier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiteFactory extends Factory
{
    public function definition()
    {
        // Generate a file name
        $fileName = Str::random(40) . '.jpg';

        // Get a random image from a free service like Lorem Picsum
        $response = Http::get('https://picsum.photos/640/480');

        // Store the image in the public storage
        if ($response->successful()) {
            Storage::disk('public')->put('logos/' . $fileName, $response->body());
        }

        return [
            'lien' => $this->faker->url,
            'logo' => 'logos/' . $fileName,
            'titre' => $this->faker->words(2,true),
            'id_cat'=>categorier::inRandomOrder()->first()->id,
            'description' => $this->faker->paragraph,
        ];
    }
}
