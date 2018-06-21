<?php
require_once('drink.php');
// require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('森田　環', 320000, 'yataa.jpg', 'エンジニア');
$coffee = new Drink('花岡翔太', 170000, 'shota.jpg', '事務');
$curry = new Drink('安田　大輝', 300000, 'taiki.jpg', '運転手');
$pasta = new Drink('加藤　田須磨', 350000, 'tatsuma.jpg', '建築家');
$eiko = new Drink('柏木　英子', 1500, 'eiko.jpg', '書記');
$kazuho = new Drink('佐藤　和歩', 900000, 'kazuho.jpg', '営業');

$menus = array($juice, $coffee, $curry, $pasta, $eiko, $kazuho);

$user1 = new User('三木谷', 'male');
$user2 = new User('田中', 'female');
$user3 = new User('馬場', 'female');
$user4 = new User('前園', 'male');

$users = array($user1, $user2, $user3, $user4);

// 以下の$review1 ~ $review8を削除して、userIdプロパティをセットするためのコードを貼り付けてください
$review1 = new Review($juice->getName(), $user1->getId(), 'じゃかましいけどタイピングが早い！');
$review2 = new Review($curry->getName(), $user1->getId(), '実は甘えん坊なんです。');
$review3 = new Review($coffee->getName(), $user2->getId(), '声が低い。');
$review4 = new Review($pasta->getName(), $user2->getId(), '1日１ヨーグルト');
$review5 = new Review($juice->getName(), $user3->getId(), 'ジャミラ！！！');
$review6 = new Review($curry->getName(), $user3->getId(), '犬とギターが好きなイケメン！');
$review7 = new Review($coffee->getName(), $user4->getId(), '声が低い。');
$review8 = new Review($pasta->getName(), $user4->getId(), '田須磨じゃなくて達真だよ！');
$review9 = new Review($eiko->getName(), $user3->getId(), '顔だけは誰にも負けない。');
$review10 = new Review($eiko->getName(), $user1->getId(), '彼氏より仕事優先！');
$review11 = new Review($kazuho->getName(), $user1->getId(), 'イケメン過ぎ、大好き！');
$review12 = new Review($kazuho->getName(), $user4->getId(), '会社で一番かしこいですね。');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8, $review9, $review10, $review11, $review12);

?>