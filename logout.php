<?php
/**
 * Created by PhpStorm.
 * User: isg6
 * Date: 5/5/2017
 * Time: 2:40 AM
 */
session_start();
session_destroy();
header("Location: index.php");
?>