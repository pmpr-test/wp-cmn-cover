<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4ad59a55             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = "\157\x72\x64\145\162\x73"; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, "\x70\x6c\165\x72\141\154" => __("\x43\165\163\164\x6f\x6d\x65\162\163", PR__CMN__COVER), "\163\151\156\147\165\154\141\x72" => __("\x43\x75\163\164\157\x6d\145\162", PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __("\x55\163\x65\162", PR__CMN__COVER), self::muaawyoqqgewygai => __("\117\162\x64\x65\x72\163", PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); break; case self::muaawyoqqgewygai: printf(__("\45\x73\40\x4f\162\x64\145\162\163", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); break; } } public function no_items() { printf(esc_html__("\x4e\157\40\143\x75\163\x74\157\x6d\145\162\x20\142\157\165\147\x68\x74\40\45\x73\40\160\x72\x6f\x64\165\x63\164\x2e", PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if (!$product) { wp_die("\x70\x72\157\x64\x75\x63\164\x20\x69\x64\40\x6e\157\x74\x20\x64\145\x74\145\162\155\151\x6e\145\144\40\146\157\162\40\160\162\157\144\x75\x63\x74\40\143\165\163\164\157\x6d\x65\162\40\x6c\151\x73\164\x3a\40" . static::class); } $oqseeekuqisekiwy = array_map("\145\x73\143\137\163\161\x6c", $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = "\40\160\155\56\x6d\x65\x74\x61\137\166\141\x6c\165\x65\40\x46\x52\117\115\x20{$wpdb->posts}\x20\101\x53\x20\160\x20"; $gqgemcmoicmgaqie .= "\x20\111\116\x4e\105\122\40\112\x4f\111\x4e\x20{$wpdb->postmeta}\x20\101\123\x20\x70\155\40\117\x4e\x20\160\x2e\x49\104\40\x3d\x20\x70\x6d\x2e\160\157\163\164\x5f\151\x64\x20"; $gqgemcmoicmgaqie .= "\40\111\x4e\x4e\105\122\x20\112\x4f\x49\x4e\40{$wpdb->prefix}\167\157\157\143\x6f\155\x6d\145\162\143\x65\x5f\x6f\x72\x64\x65\162\137\x69\164\x65\155\163\40\x41\123\x20\151\40\x4f\116\x20\x70\56\x49\x44\40\75\x20\151\56\157\162\x64\145\162\137\151\x64\40"; $gqgemcmoicmgaqie .= "\40\x49\116\x4e\x45\122\40\112\117\111\116\40{$wpdb->prefix}\167\157\x6f\143\157\x6d\155\x65\162\143\145\x5f\x6f\x72\144\145\162\137\x69\164\145\155\155\x65\x74\x61\x20\101\x53\40\151\155\40\x4f\x4e\x20\x69\56\x6f\162\144\x65\x72\137\x69\x74\145\155\137\151\x64\40\x3d\x20\151\155\x2e\157\162\x64\x65\162\137\x69\164\145\x6d\137\x69\144\x20"; $gqgemcmoicmgaqie .= "\40\127\110\105\122\x45\x20\160\56\x70\x6f\x73\164\137\x73\164\141\164\165\163\x20\111\116\40\x28\x20\47\x77\143\x2d" . implode("\47\x2c\47\x77\x63\55", $oqseeekuqisekiwy) . "\x27\40\51\40"; $gqgemcmoicmgaqie .= "\40\x41\x4e\x44\40\x70\155\56\x6d\x65\x74\x61\137\x6b\145\x79\40\x49\116\40\50\x20\47\x5f\143\x75\x73\x74\x6f\155\145\162\137\165\163\x65\162\47\40\51\x20"; $gqgemcmoicmgaqie .= "\40\101\116\x44\x20\x69\155\x2e\x6d\x65\x74\x61\x5f\153\145\171\40\x49\x4e\x20\x28\x20\x27\137\160\162\157\x64\x75\x63\x74\x5f\151\144\x27\x2c\x20\47\137\x76\x61\x72\x69\x61\164\x69\157\x6e\137\151\x64\47\40\51\40"; $gqgemcmoicmgaqie .= "\40\x41\116\x44\40\151\155\x2e\x6d\145\164\141\x5f\x76\x61\154\x75\145\x20\75\x20{$product}\40"; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\x4c\111\x4d\x49\x54\40\x25\144\x2c\40\x25\x64\73", ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("\x53\105\114\x45\x43\124\x20\104\111\x53\x54\x49\116\x43\124\x20{$gqgemcmoicmgaqie}\40{$umwqusowiqmyseom}"); if ($miouyyaoyyekgiqu) { $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; } } parent::prepare_items(); } }
