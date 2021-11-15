<?php
namespace App\CustomFacade;
use App\CustomFacade\MyClass;
use Illuminate\Support\Facades\Facade;

class MyCustomFacade extends Facade {
    
    protected static function getFacadeAccessor(){
        return new MyClass();
    }

}

?>