<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4443ec418             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\144\151\166\151\x64\x65\x72"; const iiogewmmwckmegcq = "\150\157\x6d\145\x5f\x75\162\154"; const yaooyaaieecskqsq = "\167\162\x61\x70\137\x61\x74\x74\162\163"; const reigcooiouysaaok = "\154\151\x6e\153\137\x61\x74\164\162\163"; const ceeoggmayqcuoqwi = "\151\x74\x65\x6d\137\x61\x74\164\x72\163"; const quewuqgwgceoamee = "\151\164\145\155\x5f\145\154\x65\155\x65\x6e\x74"; const socgekwcqwaoyyug = "\167\x72\141\160\x5f\145\x6c\x65\x6d\x65\x6e\x74"; const gawcyaqskcsegwey = "\x64\x69\x76\x69\144\145\x72\137\x61\x74\164\x72\163"; const koiywqsgmgmgscgy = "\154\x69\156\x6b\x5f\143\157\156\164\x61\x69\156\x65\162"; const mukyymeygmeoawck = "\x61\x63\164\151\x76\145\137\151\x74\x65\155\137\x61\x74\x74\162\163"; const qywgicgikawmwoay = "\154\x69\156\x6b\137\143\x6f\156\x74\141\x69\x6e\145\x72\x5f\x61\164\x74\162\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x62\145\x66\157\162\x65\x5f\141\x64\144\137\x69\x74\145\155", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\144\x64\x5f\x69\x74\x65\x6d", $igqsaukqcqscimok, $this); if ($igqsaukqcqscimok) { $this->breadcrumb[] = $igqsaukqcqscimok; } $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\146\164\x65\x72\137\141\x64\x64\137\x69\164\x65\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, Constants::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if (!$ikwcsswcseyywgeo) { $ikwcsswcseyywgeo = 1; } $igqsaukqcqscimok = new PageInfo(); if ($cmscqcqicyqkweuc) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); } $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\x61\147\145\x5f\x69\156\146\157\x5f\160\x65\162\155\141\154\151\156\x6b", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [Constants::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), Constants::eoaiagsgqsmskugs => ["\x74\141\x67" => __("\x50\157\163\164\x73\x20\124\x61\147\147\x65\144\x3a\x20\x25\163", PR__CMN__COVER), "\x34\60\x34" => __("\105\162\162\x6f\x72\40\64\x30\x34", PR__CMN__COVER), "\164\x61\x78" => "\x25\163", "\x63\160\141\x67\145" => __("\103\157\155\x6d\x65\x6e\x74\x20\x50\x61\x67\145\x20\45\x73", PR__CMN__COVER), Constants::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), Constants::imywcsggckkcywgk => __("\x50\x61\147\145\x20\x25\163", PR__CMN__COVER), Constants::yayciqueeakqwese => __("\123\145\x61\x72\x63\x68\x20\122\x65\x73\x75\154\164\163\x20\146\157\x72\72\x20\x25\163", PR__CMN__COVER), Constants::iwascisiiokuackw => __("\101\x72\x74\x69\143\x6c\145\x73\x20\x50\x6f\x73\x74\x65\144\40\x62\x79\40\45\163", PR__CMN__COVER), Constants::qgciomgukmcwscqw => "\45\x73"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\57"), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\x6f\154", self::koiywqsgmgmgscgy => "\163\160\141\156", self::yaooyaaieecskqsq => ["\x63\154\x61\163\163" => "\142\x72\x65\141\x64\x63\x72\x75\155\x62"], self::reigcooiouysaaok => ["\x63\154\x61\163\163" => "\x62\162\x65\141\144\143\162\165\x6d\x62\55\x6c\x69\x6e\x6b"], self::ceeoggmayqcuoqwi => ["\143\154\141\163\x73" => "\x62\x72\145\141\x64\x63\x72\x75\155\x62\x2d\151\164\145\x6d"], self::gawcyaqskcsegwey => ["\x63\x6c\x61\163\163" => "\x62\162\145\x61\x64\143\x72\x75\155\142\55\x64\x69\x76\x69\x64\145\x72"], self::mukyymeygmeoawck => ["\143\x6c\x61\x73\x73" => "\142\162\145\x61\x64\143\162\165\155\142\55\x69\x74\x65\155\40\141\x63\x74\151\166\145"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\x65\156\145\x72\x61\x74\145\137\x61\162\147\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function generate(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\45\x32\x24\x73", "\x25\x31\44\163", $gqiaqmycqyywiqsw); if ($ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); } $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); } else { $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); } $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . Constants::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\145\x74\120\x72\x69\x6f\x72\151\x74\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof PageInfo) { if ($igqsaukqcqscimok === end($oammesyieqmwuwyi)) { $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); } $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if ($momcykaoccoymeig !== 0) { $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; } if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); } else { $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); } $aqykuigiuwmmcieu .= "\74\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\x3e"; $momcykaoccoymeig++; } } return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if (!$this->ecwoamckysyqikqi()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); } else { if ($mksyucucyswaukig instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); } } if ($mumyimcwkaemyyue->takycgcamoacksqw()) { $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::wwoeeogswkgeqack), $gmigwwwmwemyaayy); } else { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); } else { if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x61\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, Constants::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw)); } if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::qgciomgukmcwscqw), single_cat_title('', false))); } } else { if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if ($iwewcwusemqaiggk instanceof WP_Term) { $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), Constants::gmmygyiecgmggaam); if ($kesssewsiegssiya) { $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if ($qyiciauwscqywwgq instanceof WP_Taxonomy) { foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if ($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); break; } } } } $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), Constants::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); } if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\141\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); } } } else { if ($mumyimcwkaemyyue->gouusicsisumuiei()) { $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::yayciqueeakqwese), get_search_query(Constants::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::yayciqueeakqwese), $qmqecyyaiimkyaae)); } } else { if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { $this->wuqmciamumosasqa(get_the_time("\131")); } else { if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\x65\141\x72")); $this->wuqmciamumosasqa(get_the_time("\x46")); } else { if ($mumyimcwkaemyyue->wqscegcksyocaias()) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\x79\145\141\162")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\131"), get_the_time("\x46")), false)->ugaqcouwcuiaemgo("\x6d\x6f\x6e\x74\150")); $this->wuqmciamumosasqa(get_the_time("\144")); } else { if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (Constants::mswoacegomcucaik !== $useksmwkuswkwcqg) { if ($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg)) { if ($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($wkqsmssuaiaqmeee, Constants::NAME), $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\155\x61\151\156\x5f\x74\141\170\x6f\x6e\157\155\171"); if (!$kesssewsiegssiya) { switch ($useksmwkuswkwcqg) { case Constants::oguseymmyyoyaako: $kesssewsiegssiya = Constants::cmckeoksigiaqykc; break; } } if ($kesssewsiegssiya) { $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if ($kesssewsiegssiya instanceof WP_Taxonomy) { if (!$kesssewsiegssiya->_builtin) { $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (isset($uyuaosigqymaqsaa[0])) { $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), Constants::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); } } } } if ($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig)) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); } $this->wuqmciamumosasqa($meqocwsecsywiiqs); } } else { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (isset($awiycosuekoeeqou[0])) { $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, Constants::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); } } if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x70\x61\x67\x65")) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x63\x70\x61\147\x65"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\160\x61\x67\x65"))); } else { $this->wuqmciamumosasqa($meqocwsecsywiiqs); } } } else { if ($cskucqcumqsyimye->migkyseymeomymmy()) { $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, Constants::NAME); if ($useksmwkuswkwcqg) { if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa($yowggsumsmeoeiqc); } } } else { if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); } $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); } else { if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\141\x67\145\x5f\151\164\x65\155", ["\x68\x61\x73\137\x70\141\147\x65\x5f\156\x61\x6d\145" => true], $mksyucucyswaukig); if ($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\x73\137\x70\x61\x67\x65\137\x6e\141\x6d\145"]) && $oammesyieqmwuwyi["\150\141\163\137\160\x61\147\x65\x5f\x6e\141\x6d\x65"]) { $this->wuqmciamumosasqa($meqocwsecsywiiqs); } } else { if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)); } $this->wuqmciamumosasqa($meqocwsecsywiiqs); } else { if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { if ($qawuqcsueakkgiio) { $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x74\x61\x67\137\x69\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::qeueagcuyogwwyky), single_tag_title('', false))); } } else { if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); } else { $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); } } else { if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\64\60\x34")); } else { if (has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc()) { $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); } } } } } } } } } } } } } } } } } } } }
