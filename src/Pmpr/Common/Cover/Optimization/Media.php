<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169333f8db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Common { const iicseioyioeemwyk = 'data-src'; const awsweskcucgsgcqi = 'img|iframe'; const wggsuokocwismcyg = 'img'; const wkaoeygkcgcsuyiu = 'native-lazy-load-js-fallback'; const ciikuiqgsmeeowko = 'skip-lazy'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_head', [$this, 'ukkouseeugmgyuyq'], PHP_INT_MAX)->qcsmikeggeemccuu('admin_bar_menu', [$this, 'oiaieqywkmkyisim'], 0); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_kses_allowed_html', [$this, 'gwoyycwcogikcigy']); parent::kgquecmsgcouyaya(); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'theme-lazyload')->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'lazyload.js'))->qcgcugswouueymok()); } public function ukkouseeugmgyuyq() { $this->cecaguuoecmccuse('get_avatar', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->cecaguuoecmccuse('the_content', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->cecaguuoecmccuse('widget_text', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->cecaguuoecmccuse('get_image_tag', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->cecaguuoecmccuse('post_thumbnail_html', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->cecaguuoecmccuse('wp_get_attachment_image_attributes', [$this, 'wismuyuiiuaucmmq'], PHP_INT_MAX); } public function oiaieqywkmkyisim() { $this->ggmgmqswqkgecosg('get_avatar', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->ggmgmqswqkgecosg('the_content', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->ggmgmqswqkgecosg('widget_text', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->ggmgmqswqkgecosg('get_image_tag', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->ggmgmqswqkgecosg('post_thumbnail_html', [$this, 'mwiycsgsygkmgcwc'], PHP_INT_MAX)->ggmgmqswqkgecosg('wp_get_attachment_image_attributes', [$this, 'wismuyuiiuaucmmq'], PHP_INT_MAX); } public function aqgugcgmsyciswgs($moooemyaqewumiay) { $moooemyaqewumiay = $this->acykmgseswesgoci($moooemyaqewumiay); return $this->ueoeciskyayyiska($moooemyaqewumiay); } public function acykmgseswesgoci($nsmgceoqaqogqmuw) { $mqogqgswmasasmik = ':not(.' . self::wkaoeygkcgcsuyiu . ')'; $kmmywmgcgwceeqii = explode('|', self::awsweskcucgsgcqi); $yuumukkaswwoywya = ''; $kmmywmgcgwceeqii[] = 'video'; $kmmywmgcgwceeqii[] = 'source'; foreach ($kmmywmgcgwceeqii as $scwiymciagumsuiw) { $yuumukkaswwoywya .= "{$scwiymciagumsuiw}{$mqogqgswmasasmik},"; } $yuumukkaswwoywya = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc(',', '', $yuumukkaswwoywya); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($smuykqsageuocuos->has($nsmgceoqaqogqmuw, $yuumukkaswwoywya)) { $nsmgceoqaqogqmuw = $smuykqsageuocuos->qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { $wkgkmowokewiiaoo = strtolower($ymyisaeksssueeik->tagName); if ($wkgkmowokewiiaoo === 'video') { $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); } else { $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, 'src'); if ($ogomymegcoacqisg) { $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, 'src', $this->sqquuscwqowicoqm()); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::iicseioyioeemwyk, $ogomymegcoacqisg); if ($wkgkmowokewiiaoo !== 'source') { $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); } } } return $ymyisaeksssueeik; }); } return $nsmgceoqaqogqmuw; } public function ueoeciskyayyiska($nsmgceoqaqogqmuw) { $yuumukkaswwoywya = '[style]'; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($smuykqsageuocuos->has($nsmgceoqaqogqmuw, $yuumukkaswwoywya)) { $nsmgceoqaqogqmuw = $smuykqsageuocuos->qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, 'style'); preg_match('#background(-image)?\\s*:\\s*(\\s*url\\s*\\((?<url>[^)]+)\\))\\s*;?#is', $kswaimykcacqyaay, $meyiiwcswqmuggyg); $eeamcawaiqocomwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, Constants::auqoykcmsiauccao); if ($eeamcawaiqocomwy) { $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, 'data-bg', $eeamcawaiqocomwy); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, 'style', str_replace($meyiiwcswqmuggyg[0], '', $kswaimykcacqyaay)); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); } return $ymyisaeksssueeik; }); } return $nsmgceoqaqogqmuw; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $cmkqisoeyioisqaw = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, 'class'); if (!$this->xaqaeskiqkuccaci($cmkqisoeyioisqaw)) { if ($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw .= ' '; } $cmkqisoeyioisqaw .= self::wkaoeygkcgcsuyiu; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, 'class', trim($cmkqisoeyioisqaw)); } return $ymyisaeksssueeik; } public function gwoyycwcogikcigy($wgyayceacmwomqkg) { $gayyaeowikymyyeo = explode('|', static::awsweskcucgsgcqi); $gayyaeowikymyyeo[] = 'source'; foreach ($gayyaeowikymyyeo as $scwiymciagumsuiw) { if (!isset($wgyayceacmwomqkg[$scwiymciagumsuiw])) { continue; } $wgyayceacmwomqkg[$scwiymciagumsuiw] = array_merge($wgyayceacmwomqkg[$scwiymciagumsuiw], ['class' => [], 'loading' => [], 'data-src' => [], 'data-lazy' => [], 'data-sizes' => [], 'data-srcset' => []]); } return $wgyayceacmwomqkg; } protected function iikokgakmoskkoai(string $sociqikgoyemqaac) : array { return array_map(function (array $ymkomoccmymcoiea) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ymkomoccmymcoiea, Constants::ciyoccqkiamemcmm); }, wp_kses_hair($sociqikgoyemqaac, array_merge(wp_allowed_protocols(), [Constants::uiwqcumqkgikqyue]))); } public function mwiycsgsygkmgcwc($ewgwqamkygiqaawc) { if (is_string($ewgwqamkygiqaawc) && $this->macyowwkykkuosce() && str_contains($ewgwqamkygiqaawc, self::iicseioyioeemwyk)) { $ewgwqamkygiqaawc = preg_replace_callback('#<(' . static::awsweskcucgsgcqi . ')([^>]+?)(>(.*?)</\\1>|[\\/]?>)#si', function (array $meyiiwcswqmuggyg) { if (!isset($meyiiwcswqmuggyg[2]) || !$meyiiwcswqmuggyg[2]) { return $meyiiwcswqmuggyg[0]; } $ccywgsweewkeocws = $this->iikokgakmoskkoai($meyiiwcswqmuggyg[2]); $aoioeimwoykmiyqi = $this->wismuyuiiuaucmmq($ccywgsweewkeocws, strtolower($meyiiwcswqmuggyg[1])); if (!isset($aoioeimwoykmiyqi['loading'])) { return $meyiiwcswqmuggyg[0]; } $gcyeyiuomioimsgc = $this->uckukmgcqkokmaym($aoioeimwoykmiyqi); $aqykuigiuwmmcieu = sprintf('<%1$s %2$s%3$s', $meyiiwcswqmuggyg[1], $gcyeyiuomioimsgc, $meyiiwcswqmuggyg[3]); if (isset($aoioeimwoykmiyqi[self::iicseioyioeemwyk])) { $wysumowgiyaegemq = str_replace('<' . $meyiiwcswqmuggyg[1] . ' ', '<' . $meyiiwcswqmuggyg[1] . ' loading="lazy" ', $meyiiwcswqmuggyg[0]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq('noscript', [], $wysumowgiyaegemq); } return $aqykuigiuwmmcieu; }, $ewgwqamkygiqaawc); } return $ewgwqamkygiqaawc; } public function wismuyuiiuaucmmq(array $siquossayskcwkea, string $scwiymciagumsuiw = 'img') : array { if (!isset($siquossayskcwkea['src']) || !$siquossayskcwkea['src']) { return $siquossayskcwkea; } if (!empty($siquossayskcwkea['class']) && $this->xaqaeskiqkuccaci($siquossayskcwkea['class'])) { return $siquossayskcwkea; } $siquossayskcwkea['loading'] = 'lazy'; if ($this->sgycwgawukuuioys() && false !== strpos(static::wggsuokocwismcyg, $scwiymciagumsuiw)) { $siquossayskcwkea = $this->iiuyqmwegmeqewee($siquossayskcwkea, $scwiymciagumsuiw); } return $siquossayskcwkea; } protected function iiuyqmwegmeqewee(array $siquossayskcwkea, string $scwiymciagumsuiw = 'img') : array { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($siquossayskcwkea, 'class', self::wkaoeygkcgcsuyiu); $siquossayskcwkea['data-lazy'] = $siquossayskcwkea[self::iicseioyioeemwyk] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, 'src'); if (isset($siquossayskcwkea['srcset']) && !$siquossayskcwkea['srcset']) { $siquossayskcwkea['data-srcset'] = $siquossayskcwkea['srcset']; unset($siquossayskcwkea['srcset']); } if (isset($siquossayskcwkea['sizes']) && !$siquossayskcwkea['sizes']) { $siquossayskcwkea['data-sizes'] = $siquossayskcwkea['sizes']; unset($siquossayskcwkea['sizes']); } return $siquossayskcwkea; } public function sqquuscwqowicoqm() : ?string { return $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, 'img/placeholder.svg'); } protected function uckukmgcqkokmaym(array $siquossayskcwkea) : string { return implode(' ', array_map(function ($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if ('' === $eqgoocgaqwqcimie) { return $ymqmyyeuycgmigyo; } return sprintf('%s="%s"', $ymqmyyeuycgmigyo, esc_attr($eqgoocgaqwqcimie)); }, array_keys($siquossayskcwkea), $siquossayskcwkea)); } protected function xaqaeskiqkuccaci(string $cmkqisoeyioisqaw) : bool { if (false !== strpos($cmkqisoeyioisqaw, static::ciikuiqgsmeeowko)) { return true; } if (false !== strpos($cmkqisoeyioisqaw, 'custom-logo')) { return true; } return false; } protected function sgycwgawukuuioys() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('fallback_script_enabled'), true); } }
