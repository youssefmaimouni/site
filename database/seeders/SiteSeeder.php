<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating 10 Site instances
        Site::factory(50)->create();
    }
}
