<?php



namespace Rock_pool;
/**
The class Represents a prockpool where the attributes- turtles will live.
*/


class Rockpool
{

    /**
     * The make of the car
     * @var int
     */
    public $Baby_turtle;

    /**
     * The car's model
     * @var float
     */
    public $Size_Baby_turtle;

    /**
     * The year the car was registered
     * @var int
     */
    public $Mum_turtle;

    /**
     * The number of doors
     * @var float
     */
    public $Size_Mum_turtle;



    /**
     * Apply the arguments to the class
     *
     * @param int $Baby_turtle
     * @param float $Size_Baby_turtle
     * @param int $Mum_turtle
     * @param float $Size_Mum_turtle
     */

     public function __construct(int $Baby_turtle, float $Size_Baby_turtle, int $Mum_turtle, float $Size_Mum_turtle)
 {
        $this->Baby_turtle = $Baby_turtle;
        $this->Size_Baby_turtle = $Size_Baby_turtle;
        $this->Mum_turtle = $Mum_turtle;
        $this->Size_Mum_turtle = $Size_Mum_turtle;
       
    }

}
