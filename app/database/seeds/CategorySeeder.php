<?php 

use Larapress\Models\Category;

class CategorySeeder extends DatabaseSeeder{

    public function run(){
        Eloquent::unguard();

        $categories = [
            [
                'name'          => 'Movies',
                'description'   => 'Bla bla'
            ],
            [
                'name'          => 'Series',
                'description'   => 'Bla bla'
            ],
            [
                'name'          => 'Books',
                'description'   => 'Bla bla'
            ],
            [
                'name'          => 'Magazines',
                'description'   => 'Bla bla'
            ]
        ];
        foreach ($categories as $category) {
            Category::create( $category );
        }
    }//run
}
