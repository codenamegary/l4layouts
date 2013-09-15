<?php

Basset::package('codenamegary/l4layouts');
$commonPath = 'packages/codenamegary/l4layouts/common';

Basset::collection('jquery-1.9.1',function($collection)use($commonPath){
    $collection->javascript($commonPath.'/js/jquery-1.9.1.min.js');
});

$bootstrapVersions = Config::get('l4layouts::settings.bootstrap.versions');
foreach($bootstrapVersions as $version)
{
    $dirName = 'bootstrap-'.$version;
    $basePath = 'packages/codenamegary/l4layouts/'.$dirName;
    Basset::collection($dirName,function($collection)use($basePath)
    {
        $collection->stylesheet($basePath.'/css/bootstrap.min.css');
        $collection->javascript($basePath.'/js/bootstrap.min.js');
    });
}

$foundationVersions = Config::get('l4layouts::settings.foundation.versions');
foreach($foundationVersions as $version)
{
    $dirName = 'foundation-'.$version;
    $basePath = 'packages/codenamegary/l4layouts/'.$dirName;
    Basset::collection($dirName,function($collection)use($basePath,$commonPath)
    {
        $collection->stylesheet($basePath.'/css/foundation.min.css');
        //$collection->javascript($commonPath.'/js/jquery-1.9.1.min.js');
        $collection->javascript($basePath.'/js/foundation.min.js');
    });
}

$fontAwesomeVersions = Config::get('l4layouts::settings.font-awesome.versions');
foreach($fontAwesomeVersions as $version)
{
    $dirName = 'font-awesome-'.$version;
    $basePath = 'packages/codenamegary/l4layouts/'.$dirName;
    Basset::collection($dirName,function($collection)use($basePath,$commonPath)
    {
        $collection->stylesheet($basePath.'/css/font-awesome.css');
    });
}
