<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Website\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class WebsiteController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout('website/layout/layout');
        return new Viewmodel();
    }
    public function nosotrosAction()
    {
      $this->layout('website/layout/layout');
      return new Viewmodel();
    }
    public function diagnosticoAction()
    {
      $this->layout('website/layout/layout');
      return new Viewmodel();
    }

}