<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6751a82c62f6b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Metadata; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Data\Metadata as Data; use WP_Taxonomy; class Metadata extends Container { const uceokykiyceaouke = "\x73\x74\165\144\x79\x5f\x74\x69\x6d\x65"; const oswseauqqwwuiwcg = "\x6d\145\164\141\144\141\164\x61\137"; public function mameiwsayuyquoeq() { Stat::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::oswseauqqwwuiwcg . "\x72\x65\x6e\144\145\162", [$this, "\162\145\156\144\x65\x72"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\147\x65\164\x5f\151\164\145\155\163", [$this, "\167\141\163\147\167\163\157\147\155\x75\161\165\161\145\141\x61"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\147\x65\x74\x5f\x69\x74\145\155\163\x5f\143\x6f\165\x6e\164", [$this, "\x79\x67\x6d\143\163\x6d\145\x67\143\171\163\x79\x65\x6f\x73\x73"], 10, 2)->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\147\x65\164\x5f\141\154\154\x5f\x69\164\x65\155\x73", [$this, "\163\153\163\x79\153\x71\x61\163\147\171\x79\171\x71\x6b\151\x65"], 10, 2); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ackcaikowcokggsc => [], Constants::uwceyikaaaqgkkee => Constants::qwumqqyuasyskkkc]); if (!isset($ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc])) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); } echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[Constants::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [Constants::UPDATE => __("\125\x70\x64\x61\x74\145\x64\x20\101\x74", PR__CMN__COVER), Constants::iwascisiiokuackw => __("\x41\165\164\150\x6f\x72", PR__CMN__COVER), Constants::wmmucsiyiyusmssm => __("\103\x72\x65\x61\x74\x65\x64\x20\x41\164", PR__CMN__COVER), Constants::goumieeyyqigueiw => __("\103\x6f\x6d\x6d\145\156\164\x73", PR__CMN__COVER), self::uceokykiyceaouke => __("\123\164\x75\144\171\x20\x74\151\155\145", PR__CMN__COVER)]; $oammesyieqmwuwyi = (array) $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x61\154\154\137\x69\x74\145\x6d\x73", $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; } } return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mswoacegomcucaik => '', Constants::cgiswgcumueqgcmw => 0, Constants::yqemseykugmsyeqa => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::ackcaikowcokggsc => []]); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $post = $seumokooiykcomco->get($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik)); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ackcaikowcokggsc, []); if ($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum)) { $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); } $saqmwwmqiwmkiwaa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yqemseykugmsyeqa); if ($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum) { $wsqgggkqsaokoegu = $seumokooiykcomco->squyiyimquqicqke($saqmwwmqiwmkiwaa, $post); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); $sqeakiwgmmaicmqq = $seumokooiykcomco->squyiyimquqicqke("\x59\x2d\x6d\x2d\144", $post, false); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy($gkyciwoiiisgywcs->get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case Constants::UPDATE: if ($suckquwcuiuyiogc = $seumokooiykcomco->oukqamgqowciwoum("\131\55\155\55\x64", $post, false)) { if ($suckquwcuiuyiogc < $sqeakiwgmmaicmqq) { $eqgoocgaqwqcimie = $swqimwqeweekeusq->gmqyuaqwgiayskei("\x2d"); } else { $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($suckquwcuiuyiogc), $suckquwcuiuyiogc); } $ugugimquukqwogge->saemoowcasogykak(IconInterface::csgwgkuuasoawegc); } break; case Constants::iwascisiiokuackw: $iakkeikwceeomgyq = $seumokooiykcomco->mguqscccckuywsya($post); $eqgoocgaqwqcimie = $seumokooiykcomco->qkweigiqsaaigqau($post); $ugugimquukqwogge->qoowicksguscqyks($seumokooiykcomco->qkweigiqsaaigqau($post))->saemoowcasogykak(IconInterface::kgqycokugcqioqya); break; case Constants::wmmucsiyiyusmssm: if ($wsqgggkqsaokoegu) { $eqgoocgaqwqcimie = $swqimwqeweekeusq->yekemqwyimcqgeuk($this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->ikuqieqosemkwuio($sqeakiwgmmaicmqq), $sqeakiwgmmaicmqq); $ugugimquukqwogge->saemoowcasogykak(IconInterface::mkqaeqmukuiacswc); } break; case Constants::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\45\x73\x20\143\157\155\x6d\x65\x6e\164\x73", PR__CMN__COVER), $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qmowyycmkagomiiy)->qoowicksguscqyks($seumokooiykcomco->ycqquoiyyuesegsy($post) . "\x23\x63\157\155\155\x65\156\x74\x73\137\143\x6f\x6e\x74\141\x69\156\145\162"); break; case self::uceokykiyceaouke: $moowucgmewesiwsu = $seumokooiykcomco->cuoieqacocyyookg($post); $eqgoocgaqwqcimie = sprintf(__("\x25\163\x20\x6d\x69\x6e\x75\164\145\x20\162\145\x61\x64\x69\x6e\x67", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qcyaqcamyiuukygg); break; default: if ($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($igqsaukqcqscimok)) { $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($igqsaukqcqscimok); if ($kesssewsiegssiya) { $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); } else { $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($post, $igqsaukqcqscimok); if ($uyuaosigqymaqsaa) { if (1 === count($uyuaosigqymaqsaa)) { $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); } else { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), Constants::ogigqueukwysusii => $cekoogweeooasayu ? $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; } $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\164\141\x78\157\x6e\x6f\x6d\151\x65\163", [Constants::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); } } } } $ugugimquukqwogge->saemoowcasogykak(IconInterface::uaimoioocayauuca); } break; } $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x75\160\144\x61\x74\145\x5f{$igqsaukqcqscimok}", $ugugimquukqwogge, $post, $igqsaukqcqscimok); if ($ugugimquukqwogge->qooeaookuemoqecm()) { $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; } } } return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($post, $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aakmagwggmkoiiyu($kesssewsiegssiya)); if ($iwewcwusemqaiggk) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $eqgoocgaqwqcimie = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); if ($cekoogweeooasayu) { $ugugimquukqwogge->qoowicksguscqyks($aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); } } return $ugugimquukqwogge; } }
