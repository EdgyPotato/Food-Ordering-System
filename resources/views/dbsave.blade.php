<?php
$sql = DB::insert('insert into testing (name, age) values (?, ?)', array('Heng', 2));
?>