<?php 

use Larapress\Models\Tag;

class TagSeeder extends DatabaseSeeder{

    public function run(){
        Eloquent::unguard();

        $tags = [
            [
                'name'          => 'action',
                'description'   => 'Bla bla'
            ],
            [
                'name'          => '1991',
                'description'   => 'Bla bla'
            ],
            [
                'name'          => 'western',
                'description'   => 'Bla bla'
            ]
        ];
        foreach ($tags as $tag) {
            Tag::create( $tag );
        }
    }//run
}
