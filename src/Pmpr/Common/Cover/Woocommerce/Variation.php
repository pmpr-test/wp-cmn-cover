<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d8eb9d924             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Variation extends Common { protected array $fields = []; protected array $options = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\x6f\x63\157\155\155\x65\162\143\x65\x5f\141\166\141\151\x6c\141\142\154\x65\x5f\x76\x61\x72\x69\141\164\151\x6f\156", [$this, "\141\163\155\157\x75\x75\x6d\141\x77\x6d\143\167\x73\x63\161\171"])->qcsmikeggeemccuu("\167\x6f\157\143\157\155\155\145\x72\143\x65\x5f\x73\141\x76\145\x5f\x70\x72\157\144\x75\x63\x74\x5f\166\x61\x72\151\141\164\151\157\156", [$this, "\163\141\x76\x65"], 10, 2)->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\x6d\145\162\x63\145\x5f\x76\141\x72\x69\141\x74\x69\x6f\156\x5f\x6f\160\x74\151\157\x6e\x73", [$this, "\151\151\165\145\x67\x6b\x73\171\x63\145\x6d\141\x79\161\x79\x6d"], 10, 3)->qcsmikeggeemccuu("\167\157\157\143\x6f\155\155\x65\162\x63\x65\137\x70\x72\x6f\x64\x75\143\164\x5f\141\x66\x74\x65\x72\x5f\x76\141\162\x69\141\142\x6c\145\x5f\x61\164\x74\162\151\142\x75\164\x65\163", [$this, "\x71\x63\x77\x6b\x79\155\155\x67\141\153\x61\145\171\161\141\x71"], 10, 3); parent::wigskegsqequoeks(); } public function asmouumawmcwscqy($isweyuoisomqyaag) { return $this->ykqmgooyokusewai($this->uyaeumskacgcyskk(), $isweyuoisomqyaag); } public function ykqmgooyokusewai($ikgwqyuyckaewsow, $isweyuoisomqyaag) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($aiowsaccomcoikus); $isweyuoisomqyaag[$aokagokqyuysuksm] = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag["\166\141\x72\x69\141\164\151\157\x6e\137\x69\x64"]); oyeygeykqwcqoeic: } meiqywmwuoogckss: return $isweyuoisomqyaag; } public function uyaeumskacgcyskk() : array { return $this->gkwkqmwweiawigae() + $this->ugmceccgwaaaigiy(); } public function save($yyoiikyymyqcwmky, $ciyackuwsqkoqese) { $oammesyieqmwuwyi = $this->uyaeumskacgcyskk(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($igqsaukqcqscimok); if (isset($_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese])) { goto quiguyyimiqeqcwa; } $seumokooiykcomco->smqukgcyacswysqa($aokagokqyuysuksm, $yyoiikyymyqcwmky); goto iicaisyekagswmey; quiguyyimiqeqcwa: $seumokooiykcomco->ksmqawcowkmegigw($aokagokqyuysuksm, $_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese], $yyoiikyymyqcwmky); iicaisyekagswmey: isaacywgkascmcsw: } eomcuogskessyicy: } public function iiuegksycemayqym($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->gkwkqmwweiawigae(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function qcwkymmgakaeyqaq($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->ugmceccgwaaaigiy(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function iuaucuookgoqiiio($ikgwqyuyckaewsow, $qgqgaykggoemycsk, $isweyuoisomqyaag) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eqgoocgaqwqcimie = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag); $eukwicwqggokmweg = "\133{$qgqgaykggoemycsk}\135"; $nsmgceoqaqogqmuw = ''; if ($aiowsaccomcoikus instanceof Field) { goto maeueeueqoywkiom; } if (!is_array($aiowsaccomcoikus)) { goto iaywwgssaoecwmeg; } $aiowsaccomcoikus[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $aiowsaccomcoikus[Constants::gouqcwikiiygyasc] .= $eukwicwqggokmweg; switch ($gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::squoamkioomemiyi)) { case Constants::semqugiuwygamias: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wikusamwomuogoau()->uwyscmkeyeuqyukk($aiowsaccomcoikus); goto eiegguecasykwmyq; } qiiqceousoicgeee: eiegguecasykwmyq: iaywwgssaoecwmeg: goto jyekikocgagcgywq; maeueeueqoywkiom: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->ggiaseqygioygumq($aiowsaccomcoikus->mwikyscisascoeea() . $eukwicwqggokmweg); $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(); jyekikocgagcgywq: echo $nsmgceoqaqogqmuw; sosqgaswegsomgkw: } ogwwasqkaageiwwi: } public function mcogocsgqayggguu($aiowsaccomcoikus) { $aokagokqyuysuksm = null; if ($aiowsaccomcoikus instanceof Field) { goto oeogyayooiwqcmia; } if (!is_array($aiowsaccomcoikus)) { goto qoiyiuoyamwimusy; } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::gouqcwikiiygyasc); qoiyiuoyamwimusy: goto uowiiyqmiaaaaoas; oeogyayooiwqcmia: $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); uowiiyqmiaaaaoas: return $aokagokqyuysuksm; } public function qeaaoyowyqkmusca($aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if ($aiowsaccomcoikus instanceof Field) { goto ooykyoowougqkaso; } if (!is_array($aiowsaccomcoikus)) { goto vokekoceocuskqsm; } $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::squoamkioomemiyi); vokekoceocuskqsm: goto sckyiekoceuisqyq; ooykyoowougqkaso: $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu(); sckyiekoceuisqyq: return $sqeykgyoooqysmca; } public function eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag) { $eqgoocgaqwqcimie = ''; if (!($eywayoukkqcgaski = $this->mcogocsgqayggguu($aiowsaccomcoikus))) { goto kusuakkwcuqkcqaw; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($eywayoukkqcgaski, $isweyuoisomqyaag, true); kusuakkwcuqkcqaw: return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae() : array { if ($this->options) { goto sikckcmeiwmyakeu; } $this->options = (array) $this->ocksiywmkyaqseou("\x77\x6f\x6f\x63\157\x6d\x6d\x65\x72\143\145\137\166\x61\x72\x69\x61\x74\151\x6f\156\x5f\x6f\160\x74\151\157\x6e\x73", []); sikckcmeiwmyakeu: return $this->options; } public function ugmceccgwaaaigiy() : array { if ($this->fields) { goto ikuwigsmisimaqoc; } $ikgwqyuyckaewsow = []; $wsaagogyucegecck = (array) $this->ocksiywmkyaqseou("\x77\x6f\157\143\x6f\x6d\155\145\162\143\145\137\166\141\x72\151\141\x74\x69\x6f\156\137\x69\156\x64\x69\143\141\x74\157\162\x5f\146\151\145\154\x64\x5f\157\160\x74\x69\157\156\163", []); if (!$wsaagogyucegecck) { goto qaycycmeqkqcumog; } $ikgwqyuyckaewsow[] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::osiiyqycakssssuc)->gswweykyogmsyawy(__("\111\156\x64\151\x63\141\x74\x6f\162", PR__CMN__COVER))->oikgogcweiiaocka()->acauweqyyugwisqc($wsaagogyucegecck); qaycycmeqkqcumog: $this->fields = (array) $this->ocksiywmkyaqseou("\167\157\x6f\143\x6f\x6d\x6d\145\x72\143\x65\137\x76\141\x72\x69\141\x74\151\x6f\x6e\137\146\151\x65\154\x64\163", $ikgwqyuyckaewsow); ikuwigsmisimaqoc: return $this->fields; } }
