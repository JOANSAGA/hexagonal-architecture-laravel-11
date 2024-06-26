<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api')
    ->prefix('v1')
    ->group(base_path('app/User/Infrastructure/Http/routes/userRoutes.php'));
