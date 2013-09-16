<!DOCTYPE html>
<html>
<head>
    @yield('header')
    {{ basset_stylesheets('foundation-'.Config::get('l4layouts::settings.foundation.active')) }}
    {{ basset_stylesheets('font-awesome-'.Config::get('l4layouts::settings.font-awesome.active')) }}
    {{ basset_stylesheets('header') }}
    {{ basset_javascripts('header') }}
</head>
