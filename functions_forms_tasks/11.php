<?php

function ucfirstSentences($a)
{
    $sentences = explode('.', $a);
    foreach ($sentences as &$sentence) {
        $sentenceTrimmed = ltrim($sentence);
        if (mb_strlen($sentence) && mb_strlen($sentenceTrimmed)) {
            if (mb_strlen($sentence) && mb_strlen($sentenceTrimmed)) {
                $spaces = str_repeat(' ', mb_strlen($sentence) - mb_strlen($sentenceTrimmed));
            } else {
                $spaces = '';
            }
            $sentence = $spaces . mb_strtoupper(mb_substr($sentenceTrimmed, 0, 1)) . mb_substr($sentenceTrimmed, 1);
        }
    }
    return implode('.', $sentences);
}

$a = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';
echo ucfirstSentences($a);