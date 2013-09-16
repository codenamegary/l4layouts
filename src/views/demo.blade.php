@extends('l4layouts::'.$platform.'.blank')
@section('header')
<title>l4layouts :: {{ $platform }} version {{ Config::get('l4layouts::settings.'.$platform.'.active') }}</title>
@endsection
@section('body')
@include('l4layouts::demo.'.$platform.'.navigation')
<div class="container">
    <div class="row">
        <div class="large-12 columns span12">
            <h1>Hello World!</h1>
            <h4>This is the <a href="https://bitbucket.org/codenamegary/l4-skeleton">Laravel 4 Skeleton (l4-skeleton)</a> for <a href="http://www.pagodabox.com">PagodaBox</a> hosting by <a href="https://bitbucket.org/codenamegary">codenamegary</a></h4>
            <p>&nbsp;</p>
            <h3>Currently Viewing</h3>
            <p>This is {{{ ucfirst($platform) }}} {{{ Config::get('l4layouts::settings.'.$platform.'.active') }}} with Font-Awesome {{{ Config::get('l4layouts::settings.font-awesome.active') }}}! <i class="icon-star">&nbsp;</i></p>
            <p>&nbsp;</p>
            <h3>Example View</h3>
            <p>To use this layout, simply create a view as follows....</p>
            <label for="example-view">Example View</label><br/>
            <textarea cols="100" rows="4" class="form-control" style="width:100%;height:100px;">
                {{ htmlentities('@') }}extends('l4layouts::{{ $platform }}.blank')
                {{ htmlentities('@') }}section('body')
                ... your content goes here ...
                {{ htmlentities('@') }}endsection
            </textarea>
            <h3>Changing the Active Version</h3>
            <ol>
                <li>Publish the l4layouts package config:<br/><br/><code>php artisan config:publish codenamegary/l4layouts</code><br/><br/></li>
                <li>Edit the app/config/packages/codenamegary/l4layouts/settings.php config file, change the "active" version to whichever you prefer.</li>
            </ol>
            <p>To change the version used by the template simply publish and edit codenamegary/l4layouts/config</p>
            <h2>Other Versions Installed</h2>
            <p>
                <ul>
                    <li><a href="{{ URL::route('l4layouts::demo', array('bootstrap','2.3.2')) }}">Twitter Bootstrap 2.3.2</a></li>
                    <li><a href="{{ URL::route('l4layouts::demo', array('bootstrap','3.0.0')) }}">Twitter Bootstrap 3.0.0</a></li>
                    <li><a href="{{ URL::route('l4layouts::demo', array('foundation','4.1.0')) }}">Zurb Foundation 4.1.0</a></li>
                    <li><a href="{{ URL::route('l4layouts::demo', array('foundation','4.3.1')) }}">Zurb Foundation 4.3.1</a></li>
                </ul>
            </p>
            <h3>H3 Header</h3>
            <p><button class="btn btn-default">A Button</button></p>
            <p><a href="#">A Link</a></p>
            <form>
                <legend>A Form</legend>
                <label for="text-input">An Input</label>
                <input class="form-control" name="text-input" id="text-input" type="text" value="an input...">
            </form>
            <br/>
            <br/>
            <br/>
        </div>
    </div>
</div>
@endsection