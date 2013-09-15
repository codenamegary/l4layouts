@yield('footer')
{{ basset_javascripts('jquery-1.9.1') }}
{{ basset_javascripts('bootstrap-'.Config::get('l4layouts::settings.bootstrap.active')) }}
{{ basset_javascripts('footer') }}
</body>
</html>