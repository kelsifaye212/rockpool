<?php

namespace Starfish;

/**
 * New Nabors
 */
  
  class Starfish
   {
	
    /**
     * Mr Starfish Name
     * @var string
     */
    public $Patric_Star;

  
     /**
     * Mr Star DOB
     * @var string
     */
    public $Mr_Star_date_of_birth;


    /**
     * Mrs Starfish Namw
     * @var string
     */
    public $Patricia_Star;

      /**
     * Mrs Star DOB
     * @var string
     */
    public $Mrs_Star_date_of_birth;

     /**
     * Apply the supplied arguments to the class and then validate them
     *
     * @param string $Patric_Star
     * @param string $Mr_Star_date_of_birth
     * @param string $Patricia_Star
     * @param string $Mrs_Star_date_of_birth
     */
	
	function __construct(string $Patric_Star, string $Mr_Star_date_of_birth, string $Patricia_Star, string $Mrs_Star_date_of_birth)
	{
		// Apply the arguments to the class
        $this->Patric_Star = $Patric_Star;
        $this->Mr_Star_date_of_birth = $Mr_Star_date_of_birth;
        $this->Patricia_Starh = $Patricia_Star;
        $this->Mrs_Star_date_of_birth = $Mrs_Star_date_of_birth;


    }
}
