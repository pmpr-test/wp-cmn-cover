<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc33a5c069f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Attribute extends Container { public function mameiwsayuyquoeq() { LocalAttribute::symcgieuakksimmu(); GlobalAttribute::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('woocommerce_local_attribute_custom_fields', [$this, 'gyakaimomakkusse']); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mqsqiyqiceqasokq(); foreach ($seyqqsmuaiegkeeq as $momcykaoccoymeig => $kesssewsiegssiya) { Term::ocmycskcuiawkecq($momcykaoccoymeig, $kesssewsiegssiya); } } public function gyakaimomakkusse($ikgwqyuyckaewsow = []) : array { $wsaagogyucegecck = (array) $this->ocksiywmkyaqseou('woocommerce_local_attribute_indicator_field_options', []); if ($wsaagogyucegecck) { $ikgwqyuyckaewsow[Constants::osiiyqycakssssuc] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::osiiyqycakssssuc)->gswweykyogmsyawy(__('Indicator', PR__CMN__COVER))->acauweqyyugwisqc($wsaagogyucegecck)->oikgogcweiiaocka(); } return $ikgwqyuyckaewsow; } }
