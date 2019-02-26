<?php

use App\{Post, Category};
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::select('id')->get();
        //dd($categories[0]['id']);
        for ($i=0; $i <= 8 ; $i++) { 
            factory(Post::class)->create([
                'category_id' => $categories[$i]['id'],
                'created_at' => Carbon::now()->subHours(rand(0, 720)),
            ]);
        }
    }
}
