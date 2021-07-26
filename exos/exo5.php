<?php
require_once '../inc/functions.php';

/*
 * Exo 5 : Full Mario!
 *
 * Add these to the Hero class:
 *  - A favorite color.
 *  - To be able to grow when eat a mushroom. Shrink instead of die when taking a hit.
 *  - To be able to be invicible when eat a star.
 *
 * See tests at the bottom of this file for more info :)
 * 
 * Don't panic, this time, there will be a lot of Fatal Errors until you finish this "exo"
 */

// ---------------------------------------------------------------------------
//! /!\ WARNING /!\
// - you ONLY need to write a class definition
// - you DON'T need to create objects
// - you DON'T need to use 'echo' except if explicitly required
// - you DON'T need to dump the vars to make your code work
//      but you can still dump them temporarily
//      and remove your dumps when your code is ok
// - you DON'T need to copy the given code example
// - your code will be checked and validated automatically
// ---------------------------------------------------------------------------

// ------------------------
// START OF YOUR CODE
// ------------------------

/**
 * class hero
 */
class Hero{
    // propriétés
    private $lives = 3;
    private $firstname;
    private $color;
    private $star = false;

    /**
     * fonction constructeur
     *
     * @param [string] $firstname
     * @param [string] $color
     */
    public function __construct($firstname,$color)
    {

        // $this est l'instance, l'objet qui utilise la classe
        // $this représente l'instance de l'extérieur
        $this->firstname = $firstname;
        $this->setColor($color);
    }

    /**
     * Get the value of lives
     */
    public function getLives()
    {
        return $this->lives;
    }

    
    /**
     * Set the value of lives
     *
     * @return  self
     */
    public function setLives($lives)
    {
        $this->lives = $lives;

        return $this;
    }

    /**
     * on decremente le nombre de vies
     *
     * @return void
     */
    public function takeHit()
    {
        $this->lives = $this->lives -1;
    }
    /**
     * on incremente le nombre de vies
     *
     * @return void
     */
    public function up()
    {
        $this->lives = $this->lives +1;
    }
    /**
     * on se présente
     *
     * @return void
     */
    public function hello()
    {
       return "It's me, ".$this->firstname."!";
    }
    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
    /**
     * est-ce qu'on a 4 vies
     *
     * @return boolean
     */
    public function isBig(){
        if ($this->lives == 4){
            return true;
        }
        return false;

    }
    /**
     * est-ce qu'on a une etoile
     *
     * @return boolean
     */
    public function hasStar(){
       
        return $this->star;
        
    }
    /**
     * eat a mush
     *
     * @return void
     */
    public function eatMushroom(){
        $this->up();
    }
    /**
     * Receive à Star
     *
     * @return void
     */
    public function receiveStar(){
        $this->lives = 6;
        $this->star = true;
        $this->hasStar() ;
    }
    /**
     * Lose a Star
     *
     * @return void
     */
    public function vanishStar(){
        $this->star = false;
        $this->hasStar(false);
        $this->up();
    
    }
    
}

// Temps 1h Cumul 1H40 + exo6  20mn Total 2H


// ------------------------
// END OF YOUR CODE
// ------------------------

/*
 * Tests
 * Pas touche !
 */
$mario = new Hero('Mario', 'red');
$test = (
    $mario->getColor() === 'red'
    && $mario->isBig() === false
    && $mario->hasStar() === false
    && $mario->getLives() === 3

    

    
);


if ($test) {
    $mario->takeHit();
    $test = $mario->getLives() === 2;
    if($test){
        $mario->up();
        $mario->eatMushroom();
        $test = $mario->isBig() === true;
        
        if ($test) {
            $mario->takeHit();
            $test = (
                $mario->isBig() === false
                && $mario->getLives() === 3
            );
            
            if ($test) {
                $mario->receiveStar();
                $test = $mario->hasStar() === true;
                
                if ($test) {
                    $mario->takeHit();
                    $mario->takeHit();
                    $mario->takeHit();
                    $test = $mario->getLives() === 3;
                    
                            if($test){
                        $mario->eatMushroom();
                        

                        $mario->takeHit();
                       

                        $mario->takeHit();
                        
                        
                        $mario->up();
                        
                        
                        $mario->vanishStar();
                       
                        $test = (
                            $mario->getLives() === 4
                            && $mario->hasStar() === false
                            && $mario->isBig() === true
                        );
                    }
                }
            }
        }
    }

    

    
}
displayExo(5, $test);

