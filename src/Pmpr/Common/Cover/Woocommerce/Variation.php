<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677bbeb0f13ce             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Variation extends Container { protected array $fields = []; protected array $options = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x6f\x6f\143\157\x6d\x6d\x65\x72\143\145\137\141\166\x61\151\154\x61\142\154\x65\x5f\x76\141\162\151\141\x74\151\x6f\x6e", [$this, "\141\x73\x6d\x6f\165\165\x6d\x61\x77\155\143\167\163\143\161\x79"])->qcsmikeggeemccuu("\x77\157\x6f\x63\x6f\x6d\x6d\x65\162\x63\x65\137\163\141\x76\x65\x5f\x70\162\157\144\165\x63\164\137\x76\x61\162\151\141\x74\x69\157\156", [$this, "\x73\x61\166\145"], 10, 2)->qcsmikeggeemccuu("\x77\157\157\143\x6f\155\x6d\145\x72\x63\x65\137\166\x61\x72\x69\141\164\x69\157\156\137\x6f\160\x74\x69\157\x6e\x73", [$this, "\151\x69\x75\x65\147\x6b\163\x79\143\x65\155\141\x79\x71\x79\x6d"], 10, 3)->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\x6d\145\162\x63\145\x5f\160\x72\157\144\x75\143\164\x5f\141\x66\164\145\x72\x5f\x76\x61\x72\151\x61\x62\x6c\145\x5f\x61\164\x74\162\x69\142\x75\164\145\163", [$this, "\161\x63\x77\x6b\x79\x6d\155\x67\x61\153\141\x65\x79\161\x61\161"], 10, 3); parent::wigskegsqequoeks(); } public function asmouumawmcwscqy($isweyuoisomqyaag) { return $this->ykqmgooyokusewai($this->uyaeumskacgcyskk(), $isweyuoisomqyaag); } public function ykqmgooyokusewai($ikgwqyuyckaewsow, $isweyuoisomqyaag) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($aiowsaccomcoikus); $isweyuoisomqyaag[$aokagokqyuysuksm] = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag["\x76\x61\x72\151\141\x74\151\x6f\156\x5f\151\144"]); } return $isweyuoisomqyaag; } public function uyaeumskacgcyskk() : array { return $this->gkwkqmwweiawigae() + $this->ugmceccgwaaaigiy(); } public function save($yyoiikyymyqcwmky, $ciyackuwsqkoqese) { $oammesyieqmwuwyi = $this->uyaeumskacgcyskk(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($igqsaukqcqscimok); if (isset($_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese])) { $seumokooiykcomco->ksmqawcowkmegigw($aokagokqyuysuksm, $_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese], $yyoiikyymyqcwmky); } else { $seumokooiykcomco->smqukgcyacswysqa($aokagokqyuysuksm, $yyoiikyymyqcwmky); } } } public function iiuegksycemayqym($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->gkwkqmwweiawigae(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function qcwkymmgakaeyqaq($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->ugmceccgwaaaigiy(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function iuaucuookgoqiiio($ikgwqyuyckaewsow, $qgqgaykggoemycsk, $isweyuoisomqyaag) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eqgoocgaqwqcimie = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag); $eukwicwqggokmweg = "\x5b{$qgqgaykggoemycsk}\x5d"; $nsmgceoqaqogqmuw = ''; if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->ggiaseqygioygumq($aiowsaccomcoikus->mwikyscisascoeea() . $eukwicwqggokmweg); $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(); } else { if (is_array($aiowsaccomcoikus)) { $aiowsaccomcoikus[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $aiowsaccomcoikus[Constants::gouqcwikiiygyasc] .= $eukwicwqggokmweg; switch ($gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::squoamkioomemiyi)) { case Constants::semqugiuwygamias: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wikusamwomuogoau()->uwyscmkeyeuqyukk($aiowsaccomcoikus); break; } } } echo $nsmgceoqaqogqmuw; } } public function mcogocsgqayggguu($aiowsaccomcoikus) { $aokagokqyuysuksm = null; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); } else { if (is_array($aiowsaccomcoikus)) { $aokagokqyuysuksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::gouqcwikiiygyasc); } } return $aokagokqyuysuksm; } public function qeaaoyowyqkmusca($aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if ($aiowsaccomcoikus instanceof Field) { $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu(); } else { if (is_array($aiowsaccomcoikus)) { $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::squoamkioomemiyi); } } return $sqeykgyoooqysmca; } public function eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag) { $eqgoocgaqwqcimie = ''; if ($eywayoukkqcgaski = $this->mcogocsgqayggguu($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($eywayoukkqcgaski, $isweyuoisomqyaag, true); } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae() : array { if (!$this->options) { $this->options = (array) $this->ocksiywmkyaqseou("\x77\157\157\x63\x6f\x6d\x6d\x65\162\x63\x65\x5f\x76\x61\162\x69\x61\x74\151\157\x6e\x5f\x6f\160\x74\151\157\x6e\x73", []); } return $this->options; } public function ugmceccgwaaaigiy() : array { if (!$this->fields) { $ikgwqyuyckaewsow = []; $wsaagogyucegecck = (array) $this->ocksiywmkyaqseou("\x77\x6f\x6f\x63\x6f\155\155\145\x72\143\145\x5f\166\141\162\151\141\x74\x69\157\156\x5f\151\x6e\144\x69\x63\141\164\157\162\137\x66\151\145\154\x64\137\157\x70\164\x69\x6f\156\x73", []); if ($wsaagogyucegecck) { $ikgwqyuyckaewsow[] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::osiiyqycakssssuc)->gswweykyogmsyawy(__("\x49\x6e\144\151\143\141\164\157\162", PR__CMN__COVER))->oikgogcweiiaocka()->acauweqyyugwisqc($wsaagogyucegecck); } $this->fields = (array) $this->ocksiywmkyaqseou("\167\157\x6f\x63\x6f\155\x6d\145\162\x63\x65\137\x76\x61\x72\151\x61\164\x69\x6f\x6e\137\x66\x69\145\x6c\144\x73", $ikgwqyuyckaewsow); } return $this->fields; } }
