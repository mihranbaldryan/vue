<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 2)->create()->each(function($u){
            $u->articles()->save(factory(App\Article::class)->make() )
            ->images()->saveMany(factory(App\Image::class,2)->make() );
        });
    }
}
