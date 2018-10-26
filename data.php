<?php

declare(strict_types=1);


$authors = [

  'batman' =>
  [
    'name' => 'Batman',
    'fullName' => 'Bruce Wayne',
    'id' => 1,
    'img' => 'assets/batman.jpeg',
  ],

  'superman' =>
  [
    'name' => 'Superman',
    'fullName' => 'Clark Kent',
    'id' => 2,
    'img' => 'assets/superman.jpeg',
  ],

  'ironman' =>
  [
    'name' => 'Iron Man',
    'fullName' => 'Tony Stark',
    'id' => 3,
    'img' => 'assets/ironman.jpeg',
  ],

  'captain' =>
  [
    'name' => 'Captain America',
    'fullName' => 'Steve Rogers',
    'id' => 4,
    'img' => 'assets/captain.jpeg',
  ],

  'hulk' =>
  [
    'name' => 'Hulk',
    'fullName' => 'Bruce Banner',
    'id' => 5,
    'img' => 'assets/hulk.jpeg',
  ]
];


$articles = [

  [
    'title' => 'It\'s not who I am underneath but what I do that defines me.',
    'author' => 1,
    'content' => "Hero can be anyone. Even a man knowing something as simple and reassuring as putting a coat around a young boy shoulders to let him know the world hadn't ended.",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I\'m Batman',
    'author' => 1,
    'content' => "My anger outweights my guilt.",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'You’re much stronger than you think you are, trust me.',
    'author' => 2,
    'content' => "There is a superhero in all of us, we just need the courage to put on the cape.",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'It’s not an S, on my world it means hope.',
    'author' => 2,
    'content' => "You will be different, sometimes you’ll feel like an outcast, but you’ll never be alone.",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'Heroes are made by the paths they choose, not the powers they are graced with.',
    'author' => 3,
    'content' => "You can take away my suits, you can take away my home, but there’s one thing you can never take away from me: I AM IRON MAN.",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I shouldn’t be alive, unless it was for a reason, I know what I have to do, and I know it is right.',
    'author' => 3,
    'content' => "I’m Tony Stark. I build neat stuff, got a great girl, occasionally save the world. So why can’t I sleep?",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I\'m... Captain America.',
    'author' => 4,
    'content' => "Pretty much.",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I got beat up in that alley. And that parking lot. And behind that diner.',
    'author' => 4,
    'content' => "I don't want to kill anyone, but I don't like bullies; I don't care where they're from.",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'Hulk hate puny banner!',
    'author' => 5,
    'content' => "Stupid big lady! Do what Hulk wants! Or Hulk will smash you, and take your kitties!",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'PUNY HUMANS',
    'author' => 5,
    'content' => "HULK IS NOT AFRAID...HULK IS STRONGEST ONE THERE IS!!!",
    'date' => date('Y-m-d', rand(1538352000, 1546214400)),
    'likes' => rand(10, 100)
  ]
];
