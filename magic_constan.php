<?php 
define('hello','say hello');
echo hello;

echo __FILE__;
echo __LINE__;

define("", "foo");
echo constant("");
?>