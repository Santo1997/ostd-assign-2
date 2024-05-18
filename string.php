<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    foreach (str_split(strtolower($string)) as $char) {
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }
    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

