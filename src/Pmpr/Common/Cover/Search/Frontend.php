<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a3643eff             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Foundation\Interfaces\Constants; class Frontend extends Common { public function wigskegsqequoeks() { } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('get_search_form', [$this, 'qcsiecyigewsqais'], 10, 2); } public function qcsiecyigewsqais($eaoumsseceiowgsk, array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if ($nsmgceoqaqogqmuw) { $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; } return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::uissasisiuymwsmu); $iwiewowoqmoekyqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::moacsmsigegyweoc, $this->weysguygiseoukqw(Setting::qkaywmguiemumumq, '')); $ukwokcuqauuosmoo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eqkeooqcsscoggia, $this->weysguygiseoukqw(Setting::qwsqmycugoykssgu, '')); $ikgwqyuyckaewsow[Constants::yayciqueeakqwese] = $gusoaiguqeaommcc->ymuegqgyuagyucws('search_input')->jyumyyugiwwiqomk(10)->macygmcekgqwmcwk()->usuqmwksoeaayaig('s')->esakmaucmeoucami()->gswweykyogmsyawy($meqocwsecsywiiqs)->iygyugseyaqwywyg($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya())->gucwmccyimoagwcm($ukwokcuqauuosmoo)->kyiucygqsgequoys($iwiewowoqmoekyqi)->igmaewykumgwoaoy('aria-describedby', 'search_submit'); if ($this->iemckwasmaugwcwi()) { $qiouiwasaauyaaue = []; switch ($this->sesseaeskwkeucks()) { case Constants::qgmuskygocwmouos: switch ($this->weysguygiseoukqw(Setting::eemagqigggqocyac, Constants::yyoaeaaaquyigiim)) { case Constants::yyoaeaaaquyigiim: $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::isksgwqqcmwaccaq, []); if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::mokucseeaqkgkuqy, []); } if ($sciomagaqmgggsiu) { $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $qiouiwasaauyaaue[$useksmwkuswkwcqg] = $cskucqcumqsyimye->uikgwcuascgeissw($useksmwkuswkwcqg, Constants::NAME); } } break; case Constants::emcyuiagkcgsckma: $uyuaosigqymaqsaa = $this->weysguygiseoukqw(Setting::mwqguykeegesggge, []); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!$uyuaosigqymaqsaa) { $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::ammgiseaaguqygig, []); if (!$seyqqsmuaiegkeeq) { $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::ewwmksgyikwikqye, []); } $uyuaosigqymaqsaa = $aoskwucuugeuaeus->ciugwooasaqcywas($seyqqsmuaiegkeeq, [Constants::mkucwyayaakigquq => true, Constants::eymwucuaaiiciymc => 0]); } if ($uyuaosigqymaqsaa) { foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $qiouiwasaauyaaue[$aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk)] = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); } } break; } break; case Constants::ucoiewcoucauqwko: if (Constants::emcyuiagkcgsckma === $this->weysguygiseoukqw(Setting::eumoaaekgyismamo)) { if ($seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::gmskcsaawiuegywk, [])) { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $qiouiwasaauyaaue[$kesssewsiegssiya] = $mqeowykqcggsieya->uikgwcuascgeissw($kesssewsiegssiya, Constants::NAME); } } } break; case Constants::ygoseweigiigswiu: $qiouiwasaauyaaue[Constants::yyoaeaaaquyigiim] = $this->weysguygiseoukqw(Setting::mkeisaawesqyyyga, __('Posts', PR__CMN__COVER)); $qiouiwasaauyaaue[Constants::emcyuiagkcgsckma] = $this->weysguygiseoukqw(Setting::memcscgwacawwusm, __('Terms', PR__CMN__COVER)); break; } if ($qiouiwasaauyaaue) { $ikgwqyuyckaewsow[Constants::mgsccwumkcawaqcy] = $gusoaiguqeaommcc->mccagaqeagiikkec(Constants::mgsccwumkcawaqcy)->gswweykyogmsyawy(__('Target', PR__CMN__COVER))->acauweqyyugwisqc($qiouiwasaauyaaue)->eumecwmqmukqgyea()->iygyugseyaqwywyg($this->awwoqyciiocumkqq())->jyumyyugiwwiqomk(20); } } $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou('search_form_fields', $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = $gusoaiguqeaommcc->umocagoqumikakom('search_form')->ewweaossowcqywaw($ikgwqyuyckaewsow)->mkeyausowysgcisc()->esekigccyyweemmw()->cwqickkaaokiquuo($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $aeaqgysgaeowagug = $gusoaiguqeaommcc->qoeiescseggagsqs('search_submit')->gswweykyogmsyawy($iwiewowoqmoekyqi)->usuqmwksoeaayaig(''); $eaoumsseceiowgsk->wqwiougumgqousyg($aeaqgysgaeowagug); $eaoumsseceiowgsk = $this->ocksiywmkyaqseou('search_form_object', $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } }
