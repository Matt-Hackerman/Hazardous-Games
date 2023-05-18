<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Games;
use App\Models\users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        users::create([
            'FName' => 'Aryon',
            'LName' => 'Chase',
            'Username' => 'AChase',
            'Email' => 'AChase202@stevenscollege.edu',
            'Password' => 'Banana',
        ]);

        Games::create([
            'Title' => 'Knuckle Bones',
            'Description' => "A game of risk and rewards. Scores are the total of all dice on your board. Doubles and Triples can be made in each column and are worth 2x and 3x respectively. You can remove your opponent's dice by matching the number on your side. Try and get a higher score then your opponent! (Based on the KnuckleBones game from Devolver)",
            'Developer' => 'Aryon Chase',
            'URL' => 'knucklebones',
            'ThumbURL' => 'https://dotesports.com/wp-content/uploads/2022/08/02104722/20220802104703_1.jpg',
        ]);

        Games::create([
            'Title' => 'RobCo Hacking game',
            'Description' => "Welcome to the RobCo Hacking game. In this game, you will see a list of words with random characters in between. One of the words will be the correct password. The hacking minigame is essentially a process of elimination. When you select a word, it will tell you how many letters in that word line up with the correct word. You only have 4 chances to select the correct one, so you will have to figure it out. Use the WASD / Arrow keys to move the cursor and ENTER to select highlighted text. (Based on Fallout 4's Terminal Hacking minigame)",
            'Developer' => 'Aryon Chase',
            'URL' => 'robco',
            'ThumbURL' => 'https://assets.tentonhammer.com/guides/attached_images/000/011/115/medium/fallout-4-terminal-hero.jpg',
        ]);

        Games::create([
            'Title' => 'Frogger',
            'Description' => 'A remake of the classic action arcade game known as Frogger. Modeled after the original game version made in 1981. The goal of the game is to cross the street while managing to avoid the cars driving through the streets. You must fill each of the five slots on the other side of the road to complete the game. Controls: Use the arrow keys to manipulate the frogs movement',
            'Developer' => 'Connor Csoky',
            'URL' => 'frogger',
            'ThumbURL' => 'https://m.media-amazon.com/images/I/51YBNK9QFGL.jpg',
        ]);

        Games::create([
            'Title' => 'Galaga Remastered',
            'Description' => 'A remake of the classic fixed shooter game known as Galaga. Originally created in 1981 as a sequel to galaxian Galaga became a staple of the arcade industry. The goal of the game is to avoid the incoming bullets from the enemies while simultaneously taking down the enemies. Controls: left and right arrow keys maneuver the ship, space key to shoot',
            'Developer' => 'Connor Csoky',
            'URL' => 'galaga',
            'ThumbURL' => 'https://www.giantbomb.com/a/uploads/scale_small/16/164924/3135436-5131895793-30660.jpg',
        ]);

        Games::create([
            'Title' => 'Bomb Defusal',
            'Description' => 'This is bomb defusal, this is a game where you attempt to defuse a bomb in a small amount of time, you will need to walk your self through every problem. If you need guidance on a bomb device a hand book is provided to you with knowledge of different types of bombs devices, and ways to defuse them. Its up to you to complete this task we have faith in your skill make us proud.',
            'Developer' => 'Matthew Hackman',
            'URL' => 'bomb-defusal',
            'ThumbURL' => 'https://cdn.discordapp.com/attachments/1081288933406670989/1108803284640223324/bombdefusal.png',
        ]);

        Games::create([
            'Title' => 'Simon Says',
            'Description' => 'A remake an spin of the famous game Simon Says memory game, this game will test your memory skills as you will need to pay attention to the sequence and match it. This game has no end so get in there an see how far you can get, and remember to pay attention as it will come in handy later.',
            'Developer' => 'Matthew Hackman',
            'URL' => 'simon-says',
            'ThumbURL' => 'https://cdn.discordapp.com/attachments/1081288933406670989/1108803285177081947/simonsays.png',
        ]);
    }
}
