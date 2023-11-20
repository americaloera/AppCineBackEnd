<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // php artisan db:seed --class=MovieSeeder

        // 1
        Movie::create([
            'movie_name' => 'Power Of Love',
            'duration' => 115,
            'synopsis' => 'Seventeen, la banda global que está reescribiendo la historia del K-pop, presenta su primera película.',
            'image' => 'https://m.media-amazon.com/images/M/MV5BNTVkYTQ3OTktNDA2Ny00YzYwLTg1NTItMzIxNDhhMDMyZGNiXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_.jpg',
            'director_id' => 1,
            'category_id' => 6,
        ]);

        //https://image.tmdb.org/t/p/original/zEYIA5Opq9zFowZofeWJRmxVI3J.jpg

        Movie::create([
            'movie_name' => 'Frozen 2',
            'duration' => 102,
            'synopsis' => 'Elsa, la reina de Arendelle, descubre el poder de sus habilidades mágicas de controlar el hielo.',
            'image' => 'https://image.tmdb.org/t/p/original/zEYIA5Opq9zFowZofeWJRmxVI3J.jpg',
            'director_id' => 1,
            'category_id' => 7,
        ]);
        
        Movie::create([
            'movie_name' => '¿Qué pasó ayer?',
            'duration' => 100,
            'synopsis' => 'Un grupo de amigos despierta en Las Vegas sin recordar lo que sucedió la noche anterior.',
            'image' => 'https://image.tmdb.org/t/p/original/uXzC19c0YTHOdGbPb5PWvaeFU8J.jpg',
            'director_id' => 3,
            'category_id' => 1,
        ]);
        
        Movie::create([
            'movie_name' => 'Avengers Infinity War',
            'duration' => 149,
            'synopsis' => 'Los héroes de la Tierra se unen para enfrentarse al poderoso Thanos en una batalla por el universo.',
            'image' => 'https://image.tmdb.org/t/p/original/2ZChRdEnZVT6EWGIHE0blbjpyyA.jpg',
            'director_id' => 4,
            'category_id' => 2,
        ]);
        
        Movie::create([
            'movie_name' => 'Harry Potter',
            'duration' => 152,
            'synopsis' => 'Harry Potter descubre sus habilidades mágicas y se enfrenta al malvado Lord Voldemort en la escuela de magia Hogwarts.',
            'image' => 'https://i.pinimg.com/originals/bc/b4/2b/bcb42baa1ce2c22d7f579c647d09280a.jpg',
            'director_id' => 4,
            'category_id' => 3,
        ]);
        
        Movie::create([
            'movie_name' => 'Los juegos del Hambre',
            'duration' => 142,
            'synopsis' => 'En un futuro distópico, Katniss Everdeen lucha por su vida en los Juegos del Hambre, una competencia mortal.',
            'image' => 'https://image.tmdb.org/t/p/original/tpq93sfKJjq6EOWkhp3LN2HOuaW.jpg',
            'director_id' => 5,
            'category_id' => 3,
        ]);
        
        Movie::create([
            'movie_name' => 'La La Land',
            'duration' => 128,
            'synopsis' => 'Dos artistas en Los Ángeles se enamoran mientras persiguen sus sueños en la industria del entretenimiento.',
            'image' => 'https://image.tmdb.org/t/p/original/tQHCDFFPb4nl9qPEB0pfFvQQNVj.jpg',
            'director_id' => 5,
            'category_id' => 5,
        ]);
        
        Movie::create([
            'movie_name' => 'Annabelle',
            'duration' => 99,
            'synopsis' => 'Una muñeca poseída aterroriza a una familia y desata eventos paranormales.',
            'image' => 'https://image.tmdb.org/t/p/original/dfRXHNtBRFJ2GjEAbAO5gdvYsNL.jpg',
            'director_id' => 2,
            'category_id' => 4,
        ]);
        
        Movie::create([
            'movie_name' => 'IT',
            'duration' => 135,
            'synopsis' => 'Un grupo de niños se enfrenta al aterrador payaso Pennywise en el pequeño pueblo de Derry.',
            'image' => 'https://www.themoviedb.org/t/p/original/sSrj4lnhrb113DOPEPTaO2jaDk3.jpg',
            'director_id' => 3,
            'category_id' => 4,
        ]);
        
        Movie::create([
            'movie_name' => 'Whiplash',
            'duration' => 106,
            'synopsis' => 'Un joven baterista se esfuerza por alcanzar la perfección bajo la tutela de un exigente profesor de música.',
            'image' => 'https://image.tmdb.org/t/p/original/3H195ZyNVCWKHKTyFqpoJho3xHc.jpg',
            'director_id' => 4,
            'category_id' => 5,
        ]);
        
        Movie::create([
            'movie_name' => 'El cisne negro',
            'duration' => 108,
            'synopsis' => 'Una bailarina de ballet se sumerge en la rivalidad y la obsesión mientras busca la perfección en su arte.',
            'image' => 'https://i.pinimg.com/originals/10/ba/de/10bade6a81ecb9bfde0648978341bff1.jpg',
            'director_id' => 3,
            'category_id' => 5,
        ]);
        
    }
}