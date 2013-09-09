<?php

class Xpd_DailyQuote_Block_Adminhtml_Quotes_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("quotesGrid");
				$this->setDefaultSort("quote_id");
				$this->setDefaultDir("ASC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("dailyquote/quotes")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("quote_id", array(
				"header" => Mage::helper("dailyquote")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "quote_id",
				));
                
				$this->addColumn("quote_title", array(
				"header" => Mage::helper("dailyquote")->__("Title"),
				"index" => "quote_title",
				));
				$this->addColumn("quote_text", array(
				"header" => Mage::helper("dailyquote")->__("Quote"),
				"index" => "quote_text",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('quote_id');
			$this->getMassactionBlock()->setFormFieldName('quote_ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_quotes', array(
					 'label'=> Mage::helper('dailyquote')->__('Remove Quotes'),
					 'url'  => $this->getUrl('*/adminhtml_quotes/massRemove'),
					 'confirm' => Mage::helper('dailyquote')->__('Are you sure?')
				));
			return $this;
		}
			

}