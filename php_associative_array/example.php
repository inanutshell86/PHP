<?php

// Ordered Map
$map = ['key' => 'value', 'another_key' => 'another_value', 123, 'asfd'];

$map['key'] = 'value';

$map['new_key'] = 'new_value';
$map['key'] = 'value2';
unset($map['key']);

foreach ($map as $value) {
  # code...
}

foreach ($map as $key => $value) {
  # code...
}

### Functions

array_key_exists('undefined', $map);
isset($map['undefined']);

### Example

$users = [
  ['name' => 'john', 'age' => '22', 'from' => 'london'],
  ['name' => 'kate', 'age' => '23', 'from' => 'detroit'],
  ['name' => 'michael', 'age' => '29', 'from' => 'paris'],
];

function oldestUser($users)
{
    if (empty($users)) {
        return;
    }
    $oldest = $users[0]['age'];
    foreach ($users as $user) {
        if ($user['age'] > $oldest) {
            $oldest = $user['age'];
        }
    }
    return $oldest;
};

echo oldestUser($users);

### Array and Map

$array = [];
$array[] = 'value';
$array['key'] = 'value';
$array[] = 'value';
$array['9'] = 'value';
$array[] = 'value';

print_r($array);

// sort, asort, ksort
