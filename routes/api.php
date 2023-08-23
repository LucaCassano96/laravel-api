<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


Route :: prefix("/v1") -> group (function(){
    Route :: get("/test-api", [ApiController :: class, 'testApi']);
    Route :: get("/projectIndex-api", [ApiController :: class, 'projectsIndex']);

    Route :: get("/AppDetailsProject/{id}", [ApiController :: class, "AppDetailsProject"]);
});








Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
