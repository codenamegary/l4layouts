<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($title) ? $title : '' }}</title>
    <meta name="description" content="{{ isset( $meta['description'] ) ? $meta['description'] : '' }}">
    <meta name="keywords" content="{{ isset( $meta['keywords'] ) ? $meta['keywords'] : '' }}">
    <meta name="author" content="{{ isset( $meta['author'] ) ? $meta['author'] : '' }}">
    <meta charset="{{ isset( $meta['charset'] ) ? $meta['charset'] : 'UTF-8' }}">
    {{ $assets->collection('header')->render('css') }}
    {{ $assets->collection('header')->render('js') }}
</head>
<body>