<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

  public function run(){
    DB::table('users')->delete();

    User::create(array(
      'name' => 'Kevin',
      'email'=>'00251716@uca.edu.sv',
      'password'=>Hash::make('ilobascopwd'),
    ));

    User::create(array(
      'name' => 'Kevin',
      'email'=>'00018616@uca.edu.sv',
      'password'=>Hash::make('ilobascopwd'),
    ));

    User::create(array(
      'name' => 'Gama',
      'email'=>'00215316@uca.edu.sv',
      'password'=>Hash::make('ilobascopwd'),
    ));

    User::create(array(
      'name' => 'Carla',
      'email'=>'00010216@uca.edu.sv',
      'password'=>Hash::make('ilobascopwd'),
    ));

    User::create(array(
      'name' => 'Raúl',
      'email'=>'00025416@uca.edu.sv',
      'password'=>Hash::make('ilobascopwd'),
    ));

    User::create(array(
      'name' => 'Bruce',
      'email'=>'00249716@uca.edu.sv',
      'password'=>Hash::make('ilobascopwd'),
    ));

  }

}
