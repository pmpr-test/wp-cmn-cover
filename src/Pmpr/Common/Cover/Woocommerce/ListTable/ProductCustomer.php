<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6cfc9458             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = "\x6f\x72\144\145\162\163"; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, "\160\154\165\162\141\x6c" => __("\103\165\163\x74\157\155\x65\x72\x73", PR__CMN__COVER), "\x73\151\156\x67\x75\x6c\141\162" => __("\103\165\163\x74\x6f\155\145\x72", PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __("\125\x73\x65\162", PR__CMN__COVER), self::muaawyoqqgewygai => __("\x4f\x72\x64\145\162\163", PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); goto aycqgowuwagcgque; case self::muaawyoqqgewygai: printf(__("\x25\163\x20\x4f\x72\x64\x65\x72\x73", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); goto aycqgowuwagcgque; } icuukwkwqeoogyae: aycqgowuwagcgque: } public function no_items() { printf(esc_html__("\116\157\x20\x63\165\163\x74\157\x6d\145\x72\x20\x62\x6f\165\x67\150\164\x20\45\163\x20\160\x72\x6f\x64\165\143\x74\x2e", PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if ($product) { goto iwcmgioeaiyuacwi; } wp_die("\160\162\x6f\x64\165\143\x74\40\151\x64\x20\x6e\157\164\40\144\x65\x74\x65\162\155\151\x6e\145\x64\40\x66\x6f\x72\x20\160\x72\157\x64\165\143\164\40\143\x75\163\x74\157\155\145\162\40\x6c\151\163\x74\72\40" . $this->uqggkiomyiceyooa()); iwcmgioeaiyuacwi: $oqseeekuqisekiwy = array_map("\x65\x73\143\137\x73\x71\x6c", $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = "\x20\160\x6d\56\x6d\145\x74\141\137\166\x61\154\165\x65\40\106\x52\x4f\x4d\40{$wpdb->posts}\x20\x41\x53\x20\160\x20"; $gqgemcmoicmgaqie .= "\x20\x49\x4e\x4e\x45\122\x20\x4a\117\111\116\x20{$wpdb->postmeta}\x20\101\123\x20\160\x6d\40\x4f\116\x20\x70\56\x49\x44\40\75\x20\x70\x6d\56\x70\157\x73\x74\x5f\151\x64\40"; $gqgemcmoicmgaqie .= "\x20\111\x4e\x4e\105\122\40\x4a\117\111\116\40{$wpdb->prefix}\x77\157\x6f\143\x6f\x6d\x6d\145\x72\143\145\137\157\162\x64\145\162\x5f\151\164\145\x6d\x73\x20\101\x53\40\151\x20\117\116\40\160\56\x49\104\x20\x3d\40\x69\56\x6f\x72\x64\x65\x72\137\151\144\x20"; $gqgemcmoicmgaqie .= "\40\x49\x4e\116\105\x52\40\x4a\x4f\111\x4e\40{$wpdb->prefix}\167\x6f\x6f\x63\x6f\x6d\x6d\x65\x72\x63\x65\137\x6f\162\144\x65\x72\137\151\164\145\x6d\155\145\x74\141\40\101\123\40\151\155\x20\x4f\x4e\x20\x69\56\157\162\144\x65\162\137\x69\164\x65\x6d\137\151\x64\40\75\40\151\155\x2e\157\162\x64\x65\x72\x5f\x69\164\145\x6d\137\x69\x64\40"; $gqgemcmoicmgaqie .= "\x20\127\110\x45\x52\x45\40\x70\56\160\157\x73\x74\x5f\x73\164\x61\164\165\163\x20\x49\x4e\x20\x28\x20\x27\167\x63\55" . implode("\x27\x2c\47\x77\143\x2d", $oqseeekuqisekiwy) . "\x27\40\x29\40"; $gqgemcmoicmgaqie .= "\40\101\x4e\x44\x20\160\155\56\155\x65\x74\141\x5f\153\x65\x79\x20\111\x4e\40\50\40\x27\x5f\143\x75\x73\x74\x6f\155\145\x72\x5f\165\x73\145\x72\47\x20\51\x20"; $gqgemcmoicmgaqie .= "\x20\101\116\x44\40\x69\x6d\56\155\x65\x74\141\x5f\153\145\x79\x20\x49\116\x20\x28\x20\x27\137\160\162\x6f\144\x75\143\164\x5f\151\144\x27\x2c\40\47\137\x76\141\162\151\x61\164\x69\x6f\156\137\151\144\x27\40\x29\x20"; $gqgemcmoicmgaqie .= "\40\x41\x4e\104\40\151\155\56\155\x65\x74\141\137\x76\x61\154\x75\145\40\x3d\x20{$product}\40"; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\x4c\111\115\111\124\40\45\x64\54\x20\45\x64\73", ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("\123\x45\114\x45\103\x54\40\x44\x49\x53\x54\x49\116\103\124\40{$gqgemcmoicmgaqie}\40{$umwqusowiqmyseom}"); if (!$miouyyaoyyekgiqu) { goto gcogomgmqcgkeceg; } $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; ikqagqacuwcgwmqy: } iyyaiuccouqowyga: gcogomgmqcgkeceg: parent::prepare_items(); } }
