<?php

// array 
$users = [
    ['id' => 1, 'name' => 'Marco Piteo'],
    ['id' => 2, 'name' => 'Andrea Minafra'],
    ['id' => 3, 'name' => 'Gab Dicosmo'],
    ['id' => 4, 'name' => 'Riccardo Bellame'],
];

http_response_code(200);
header('Content-Type: application/json');
echo json_encode([
    'status' => 200,
    'message' => 'OK',
    'payload' => $users
]);

exit;
?>





