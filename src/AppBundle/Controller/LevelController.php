<?php
/**
 * Created by PhpStorm.
 * User: yannick.dieng
 * Date: 21/04/2017
 * Time: 12:28
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Level;
use AppBundle\Form\LevelType;

class LeveltController extends Controller
{

    /**
     * @Route("/add/level", name="add_level")
     */
    public function addLevelAction(Request $request){

        $level = new Level();
        $form = $this->createForm(LevelType::class, $level);

        return;
    }
}