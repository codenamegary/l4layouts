<?php

Basset::package('codenamegary/l4layouts');

$bootstrapVersions = array(
    '2.3.2',
);

foreach($bootstrapVersions as $version)
{
    $dirName = 'bootstrap-'.$version;
    $basePath = 'packages/codenamegary/l4layouts/'.$dirName;
    Basset::collection($dirName,function($collection)use($basePath)
    {
        $collection->stylesheet($basePath.'/css/bootstrap.min.css');
        $collection->stylesheet('packages/codenamegary/l4layouts/font-awesome/css/font-awesome.css');
        $collection->javascript($basePath.'/js/jquery-1.9.1.min.js');
        $collection->javascript($basePath.'/js/bootstrap.min.js');
    });
}
