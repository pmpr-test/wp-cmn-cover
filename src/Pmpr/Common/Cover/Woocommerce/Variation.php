<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebd411ad3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Variation extends Common { protected array $fields = []; protected array $options = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\157\x63\x6f\x6d\x6d\x65\162\143\x65\137\x61\x76\141\x69\x6c\141\142\154\x65\x5f\x76\x61\x72\x69\141\164\151\x6f\156", [$this, "\x61\x73\x6d\x6f\x75\165\155\x61\167\x6d\x63\167\x73\143\x71\171"])->qcsmikeggeemccuu("\x77\157\x6f\x63\x6f\155\155\145\x72\x63\145\x5f\x73\x61\166\145\137\160\x72\x6f\144\165\143\x74\x5f\166\x61\x72\151\x61\x74\x69\157\x6e", [$this, "\x73\141\166\145"], 10, 2)->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\x6d\x6d\145\162\x63\x65\x5f\166\x61\x72\151\141\x74\x69\157\156\x5f\x6f\160\x74\151\x6f\x6e\163", [$this, "\151\151\x75\x65\x67\x6b\x73\x79\143\x65\155\x61\x79\161\x79\155"], 10, 3)->qcsmikeggeemccuu("\x77\157\x6f\143\x6f\x6d\155\x65\x72\x63\145\137\x70\162\157\144\x75\143\x74\x5f\x61\146\x74\145\162\137\x76\141\162\151\141\x62\x6c\x65\137\141\x74\x74\x72\151\x62\x75\x74\x65\x73", [$this, "\x71\143\167\x6b\171\155\x6d\x67\141\x6b\x61\145\171\161\x61\x71"], 10, 3); parent::wigskegsqequoeks(); } public function asmouumawmcwscqy($isweyuoisomqyaag) { return $this->ykqmgooyokusewai($this->uyaeumskacgcyskk(), $isweyuoisomqyaag); } public function ykqmgooyokusewai($ikgwqyuyckaewsow, $isweyuoisomqyaag) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($aiowsaccomcoikus); $isweyuoisomqyaag[$aokagokqyuysuksm] = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag["\x76\x61\162\x69\141\164\151\157\156\x5f\151\x64"]); kceeuicccqscwgsu: } sgiuwkisugmewmcs: return $isweyuoisomqyaag; } public function uyaeumskacgcyskk() : array { return $this->gkwkqmwweiawigae() + $this->ugmceccgwaaaigiy(); } public function save($yyoiikyymyqcwmky, $ciyackuwsqkoqese) { $oammesyieqmwuwyi = $this->uyaeumskacgcyskk(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($igqsaukqcqscimok); if (isset($_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese])) { goto yimeskeioamqmuwg; } $seumokooiykcomco->smqukgcyacswysqa($aokagokqyuysuksm, $yyoiikyymyqcwmky); goto yeemsgmumygmumqw; yimeskeioamqmuwg: $seumokooiykcomco->ksmqawcowkmegigw($aokagokqyuysuksm, $_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese], $yyoiikyymyqcwmky); yeemsgmumygmumqw: eacysqsegwcqawsa: } iquecygaakmiomeg: } public function iiuegksycemayqym($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->gkwkqmwweiawigae(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function qcwkymmgakaeyqaq($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->ugmceccgwaaaigiy(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function iuaucuookgoqiiio($ikgwqyuyckaewsow, $qgqgaykggoemycsk, $isweyuoisomqyaag) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eqgoocgaqwqcimie = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag); $eukwicwqggokmweg = "\x5b{$qgqgaykggoemycsk}\x5d"; $nsmgceoqaqogqmuw = ''; if ($aiowsaccomcoikus instanceof Field) { goto akeoaicoieaiekcw; } if (!is_array($aiowsaccomcoikus)) { goto yksamaucqkqsawkk; } $aiowsaccomcoikus[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $aiowsaccomcoikus[Constants::gouqcwikiiygyasc] .= $eukwicwqggokmweg; switch ($gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::squoamkioomemiyi)) { case Constants::semqugiuwygamias: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wikusamwomuogoau()->uwyscmkeyeuqyukk($aiowsaccomcoikus); goto uuuceqkseqkqawko; } ekoegocuqoycoeyq: uuuceqkseqkqawko: yksamaucqkqsawkk: goto kskqquqsegiiogek; akeoaicoieaiekcw: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->ggiaseqygioygumq($aiowsaccomcoikus->mwikyscisascoeea() . $eukwicwqggokmweg); $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(); kskqquqsegiiogek: echo $nsmgceoqaqogqmuw; cwugokqsmiomgmqg: } wkaoyycsoeoyqcae: } public function mcogocsgqayggguu($aiowsaccomcoikus) { $aokagokqyuysuksm = null; if ($aiowsaccomcoikus instanceof Field) { goto ygskksomysgaokek; } if (!is_array($aiowsaccomcoikus)) { goto mocaoayiouggauiy; } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::gouqcwikiiygyasc); mocaoayiouggauiy: goto wwcwmkowgooocaem; ygskksomysgaokek: $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); wwcwmkowgooocaem: return $aokagokqyuysuksm; } public function qeaaoyowyqkmusca($aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if ($aiowsaccomcoikus instanceof Field) { goto becceuuwokgoaewy; } if (!is_array($aiowsaccomcoikus)) { goto qgkiguggkyiycwow; } $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::squoamkioomemiyi); qgkiguggkyiycwow: goto wyugqoowakyicyic; becceuuwokgoaewy: $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu(); wyugqoowakyicyic: return $sqeykgyoooqysmca; } public function eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag) { $eqgoocgaqwqcimie = ''; if (!($eywayoukkqcgaski = $this->mcogocsgqayggguu($aiowsaccomcoikus))) { goto aeaciamekuqyieys; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($eywayoukkqcgaski, $isweyuoisomqyaag, true); aeaciamekuqyieys: return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae() : array { if ($this->options) { goto ugiqiewymimqecsu; } $this->options = (array) $this->ocksiywmkyaqseou("\x77\157\x6f\143\157\x6d\x6d\145\162\x63\x65\x5f\x76\141\x72\x69\141\x74\x69\x6f\x6e\137\157\x70\164\x69\x6f\x6e\x73", []); ugiqiewymimqecsu: return $this->options; } public function ugmceccgwaaaigiy() : array { if ($this->fields) { goto weouocwmwicayyiy; } $ikgwqyuyckaewsow = []; $wsaagogyucegecck = (array) $this->ocksiywmkyaqseou("\167\x6f\x6f\x63\x6f\x6d\x6d\x65\162\143\x65\137\166\x61\x72\151\141\164\x69\x6f\x6e\x5f\x69\156\x64\x69\x63\141\164\157\x72\x5f\x66\151\145\x6c\x64\137\x6f\x70\164\151\157\x6e\163", []); if (!$wsaagogyucegecck) { goto iuysqgmmgqiywssm; } $ikgwqyuyckaewsow[] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::osiiyqycakssssuc)->gswweykyogmsyawy(__("\111\156\x64\x69\x63\141\164\x6f\162", PR__CMN__COVER))->oikgogcweiiaocka()->acauweqyyugwisqc($wsaagogyucegecck); iuysqgmmgqiywssm: $this->fields = (array) $this->ocksiywmkyaqseou("\x77\157\x6f\143\157\x6d\x6d\x65\162\143\x65\x5f\166\141\162\x69\x61\x74\151\157\x6e\137\146\x69\x65\x6c\x64\x73", $ikgwqyuyckaewsow); weouocwmwicayyiy: return $this->fields; } }
