<?php

Route::group(['prefix' => 'api/v2', 'middleware' => ['Rikki\Heroeslounge\Classes\ApiMiddleware']], function () {
    Route::get('divisions/{division}/standings', 'Rikki\LoungeViews\Http\Division@standings');
    Route::get('divisions/{division}/standings/{team}', 'Rikki\LoungeViews\Http\Division@standing');
    Route::Get('divisions/{division}/recentresults', 'Rikki\LoungeViews\Http\Division@recentresults');
});
