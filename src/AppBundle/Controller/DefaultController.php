<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AppBundle\Entity\Zones;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    // Recuperer zone par id

    /**
     * @GET(
     *     path ="/zones/{id}",
     *     name = "app_zone_show"
     * )
     * @View
     */

      public function showAction(Zones $zones)
      {

          $data = $this->get('jms_serializer')->serialize($zones, 'json');

          $response = new Response($data);
          $response->headers->set('Content-Type','application/json');

          return $response;
      }
      // Creer zone

    /**
     * @Post(
     *     path ="/zones",
     *     name = "app_zone_create"
     * )
     * @View(StatusCode=201)
     * @ParamConverter("zones", converter="fos_rest.request_body")
     */

    public function createAction(Zones $zones)
    {

        $em = $this->getDoctrine()->getManager();
        $em->persist($zones);
        $em->flush();
        //return new Response('Donnees envoyes',Response::HTTP_CREATED);
        return $zones;
    }

    // Listes zones

    /**
     * @Rest\Get("/zones", name="app_zone_list")
     */
    public function listAction()
    {
        $zones = $this->getDoctrine()->getRepository('AppBundle:Zones')->findAll();

        $data = $this->get('jms_serializer')->serialize($zones, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type','application/json');

        return $response;
    }

    // Supprimer zone
    /**
     * @Rest\Delete("/zones/{id}", name="app_zone_del")
     */

    public function delAction(Zones $zones)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('AppBundle:Zones')->find($zones);
        $em->remove($data);
        $em->flush();

        return new Response('Zone delete',Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Put("/zones/{id}", name="app_zone_update")
     */

    public function  updateAction($id,Request $request)
    {
        $data = new Zones();
        $zone = $request->get('zone');
        $couleur =  $request->get('couleur');
        $points =  $request->get('points');

        $em = $this->getDoctrine()->getManager();
        $requete = $em->getRepository('AppBundle:Zones')->find($id);

        $requete->setZone($zone);
        $requete->setCouleur($couleur);
        $requete->setPoints($points);

        $em->flush();


        return new Response('Zone update',Response::HTTP_ACCEPTED);
    }



}
