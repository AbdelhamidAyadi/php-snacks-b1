<?php
$students = [
   [
       'name' => 'Adam',
       'votes' => [4,6,8,3,9],
   ],
   [
       'name' => 'Alex',
       'votes' => [4,6,5,3,10],
   ],
   [
    'name' => 'Giulia',
    'votes' => [4,9,8,2,9],
   ],


];
for ($i=0; $i < count($students) ; $i++) { 
    
    $total = null;
    for ($x=0; $x < count($students[$i]['votes']) ; $x++) { 
       
        $total += $students[$i]['votes'][$x];

    }
    $total = $total / count($students[$i]['votes']);

    echo "<p>" . "Nome: " . $students[$i]['name'] . " - " . "Media: " . $total . "</p>";
}

?>