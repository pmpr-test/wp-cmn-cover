<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716beac1a112             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Metadata; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Data\Metadata as Data; use WP_Taxonomy; class Metadata extends Container { const uceokykiyceaouke = "\163\164\x75\144\x79\137\164\x69\155\145"; const oswseauqqwwuiwcg = "\x6d\145\164\141\144\x61\x74\141\137"; public function mameiwsayuyquoeq() { Stat::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::oswseauqqwwuiwcg . "\162\145\x6e\x64\145\x72", [$this, "\162\x65\x6e\x64\145\162"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\x67\145\x74\137\151\x74\145\155\163", [$this, "\x77\141\163\147\167\x73\x6f\147\155\x75\161\x75\161\x65\x61\x61"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\147\x65\x74\137\151\x74\145\x6d\163\x5f\x63\157\x75\x6e\x74", [$this, "\171\147\x6d\143\x73\155\x65\x67\143\171\x73\171\145\x6f\163\x73"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\x67\145\x74\x5f\x61\154\x6c\137\151\x74\x65\155\163", [$this, "\163\x6b\x73\171\x6b\161\x61\x73\x67\x79\x79\x79\x71\153\151\145"], 10, 2); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ackcaikowcokggsc => [], Constants::uwceyikaaaqgkkee => Constants::qwumqqyuasyskkkc]); if (!isset($ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc])) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); } echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[Constants::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [Constants::UPDATE => __("\x55\160\144\141\x74\x65\x64\40\x41\x74", PR__CMN__COVER), Constants::iwascisiiokuackw => __("\101\x75\x74\150\x6f\162", PR__CMN__COVER), Constants::wmmucsiyiyusmssm => __("\103\162\145\141\164\145\144\x20\x41\x74", PR__CMN__COVER), Constants::goumieeyyqigueiw => __("\x43\157\155\155\145\156\x74\163", PR__CMN__COVER), self::uceokykiyceaouke => __("\x53\164\x75\144\x79\x20\x74\151\155\x65", PR__CMN__COVER)]; $oammesyieqmwuwyi = (array) $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x61\x6c\x6c\x5f\x69\164\x65\x6d\163", $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; } } return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mswoacegomcucaik => '', Constants::cgiswgcumueqgcmw => 0, Constants::yqemseykugmsyeqa => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::ackcaikowcokggsc => []]); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $post = $seumokooiykcomco->get($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik)); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ackcaikowcokggsc, []); if ($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum)) { $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); } $saqmwwmqiwmkiwaa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yqemseykugmsyeqa); if ($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum) { $wsqgggkqsaokoegu = $seumokooiykcomco->squyiyimquqicqke($saqmwwmqiwmkiwaa, $post); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); $sqeakiwgmmaicmqq = $seumokooiykcomco->squyiyimquqicqke("\131\x2d\155\x2d\x64", $post, false); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy($gkyciwoiiisgywcs->get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case Constants::UPDATE: if ($suckquwcuiuyiogc = $seumokooiykcomco->oukqamgqowciwoum("\x59\55\x6d\55\144", $post, false)) { if ($suckquwcuiuyiogc < $sqeakiwgmmaicmqq) { $eqgoocgaqwqcimie = $swqimwqeweekeusq->gmqyuaqwgiayskei("\x2d"); } else { $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($suckquwcuiuyiogc), $suckquwcuiuyiogc); } $ugugimquukqwogge->saemoowcasogykak(IconInterface::csgwgkuuasoawegc); } break; case Constants::iwascisiiokuackw: $iakkeikwceeomgyq = $seumokooiykcomco->mguqscccckuywsya($post); $eqgoocgaqwqcimie = $seumokooiykcomco->qkweigiqsaaigqau($post); $ugugimquukqwogge->qoowicksguscqyks($seumokooiykcomco->qkweigiqsaaigqau($post))->saemoowcasogykak(IconInterface::kgqycokugcqioqya); break; case Constants::wmmucsiyiyusmssm: if ($wsqgggkqsaokoegu) { $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($wsqgggkqsaokoegu, $sqeakiwgmmaicmqq); $ugugimquukqwogge->saemoowcasogykak(IconInterface::mkqaeqmukuiacswc); } break; case Constants::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\x25\163\40\x63\x6f\155\155\145\156\x74\163", PR__CMN__COVER), $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qmowyycmkagomiiy)->qoowicksguscqyks($seumokooiykcomco->ycqquoiyyuesegsy($post) . "\43\143\x6f\x6d\x6d\145\156\164\163\x5f\143\157\x6e\x74\x61\151\x6e\x65\x72"); break; case self::uceokykiyceaouke: $moowucgmewesiwsu = $seumokooiykcomco->cuoieqacocyyookg($post); if ($moowucgmewesiwsu) { $eqgoocgaqwqcimie = sprintf(__("\45\163\x20\x6d\x69\156\x75\x74\145\x20\x72\145\141\x64\151\x6e\147", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qcyaqcamyiuukygg); } break; default: if ($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($igqsaukqcqscimok)) { $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($igqsaukqcqscimok); if ($kesssewsiegssiya) { $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); } else { $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($post, $igqsaukqcqscimok); if ($uyuaosigqymaqsaa) { if (1 === count($uyuaosigqymaqsaa)) { $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); } else { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), Constants::ogigqueukwysusii => $cekoogweeooasayu ? $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; } $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\164\141\170\x6f\x6e\x6f\x6d\151\145\x73", [Constants::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); } } } } $ugugimquukqwogge->saemoowcasogykak(IconInterface::uaimoioocayauuca); } break; } $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x75\160\144\x61\x74\x65\x5f{$igqsaukqcqscimok}", $ugugimquukqwogge, $post, $igqsaukqcqscimok); if ($ugugimquukqwogge->qooeaookuemoqecm()) { $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; } } } return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($post, $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aakmagwggmkoiiyu($kesssewsiegssiya)); if ($iwewcwusemqaiggk) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $eqgoocgaqwqcimie = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); if ($cekoogweeooasayu) { $ugugimquukqwogge->qoowicksguscqyks($aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); } } return $ugugimquukqwogge; } }
