<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call('UserTableSeeder');
        $this->call('ProductTableSeeder');
        
    }
}


class UserTableSeeder extends Seeder 
{

    public function run()
        {
            
            DB::table('users')->delete();

            \App\User::create([
                'name'=>'Leonardo solar',
                'email'=>'leonardosolar@yahoo.com.br',
                'password'=>bcrypt('123456'),
            ]);
      
        }
}

class ProductTableSeeder extends Seeder 
{

    public function run()
        {
            
            DB::table('products')->delete();

            \App\Product::create([
                'title'=>'titulo do artigo',
                'body'=>'titulo do artigo',
                'value'=>'20',
                'qtd' => '10',
                'url'=>'www.nome.com',
 
            ]);
      
        }
}