<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecade94be0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Woocommerce\Attribute\Attribute; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Admin_List_Table_Products; use WC_Product; use WP_Query; class Woocommerce extends Container { public function mameiwsayuyquoeq() { W3C::symcgieuakksimmu(); Cart::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Quantity::symcgieuakksimmu(); Variation::symcgieuakksimmu(); Attribute::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('after_setup_theme', [$this, 'qqumyqgcuqgaicam'])->qcsmikeggeemccuu('woocommerce_admin_field_custom', [$this, 'gmmaqqcouwsagmig'])->qcsmikeggeemccuu('current_screen', [$this, 'ccakuuecyswwamqg'], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('loop_shop_per_page', [$this, 'goyswgwoekecygco'], 999)->cecaguuoecmccuse('formatted_woocommerce_price', [$this, 'eeessiowgqwumwuk'], 999)->cecaguuoecmccuse('wc_price', [$this, 'cyeuqmmyeoogsoma'], 99, 4)->cecaguuoecmccuse('wc_price', [$this, 'wkoyauuuecqasess'], 99, 4)->cecaguuoecmccuse('woocommerce_product_tabs', [$this, 'uikmgwcsgomcuywo'], 20)->cecaguuoecmccuse('woocommerce_login_redirect', [$this, 'awikgkyomgyokscu'], 50, 2)->cecaguuoecmccuse('woocommerce_available_variation', [$this, 'ewmiosiqssoeeoai'], 10, 3); } public function awikgkyomgyokscu($gwqgmkqcgwwmweom, $mkucggyaiaukqoce) { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if (!empty($ekymkycgewkiouqe->uakuwyoiooeqqiow())) { $gwiiimcsckwuywua = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ssacaeeassumyuws($gwqgmkqcgwwmweom); $ekcckkkqkwycckww = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey('checkout'); if ($gwiiimcsckwuywua != $ekcckkkqkwycckww) { $gwqgmkqcgwwmweom = $ekymkycgewkiouqe->geoemsmuouqcqmei(); } } return $gwqgmkqcgwwmweom; } public function gmmaqqcouwsagmig($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qaacaqioeyiuakeu => true, Constants::ueaisqkksoeisswi => Constants::TEXT]); $ywmkwiwkosakssii[Constants::squoamkioomemiyi] = $ywmkwiwkosakssii[Constants::ueaisqkksoeisswi]; if ($aiowsaccomcoikus = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ocegoqcckecwgays(array_filter($ywmkwiwkosakssii))) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($auucmikeiywsskqa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'tip')) { $auucmikeiywsskqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->eokekmciswqwymmq($auucmikeiywsskqa); } $pkyyagewkiyckmwy = $swqimwqeweekeusq->uuccukgasskgimsq('label', ['for' => $aiowsaccomcoikus->mwikyscisascoeea()], $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qescuiwgsyuikume, $aiowsaccomcoikus->aakmagwggmkoiiyu()) . $auucmikeiywsskqa); $swqimwqeweekeusq->sykissckqqccoiqs('tr', [], [$swqimwqeweekeusq->uuccukgasskgimsq('th', ['scope' => 'row', 'class' => 'titledesc'], $pkyyagewkiyckmwy), $swqimwqeweekeusq->uuccukgasskgimsq('td', [], $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]))]); } } public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag) { if ($siquossayskcwkea = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, Constants::iikosyqiawkweouo)) { foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) { $uomewyckeuqoqocu['attribute_names'][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace('attribute_', '', $ymqmyyeuycgmigyo)); } } return $uomewyckeuqoqocu; } public function ccakuuecyswwamqg() { global $wc_list_table; if ($wc_list_table instanceof WC_Admin_List_Table_Products && Setting::wwameuqwugekuykk()) { $this->ggmgmqswqkgecosg('request', [$wc_list_table, 'request_query'])->cecaguuoecmccuse('posts_search', [$this, 'eaykoggsyaumagks'], 10, 2); } } public function qqumyqgcuqgaicam() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->musuokisgmmamoua('woocommerce'); } public function eaykoggsyaumagks($qwcmueausqgiwigy, $gqgemcmoicmgaqie) : string { if (isset($_GET['s']) && $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_main_query() && $gqgemcmoicmgaqie->is_admin) { global $wpdb; $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca['exact']) ? '' : '%'; $qwcmueausqgiwigy = $eyyicwuomioiwoeu->prepare(" AND (%s.post_title LIKE '%s%s%s') ", $wpdb->posts, $aaycmcgqqqsysccs, $eyyicwuomioiwoeu->yqccgscwmeeyigkg(esc_sql($_GET['s'])), $aaycmcgqqqsysccs); } return $qwcmueausqgiwigy; } public function goyswgwoekecygco($weyoqgcesqgeusiu) { if ($this->caokeucsksukesyo()->aqasygcsqysmmyke()->omuogooguicuqewu()) { $youqwiyugsiuksaa = (int) Setting::ioukqkmiwsokywyy(); if ($youqwiyugsiuksaa > 0) { $weyoqgcesqgeusiu = $youqwiyugsiuksaa; } } return $weyoqgcesqgeusiu; } public function eeessiowgqwumwuk($aumscagymwyyicag) : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($aumscagymwyyicag, ['class' => 'price-amount']); } public function giucyeqgweieaqag($oammesyieqmwuwyi) { if (is_array($oammesyieqmwuwyi) && !$this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae()) { if ($yemgmmgogcwccuky = Setting::eiwcuqigayigimak(Setting::cuqwmqwgcuuceoqo, [])) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($oammesyieqmwuwyi, $yemgmmgogcwccuky); } } return $oammesyieqmwuwyi; } public function uikmgwcsgomcuywo($ywoucyskcquysiwc) : array { $cciauwuwuqaywgce = 'additional_information'; if (isset($ywoucyskcquysiwc[$cciauwuwuqaywgce])) { $meqocwsecsywiiqs = Setting::oowsugsmwuqmaaii(); if (rtrim($meqocwsecsywiiqs)) { $ywoucyskcquysiwc[$cciauwuwuqaywgce][Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; } } return $ywoucyskcquysiwc; } public function giagsqiwuscougmu($aumscagymwyyicag, $kicccmgaoiissqys) { if ($kicccmgaoiissqys instanceof WC_Product && $kicccmgaoiissqys->get_price() <= 0 && ($swsiuagyekaqiois = Setting::eiwcuqigayigimak(Setting::mgaiesaoggoicmqi, ''))) { $aumscagymwyyicag = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($swsiuagyekaqiois, ['class' => 'price-free']); } return $aumscagymwyyicag; } public function cyeuqmmyeoogsoma($nsmgceoqaqogqmuw, $aumscagymwyyicag, $ywmkwiwkosakssii, $wumyeqkaemkcowka) { if (!isset($ywmkwiwkosakssii['dont-change']) && $wumyeqkaemkcowka <= 0 && ($pkyyagewkiyckmwy = Setting::qumsemsimqqggycq())) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($pkyyagewkiyckmwy, ['class' => 'price-amount']); } return $nsmgceoqaqogqmuw; } public function wkoyauuuecqasess($nsmgceoqaqogqmuw, $aumscagymwyyicag, $ywmkwiwkosakssii, $wumyeqkaemkcowka) { $aoqagsqecokqqwqg = 1000; if ($wumyeqkaemkcowka >= $aoqagsqecokqqwqg && (!isset($ywmkwiwkosakssii['short']) || $ywmkwiwkosakssii['short']) && Setting::uusioiccyseocsmw()) { $agikakqqswiwaqgc = [1000 => __('Thousands', PR__CMN__COVER), 1000000 => __('Millions', PR__CMN__COVER), 1000000000 => __('Billions', PR__CMN__COVER)]; $momcykaoccoymeig = 1; $gaeqamemwmwsyukm = count($agikakqqswiwaqgc); $aqykuigiuwmmcieu = $iyqygqimawuycsyq = null; foreach ($agikakqqswiwaqgc as $mqwsmsykyouoomgm => $meqocwsecsywiiqs) { $aqykuigiuwmmcieu = $wumyeqkaemkcowka / $mqwsmsykyouoomgm; if ($aqykuigiuwmmcieu < $mqwsmsykyouoomgm || $gaeqamemwmwsyukm == $momcykaoccoymeig) { $iyqygqimawuycsyq = $meqocwsecsywiiqs; break; } $momcykaoccoymeig++; } if ($aqykuigiuwmmcieu && $iyqygqimawuycsyq) { $aocuqemkaqyyiqae = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->soqyyosiiqwwucga($ywmkwiwkosakssii['currency']); $mogsmwwuqscwiwom = sprintf($ywmkwiwkosakssii['price_format'], $aocuqemkaqyyiqae, $iyqygqimawuycsyq); $owimomwwoksyoeae = $ywmkwiwkosakssii['decimals']; $gyesqcyuwmuayugq = strlen(substr(strrchr($aqykuigiuwmmcieu, "."), 1)); if ($owimomwwoksyoeae < $gyesqcyuwmuayugq) { $owimomwwoksyoeae = $gyesqcyuwmuayugq; } $aqykuigiuwmmcieu = number_format($aqykuigiuwmmcieu, $owimomwwoksyoeae, $ywmkwiwkosakssii['decimal_separator'], $ywmkwiwkosakssii['thousand_separator']); $aqykuigiuwmmcieu = $this->eeessiowgqwumwuk($aqykuigiuwmmcieu); $nsmgceoqaqogqmuw = str_replace([$aocuqemkaqyyiqae, $aumscagymwyyicag], [$mogsmwwuqscwiwom, $aqykuigiuwmmcieu], $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } }
