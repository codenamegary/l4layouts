<?php

$secure = Config::get('l4sacs::settings.ssl',false);
$assets = App::make('l4sacs');    
$baseMeta = array(
    'description'   => '',
    'keywords'      => '',
    'author'        => '',
    'charset'       => 'UTF-8',
);

View::composer(array('l4layouts::bootstrap.blank'),function($view)use($secure,$assets,$baseMeta)
{
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/bootstrap/css/bootstrap.min.css', $secure ) );
    $assets->collection('footer')->addJs( asset('packages/codenamegary/l4layouts/bootstrap/js/bootstrap.min.js', $secure ) );
    $view->with( 'assets', $assets );

    // Grab the existing data bound to the view
    $existingData = $view->getData();
    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );
    
});

View::composer(array('l4layouts::foundation.blank'),function($view)use($secure,$assets,$baseMeta)
{
    // Init and create a footer collection if one doesn't already exist
    $assets->collection('footer');
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/foundation/css/normalize.css', $secure ) );
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/foundation/css/foundation.min.css', $secure ) );
    $assets->collection('header')->addJs( asset('packages/codenamegary/l4layouts/foundation/js/foundation.min.js', $secure ) );
    $view->with( 'assets', $assets );

    // Grab the existing data bound to the view
    $existingData = $view->getData();
    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );
    
});
