<?php

// Comparison checks.

/** @var string $string */
$string = "foo";
$zero = 0;

if ($zero == $string) {
    $output = "0 is foo";
}
else {
    $output = "0 is not foo";
}
echo $output, "\n";


// Each.
$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');

reset($fruit);
while (list($key, $val) = each($fruit)) {
    echo "$key => $val";
}

//  array_key_exists() with objects.

$object = new stdClass();
$object->key = 'value';

if (array_key_exists('key', $object)) {
    echo $object->key, "\n";
}

class Old implements Serializable {

    public function serialize()
    {
    }

    public function unserialize($data)
    {
    }
}
