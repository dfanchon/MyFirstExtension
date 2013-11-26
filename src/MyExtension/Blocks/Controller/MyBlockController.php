<?php
/**
 * Your block controller
 */

namespace Myextension\Blocks\Controller;

use Rubedo\Services\Manager;
use Rubedo\Collection\AbstractCollection;
use Zend\Debug\Debug;
use Zend\View\Model\JsonModel;
use Zend\Json\Json;
use Rubedo\Blocks\Controller\AbstractController;

/**
 *
 * @author dfanchon
 * @category Rubedo
 * @package Rubedo
 */
class MyblockController extends AbstractController
{

    public function indexAction ()
    {
        $template = Manager::getService('FrontOfficeTemplates')->getFileThemePath("@Myextension/blocks/myBlock.html.twig");
        $basePath = $this->getRequest()->getBasePath() . '/';
        $js = array(
            $basePath . Manager::getService('FrontOfficeTemplates')->getFileThemePath("@Myextension/js/myjavascript.js"),
        );
        $css = array(
        );
        $output = $this->params()->fromQuery();
        return $this->_sendResponse($output, $template, $css, $js);
    }
     
}
