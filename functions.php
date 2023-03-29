<?php

// get variables

$posts = 1.5;
$rails = '';
$lengthOfFence = '';

// if value is a float 1 dp - * 10 value

if (is_float($posts){
    $posts = round($posts, 2);
    $posts = settype($posts, "float");
    return $posts;
} else {
    settype($GLOBALS['posts'], "float");
    round($posts, 2);
    settype($posts, "float");
    return $posts;
}
// if value is a float 2 dp - * 100 value

// number of posts and rails inputted = check to see if posts+1 or rails is bigger, use lower number, $p+1*0.1 + $r*1.5

// length of fence inputted = ceil($f/1.7) to say how many sections of posts and rails required, section = $p+1 and $r