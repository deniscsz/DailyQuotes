<?php
class Xpd_DailyQuote_Block_Adminhtml_Quotes_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("dailyquote_form", array("legend"=>Mage::helper("dailyquote")->__("Item information")));

				

				if (Mage::getSingleton("adminhtml/session")->getQuotesData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getQuotesData());
					Mage::getSingleton("adminhtml/session")->setQuotesData(null);
				} 
				elseif(Mage::registry("quotes_data")) {
				    $form->setValues(Mage::registry("quotes_data")->getData());
				}
				return parent::_prepareForm();
		}
}
