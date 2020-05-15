<?php

namespace App\Models;

	$db = mysqli_connect ("localhost:3306","admin","pass", "shop");
	mysqli_query($db, "SET NAMES utf8");
class Name
{
    public function getName($db, $key)
    {
        $res1 = mysqli_query($db, "SELECT * FROM descript WHERE data_id='$key'");
            $data2 = mysqli_fetch_array($res1);
            $name = $data2['description'];
        return $name;
    }
}