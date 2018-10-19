<?php

declare(strict_types=1);

require __DIR__.'/functions.php';


$heroes = [

  'batman' =>
  [
    'name' => 'Batman',
    'fullName' => 'Bruce Wayne',
    'id' => 1,
    'link' => 'https://en.wikipedia.org/wiki/Batman',
    'img' => '/assets/batman.jpeg',
  ],

  'superman' =>
  [
    'name' => 'Superman',
    'fullName' => 'Clark Kent',
    'id' => 2,
    'link' => 'https://en.wikipedia.org/wiki/Superman',
    'img' => '/assets/superman.jpeg',
  ],

  'ironman' =>
  [
    'name' => 'Iron Man',
    'fullName' => 'Tony Stark',
    'id' => 3,
    'link' => 'https://en.wikipedia.org/wiki/Iron_Man',
    'img' => '/assets/ironman.jpeg',
  ],

  'captain' =>
  [
    'name' => 'Captain America',
    'fullName' => 'Steve Rogers',
    'id' => 4,
    'link' => 'https://en.wikipedia.org/wiki/Captain_America',
    'img' => '/assets/captain.jpeg',
  ],

  'hulk' =>
  [
    'name' => 'Hulk',
    'fullName' => 'Bruce Banner',
    'id' => 5,
    'link' => 'https://en.wikipedia.org/wiki/Hulk_(comics)',
    'img' => '/assets/hulk.jpeg',
  ]
];


$comments = [

  [
    'title' => 'It\'s not who I am underneath but what I do that defines me.',
    'author' => $heroes['batman']['name'],
    'link' => $heroes['batman']['link'],
    'avatar' => $heroes['batman']['img'],
    'content' => "Hero can be anyone. Even a man knowing something as simple and reassuring as putting a coat around a young boy shoulders to let him know the world hadn't ended.",
    'date' => '2018-01-01',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I\'m Batman',
    'author' => $heroes['batman']['name'],
    'link' => $heroes['batman']['link'],
    'avatar' => $heroes['batman']['img'],
    'content' => "My anger outweights my guilt.",
    'date' => '2018.2.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'You’re much stronger than you think you are, trust me.',
    'author' => $heroes['superman']['name'],
    'link' => $heroes['superman']['link'],
    'avatar' => $heroes['superman']['img'],
    'content' => "There is a superhero in all of us, we just need the courage to put on the cape.",
    'date' => '2018.3.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'It’s not an S, on my world it means hope.',
    'author' => $heroes['superman']['name'],
    'link' => $heroes['superman']['link'],
    'avatar' => $heroes['superman']['img'],
    'content' => "You will be different, sometimes you’ll feel like an outcast, but you’ll never be alone.",
    'date' => '2018.4.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'Heroes are made by the paths they choose, not the powers they are graced with.',
    'author' => $heroes['ironman']['name'],
    'link' => $heroes['ironman']['link'],
    'avatar' => $heroes['ironman']['img'],
    'content' => "You can take away my suits, you can take away my home, but there’s one thing you can never take away from me: I AM IRON MAN.",
    'date' => '2018.5.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I shouldn’t be alive, unless it was for a reason, I know what I have to do, and I know it is right.',
    'author' => $heroes['ironman']['name'],
    'link' => $heroes['ironman']['link'],
    'avatar' => $heroes['ironman']['img'],
    'content' => "I’m Tony Stark. I build neat stuff, got a great girl, occasionally save the world. So why can’t I sleep?",
    'date' => '2018.6.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I\'m... Captain America.',
    'author' => $heroes['captain']['name'],
    'link' => $heroes['captain']['link'],
    'avatar' => $heroes['captain']['img'],
    'content' => "Pretty much.",
    'date' => '2018.7.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'I got beat up in that alley. And that parking lot. And behind that diner.',
    'author' => $heroes['captain']['name'],
    'link' => $heroes['captain']['link'],
    'avatar' => $heroes['captain']['img'],
    'content' => "I don't want to kill anyone, but I don't like bullies; I don't care where they're from.",
    'date' => '2018.8.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'Hulk hate puny banner!',
    'author' => $heroes['hulk']['name'],
    'link' => $heroes['hulk']['link'],
    'avatar' => $heroes['hulk']['img'],
    'content' => "Stupid big lady! Do what Hulk wants! Or Hulk will smash you, and take your kitties!",
    'date' => '2018.9.31',
    'likes' => rand(10, 100)
  ],

  [
    'title' => 'PUNY HUMANS',
    'author' => $heroes['hulk']['name'],
    'link' => $heroes['hulk']['link'],
    'avatar' => $heroes['hulk']['img'],
    'content' => "HULK IS NOT AFRAID...HULK IS STRONGEST ONE THERE IS!!!",
    'date' => '2018.10.31',
    'likes' => rand(10, 100)
  ]
];

foreach ($comments as $comment) {
  echo $comment['author'];

}
