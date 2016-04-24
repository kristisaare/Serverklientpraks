/*<?php
  $host="localhost";
  $user="test";
  $pass="t3st3r123";
  $db="test";
  $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga");
  mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));

?>*/
SELECT `nimi`,`puur` FROM `ksaare_loomaaed` WHERE `puur`=3;
SELECT MIN(`vanus`), MAX(`vanus`) FROM `ksaare_loomaaed` WHERE 1;
SELECT `puur`, COUNT(`id`) as `elanikud` FROM `ksaare_loomaaed` WHERE 1 group by `puur`;
UPDATE `ksaare_loomaaed` SET `vanus`=`vanus` +1 WHERE 1;
