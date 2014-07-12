<?php
/**
 * Magento Hackathon 2014 UK
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Magehack
 * @package    Magehack_Autogrid
 * @copyright  Copyright (c) 2014 Magento community
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml_Autogrid Controller
 * @package Magehack_Autogrid
 */
class Magehack_Autogrid_Adminhtml_AutogridController extends Mage_Adminhtml_Controller_Action
{
    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return (bool) Mage::getSingleton('admin/session')->isAllowed('magehack_autogrid');
    }
    
    /**
     * Demo action (just for testing purposes
     * 
     * @todo remove
     */
    public function demoAction()
    {
        Zend_Debug::dump(Mage::helper('magehack_autogrid')->getTableId());
        exit('yo man!');
    }

    /**
     * Display the grid page
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * Render and return the grid block only for ajac paging, filtering and sorting.
     */
    public function ajaxGridAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}