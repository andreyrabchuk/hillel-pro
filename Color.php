<?php

class Color {

    private int $red;
    private int $green;
    private int $blue;

    protected const min_color_value = 0;
    protected const max_color_value = 255;


    public function __construct($red, $green, $blue){

        $this->SetRed($red);
        $this->SetGreen($green);
        $this->SetBlue($blue);

    }

    /**
     * @return int
     */
    public function getRed(): int
    {
        return $this->red;
    }

    /**
     * @return int
     */
    public function getGreen(): int
    {
        return $this->green;
    }

    /**
     * @return int
     */
    public function getBlue(): int
    {
        return $this->blue;
    }

    protected function ColorValidation(int $colorValue): bool {

        if($colorValue<Color::min_color_value && $colorValue>Color::max_color_value){

            throw new Exception('Color value should be from' . Color::min_color_value.'to'.Color::max_color_value);

        }

        return true;
    }

    private function setRed (int $colorParameter): void {

        if($this->ColorValidation($colorParameter)){

            $this->red=$colorParameter;
        }


    }

    private function setGreen (int $colorParameter): void{

        if($this->ColorValidation($colorParameter)){

            $this->green=$colorParameter;
        }
    }

    private function setBlue (int $colorParameter): void{

        if($this->ColorValidation($colorParameter)){

            $this->blue=$colorParameter;
        }
    }

    public function mix(Color $colorForMix):Color {


          $mixedred = ($this->getRed() + $colorForMix->getRed())/2;
          $mixgreen = ($this->getGreen() + $colorForMix->getGreen())/2;
          $mixblue = ($this->getBlue() + $colorForMix->getBlue())/2;



                    return new Color ($mixedred,$mixgreen,$mixblue);

    }





    static function randomColor():Color {

       $colorRandomValue = mt_rand(Color::min_color_value, Color::max_color_value);

        return new Color ($colorRandomValue, $colorRandomValue, $colorRandomValue);
    }





}





