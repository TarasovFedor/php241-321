<?php
// -- 1 --
echo "<b>-- 1 --</b><br>";
$str = 'aaa * bbb ** eee * **';
$reg = '~(?<!\*)\*(?!\*)~';

$answer = preg_replace($reg, '!', $str);
echo "$answer<br>";

// -- 2 --
echo "<b>-- 2 --</b><br>";
$str = 'a1a a22a a333a a4444a a55555a aba aca';
$reg = '~a\d+a~';

preg_match_all($reg, $str, $answer);
print_r($answer[0]);
echo "<br>";

// -- 3 --
echo "<b>-- 3 --</b><br>";
$str = 'aa aba abba abbba abca abea';
$reg = '~ab*a~';

preg_match_all($reg, $str, $answer);
print_r($answer[0]);
echo "<br>";

// -- 4 --
echo "<b>-- 4 --</b><br>";
$str = 'my-mail@gmail.com';
$reg = '~[\w\.-]+@\w+\.\w{2,3}~';

preg_match($reg, $str, $answer);
print_r($answer[0]);
echo "<br>";