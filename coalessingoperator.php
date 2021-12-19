<?php

$data = [
    'action' => 'ada isinya'
];
$action = $data['action'] ?? 'nothing';

// if (isset($data['action'])) {
//     $action = $data['action'];
// } else {
//     $action = "nothing";
// }

echo $action;
