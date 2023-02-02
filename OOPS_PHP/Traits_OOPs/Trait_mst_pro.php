<?php
trait hello{
    private function show(){
        echo "hello: show";
    }
}

class base{
    use hello{
      hello::show as public Display;
    }
}

$obj = new base();
$obj->Display();
?>