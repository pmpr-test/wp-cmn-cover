<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038b8edf05             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = "\157\x72\144\x65\162\163"; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, "\x70\154\165\x72\141\154" => __("\103\165\163\x74\157\x6d\x65\x72\163", PR__CMN__COVER), "\163\x69\x6e\147\x75\154\x61\x72" => __("\x43\165\163\x74\157\x6d\145\x72", PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __("\x55\163\x65\x72", PR__CMN__COVER), self::muaawyoqqgewygai => __("\x4f\x72\144\x65\x72\163", PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); break; case self::muaawyoqqgewygai: printf(__("\45\x73\40\x4f\162\x64\145\x72\163", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); break; } } public function no_items() { printf(esc_html__("\x4e\157\x20\x63\165\163\x74\157\155\145\162\x20\x62\157\x75\147\150\164\40\x25\x73\x20\x70\162\157\144\165\x63\x74\x2e", PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if (!$product) { wp_die("\x70\x72\x6f\x64\x75\143\x74\x20\x69\144\x20\156\157\164\40\144\x65\164\x65\x72\155\x69\156\x65\x64\x20\x66\157\x72\40\160\162\157\x64\165\x63\x74\x20\143\x75\x73\164\x6f\x6d\145\162\40\154\151\x73\x74\x3a\x20" . static::class); } $oqseeekuqisekiwy = array_map("\145\x73\143\x5f\x73\x71\x6c", $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = "\40\x70\155\x2e\x6d\145\164\141\x5f\166\141\154\x75\x65\40\x46\x52\x4f\115\40{$wpdb->posts}\x20\101\123\x20\160\x20"; $gqgemcmoicmgaqie .= "\x20\x49\116\116\x45\x52\x20\x4a\117\111\116\40{$wpdb->postmeta}\x20\x41\123\40\160\x6d\40\117\x4e\40\x70\x2e\x49\x44\40\x3d\x20\160\x6d\x2e\160\x6f\x73\164\x5f\x69\144\x20"; $gqgemcmoicmgaqie .= "\x20\x49\116\116\105\x52\x20\112\x4f\x49\x4e\40{$wpdb->prefix}\x77\x6f\157\x63\157\x6d\x6d\x65\x72\x63\x65\x5f\x6f\x72\x64\x65\x72\137\x69\x74\145\x6d\x73\x20\x41\x53\x20\x69\40\117\116\40\x70\x2e\x49\x44\x20\75\x20\x69\x2e\x6f\x72\x64\x65\162\x5f\151\x64\x20"; $gqgemcmoicmgaqie .= "\40\x49\x4e\x4e\105\x52\x20\112\117\x49\x4e\40{$wpdb->prefix}\167\x6f\157\143\157\x6d\x6d\x65\162\x63\145\137\157\x72\x64\x65\x72\x5f\151\x74\x65\155\x6d\x65\164\141\x20\x41\123\40\151\155\40\117\x4e\40\151\x2e\157\162\144\x65\x72\137\x69\x74\145\155\137\x69\144\x20\x3d\x20\x69\x6d\56\157\x72\144\145\162\137\151\x74\x65\155\137\x69\x64\40"; $gqgemcmoicmgaqie .= "\40\127\x48\105\x52\105\40\160\56\160\x6f\x73\x74\x5f\163\x74\141\x74\x75\163\40\x49\x4e\40\50\40\x27\167\143\x2d" . implode("\x27\54\x27\167\143\x2d", $oqseeekuqisekiwy) . "\47\x20\x29\x20"; $gqgemcmoicmgaqie .= "\40\101\x4e\x44\40\160\155\x2e\155\145\x74\x61\x5f\153\x65\x79\x20\111\116\x20\x28\40\x27\x5f\143\165\x73\x74\157\x6d\145\x72\x5f\165\x73\x65\x72\x27\x20\x29\x20"; $gqgemcmoicmgaqie .= "\40\x41\116\104\40\151\x6d\56\155\x65\164\x61\137\153\145\171\40\111\x4e\40\50\x20\x27\x5f\x70\162\157\144\x75\143\164\137\151\x64\x27\x2c\x20\x27\x5f\x76\x61\x72\151\141\x74\151\157\156\x5f\151\x64\x27\40\x29\x20"; $gqgemcmoicmgaqie .= "\40\x41\x4e\104\40\151\155\x2e\x6d\x65\164\141\137\166\141\154\x75\x65\x20\75\40{$product}\40"; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\x4c\111\115\x49\x54\40\x25\x64\x2c\x20\45\x64\73", ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("\123\105\x4c\x45\103\124\x20\x44\111\123\124\x49\116\103\124\x20{$gqgemcmoicmgaqie}\40{$umwqusowiqmyseom}"); if ($miouyyaoyyekgiqu) { $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; } } parent::prepare_items(); } }
