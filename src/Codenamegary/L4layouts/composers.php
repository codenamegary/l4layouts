<?php

$secure = Config::get('l4layouts::settings.ssl',false);
View::share('secure', $secure);