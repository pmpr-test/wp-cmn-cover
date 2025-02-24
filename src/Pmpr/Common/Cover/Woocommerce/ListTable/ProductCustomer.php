<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc33a5c069f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = 'orders'; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, 'plural' => __('Customers', PR__CMN__COVER), 'singular' => __('Customer', PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __('User', PR__CMN__COVER), self::muaawyoqqgewygai => __('Orders', PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); break; case self::muaawyoqqgewygai: printf(__('%s Orders', PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); break; } } public function no_items() { printf(esc_html__('No customer bought %s product.', PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if (!$product) { wp_die('product id not determined for product customer list: ' . static::class); } $oqseeekuqisekiwy = array_map('esc_sql', $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = " pm.meta_value FROM {$wpdb->posts} AS p "; $gqgemcmoicmgaqie .= " INNER JOIN {$wpdb->postmeta} AS pm ON p.ID = pm.post_id "; $gqgemcmoicmgaqie .= " INNER JOIN {$wpdb->prefix}woocommerce_order_items AS i ON p.ID = i.order_id "; $gqgemcmoicmgaqie .= " INNER JOIN {$wpdb->prefix}woocommerce_order_itemmeta AS im ON i.order_item_id = im.order_item_id "; $gqgemcmoicmgaqie .= " WHERE p.post_status IN ( 'wc-" . implode("','wc-", $oqseeekuqisekiwy) . "' ) "; $gqgemcmoicmgaqie .= " AND pm.meta_key IN ( '_customer_user' ) "; $gqgemcmoicmgaqie .= " AND im.meta_key IN ( '_product_id', '_variation_id' ) "; $gqgemcmoicmgaqie .= " AND im.meta_value = {$product} "; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare('LIMIT %d, %d;', ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("SELECT DISTINCT {$gqgemcmoicmgaqie} {$umwqusowiqmyseom}"); if ($miouyyaoyyekgiqu) { $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; } } parent::prepare_items(); } }
