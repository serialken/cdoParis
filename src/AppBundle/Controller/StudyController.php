<?php
/**
 * Created by PhpStorm.
 * User: yannick.dieng
 * Date: 21/04/2017
 * Time: 12:29
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Study;
use AppBundle\Form\StudyType;

class StudyController extends Controller
{
    /**
     * @Route("/add/study", name="add_study")
     */
    public function addStudysAction(Request $request){

        $study = new Study();
        $form = $this->createForm(StudyType::class, $study);

        return;
    }
}