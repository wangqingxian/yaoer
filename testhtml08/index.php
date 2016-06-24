<?php

$array = "<tt>some</tt><b>html</b>";
preg_match("/<\w?>(\w*?)<\/\w?>/",$array,$matches);
print_r($matches);

