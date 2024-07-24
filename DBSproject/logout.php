<?php
require 'config1.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: index1.php");