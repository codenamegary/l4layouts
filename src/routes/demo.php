<?php

Route::group(array('prefix' => 'l4layouts'), function(){

    Route::get('{platform?}/{version?}', array(
        'as' => 'l4layouts::demo',
        function($platform = 'bootstrap', $version = null)
        {
            $settingsKey = 'l4layouts::settings.'.$platform;
            if(Config::get($settingsKey.'.active', false) === false) return Response::make('It appears that the platform ' . $platform . ' has not been implemented yet.');
            if($version !== null and array_search($version, Config::get($settingsKey.'.versions',array())) === false) return Response::make('It appears that version ' . $version . ' has not been implemented yet.');
            if($version === null) $version = Config::get($settingsKey.'.active','2.3.2');
            Config::set($settingsKey.'.active', $version);
            return View::make('l4layouts::demo')->with('platform', $platform);
        }
    ));
    
});

