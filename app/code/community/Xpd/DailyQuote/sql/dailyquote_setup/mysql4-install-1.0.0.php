<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table xpd_dailyquote(quote_id int not null auto_increment, exhibition int not null, quote varchar(500), primary key(quote_id));
SQLTEXT;

$installer->run($sql);

$installer->endSetup();
	 