<?php

$secure = Config::get('l4layouts::settings.ssl',false);
$baseMeta = array(
    'description'   => '',
    'keywords'      => '',
    'author'        => '',
    'charset'       => 'UTF-8',
);

$bootstrapVersion = Config::get('l4layouts::settings.bootstrap.active');
View::share('bootstrapVersion',$bootstrapVersion);
View::composer(array('l4layouts::bootstrap.blank'),function($view)use($bootstrapVersion,$baseMeta)
{
    // Grab the existing data bound to the view
    $existingData = $view->getData();
    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );
});

$foundationVersion = Config::get('l4layouts::settings.foundation.active');
View::share('foundationVersion',$foundationVersion);
View::composer(array('l4layouts::foundation.blank'),function($view)use($foundationVersion,$baseMeta)
{
    // Grab the existing data bound to the view
    $existingData = $view->getData();
    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );
});

$fontAwesomeVersion = Config::get('l4layouts::settings.font-awesome.active');
View::share('fontAwesomeVersion',$fontAwesomeVersion);