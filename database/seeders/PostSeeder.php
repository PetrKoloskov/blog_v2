<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++)
            DB::table('posts')->insert([
                'category_id'=>rand(1,10),
                'title' => 'Post '.$i,
                'slug' => 'post-'.$i,
                'description'=>'description of post'.$i,
                'text'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod, felis eget posuere bibendum, ligula ante tempus mi, ut posuere ex sapien et metus. Vestibulum ut nisl eu purus sagittis viverra. Morbi mattis erat lacus, sit amet cursus augue cursus nec. Sed sapien quam, aliquet quis lectus cursus, tristique malesuada risus. Fusce aliquam, lacus eget posuere molestie, tortor nisl finibus risus, quis dignissim lorem justo vitae lorem. Maecenas arcu metus, hendrerit id auctor id, imperdiet nec massa. Donec iaculis, ex sit amet cursus varius, est risus tempus mi, a gravida odio nulla ut magna. Pellentesque vitae hendrerit dui. Integer dui libero, mollis eu tincidunt id, porta in felis. <br>'.$i.'</p>',

            ]);
    }
}

