<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

/**
* @Route(
*      "/sitio/{nombrePagina}",
*      requirements={ "nombrePagina"="ayuda|privacidad|nosotros" },
*      name="pagina"
* )
*/
public function paginaAction($nombrePagina = 'nosotros' )
{
 return $this->render('sitio/'.$nombrePagina.'.html.twig');
}

}
