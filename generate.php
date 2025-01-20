<?php

$DIRS = array_merge(
  glob('/data/*/'),
  glob('/data/*/public/'),
  glob('/data/*/public_html/'),
  glob('/data/*/htdocs/'),
);

foreach($DIRS as $DIR)
{
    $EXP = explode('/', $DIR);
    print_r($EXP);
    echo $DIR . PHP_EOL;
}


function validateDomain($domain_name)
{
    if(filter_var($domain_name, FILTER_VALIDATE_IP)) return false;
    if(strpos($domain_name, '.') === false) return false;
    return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain_name) //valid chars check
            && preg_match("/^.{1,253}$/", $domain_name) //overall length check
            && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain_name)   ); //length of each label
}
