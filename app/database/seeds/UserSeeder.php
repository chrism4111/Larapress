<?php 

use Larapress\Models\User;

class UserSeeder extends DatabaseSeeder{

    public function run(){
        Eloquent::unguard();

        $users = [
            [
                'login'             => 'younesrafie',
                'password'          => Hash::make('younesrafie'),
                'nicename'          => 'RAFIE Younes',
                'email'             => 'younesrafie@gmail.com',
                'activation_key'    => '',
                'status'            => 1
            ],
            [
                'login'             => 'foo',
                'password'          => Hash::make('foo'),
                'nicename'          => 'Foo Faa',
                'email'             => 'foo@gmail.com',
                'activation_key'    => '',
                'status'            => 1
            ],
            [
                'login'             => 'bar',
                'password'          => Hash::make('bar'),
                'nicename'          => 'Bar beer',
                'email'             => 'bar@gmail.com',
                'activation_key'    => '',
                'status'            => 1
            ],
        ];
        foreach ($users as $user) {
            User::create( $user );
        }   
    }
}
