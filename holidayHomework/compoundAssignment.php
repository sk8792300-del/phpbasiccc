<?php
$total_inventory = 500;
// 150 items are sold
$items_sold = $total_inventory-=150 ;
// 200 item arrives
$item_arrives = $items_sold+=200 ;
//Half of the total inventory is moved to a different warehouse
$half_inventory = $item_arrives /= 2;
echo"$half_inventory";