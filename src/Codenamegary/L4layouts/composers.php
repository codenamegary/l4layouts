<?php

View::composer(array('l4layouts::bootstrap.blank'),function($view){

    // Grab the existing data bound to the view
    $existingData = $view->getData();
    
    // If assets have already been injected into the view, use them. 
    $assets = isset( $existingData[ 'assets' ] ) ? $existingData[ 'assets' ] : new Codenamegary\L4layouts\AssetCollection( 'assets' ) ;
    // Init and create a header collection if one doesn't already exist
    $assets->collection('header');
    $assets->collection('footer')->addCss( asset('packages/codenamegary/l4layouts/bootstrap/css/bootstrap.min.css', true ) );
    $assets->collection('footer')->addJs( asset('packages/codenamegary/l4layouts/bootstrap/js/bootstrap.min.js', true ) );

    $view->with( 'assets', $assets );
    
    $baseMeta = array(
        'description'   => '',
        'keywords'      => '',
        'author'        => '',
        'charset'       => 'UTF-8',
    );

    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );
    
});

View::composer(array('l4layouts::foundation.blank'),function($view){

    // Grab the existing data bound to the view
    $existingData = $view->getData();
    
    // If assets have already been injected into the view, use them. 
    $assets = isset( $existingData[ 'assets' ] ) ? $existingData[ 'assets' ] : new Codenamegary\L4layouts\AssetCollection( 'assets' ) ;
    // Init and create a footer collection if one doesn't already exist
    $assets->collection('footer');
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/foundation/css/normalize.css', true ) );
    $assets->collection('header')->addCss( asset('packages/codenamegary/l4layouts/foundation/css/foundation.min.css', true ) );
    $assets->collection('header')->addJs( asset('packages/codenamegary/l4layouts/foundation/js/foundation.min.js', true ) );

    $view->with( 'assets', $assets );
    
    $baseMeta = array(
        'description'   => '',
        'keywords'      => '',
        'author'        => '',
        'charset'       => 'UTF-8',
    );

    $meta = isset( $existingData[ 'meta' ] ) ? array_merge( $baseMeta, $existingData[ 'meta' ] ) : $baseMeta ;
    $view->with( 'meta', $meta );
    
});
