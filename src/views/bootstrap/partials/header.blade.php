<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($title) ? $title : '' }}</title>
    <meta name="description" content="{{ isset( $meta['description'] ) ? $meta['description'] : '' }}">
    <meta name="keywords" content="{{ isset( $meta['keywords'] ) ? $meta['keywords'] : '' }}">
    <meta name="author" content="{{ isset( $meta['author'] ) ? $meta['author'] : '' }}">
    <meta charset="{{ isset( $meta['charset'] ) ? $meta['charset'] : 'UTF-8' }}">
    {{ basset_stylesheets('bootstrap-'.$bootstrapVersion) }}
    {{ basset_stylesheets('font-awesome-'.$fontAwesomeVersion) }}
    {{ basset_stylesheets('header') }}
    {{ basset_javascripts('header') }}
</head>