<?php

namespace App\Http\Controllers;

use Nnjeim\World\World;

class CountriesController extends Controller
{
    public function show() 
    {
        $action = World::setLocale('zh_TW')->countries([
	        'fields' => 'states,cities',
	        'filters' => [
		        'iso2' => 'TW',
	        ]
        ]);
        if ($action->success) {
	        $countries = $action->data;
            echo __('Country name:') . $countries->first()['name'] . PHP_EOL;
        }
    }
}
