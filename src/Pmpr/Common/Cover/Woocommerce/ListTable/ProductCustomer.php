<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030c34fab8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = "\157\162\x64\145\x72\163"; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, "\x70\154\165\162\141\x6c" => __("\x43\165\x73\x74\x6f\155\145\162\x73", PR__CMN__COVER), "\x73\151\x6e\x67\165\x6c\x61\x72" => __("\103\165\x73\164\157\155\145\162", PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __("\125\163\145\x72", PR__CMN__COVER), self::muaawyoqqgewygai => __("\117\162\144\x65\x72\163", PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); break; case self::muaawyoqqgewygai: printf(__("\45\163\x20\x4f\x72\144\145\162\x73", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); break; } } public function no_items() { printf(esc_html__("\116\x6f\40\143\x75\163\164\x6f\155\145\162\40\x62\157\165\x67\x68\x74\x20\x25\163\x20\160\x72\x6f\144\165\143\x74\56", PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if (!$product) { wp_die("\160\x72\157\x64\x75\x63\164\40\x69\x64\40\156\x6f\164\x20\144\x65\x74\x65\x72\x6d\x69\156\145\144\x20\x66\157\x72\x20\160\x72\157\x64\x75\143\x74\40\x63\165\163\164\157\155\x65\162\40\x6c\x69\x73\x74\x3a\40" . static::class); } $oqseeekuqisekiwy = array_map("\x65\x73\x63\x5f\x73\161\154", $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = "\x20\x70\x6d\56\155\x65\164\x61\x5f\x76\141\154\x75\x65\x20\x46\x52\117\x4d\x20{$wpdb->posts}\40\101\123\40\x70\x20"; $gqgemcmoicmgaqie .= "\x20\x49\x4e\x4e\105\122\40\x4a\x4f\111\116\40{$wpdb->postmeta}\x20\101\123\x20\160\155\40\x4f\116\x20\x70\56\111\x44\40\x3d\x20\x70\x6d\56\x70\x6f\x73\164\x5f\x69\x64\40"; $gqgemcmoicmgaqie .= "\40\111\x4e\x4e\105\x52\40\x4a\x4f\x49\116\x20{$wpdb->prefix}\x77\157\x6f\x63\x6f\155\155\145\162\143\145\x5f\157\x72\144\x65\x72\x5f\151\x74\x65\x6d\x73\x20\x41\123\40\x69\x20\x4f\x4e\40\160\56\111\x44\x20\75\40\151\x2e\x6f\x72\144\x65\x72\x5f\x69\144\x20"; $gqgemcmoicmgaqie .= "\40\x49\x4e\116\105\x52\x20\x4a\x4f\111\116\40{$wpdb->prefix}\x77\x6f\157\143\x6f\x6d\155\145\x72\143\145\x5f\x6f\x72\144\x65\x72\137\151\x74\145\155\155\x65\164\x61\x20\x41\123\40\x69\155\x20\x4f\116\x20\151\56\x6f\x72\x64\x65\162\x5f\151\x74\x65\155\137\x69\144\x20\x3d\40\x69\155\56\x6f\x72\144\x65\x72\x5f\x69\164\x65\155\137\151\144\x20"; $gqgemcmoicmgaqie .= "\40\127\x48\x45\x52\x45\x20\x70\x2e\x70\x6f\163\x74\x5f\x73\x74\141\x74\x75\163\40\111\x4e\x20\50\x20\47\167\x63\55" . implode("\x27\54\x27\167\143\x2d", $oqseeekuqisekiwy) . "\47\40\x29\x20"; $gqgemcmoicmgaqie .= "\40\x41\x4e\x44\x20\160\x6d\x2e\155\x65\164\x61\137\153\145\171\40\111\116\x20\x28\x20\x27\137\x63\165\x73\x74\157\155\145\x72\137\x75\x73\145\x72\47\40\51\x20"; $gqgemcmoicmgaqie .= "\x20\101\116\104\x20\x69\x6d\x2e\155\145\x74\141\x5f\x6b\x65\171\40\x49\x4e\40\50\40\x27\137\160\162\x6f\144\165\143\164\137\151\144\47\x2c\40\47\x5f\166\141\162\151\141\164\x69\x6f\x6e\137\151\x64\47\40\x29\x20"; $gqgemcmoicmgaqie .= "\x20\101\x4e\104\x20\151\155\56\x6d\145\x74\x61\x5f\x76\x61\x6c\x75\145\40\75\40{$product}\40"; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\114\111\115\111\124\x20\45\x64\54\40\x25\x64\x3b", ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("\x53\105\114\105\103\124\40\104\x49\123\x54\111\116\x43\124\40{$gqgemcmoicmgaqie}\40{$umwqusowiqmyseom}"); if ($miouyyaoyyekgiqu) { $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; } } parent::prepare_items(); } }
