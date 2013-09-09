<?php
class Xpd_DailyQuote_Model_Mysql4_Quotes extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("dailyquote/quotes", "quote_id");
    }
}