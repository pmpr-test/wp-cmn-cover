<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030c34fab8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu { use HelperTrait, WrapperTrait; protected string $elTag = "\x6c\151"; protected string $lvlTag = "\165\154"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; protected $preElement = null; public function kkisyguyosoyymqs($ywmkwiwkosakssii) : bool { return (bool) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, "\x68\x61\x73\137\x63\x68\x69\x6c\x64\162\145\x6e"); } public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields[Constants::gouqcwikiiygyasc]; if (isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0])) { $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); } parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $aqykuigiuwmmcieu .= $this->usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $aqykuigiuwmmcieu .= $this->usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $kkisyguyosoyymqs = $this->kkisyguyosoyymqs($ywmkwiwkosakssii); if ($kkisyguyosoyymqs) { $this->currentLevel = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x6e\141\166\x5f\x6d\x65\x6e\x75\x5f\151\x74\x65\155\137\x61\162\147\x73", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $wkaqekwwgqsqwcoi = $this->gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $this->syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $wwgucssaecqekuek = []; $eeamcawaiqocomwy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\156\141\166\x5f\x6d\x65\156\165\x5f\151\164\145\x6d\137\165\162\154", $this->womgoiuoesugioqa($igqsaukqcqscimok), $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\162\x65\x6c", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x78\x66\x6e")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\162\x65\x66", $eeamcawaiqocomwy, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\151\x74\x6c\x65", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\164\164\x72\137\164\151\x74\154\x65")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\163", $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\x69\156\x6b\x5f\143\x6c\141\x73\163")); $wusgqmeqeqquywgq = $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\x73", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\143\x6c\141\163\x73"), $wusgqmeqeqquywgq); if ($igqsaukqcqscimok->target) { $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x61\x72\x67\145\x74", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::mgsccwumkcawaqcy)); } $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); $smqwgwwgiimmiagq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\142\x65\x66\x6f\162\145"); $smqwgwwgiimmiagq .= $swqimwqeweekeusq->yuawgssgauywkiia($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\151\156\x6b\137\x62\x65\x66\157\x72\x65") . $wkaqekwwgqsqwcoi . $meqocwsecsywiiqs . $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\151\156\x6b\x5f\141\146\x74\145\x72"), null, $wwgucssaecqekuek); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\141\146\x74\x65\x72"); $aqykuigiuwmmcieu .= $this->kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) . $smqwgwwgiimmiagq; $this->preElement = $igqsaukqcqscimok; } public function end_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $this->preElement = $igqsaukqcqscimok; $aqykuigiuwmmcieu .= $this->mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $this->oaqwemmqmiqqmaie($wwgucssaecqekuek, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii)); return str_repeat("\x9", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\12"; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $qoqkkmgaewoiykkw = str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\x9"), $gquaqgsmiuqsaoum); return "{$qoqkkmgaewoiykkw}\74\57{$this->kiiogoueqygqyesm()}\x3e{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\11"), $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = (array) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x63\x6c\x61\x73\163\145\163", []); $cmkqisoeyioisqaw[] = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\x69\x5f\143\x6c\x61\x73\x73", ''); $gecwyaugygsikyug = implode("\40", $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\156\x61\166\137\155\145\x6e\x75\x5f\143\x73\x73\x5f\x63\154\x61\x73\x73", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\x63\154\x61\163\x73" => $gecwyaugygsikyug], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); return $qoqkkmgaewoiykkw . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false); } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { return "\74\x2f{$this->cougqgqkumwagiwu()}\x3e{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qescuiwgsyuikume); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy("\164\150\145\x5f\164\x69\164\154\x65", $meqocwsecsywiiqs, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x49\x44")); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy("\156\x61\x76\137\155\x65\156\165\137\x69\x74\x65\x6d\x5f\x74\x69\x74\154\x65", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); return $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); } public function gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($this->gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum), $this->yukwcwcsqoswwium([], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii), $gquaqgsmiuqsaoum)); return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x6e\x61\x76\x5f\155\x65\156\165\x5f\151\x74\x65\x6d\x5f\x69\x63\157\156\x5f\x68\x74\155\x6c", $nsmgceoqaqogqmuw, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); } public function gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::qgqyauaqwqmqseim); return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x6e\x61\166\x5f\155\145\x6e\x75\x5f\151\164\x65\155\x5f\x69\143\x6f\x6e", $wkaqekwwgqsqwcoi, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); } public function womgoiuoesugioqa($igqsaukqcqscimok) { $migiiksoiymissge = null; if (!$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::auqoykcmsiauccao); } if (!$migiiksoiymissge && $igqsaukqcqscimok->object_id) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); } return $migiiksoiymissge; } public function gquqiqakcmmkgwwi($ywmkwiwkosakssii, string $wmcaeewaokocymiy = "\12") : string { if ("\x64\151\163\x63\141\162\144" === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, "\x69\x74\x65\155\x5f\x73\x70\x61\x63\151\156\x67")) { $kgkcwaioaqiyaoeg = ''; } else { $kgkcwaioaqiyaoeg = $wmcaeewaokocymiy; } return $kgkcwaioaqiyaoeg; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if ($kkisyguyosoyymqs) { $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\x63\154\x61\x73\x73\x65\163", "\150\x61\x73\x2d\x63\150\151\x6c\144\x72\145\156"); } return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\163\165\x62\155\145\156\x75\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
