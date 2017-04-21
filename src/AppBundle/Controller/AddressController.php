<?php
/**
 * Created by PhpStorm.
 * User: yannick.dieng
 * Date: 21/04/2017
 * Time: 12:25
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Address;
use AppBundle\Form\AddressType;

class AddressController extends Controller
{

    /**
     * @Route("/add/address", name="add_address")
     */
    public function addaddressAction(Request $request){

        $breadcrumbs =  $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Address",$this->get("router")->generate("add_address"));
        $address = new Address();
        $form = $this->createForm(AddressType::class, $address);

        if($form->handleRequest($request)->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'l\'adresse - '. $address->getTitle().' - que vous venez de saisir a bien été enregistré.');
            return $this->redirectToRoute('add_address');

        }

        return $this->render('AppBundle:Form:form_address.html.twig', array('form' => $form->createView()));

    }
}