<?php
declare(strict_types=1);

namespace tests;

require_once("./vendor/autoload.php");

use anytizer\guid;

$g = new guid();
for ($i = 0; $i < 20; ++$i) {
    echo $g->NewGuid();
    echo "\r\n";
}
