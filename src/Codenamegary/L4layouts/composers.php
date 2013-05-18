<?php

$secure = Config::get('l4layouts::settings.ssl',false);
$baseMeta = array(
    'description'   => '',
    'keywords'      => '',
    'author'        => '',
    'charset'       => 'UTF-8',
);

$bootstrapVersion = Config::get('l4layouts::settings.bootstrap.version');
View::share('bootstrapVersion',$bootstrapVersion);
View::composer(array('l4layouts::bootstrap.blank'),function($view)use($bootstrapVersion,$baseMeta)
{
    // Grab the existing data bound to the view
    $existingData = $view->getData();
    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );

});

$foundationVersion = Config::get('l4layouts::settings.foundation.version');
View::composer(array('l4layouts::foundation.blank'),function($view)use($foundationVersion,$baseMeta)
{

    // Init and create a footer collection if one doesn't already exist
    /*$assets->collection('footer');
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/foundation/css/normalize.css', $secure ) );
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/foundation/css/foundation.min.css', $secure ) );
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/font-awesome/css/font-awesome.min.css', $secure ) );
    $assets->collection('header')->addJs( asset('packages/codenamegary/l4layouts/foundation/js/foundation.min.js', $secure ) );
    $view->with( 'assets', $assets );*/

    // Grab the existing data bound to the view
    $existingData = $view->getData();
    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );
    
});
