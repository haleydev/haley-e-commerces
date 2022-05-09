<?php
use Controllers\{HomeController};

// -------------------------------------------------------------------------

$route->url('/', function () {
    (new HomeController)->render();
})->name('home');