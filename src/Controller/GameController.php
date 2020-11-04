<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace App\Controller;

use App\Model\GameManager;

/**
 * Class GameController
 *
 */
class GameController extends AbstractController
{

    public function createCharacter()
    {
        return $this->twig->render('Character/character.html.twig');
    }

}