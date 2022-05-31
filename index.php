<?php

trait Trait1 {

   public function method () {

    return(1);
    }

    }

trait Trait2 {

    public function method() {

    return(2);
    }
    }


trait Trait3 {

   public function method() {

    return(3);
    }

    }


class Test  {

    use Trait1, Trait2, Trait3 {

        Trait1::method insteadof Trait2, Trait3;
        Trait2::method as secondmethod;
        Trait3::method as thirdmethod;


    }



    public function getSum () {

            $sum = $this->method() + $this->secondmethod() +$this->thirdmethod();

            return($sum);

    }
    }



$test = new Test();

var_dump($test->getSum());






