<?php
namespace Tang;
use Illuminate\Routing\Controller;
use Foo;


class TestController extends Controller{
    public function test(){
        echo 1;
        var_dump(Config::get("test.message"));
        //return Foo::index();
    }

}

?>