<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c31f6e8c134             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Admin_Settings; class Setting extends Container { const soqkucakwksaeyce = 'woocommerce_'; const kuwsqycgaagiimge = 'account'; const euqiymuaucowsqaa = 'stored_address'; const imgaumeywmqsacas = 'catalog_options'; const fmikksgwouggecce = 'general_options'; const ieegmywouoqgceii = 'pricing_options'; const muwcwuesqqgcuqsa = 'password_show_hide'; const yaioswmycokekqao = 'product_rating_options'; const ogommokeywouewiy = 'digital_download_options'; const wmcesqceuegawooy = 'product_inventory_options'; const askuusuemmawuesw = 'product_measurement_options'; const eiyccksaowygmicm = self::soqkucakwksaeyce . 'shop_per_page'; const mgaiesaoggoicmqi = self::soqkucakwksaeyce . 'free_price_label'; const siyomqwiwwmgqswi = self::soqkucakwksaeyce . 'attributes_tab_title'; const wweuwmcmaweeeqoc = self::soqkucakwksaeyce . 'enable_admin_simple_search'; const cuqwmqwgcuuceoqo = self::soqkucakwksaeyce . 'myaccount_exclude_navigation'; const lkawsqiicuikigyu = self::soqkucakwksaeyce . 'price_automatic_short_currency'; public function kgquecmsgcouyaya() { $ywoucyskcquysiwc = [Constants::ioomakeyqiqowgmk => [self::euqiymuaucowsqaa, self::fmikksgwouggecce, self::ieegmywouoqgceii], self::kuwsqycgaagiimge, 'shipping', 'inventory' => [self::wmcesqceuegawooy], 'products_general' => [self::imgaumeywmqsacas, self::yaioswmycokekqao, self::askuusuemmawuesw], 'downloadable_products' => [self::ogommokeywouewiy], 'account_registration_options']; $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) { if (is_numeric($cciauwuwuqaywgce)) { $cciauwuwuqaywgce = $mgiqqesweuqmsymo; } $ekiuyucoiagmscgy = $yyauwyaeewsickwk->qoqowykumameucwa($cciauwuwuqaywgce); if ($ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($this, $ekiuyucoiagmscgy)) { $this->cecaguuoecmccuse("woocommerce_{$cciauwuwuqaywgce}_settings", [$this, $ekiuyucoiagmscgy]); } if (is_array($mgiqqesweuqmsymo)) { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { $ekiuyucoiagmscgy = $yyauwyaeewsickwk->qoqowykumameucwa("{$cciauwuwuqaywgce}_section_{$awcmekyiwwkeyisq}"); $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}Start"; $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}End"; if ($amcsoieoyceiwyiy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($this, $amcsoieoyceiwyiy)) { $this->cecaguuoecmccuse("woocommerce_settings_{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]); } if ($oqeqeekoomwgugqi = $cgwqqcukiasoicmi->myagqecycsaiyqsk($this, $oqeqeekoomwgugqi)) { $this->cecaguuoecmccuse("woocommerce_settings_{$awcmekyiwwkeyisq}_end", [$this, $oqeqeekoomwgugqi]); } } } } parent::kgquecmsgcouyaya(); } public final function iuaucuookgoqiiio($ikgwqyuyckaewsow = []) { WC_Admin_Settings::output_fields($ikgwqyuyckaewsow); } public final function qkauysqeioauswys($aiowsaccomcoikus) { $this->iuaucuookgoqiiio([$aiowsaccomcoikus]); } public final function qiaemauagqsmgoeu($uwomkgseoiegeume, $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, bool $qmeuaeiseuacgiqc = true) { return $this->oaeygwkmgmgksqke([$uwomkgseoiegeume], $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc); } public function kwkugmqouisgkqig($ikgwqyuyckaewsow, $aokagokqyuysuksm, $meqocwsecsywiiqs, $iaiumiawmuswssky) : array { $ikgwqyuyckaewsow[] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::squoamkioomemiyi => Constants::qescuiwgsyuikume, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]; foreach ($iaiumiawmuswssky as $aiowsaccomcoikus) { $ikgwqyuyckaewsow[] = $aiowsaccomcoikus; } $ikgwqyuyckaewsow[] = [Constants::squoamkioomemiyi => 'sectionend', Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]; return $ikgwqyuyckaewsow; } public function oaeygwkmgmgksqke($uwomkgseoiegeume, $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, bool $qmeuaeiseuacgiqc = true) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) { $aiowsaccomcoikus[Constants::gouqcwikiiygyasc] = $gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::gouqcwikiiygyasc, $momcykaoccoymeig); $aiowsaccomcoikus[Constants::squoamkioomemiyi] = $gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::squoamkioomemiyi, Constants::TEXT); $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus; } $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc); if (is_numeric($awcmekyiwwkeyisq)) { if (!$qmeuaeiseuacgiqc) { $awcmekyiwwkeyisq++; } array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume); } return $ikgwqyuyckaewsow; } public function gkookkaogucisskc(array $ikgwqyuyckaewsow, string $awcmekyiwwkeyisq, bool $qmeuaeiseuacgiqc = true) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($qmeuaeiseuacgiqc) { $ccamueccusigaaio = 'sectionend'; } else { $ccamueccusigaaio = Constants::qescuiwgsyuikume; } $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::gouqcwikiiygyasc); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::squoamkioomemiyi); if ($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio) { $awcmekyiwwkeyisq = $momcykaoccoymeig; break; } } return $awcmekyiwwkeyisq; } public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = null, string $yuwymayicwwqiske = self::soqkucakwksaeyce) { if ($yuwymayicwwqiske && strpos($uusmaiomayssaecw, $yuwymayicwwqiske) === 0) { $yuwymayicwwqiske = ''; } return self::iwgqamekocwaigci()->wikusamwomuogoau()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske); } protected static function ossscgwwiwwqyuiy($uusmaiomayssaecw, $megmggkiokqkcwou = []) { $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw); if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) { $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, array_flip($cmqeouisgweqguee)); } else { $oammesyieqmwuwyi = $cmqeouisgweqguee; } return $oammesyieqmwuwyi; } public function ogsqeuumuqcqkuuk(array $ikgwqyuyckaewsow = []) : array { $eciuecguuowmeyqg = []; if ($this->caokeucsksukesyo()->wikusamwomuogoau()->mkiigkeqaeiwqyua()) { $eciuecguuowmeyqg[self::lkawsqiicuikigyu] = ['desc' => __('Show price short', PR__CMN__COVER), Constants::squoamkioomemiyi => Constants::semqugiuwygamias, Constants::qescuiwgsyuikume => __('Short Price', PR__CMN__COVER), Constants::wikgqsqysyuoykse => Constants::ioyokcgwaowoqskk]; } $eciuecguuowmeyqg[self::mgaiesaoggoicmqi] = ['desc' => __('This label show instead of 0 product\'s price, leave empty if you don\'t want this change', PR__CMN__COVER), Constants::squoamkioomemiyi => Constants::TEXT, Constants::qescuiwgsyuikume => __('Free Price Label', PR__CMN__COVER)]; return $this->oaeygwkmgmgksqke($eciuecguuowmeyqg, $ikgwqyuyckaewsow, self::ieegmywouoqgceii, false); } public function qssqicawwgqqscui($ikgwqyuyckaewsow = []) { $ikgwqyuyckaewsow = $this->oaeygwkmgmgksqke([self::eiyccksaowygmicm => [Constants::qescuiwgsyuikume => __('Shop items per page', PR__CMN__COVER), Constants::wikgqsqysyuoykse => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()], self::siyomqwiwwmgqswi => [Constants::qescuiwgsyuikume => __('Attributes tab title', PR__CMN__COVER)]], $ikgwqyuyckaewsow, self::imgaumeywmqsacas); $ikgwqyuyckaewsow = $this->kwkugmqouisgkqig($ikgwqyuyckaewsow, 'product_search_options', __('Search', PR__CMN__COVER), [[Constants::gouqcwikiiygyasc => self::wweuwmcmaweeeqoc, Constants::squoamkioomemiyi => 'checkbox', Constants::qescuiwgsyuikume => __('Product Search', PR__CMN__COVER), Constants::wikgqsqysyuoykse => 'no', 'desc' => __('Enable product simple search in backend area', PR__CMN__COVER)]]); return $ikgwqyuyckaewsow; } public function eiwicgsqoiaeawkk($ikgwqyuyckaewsow = []) : array { return $ikgwqyuyckaewsow; } public static function wwameuqwugekuykk() : bool { return (bool) self::eiwcuqigayigimak(self::wweuwmcmaweeeqoc, false); } public static function ciyeymqmquocggeg() { return self::eiwcuqigayigimak(self::eiyccksaowygmicm, 9); } public static function oowsugsmwuqmaaii() { return self::eiwcuqigayigimak(self::siyomqwiwwmgqswi, ''); } public static function uusioiccyseocsmw() : bool { return self::iwgqamekocwaigci()->wikusamwomuogoau()->mkiigkeqaeiwqyua() && self::eiwcuqigayigimak(self::lkawsqiicuikigyu) === 'yes'; } public static function qumsemsimqqggycq() { return self::eiwcuqigayigimak(self::mgaiesaoggoicmqi, false); } public static function ioukqkmiwsokywyy() { $cgqowqqsswqmocyc = self::ciyeymqmquocggeg(); $gqgemcmoicmgaqie = self::iwgqamekocwaigci()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::owuiaqkkkayouugm, $cgqowqqsswqmocyc); if ($gqgemcmoicmgaqie !== $cgqowqqsswqmocyc) { $kuuugksiksqcaaaa = self::iwgqamekocwaigci()->mmsykuomogaqoaye()->ocksiywmkyaqseou('shop_items_per_page_is_valid', true, $gqgemcmoicmgaqie); if ($kuuugksiksqcaaaa) { $cgqowqqsswqmocyc = $gqgemcmoicmgaqie; } } return $cgqowqqsswqmocyc; } }
