<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8503a050             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Metadata; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Data\Metadata as Data; use WP_Taxonomy; class Metadata extends Common { const uceokykiyceaouke = "\x73\164\x75\x64\171\x5f\x74\151\x6d\x65"; public function mameiwsayuyquoeq() { Stat::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::oswseauqqwwuiwcg . "\x72\x65\x6e\x64\145\162", [$this, "\x72\145\156\x64\x65\x72"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\x67\145\164\x5f\151\164\145\155\163", [$this, "\x77\x61\x73\147\167\x73\157\147\155\165\x71\165\161\145\x61\141"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\x67\145\164\137\151\164\x65\x6d\x73\137\x63\157\x75\x6e\x74", [$this, "\x79\147\155\x63\163\x6d\x65\147\143\171\x73\x79\x65\157\x73\163"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\x67\x65\164\x5f\x61\154\x6c\x5f\151\164\145\155\163", [$this, "\163\x6b\x73\x79\x6b\x71\141\163\x67\171\x79\171\161\153\151\x65"], 10, 2); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ackcaikowcokggsc => [], Constants::uwceyikaaaqgkkee => Constants::qwumqqyuasyskkkc]); if (isset($ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc])) { goto casgoamcqkekgeeo; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); casgoamcqkekgeeo: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[Constants::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [Constants::UPDATE => __("\125\x70\x64\x61\x74\145\x64\40\x41\164", PR__CMN__COVER), Constants::iwascisiiokuackw => __("\x41\x75\x74\x68\157\162", PR__CMN__COVER), Constants::wmmucsiyiyusmssm => __("\103\x72\145\141\x74\145\144\x20\x41\x74", PR__CMN__COVER), Constants::goumieeyyqigueiw => __("\x43\157\x6d\155\145\156\164\x73", PR__CMN__COVER), self::uceokykiyceaouke => __("\x53\164\165\x64\x79\40\x74\151\x6d\x65", PR__CMN__COVER)]; $oammesyieqmwuwyi = (array) $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\141\x6c\x6c\x5f\x69\x74\x65\x6d\x73", $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto sooecucuakgkuyis; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; sooecucuakgkuyis: qcgyggiaowuqswuw: } yseyyukqaowwouua: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mswoacegomcucaik => '', Constants::cgiswgcumueqgcmw => 0, Constants::yqemseykugmsyeqa => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::ackcaikowcokggsc => []]); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $post = $seumokooiykcomco->get($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik)); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto ywqakqkmmcoceqka; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); ywqakqkmmcoceqka: $saqmwwmqiwmkiwaa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yqemseykugmsyeqa); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto kgysyqkoqgwmoscq; } $wsqgggkqsaokoegu = $seumokooiykcomco->squyiyimquqicqke($saqmwwmqiwmkiwaa, $post); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); $sqeakiwgmmaicmqq = $seumokooiykcomco->squyiyimquqicqke("\x59\55\155\55\144", $post, false); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy($gkyciwoiiisgywcs->get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case Constants::UPDATE: if (!($suckquwcuiuyiogc = $seumokooiykcomco->oukqamgqowciwoum("\x59\x2d\x6d\x2d\144", $post, false))) { goto cakuguiciaiaeukg; } if ($suckquwcuiuyiogc < $sqeakiwgmmaicmqq) { goto oqwwacmigasucsoc; } $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto egkeqqgakieyimuq; oqwwacmigasucsoc: $eqgoocgaqwqcimie = $swqimwqeweekeusq->gmqyuaqwgiayskei("\x2d"); egkeqqgakieyimuq: $ugugimquukqwogge->saemoowcasogykak(IconInterface::csgwgkuuasoawegc); cakuguiciaiaeukg: goto koukiyqaccegmquc; case Constants::iwascisiiokuackw: $iakkeikwceeomgyq = $seumokooiykcomco->mguqscccckuywsya($post); $eqgoocgaqwqcimie = $seumokooiykcomco->qkweigiqsaaigqau($post); $ugugimquukqwogge->qoowicksguscqyks($seumokooiykcomco->qkweigiqsaaigqau($post))->saemoowcasogykak(IconInterface::kgqycokugcqioqya); goto koukiyqaccegmquc; case Constants::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto wswikooyuaaouqgk; } $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($wsqgggkqsaokoegu, $sqeakiwgmmaicmqq); $ugugimquukqwogge->saemoowcasogykak(IconInterface::mkqaeqmukuiacswc); wswikooyuaaouqgk: goto koukiyqaccegmquc; case Constants::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\45\163\40\143\x6f\155\x6d\145\x6e\x74\x73", PR__CMN__COVER), $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qmowyycmkagomiiy)->qoowicksguscqyks($seumokooiykcomco->ycqquoiyyuesegsy($post) . "\43\x63\157\155\155\145\156\x74\x73\x5f\143\157\x6e\x74\141\151\156\x65\x72"); goto koukiyqaccegmquc; case self::uceokykiyceaouke: $moowucgmewesiwsu = $seumokooiykcomco->cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto awwaiioyywmokwsm; } $eqgoocgaqwqcimie = sprintf(__("\x25\163\x20\x6d\x69\156\x75\164\x65\x20\162\x65\141\144\151\156\x67", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qcyaqcamyiuukygg); awwaiioyywmokwsm: goto koukiyqaccegmquc; default: if (!$this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($igqsaukqcqscimok)) { goto ookcgumoacskyymy; } $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto owisckseoogsugqq; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { goto iaomqomgiwiegoca; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto goaowamiyyamueiw; } if (1 === count($uyuaosigqymaqsaa)) { goto uaicwcqwauosmsqm; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), Constants::ogigqueukwysusii => $cekoogweeooasayu ? $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; cumeycwmuuqawwyu: } ckwmkquuyyugigom: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\164\x61\x78\157\156\157\x6d\151\x65\x73", [Constants::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto gsqcoqqsioiyoykq; uaicwcqwauosmsqm: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); gsqcoqqsioiyoykq: goaowamiyyamueiw: goto ysweqawmawicakeo; iaomqomgiwiegoca: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); ysweqawmawicakeo: owisckseoogsugqq: $ugugimquukqwogge->saemoowcasogykak(IconInterface::uaimoioocayauuca); ookcgumoacskyymy: goto koukiyqaccegmquc; } ekakkiuuquqkccse: koukiyqaccegmquc: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x75\160\x64\141\164\145\137{$igqsaukqcqscimok}", $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto cuseccewekgcgkyg; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; cuseccewekgcgkyg: emauuoieewwoeyqq: } kwsqgqmwyyeykgum: kgysyqkoqgwmoscq: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($post, $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto oqwcmgwimeisusoe; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $eqgoocgaqwqcimie = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto makomwwyomweyamm; } $ugugimquukqwogge->qoowicksguscqyks($aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); makomwwyomweyamm: oqwcmgwimeisusoe: return $ugugimquukqwogge; } }
