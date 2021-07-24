<?php
require_once '../inc/functions.php';

/*
 * Exo 4 : Luigi To The Rescue
 *
 * Luigi: Hi!
 * It seems like Mario is in trouble. I'm here to help!
 *
 * But, you know, Mario is my brother. I don't think we should have
 * a Mario class, and a Luigi class. Maybe, we can just pass our firstname
 * when we create the object?
 *
 * Oh, and I saw this is not programmed yet, but I want to say my punchline!
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Hero('Mario');
 *      echo $mario->hello(); // Display: "It's me, Mario!"
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2
 *
 *      $luigi = new Hero('Luigi');
 *      echo $luigi->hello(); // Display: "It's me, Luigi!"
 *      $luigi->up();
 *      $luigi->up();
 *      $luigi->takeHit();
 *      echo $luigi->getLives(); // Display: 4
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
class Hero{
    // propriétés
    private $lives = 3;
    private $firstname;

    public function __construct($firstname)
    {

        // $this est l'instance, l'objet qui utilise la classe
        // $this représente l'instance de l'extérieur
        $this->firstname = $firstname;
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

    public function takeHit()
    {
        $this->lives = $this->lives -1;
    }
    public function up()
    {
        $this->lives = $this->lives +1;
    }
    public function hello()
    {
       return "It's me, ".$this->firstname."!";
    }
}



// ------------------------
// END OF YOUR CODE
// ------------------------

/*
 * Tests
 * Pas touche !
 */
check(4);
/*
$mamie = new Hero('Mamie PHP');
displayExo(4, method_exists($mamie, 'hello') && $mamie->hello() === "It's me, Mamie PHP!");*/

// temps 14mn   Cumul 39mn