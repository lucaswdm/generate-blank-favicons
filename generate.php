<?php

$DIRS = array_merge(
  glob('/data/*/'),
  glob('/data/*/public/'),
  glob('/data/*/public_html/'),
  glob('/data/*/htdocs/'),
);

foreach($DIRS as $DIR)
{
    echo $DIR . PHP_EOL;
}
