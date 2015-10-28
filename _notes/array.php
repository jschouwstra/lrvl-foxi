<?php
	$items = array(
		array('name'=>'b','age'=> 26),
		array('name'=>'a','age'=> 22)
	);
	// $result = array_multisort($items, array('age'=>SORT_DESC));
    $values = array_values($items);

    $keys = array_keys($items);
    array_multisort($items, SORT_ASC, $keys, SORT_ASC, $items);

foreach($items as $key =>$row){
//	echo $item['age']."</br>";
	echo $age[$key] = $row['age']."<br/>";


}

	// $items = array('a','b','c','d');

	// $items = array();
	// $items[0] = 'a';
	// $items[1] = 'b';
	// $items[2] = 'c';
	// $items[3] = 'd';



	?>