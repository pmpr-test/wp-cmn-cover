<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbb4132b7d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = "\x6f\x72\144\x65\162\163"; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, "\x70\x6c\x75\x72\x61\154" => __("\x43\x75\x73\x74\x6f\155\x65\x72\x73", PR__CMN__COVER), "\x73\151\156\147\165\154\x61\162" => __("\x43\165\x73\164\157\155\x65\162", PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __("\x55\163\145\162", PR__CMN__COVER), self::muaawyoqqgewygai => __("\117\162\x64\145\162\x73", PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); goto iwcmgioeaiyuacwi; case self::muaawyoqqgewygai: printf(__("\45\x73\40\x4f\162\x64\x65\x72\163", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); goto iwcmgioeaiyuacwi; } iyyaiuccouqowyga: iwcmgioeaiyuacwi: } public function no_items() { printf(esc_html__("\x4e\x6f\40\143\x75\163\164\157\155\x65\162\40\x62\x6f\165\x67\150\x74\40\x25\163\40\160\162\x6f\x64\165\x63\164\56", PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if ($product) { goto ikqagqacuwcgwmqy; } wp_die("\x70\162\x6f\x64\165\143\164\40\151\x64\40\x6e\157\164\40\x64\x65\164\x65\162\x6d\x69\x6e\145\x64\x20\146\x6f\x72\40\x70\x72\x6f\144\165\x63\x74\x20\143\x75\x73\164\x6f\x6d\x65\x72\x20\x6c\x69\x73\x74\72\x20" . $this->uqggkiomyiceyooa()); ikqagqacuwcgwmqy: $oqseeekuqisekiwy = array_map("\x65\x73\x63\137\x73\161\154", $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = "\40\x70\155\56\155\x65\164\x61\137\166\141\154\x75\x65\40\x46\x52\x4f\115\x20{$wpdb->posts}\x20\x41\x53\x20\x70\40"; $gqgemcmoicmgaqie .= "\x20\x49\x4e\x4e\x45\122\40\x4a\x4f\111\116\x20{$wpdb->postmeta}\x20\x41\123\x20\160\x6d\40\117\x4e\40\x70\x2e\111\104\x20\75\40\x70\155\x2e\160\x6f\x73\164\x5f\x69\144\x20"; $gqgemcmoicmgaqie .= "\40\x49\116\x4e\105\122\x20\112\117\x49\x4e\x20{$wpdb->prefix}\167\157\x6f\143\157\x6d\155\x65\162\x63\145\x5f\157\162\x64\145\162\137\x69\164\x65\155\x73\x20\x41\x53\x20\151\40\x4f\116\x20\160\x2e\x49\104\x20\x3d\40\151\x2e\157\162\x64\x65\x72\x5f\x69\x64\40"; $gqgemcmoicmgaqie .= "\40\x49\x4e\116\105\x52\40\x4a\117\111\116\x20{$wpdb->prefix}\167\157\x6f\143\157\155\155\x65\x72\143\145\137\x6f\162\144\145\162\137\151\164\145\x6d\155\x65\164\141\40\x41\x53\40\151\x6d\x20\x4f\x4e\40\151\56\157\162\x64\x65\162\137\151\164\145\x6d\137\x69\x64\x20\x3d\40\151\x6d\56\157\x72\x64\x65\162\x5f\151\164\145\x6d\x5f\151\144\40"; $gqgemcmoicmgaqie .= "\40\x57\x48\105\122\105\40\160\x2e\x70\x6f\163\164\137\x73\x74\141\164\165\163\x20\x49\x4e\x20\x28\x20\x27\x77\x63\x2d" . implode("\x27\x2c\x27\167\x63\55", $oqseeekuqisekiwy) . "\x27\40\51\x20"; $gqgemcmoicmgaqie .= "\x20\x41\116\x44\40\160\155\x2e\x6d\145\164\x61\137\x6b\145\x79\x20\111\116\x20\50\x20\47\137\143\x75\x73\x74\x6f\x6d\x65\162\x5f\165\163\145\x72\x27\40\x29\x20"; $gqgemcmoicmgaqie .= "\x20\101\116\x44\40\151\155\x2e\155\x65\164\141\x5f\153\x65\x79\x20\111\x4e\x20\x28\40\47\137\160\x72\157\144\x75\x63\x74\137\151\x64\x27\54\x20\47\137\x76\141\x72\151\141\x74\x69\157\x6e\x5f\x69\x64\x27\40\x29\x20"; $gqgemcmoicmgaqie .= "\x20\x41\116\104\x20\151\x6d\56\x6d\x65\164\x61\137\x76\141\x6c\165\145\40\x3d\x20{$product}\40"; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\x4c\111\115\111\x54\40\45\144\x2c\40\45\144\x3b", ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("\123\105\114\105\x43\x54\40\104\x49\x53\124\111\116\103\x54\40{$gqgemcmoicmgaqie}\40{$umwqusowiqmyseom}"); if (!$miouyyaoyyekgiqu) { goto ugmukcwgcioqgywy; } $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; cksomiiqscosigke: } gcogomgmqcgkeceg: ugmukcwgcioqgywy: parent::prepare_items(); } }
