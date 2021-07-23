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
