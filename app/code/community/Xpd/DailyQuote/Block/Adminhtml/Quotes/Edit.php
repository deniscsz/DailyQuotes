<?php
	
class Xpd_DailyQuote_Block_Adminhtml_Quotes_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "quote_id";
				$this->_blockGroup = "dailyquote";
				$this->_controller = "adminhtml_quotes";
				$this->_updateButton("save", "label", Mage::helper("dailyquote")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("dailyquote")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("dailyquote")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("quotes_data") && Mage::registry("quotes_data")->getId() ){

				    return Mage::helper("dailyquote")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("quotes_data")->getId()));

				} 
				else{

				     return Mage::helper("dailyquote")->__("Add Item");

				}
		}
}