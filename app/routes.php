<?php

Route::get('/', 	ContactController::index());

Route::get('/show', ContactController::show());

Route::get('/edit', ContactController::edit());