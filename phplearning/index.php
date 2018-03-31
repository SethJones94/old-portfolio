<?php

$greeting = "Hello, World!";

$names = ['jeff', 'john', 'jill'];


$tasks = [
    
    'title' => 'Go to store',
    
    'due' => 'tomorrow',
    
    'assigned' => 'me',
    
    'completed' => false
];


$person = [
   
    'age' => 31,

    'hair' => 'brown',

    'career' => 'web developer'

];

$person['name'] = 'Jeff';

function dumper($one, $two, $three) {
    var_dump($one, $two, $three);
}

dumper('hello', 'big', 'world');


(var_dump($person));

require 'index-view.php';
