<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0253760             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Variation extends Container { protected array $fields = []; protected array $options = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_available_variation', [$this, 'asmouumawmcwscqy'])->qcsmikeggeemccuu('woocommerce_save_product_variation', [$this, 'save'], 10, 2)->qcsmikeggeemccuu('woocommerce_variation_options', [$this, 'iiuegksycemayqym'], 10, 3)->qcsmikeggeemccuu('woocommerce_product_after_variable_attributes', [$this, 'qcwkymmgakaeyqaq'], 10, 3); parent::wigskegsqequoeks(); } public function asmouumawmcwscqy($isweyuoisomqyaag) { return $this->ykqmgooyokusewai($this->uyaeumskacgcyskk(), $isweyuoisomqyaag); } public function ykqmgooyokusewai($ikgwqyuyckaewsow, $isweyuoisomqyaag) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($aiowsaccomcoikus); $isweyuoisomqyaag[$aokagokqyuysuksm] = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag['variation_id']); } return $isweyuoisomqyaag; } public function uyaeumskacgcyskk() : array { return $this->gkwkqmwweiawigae() + $this->ugmceccgwaaaigiy(); } public function save($yyoiikyymyqcwmky, $ciyackuwsqkoqese) { $oammesyieqmwuwyi = $this->uyaeumskacgcyskk(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($igqsaukqcqscimok); if (isset($_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese])) { $seumokooiykcomco->ksmqawcowkmegigw($aokagokqyuysuksm, $_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese], $yyoiikyymyqcwmky); } else { $seumokooiykcomco->smqukgcyacswysqa($aokagokqyuysuksm, $yyoiikyymyqcwmky); } } } public function iiuegksycemayqym($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->gkwkqmwweiawigae(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function qcwkymmgakaeyqaq($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->ugmceccgwaaaigiy(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function iuaucuookgoqiiio($ikgwqyuyckaewsow, $qgqgaykggoemycsk, $isweyuoisomqyaag) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eqgoocgaqwqcimie = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag); $eukwicwqggokmweg = "[{$qgqgaykggoemycsk}]"; $nsmgceoqaqogqmuw = ''; if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->ggiaseqygioygumq($aiowsaccomcoikus->mwikyscisascoeea() . $eukwicwqggokmweg); $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(); } else { if (is_array($aiowsaccomcoikus)) { $aiowsaccomcoikus[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $aiowsaccomcoikus[Constants::gouqcwikiiygyasc] .= $eukwicwqggokmweg; switch ($gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::squoamkioomemiyi)) { case Constants::semqugiuwygamias: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wikusamwomuogoau()->uwyscmkeyeuqyukk($aiowsaccomcoikus); break; } } } echo $nsmgceoqaqogqmuw; } } public function mcogocsgqayggguu($aiowsaccomcoikus) { $aokagokqyuysuksm = null; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); } else { if (is_array($aiowsaccomcoikus)) { $aokagokqyuysuksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::gouqcwikiiygyasc); } } return $aokagokqyuysuksm; } public function qeaaoyowyqkmusca($aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if ($aiowsaccomcoikus instanceof Field) { $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu(); } else { if (is_array($aiowsaccomcoikus)) { $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::squoamkioomemiyi); } } return $sqeykgyoooqysmca; } public function eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag) { $eqgoocgaqwqcimie = ''; if ($eywayoukkqcgaski = $this->mcogocsgqayggguu($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($eywayoukkqcgaski, $isweyuoisomqyaag, true); } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae() : array { if (!$this->options) { $this->options = (array) $this->ocksiywmkyaqseou('woocommerce_variation_options', []); } return $this->options; } public function ugmceccgwaaaigiy() : array { if (!$this->fields) { $ikgwqyuyckaewsow = []; $wsaagogyucegecck = (array) $this->ocksiywmkyaqseou('woocommerce_variation_indicator_field_options', []); if ($wsaagogyucegecck) { $ikgwqyuyckaewsow[] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::osiiyqycakssssuc)->gswweykyogmsyawy(__('Indicator', PR__CMN__COVER))->oikgogcweiiaocka()->acauweqyyugwisqc($wsaagogyucegecck); } $this->fields = (array) $this->ocksiywmkyaqseou('woocommerce_variation_fields', $ikgwqyuyckaewsow); } return $this->fields; } }
