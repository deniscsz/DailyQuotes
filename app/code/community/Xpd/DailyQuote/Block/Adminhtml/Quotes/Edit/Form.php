<?php
class Xpd_DailyQuote_Block_Adminhtml_Quotes_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{
				$form = new Varien_Data_Form(
                    array(
        				"id" => "edit_form",
        				"action" => $this->getUrl("*/*/save", array("id" => $this->getRequest()->getParam("id"))),
        				"method" => "post",
        				"enctype" =>"multipart/form-data",
    				)
				);
                /*
                $fieldset = $form->addFieldset("dailyquote_form", array("legend"=>Mage::helper("dailyquote")->__("Quote")));
				
    			$fieldset->addField("quote_title", "text", array(
        			"label" => Mage::helper("dailyquote")->__("Title"),
                    'required'  => true,
        			"name" => "quote_title",
    			));
    		
    			$fieldset->addField("quote_text", "text", array(
        			"label" => Mage::helper("dailyquote")->__("Quote"),
                    'required'  => true,
        			"name" => "quote_text",
    			));
    		      */

                
				$form->setUseContainer(true);
				$this->setForm($form);
                
				return parent::_prepareForm();
		}
}
