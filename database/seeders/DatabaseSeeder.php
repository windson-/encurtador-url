<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/9dd0ec',
            'redirect' => 'https://en.wikipedia.org/wiki/Mario_Merola_(singer)',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/eric-loudoun-shand',
            'redirect' => 'https://en.wikipedia.org/wiki/Eric_Loudoun-Shand',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/ac224b',
            'redirect' => 'https://en.wikipedia.org/wiki/Jean-Claude_Letzelter',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/93ee62',
            'redirect' => 'https://en.wikipedia.org/wiki/Behjat_Abad_Market',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/bodkin-point',
            'redirect' => 'https://en.wikipedia.org/wiki/Bodkin_point',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/476bc9',
            'redirect' => 'https://en.wikipedia.org/wiki/Bykovsky_(surname)',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/395d20',
            'redirect' => 'https://en.wikipedia.org/wiki/Malva_neglecta',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/6e973c',
            'redirect' => 'https://en.wikipedia.org/wiki/Herbert_C._Schenk',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/463cae',
            'redirect' => 'https://en.wikipedia.org/wiki/RG-42',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/eb9824',
            'redirect' => 'https://en.wikipedia.org/wiki/Jan_Kr%C3%A1l%C3%ADk',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/af4d16',
            'redirect' => 'https://en.wikipedia.org/wiki/West_Dryden_Methodist_Episcopal_Church',
        ]);
        DB::table('url_shortener')->insert([
            'url' => 'http://127.0.0.1:8000/jules-gentil',
            'redirect' => 'https://en.wikipedia.org/wiki/Jules_Gentil',
        ]);
    }
}
