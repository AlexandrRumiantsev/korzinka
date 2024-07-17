<?php

include "../goods.php";

class Goods
{

  public function getGoods($mysqli)
  {
    $resultDb = $mysqli->query("select * from goods");

    $result = [];

    //   0    1    2
    //   1A   1B   1C
    // [row, row, row, row, row, ....]
    foreach ($resultDb as $row) {
      $result[] = $row; // $result = [] <== $row
    }

    echo json_encode($result);
  }
}

$goods = new Goods();
$goods->getGoods($mysqli);