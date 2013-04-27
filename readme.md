##Layouts for Laravel 4

Provides an ultra basic Asset Manager similar to Laravel 3 as well as a couple of ultra-basic templates for quickly slapping together views that use Bootstrap or Foundation.

###Asset Manager

Example usage:

#####Create a collection and add assets
    :::php
    $assets = new \Codenamegary\L4layouts\AssetCollection('assets');
    $assets->collection('header')->addCss(asset('css/styles.css'));
    $assets->collection('footer')->addJs(asset('js/footerjs.js'));

#####Pass assets to your view
    :::php
    $header = View::make('header')->with('assets',$assets);

#####Render the assets inside your view
    :::php
    // Render CSS
    $assets->collection('header')->render('css');
    // Render JS
    $assets->collection('footer')->render('js');
    // Or recursively render everything, including any sub-collections
    $assets->render('css');
    $assets->render('js');
