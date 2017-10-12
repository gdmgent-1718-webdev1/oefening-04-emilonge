<?php

$a1 = 'hallo';
$a2 = true;
$a3 = 2.10483250582;
$a4 = 7;
$a5 = ['Emily', 'Ongenaert'];

/**
 * @param $watIs
 * @return string
 */

function waarde($watIs)
{
    return "De waarde is ${watIs}";
}

echo waarde($watIs) . gettype($a1), PHP_EOL;
echo waarde($watIs) . gettype($a2), PHP_EOL;
echo waarde($watIs) . gettype($a3), PHP_EOL;
echo waarde($watIs) . gettype($a4), PHP_EOL;
echo waarde($watIs) . gettype($a5), PHP_EOL;
