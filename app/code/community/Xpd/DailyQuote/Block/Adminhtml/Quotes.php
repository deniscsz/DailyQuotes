<?php


class Xpd_DailyQuote_Block_Adminhtml_Quotes extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_quotes";
	$this->_blockGroup = "dailyquote";
	$this->_headerText = Mage::helper("dailyquote")->__("Quotes Manager");
	$this->_addButtonLabel = Mage::helper("dailyquote")->__("Add New Item");
	parent::__construct();
	
	}

}