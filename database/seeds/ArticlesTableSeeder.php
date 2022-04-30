<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [];
        for($i = 0; $i < 20; $i++)
        {
            $randomDate = date('Y-m-d H:i:s', time() - rand(1000,100000000));
            $articles[] = 
            [
                'created_at' => $randomDate,
                'subject' => "Тема $i",
                'text' => "Текст ".$i." статьи : Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности позволяет оценить значение новых предложений."
            ];
        }
        \DB::table('articles')->insert($articles);
    }
}
