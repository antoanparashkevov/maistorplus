<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//AbstractController give to use shortcut methods.

class OffersController extends AbstractController
{

    // PHP Doc section
    /**
     * @Route("/")
     */
   
 
    public function homepage(){
        return $this->render('offers/homepage.html.twig');
    }

// /offers/ANYTHING
//Wildcard
    /**
     * @Route("/offers/{slug}")
     */

     public function show($slug){

        $offers =[
            'First offer',
            'Second offer',
            'Third offer',
        ];


        //dd also kill the entire page
        //dump didn't kill the entire page
        //composer require debug give to us useful command
        //php bin/console server:dump to start the second server in the background
        //for ajax requirests
        dump($this);

        return $this->render('offers/show.html.twig',[
        'offer_detail' => ucwords(str_replace('-',' ',$slug)),
        'offers' => $offers,
        ]);

        //  return new Response(sprintf(
        //      'Future page to show the offers "%s"!',
        //      $slug
        //     ));         
     }
}