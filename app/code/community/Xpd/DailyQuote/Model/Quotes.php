<?php

class Xpd_DailyQuote_Model_Quotes extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
       $this->_init("dailyquote/quotes");
    }
    
    public function changeQuote()
    {
        $Quotes = $this->getCollection();
            /*->addAttributeToSort('exhibition', 'ASC')
            ->getLastItem();*/
        $lessQuote = NULL;
        foreach($Quotes as $quote)
        {
            if(!$lessQuote)
            {
                $lessQuote = $quote;
                continue;
            }
            
            if($lessQuote->getExhibition() > $quote->getExhibition())
            {
                $lessQuote = $quote;
            }
        }
        
        $exb = (int)$lessQuote->getExhibition();
        $lessQuote->setExhibition($exb+1)->save();
    }
}
	 