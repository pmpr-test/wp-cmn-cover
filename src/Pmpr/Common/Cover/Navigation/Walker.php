<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702cbb7d8f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu { use HelperTrait, WrapperTrait; protected string $elTag = 'li'; protected string $lvlTag = 'ul'; protected array $lvlAttrs = []; protected ?string $currentLevel = null; protected $preElement = null; public function kkisyguyosoyymqs($ywmkwiwkosakssii) : bool { return (bool) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'has_children'); } public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields[Constants::gouqcwikiiygyasc]; if (isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0])) { $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); } parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $aqykuigiuwmmcieu .= $this->usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $aqykuigiuwmmcieu .= $this->usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $kkisyguyosoyymqs = $this->kkisyguyosoyymqs($ywmkwiwkosakssii); if ($kkisyguyosoyymqs) { $this->currentLevel = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = $mqwwsgggokkiiceo->sscegwueamckwmcy('nav_menu_item_args', $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $wkaqekwwgqsqwcoi = $this->gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $this->syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $wwgucssaecqekuek = []; $eeamcawaiqocomwy = $mqwwsgggokkiiceo->sscegwueamckwmcy('nav_menu_item_url', $this->womgoiuoesugioqa($igqsaukqcqscimok), $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $this->igmaewykumgwoaoy($wwgucssaecqekuek, 'rel', $gkyciwoiiisgywcs->get($igqsaukqcqscimok, 'xfn')); $this->igmaewykumgwoaoy($wwgucssaecqekuek, 'href', $eeamcawaiqocomwy, '#'); $this->igmaewykumgwoaoy($wwgucssaecqekuek, 'title', $gkyciwoiiisgywcs->get($igqsaukqcqscimok, 'attr_title')); $this->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'link_class')); $wusgqmeqeqquywgq = $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs); $this->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', $gkyciwoiiisgywcs->get($igqsaukqcqscimok, 'class'), $wusgqmeqeqquywgq); if ($igqsaukqcqscimok->target) { $this->igmaewykumgwoaoy($wwgucssaecqekuek, 'target', $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::mgsccwumkcawaqcy)); } $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); $smqwgwwgiimmiagq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'before'); $smqwgwwgiimmiagq .= $swqimwqeweekeusq->yuawgssgauywkiia($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'link_before') . $wkaqekwwgqsqwcoi . $meqocwsecsywiiqs . $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'link_after'), null, $wwgucssaecqekuek); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'after'); $aqykuigiuwmmcieu .= $this->kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) . $smqwgwwgiimmiagq; $this->preElement = $igqsaukqcqscimok; } public function end_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $this->preElement = $igqsaukqcqscimok; $aqykuigiuwmmcieu .= $this->mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $this->oaqwemmqmiqqmaie($wwgucssaecqekuek, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii)); return str_repeat("\t", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\n"; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $qoqkkmgaewoiykkw = str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\t"), $gquaqgsmiuqsaoum); return "{$qoqkkmgaewoiykkw}</{$this->kiiogoueqygqyesm()}>{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\t"), $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = (array) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, 'classes', []); $cmkqisoeyioisqaw[] = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'li_class', ''); $gecwyaugygsikyug = implode(' ', $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('nav_menu_css_class', array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(['class' => $gecwyaugygsikyug], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); return $qoqkkmgaewoiykkw . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false); } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { return "</{$this->cougqgqkumwagiwu()}>{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qescuiwgsyuikume); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy('the_title', $meqocwsecsywiiqs, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, 'ID')); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy('nav_menu_item_title', $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); return $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); } public function gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($this->gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum), $this->yukwcwcsqoswwium([], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii), $gquaqgsmiuqsaoum)); return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('nav_menu_item_icon_html', $nsmgceoqaqogqmuw, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); } public function gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::qgqyauaqwqmqseim); return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('nav_menu_item_icon', $wkaqekwwgqsqwcoi, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); } public function womgoiuoesugioqa($igqsaukqcqscimok) { $migiiksoiymissge = null; if (!$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::auqoykcmsiauccao); } if (!$migiiksoiymissge && $igqsaukqcqscimok->object_id) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); } return $migiiksoiymissge; } public function gquqiqakcmmkgwwi($ywmkwiwkosakssii, string $wmcaeewaokocymiy = "\n") : string { if ('discard' === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'item_spacing')) { $kgkcwaioaqiyaoeg = ''; } else { $kgkcwaioaqiyaoeg = $wmcaeewaokocymiy; } return $kgkcwaioaqiyaoeg; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if ($kkisyguyosoyymqs) { $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, 'classes', 'has-children'); } return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "submenu_{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
