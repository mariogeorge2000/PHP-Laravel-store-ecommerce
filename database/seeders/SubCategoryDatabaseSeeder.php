<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class SubCategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(10)->create(['parent_id'=>$this->getRandomParentId()]);
      //  factory(App\ModelsCategory::class, 20)->create();
    }

    private function getRandomParentId()
    {
        $parent_id=Category::inRandomOrder()->first();
        return $parent_id;
    }
}
