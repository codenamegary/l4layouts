<?php

Basset::package('codenamegary/l4layouts');

$bootstrapVersions = Config::get('l4layouts::bootstrap.versions');
foreach($bootstrapVersions as $version)
{
    $dirName = 'bootstrap-'.$version;
    $basePath = 'packages/codenamegary/l4layouts/'.$dirName;
    Basset::collection($dirName,function($collection)use($basePath)
    {
        $collection->stylesheet($basePath.'/css/bootstrap.min.css');
        $collection->javascript($basePath.'/js/jquery-1.9.1.min.js');
        $collection->javascript($basePath.'/js/bootstrap.min.js');
    });
}

$foundationVersions = Config::get('l4layouts::foundation.versions');
foreach($bootstrapVersions as $version)
{
    $dirName = 'foundation-'.$version;
    $basePath = 'packages/codenamegary/l4layouts/'.$dirName;
    Basset::collection($dirName,function($collection)use($basePath)
    {
        $collection->stylesheet($basePath.'/css/bootstrap.min.css');
        $collection->stylesheet('packages/codenamegary/l4layouts/font-awesome/css/font-awesome.css');
        $collection->javascript($basePath.'/js/jquery-1.9.1.min.js');
        $collection->javascript($basePath.'/js/bootstrap.min.js');
    });
}

$fontAwesomeVersions = Config::get('l4layouts::font-awesome.versions');
foreach($fontAwesomeVersions as $version)
{
    $dirName = 'font-awesome-'.$version;
    $basePath = 'packages/codenamegary/l4layouts/'.$dirName;
    Basset::collection($dirName,function($collection)use($basePath)
    {
        $collection->stylesheet($basePath.'/css/font-awesome.css');
    });
}
