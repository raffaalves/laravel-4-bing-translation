<?php
namespace Raffaalves\BingTranslation\Facades;

use Illuminate\Support\Facades\Facade;

class Bing extends Facade {

/**
* Get the registered name of the component.
*
* @return string
*/
    protected static function getFacadeAccessor() { return 'bing'; }

}