<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169333f8db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Navigation extends Container { use ObjectTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_update_nav_menu_item', [$this, 'uqyiuisycoyummsm'], 10, 2)->qcsmikeggeemccuu('wp_nav_menu_item_custom_fields', [$this, 'qcwkymmgakaeyqaq'], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_setup_nav_menu_item', [$this, 'cgeqciaqmyoiaqao'])->cecaguuoecmccuse('nav_menu_css_class', [$this, 'oukmqumiwiswcyww'], 1, 2); } public function qcwkymmgakaeyqaq($qkasemkceamoceiy, $igqsaukqcqscimok) { if ($ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { $aiowsaccomcoikus->iygyugseyaqwywyg($seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $seumokooiykcomco->iooowgsqoyqseyuu($qkasemkceamoceiy))); } $aiowsaccomcoikus->qcgocuceocquqcuw(Constants::NAME, $aiowsaccomcoikus->aakmagwggmkoiiyu() . "[{$qkasemkceamoceiy}]"); $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => true]); } } } } public function cgeqciaqmyoiaqao($mwwsoasauceiwsmk) { if ($mwwsoasauceiwsmk) { $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if ($ikgwqyuyckaewsow = $gosmywauqawmcyga->yemoaoaqkmkigwis($this->ugmceccgwaaaigiy())[0]) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $mwwsoasauceiwsmk->{$aokagokqyuysuksm} = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $seumokooiykcomco->iooowgsqoyqseyuu($mwwsoasauceiwsmk)); } } } } return $mwwsoasauceiwsmk; } public function uqyiuisycoyummsm($eqeiawcegusmmwuc, $kwmmyegqgoeykiui) { $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if ($ikgwqyuyckaewsow = $gosmywauqawmcyga->yemoaoaqkmkigwis($this->ugmceccgwaaaigiy())[0]) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $qqswgiawgeaeoecu = $eiicaiwgqkgsekce->yyqgamuwwakgciey($aokagokqyuysuksm); if (is_array($qqswgiawgeaeoecu)) { $eqgoocgaqwqcimie = $qqswgiawgeaeoecu[$kwmmyegqgoeykiui] ?? ''; if ($eqgoocgaqwqcimie) { $seumokooiykcomco->ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $kwmmyegqgoeykiui); } else { $seumokooiykcomco->smqukgcyacswysqa($aokagokqyuysuksm, $kwmmyegqgoeykiui); } } } } } } public function ugmceccgwaaaigiy() : array { $ikgwqyuyckaewsow = [$this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__('Icon', PR__CMN__COVER))]; return (array) $this->ocksiywmkyaqseou('nav_menu_custom_fields', $ikgwqyuyckaewsow); } public function oukmqumiwiswcyww($cmkqisoeyioisqaw, $igqsaukqcqscimok) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post = $seumokooiykcomco->get()) { $mioqymmgaycckays = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ckkgiiuoguqggymc(); $eomymqcmcwieomke = strtolower(trim($igqsaukqcqscimok->url)); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (empty($eomymqcmcwieomke) && $igqsaukqcqscimok->object === $useksmwkuswkwcqg || $useksmwkuswkwcqg === Constants::mswoacegomcucaik && $igqsaukqcqscimok->object_id === $mioqymmgaycckays) { $cmkqisoeyioisqaw[] = $this->ocksiywmkyaqseou('menu_active_class', 'active'); } } return $cmkqisoeyioisqaw; } }
