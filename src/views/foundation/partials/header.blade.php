<!DOCTYPE html>
<html>
<head>
    @yield('header')
    {{ basset_stylesheets('foundation-'.$foundationVersion) }}
    {{ basset_stylesheets('font-awesome-'.$fontAwesomeVersion) }}
    {{ basset_stylesheets('header') }}
    {{ basset_javascripts('header') }}
</head>
