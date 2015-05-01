<?php
namespace Cogilent\ReportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * ReportsController
 * @Route("/reports")
 */
class ReportsController extends Controller
{

  /**
   * @Route("/", name="reports_index")
   * @Template()
   */
  public function indexAction(Request $request){
      return array();
  }


}//@
