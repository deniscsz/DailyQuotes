<?php
class Xpd_DailyQuote_Block_Adminhtml_Quotes_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("quotes_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("dailyquote")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("dailyquote")->__("Item Information"),
				"title" => Mage::helper("dailyquote")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("dailyquote/adminhtml_quotes_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
