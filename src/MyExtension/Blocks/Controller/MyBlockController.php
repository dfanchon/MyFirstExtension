<?php
/**
 * Rubedo -- ECM solution
 * Copyright (c) 2013, WebTales (http://www.webtales.fr/).
 * All rights reserved.
 * licensing@webtales.fr
 *
 * Open Source License
 * ------------------------------------------------------------------------------------------
 * Rubedo is licensed under the terms of the Open Source GPL 3.0 license. 
 *
 * @category   Rubedo
 * @package    Rubedo
 * @copyright  Copyright (c) 2012-2013 WebTales (http://www.webtales.fr)
 * @license    http://www.gnu.org/licenses/gpl.html Open Source GPL 3.0 license
 */
namespace MyExtension\Blocks\Controller;

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
        $template = Manager::getService('FrontOfficeTemplates')->getFileThemePath("@MyExtension/blocks/myBlock.html.twig");
        $basePath = $this->getRequest()->getBasePath() . '/';
        $js = array(
            $basePath . Manager::getService('FrontOfficeTemplates')->getFileThemePath("@MyExtension/js/myjavascript.js"),
        );
        $css = array(
        );
        $output = $this->params()->fromQuery();
        return $this->_sendResponse($output, $template, $css, $js);
    }
     
}
