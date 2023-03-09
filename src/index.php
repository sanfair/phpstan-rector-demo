<?php

// <---- 8.0 ---->
/** Str contains */
function testSubstring(string $string, string $subString): bool
{
    return strpos($string, $subString) !== false;
}
testSubstring('Hi, my name is', 'name');

/** Str Starts With */
function testStartsWith(string $string, string $subString): bool
{
    return substr($string, 0, strlen($subString)) === $subString;
}
testStartsWith('My name is', 'My');

/** Str Ends With */
function testEndsWith(string $string, string $subString): bool
{
    return substr($string, -strlen($subString)) === $subString;
}
testEndsWith('My name is', 'Slim Shady');

/** Set State warning */
class SetStateClass
{
    public function __set_state($properties) {

    }
}

/** Final Private Warning */
class FinalPrivateClass
{
    final private function getter() {
        return $this;
    }
}

/** Deprecate required parameters after optional  */
function testOptionalBeforeRequired($optional = 1, $required)
{
}
class OptionalBeforeRequiredClass
{
    public function method($optional = 1, $required)
    {
    }
}

// <---- 7.4 ---->
/** Deprecate is_real and (real) casting */
(real) 0.42069;

is_real(3.14159265359);

/** Deprecate array_key_exists on objects */
$object = new \stdClass();
$object->value = 'something';
array_key_exists('value', $object);

/** Change mb_strrpos() encoding argument position */
mb_strrpos('abcd', 'abc', 'UTF-8');

/** Array and string offset access using curly braces */
$string = 'test';
$string{0};
$array = ['test'];
$array{0};

/** Nested ternary operators without explicit parentheses */
/** @var mixed $a */  $a = 1;
/** @var mixed $b */  $b = 2;
$value = $a ? $b : $a ?: null;

// <---- 7.3 ---->
/** Case-Insensitive Constants */
define('FOO', 42, true);

/** String search functions with integer needle */
$str = "There are 97 apples";
strpos($str, "97"); // int(10)
strpos($str, 97);   // int(6) -> int(10)

/** PCRE2 migration */
preg_match("#[\w-()]#", 'some text');

// <---- 7.2 ---->
/** Each */
$callbacks = ['test', 'other'];
while (list($key, $callback) = each($callbacks)) {
    // ...
}

/** Assert */
assert('true === true');

assert("true === true");

echo "Finished\n";
