<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++){
            \App\Message::Create([
                'content' => $i . '番目のメッセージ'
                ]);
        }
        
    }
}
