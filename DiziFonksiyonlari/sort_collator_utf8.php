<?php
$array = array( 'Orhan', 'Zeki', 'Ömer', 'Ceylan', 'Gözde' );
$collator = new Collator('tr_TR');
$collator->sort($array);
print_r($array);