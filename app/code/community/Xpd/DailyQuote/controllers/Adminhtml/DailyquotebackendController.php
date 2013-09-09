<?php
class Xpd_DailyQuote_Adminhtml_DailyquotebackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Daily Quotes"));
	   $this->renderLayout();
    }
}