<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0253760             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = 'divider'; const iiogewmmwckmegcq = 'home_url'; const yaooyaaieecskqsq = 'wrap_attrs'; const reigcooiouysaaok = 'link_attrs'; const ceeoggmayqcuoqwi = 'item_attrs'; const quewuqgwgceoamee = 'item_element'; const socgekwcqwaoyyug = 'wrap_element'; const gawcyaqskcsegwey = 'divider_attrs'; const koiywqsgmgmgscgy = 'link_container'; const qsaioamuuywiyoci = 'divider_wrapper'; const mukyymeygmeoawck = 'active_item_attrs'; const qywgicgikawmwoay = 'link_container_attrs'; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } public function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . 'before_add_item', $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . 'add_item', $igqsaukqcqscimok, $this); if ($igqsaukqcqscimok) { $this->breadcrumb[] = $igqsaukqcqscimok; } $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . 'after_add_item', $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } public function ocwyswgmkkymguyu(string $csgiecsagosuucqo, $eqgoocgaqwqcimie) : ?PageInfo { $oammesyieqmwuwyi = $this->ecwoamckysyqikqi(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok->kkcicawkgscaaayu($csgiecsagosuucqo) === $eqgoocgaqwqcimie) { return $igqsaukqcqscimok; } } return null; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, Constants::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if (!$ikwcsswcseyywgeo) { $ikwcsswcseyywgeo = 1; } $igqsaukqcqscimok = new PageInfo(); if ($cmscqcqicyqkweuc) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); } $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . 'page_info_permalink', $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [Constants::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), Constants::eoaiagsgqsmskugs => ['404' => __('Error 404', PR__CMN__COVER), 'cpage' => __('Comment Page %s', PR__CMN__COVER), Constants::kyicykyuagcqogqm => '%s', Constants::qeueagcuyogwwyky => __('Posts Tagged: %s', PR__CMN__COVER), Constants::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), Constants::imywcsggckkcywgk => __('Page %s', PR__CMN__COVER), Constants::yayciqueeakqwese => __('Search Results for: %s', PR__CMN__COVER), Constants::iwascisiiokuackw => __('Articles Posted by %s', PR__CMN__COVER), Constants::qgciomgukmcwscqw => '%s'], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy('/'), self::quewuqgwgceoamee => 'li', self::socgekwcqwaoyyug => 'ol', self::koiywqsgmgmgscgy => 'span', self::yaooyaaieecskqsq => ['class' => 'breadcrumb'], self::reigcooiouysaaok => ['class' => 'breadcrumb-link'], self::ceeoggmayqcuoqwi => ['class' => 'breadcrumb-item'], self::gawcyaqskcsegwey => ['class' => 'breadcrumb-divider'], self::qsaioamuuywiyoci => 'span', self::mukyymeygmeoawck => ['class' => 'breadcrumb-item active'], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . 'generate_args', $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function generate(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia('%2$s', '%1$s', $gqiaqmycqyywiqsw, '%3$s'); if ($ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); } $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq('i', $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); } else { if ($ksoiggocqcoyyesg = $ywmkwiwkosakssii[self::qsaioamuuywiyoci]) { $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq($ksoiggocqcoyyesg, $ywmkwiwkosakssii[self::gawcyaqskcsegwey], $ysmqgacyqwayokog); } } $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . Constants::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, 'getPriority'); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof PageInfo) { if ($igqsaukqcqscimok === end($oammesyieqmwuwyi)) { $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); } $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if ($momcykaoccoymeig !== 0) { $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; } $meqocwsecsywiiqs = $igqsaukqcqscimok->qcgakseyaikigqco(); if ($igqsaukqcqscimok->asuigsqoowmekwok() === Constants::eycwiessycciwsao) { if ($wkaqekwwgqsqwcoi = $this->weysguygiseoukqw(Setting::yekyuacgsawiwmum, false)) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . 'home_icon_attrs', [])); } } if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $meqocwsecsywiiqs, $igqsaukqcqscimok->qcgakseyaikigqco()); } else { $aqykuigiuwmmcieu .= $meqocwsecsywiiqs; } $aqykuigiuwmmcieu .= "</{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}>"; $momcykaoccoymeig++; } } return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if (!$this->ecwoamckysyqikqi()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); } else { if ($mksyucucyswaukig instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); } } if ($mumyimcwkaemyyue->takycgcamoacksqw()) { $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::wwoeeogswkgeqack), $gmigwwwmwemyaayy); } else { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); } else { if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg('cat'); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, Constants::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw)); } if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::qgciomgukmcwscqw), single_cat_title('', false))); } } else { if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if ($iwewcwusemqaiggk instanceof WP_Term) { $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), Constants::gmmygyiecgmggaam); if ($kesssewsiegssiya) { $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if ($qyiciauwscqywwgq instanceof WP_Taxonomy) { foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if ($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); break; } } } } $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), Constants::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); } if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, 'tax'), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); } } } else { if ($mumyimcwkaemyyue->gouusicsisumuiei()) { $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::yayciqueeakqwese), get_search_query(Constants::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo('s', $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::yayciqueeakqwese), $qmqecyyaiimkyaae)); } } else { if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { $this->wuqmciamumosasqa(get_the_time('Y')); } else { if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time('Y'), get_year_link(get_the_time('Y')), false)->ugaqcouwcuiaemgo('year')); $this->wuqmciamumosasqa(get_the_time('F')); } else { if ($mumyimcwkaemyyue->wqscegcksyocaias()) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time('Y'), get_year_link(get_the_time('Y')), false)->ugaqcouwcuiaemgo('year')); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time('F'), get_month_link(get_the_time('Y'), get_the_time('F')), false)->ugaqcouwcuiaemgo('month')); $this->wuqmciamumosasqa(get_the_time('d')); } else { if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (Constants::mswoacegomcucaik !== $useksmwkuswkwcqg) { if ($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg)) { if ($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($wkqsmssuaiaqmeee, Constants::NAME), $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, 'main_taxonomy'); if (!$kesssewsiegssiya) { switch ($useksmwkuswkwcqg) { case Constants::oguseymmyyoyaako: $kesssewsiegssiya = Constants::cmckeoksigiaqykc; break; } } if ($kesssewsiegssiya) { $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if ($kesssewsiegssiya instanceof WP_Taxonomy) { if (!$kesssewsiegssiya->_builtin) { $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (isset($uyuaosigqymaqsaa[0])) { $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), Constants::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); } } } } if ($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig)) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); } $this->wuqmciamumosasqa($meqocwsecsywiiqs); } } else { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (isset($awiycosuekoeeqou[0])) { $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, Constants::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); } } if ($mumyimcwkaemyyue->qaumqeeagueuqkcg('cpage')) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, 'cpage'), $mumyimcwkaemyyue->qaumqeeagueuqkcg('cpage'))); } else { $this->wuqmciamumosasqa($meqocwsecsywiiqs); } } } else { if ($cskucqcumqsyimye->migkyseymeomymmy()) { $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, Constants::NAME); if ($useksmwkuswkwcqg) { if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa($yowggsumsmeoeiqc); } } } else { if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); } $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); } else { if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . 'page_item', ['has_page_name' => true], $mksyucucyswaukig); if ($oammesyieqmwuwyi && isset($oammesyieqmwuwyi['has_page_name']) && $oammesyieqmwuwyi['has_page_name']) { $this->wuqmciamumosasqa($meqocwsecsywiiqs); } } else { if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)); } $this->wuqmciamumosasqa($meqocwsecsywiiqs); } else { if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { if ($qawuqcsueakkgiio) { $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg('tag_id'); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::qeueagcuyogwwyky), single_tag_title('', false))); } } else { if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); } } else { if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, '404')); } else { if (has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc()) { $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); } } } } } } } } } } } } } } } } } $this->ewcsyqaaigkicgse(self::iukiayaokaiiicwo . 'created', $this); } } }
