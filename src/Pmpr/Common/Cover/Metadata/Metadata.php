<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7677fb1d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Metadata; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Data\Metadata as Data; use WP_Taxonomy; class Metadata extends Common { const uceokykiyceaouke = "\x73\x74\165\144\171\x5f\164\151\x6d\x65"; public function mameiwsayuyquoeq() { Stat::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::oswseauqqwwuiwcg . "\162\x65\x6e\144\x65\x72", [$this, "\x72\145\x6e\144\x65\x72"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\147\145\164\x5f\x69\164\145\155\x73", [$this, "\167\141\163\147\x77\x73\x6f\147\x6d\165\161\165\x71\145\x61\141"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\147\145\164\x5f\151\x74\145\x6d\163\x5f\x63\x6f\165\x6e\x74", [$this, "\171\147\155\x63\163\155\145\147\143\x79\163\171\x65\x6f\x73\163"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\147\145\x74\137\x61\x6c\x6c\x5f\x69\x74\x65\155\163", [$this, "\163\153\x73\171\x6b\161\141\163\x67\171\x79\x79\x71\153\151\x65"], 10, 2); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ackcaikowcokggsc => [], Constants::uwceyikaaaqgkkee => Constants::qwumqqyuasyskkkc]); if (isset($ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc])) { goto iwsmmkqaoksmocok; } $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); iwsmmkqaoksmocok: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[Constants::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [Constants::UPDATE => __("\125\x70\144\141\x74\145\144\40\x41\164", PR__CMN__COVER), Constants::iwascisiiokuackw => __("\101\x75\164\150\x6f\162", PR__CMN__COVER), Constants::wmmucsiyiyusmssm => __("\103\162\x65\x61\x74\145\x64\x20\x41\x74", PR__CMN__COVER), Constants::goumieeyyqigueiw => __("\103\157\x6d\155\145\x6e\x74\163", PR__CMN__COVER), self::uceokykiyceaouke => __("\x53\x74\165\x64\x79\x20\164\151\155\x65", PR__CMN__COVER)]; $oammesyieqmwuwyi = (array) $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x61\x6c\x6c\x5f\151\x74\x65\155\x73", $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto qiiigwkqeoewsuwm; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; qiiigwkqeoewsuwm: okkmcocqokkskasy: } esikeyqyuikmaiek: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mswoacegomcucaik => '', Constants::cgiswgcumueqgcmw => 0, Constants::yqemseykugmsyeqa => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::ackcaikowcokggsc => []]); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $post = $seumokooiykcomco->get($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik)); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto esaqcqqwuussiiwo; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); esaqcqqwuussiiwo: $saqmwwmqiwmkiwaa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yqemseykugmsyeqa); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto sguskaeaaqcagqgc; } $wsqgggkqsaokoegu = $seumokooiykcomco->squyiyimquqicqke($saqmwwmqiwmkiwaa, $post); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); $sqeakiwgmmaicmqq = $seumokooiykcomco->squyiyimquqicqke("\x59\55\155\55\x64", $post, false); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy($gkyciwoiiisgywcs->get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case Constants::UPDATE: if (!($suckquwcuiuyiogc = $seumokooiykcomco->oukqamgqowciwoum("\131\x2d\155\55\x64", $post, false))) { goto yqagomygmeoecwey; } if ($suckquwcuiuyiogc < $sqeakiwgmmaicmqq) { goto gsygwgsiawgmqiyi; } $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto qsgqwyqaqiowkmco; gsygwgsiawgmqiyi: $eqgoocgaqwqcimie = $swqimwqeweekeusq->gmqyuaqwgiayskei("\x2d"); qsgqwyqaqiowkmco: $ugugimquukqwogge->saemoowcasogykak(IconInterface::csgwgkuuasoawegc); yqagomygmeoecwey: goto suqcsgaosywaauuu; case Constants::iwascisiiokuackw: $iakkeikwceeomgyq = $seumokooiykcomco->mguqscccckuywsya($post); $eqgoocgaqwqcimie = $seumokooiykcomco->qkweigiqsaaigqau($post); $ugugimquukqwogge->qoowicksguscqyks($seumokooiykcomco->qkweigiqsaaigqau($post))->saemoowcasogykak(IconInterface::kgqycokugcqioqya); goto suqcsgaosywaauuu; case Constants::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto qikaewekoecykeou; } $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($wsqgggkqsaokoegu, $sqeakiwgmmaicmqq); $ugugimquukqwogge->saemoowcasogykak(IconInterface::mkqaeqmukuiacswc); qikaewekoecykeou: goto suqcsgaosywaauuu; case Constants::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\x25\x73\x20\x63\157\155\x6d\145\x6e\164\163", PR__CMN__COVER), $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qmowyycmkagomiiy)->qoowicksguscqyks($seumokooiykcomco->ycqquoiyyuesegsy($post) . "\43\143\157\x6d\x6d\x65\x6e\164\x73\x5f\x63\157\x6e\164\x61\x69\x6e\x65\x72"); goto suqcsgaosywaauuu; case self::uceokykiyceaouke: $moowucgmewesiwsu = $seumokooiykcomco->cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto eucqomyqykgoiuge; } $eqgoocgaqwqcimie = sprintf(__("\45\x73\40\155\x69\x6e\165\x74\145\x20\162\x65\141\x64\151\x6e\x67", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qcyaqcamyiuukygg); eucqomyqykgoiuge: goto suqcsgaosywaauuu; default: if (!$this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($igqsaukqcqscimok)) { goto ucuoeymyqeokgsya; } $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto egmayaiikwsskgmy; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { goto aueaceeyommgkicu; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto zayqqeqgcwkekwws; } if (1 === count($uyuaosigqymaqsaa)) { goto sqyokemumceysegy; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), Constants::ogigqueukwysusii => $cekoogweeooasayu ? $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; aiccyaswigkaycqk: } usymasgsyqgsuocg: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\164\x61\170\157\x6e\157\155\x69\145\x73", [Constants::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto oqousikwiiqagoyw; sqyokemumceysegy: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); oqousikwiiqagoyw: zayqqeqgcwkekwws: goto mysueeoswqgccmui; aueaceeyommgkicu: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); mysueeoswqgccmui: egmayaiikwsskgmy: $ugugimquukqwogge->saemoowcasogykak(IconInterface::uaimoioocayauuca); ucuoeymyqeokgsya: goto suqcsgaosywaauuu; } wwukgaquuyoissgy: suqcsgaosywaauuu: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x75\160\144\141\x74\145\x5f{$igqsaukqcqscimok}", $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto yuuyikiacmmueosu; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; yuuyikiacmmueosu: mscgewkcqcoowweg: } ikqeeaysmqgcgawq: sguskaeaaqcagqgc: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($post, $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto syuaummumssgwwee; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $eqgoocgaqwqcimie = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto agkmiayuawacakau; } $ugugimquukqwogge->qoowicksguscqyks($aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); agkmiayuawacakau: syuaummumssgwwee: return $ugugimquukqwogge; } }
