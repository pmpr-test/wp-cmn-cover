<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbb3b365c59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use WC_Product_Attribute; class LocalAttribute extends BaseAttribute { public function __construct() { $this->name = "\154\x6f\x63\x61\x6c"; parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x77\x6f\x6f\143\157\x6d\x6d\145\x72\x63\145\x5f\x73\x61\166\145\137\141\164\164\x72\151\142\x75\x74\x65\x73", [$this, "\163\141\x76\145"], 5)->qcsmikeggeemccuu("\167\157\157\x63\x6f\155\155\145\x72\x63\x65\x5f\141\x66\x74\145\x72\137\x70\x72\x6f\x64\165\x63\164\137\x61\x74\164\162\x69\x62\165\x74\x65\x5f\163\145\164\x74\x69\x6e\147\x73", [$this, "\x69\x75\141\x75\x63\x75\157\x6f\153\x67\157\161\151\x69\x69\x6f"], 10, 2); parent::wigskegsqequoeks(); } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymkomoccmymcoiea->get_name()); } public function save() { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk("\163\141\166\145\55\141\164\164\x72\151\x62\x75\x74\145\x73", "\163\x65\143\165\x72\151\x74\171")) { goto eucakkcoiiwkwsme; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $aiwgcyaewwagisoo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, "\x61\x74\x74\x72\x69\142\x75\164\145\x5f\x6e\141\155\x65\x73"); if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) { goto mcmcocyuugueaeww; } $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ikgwqyuyckaewsow, $icwicymcioeyeyek); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto rgaagksgsewuwgmo; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $qqswgiawgeaeoecu = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, []); if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) { goto kwayumouacgkgyas; } foreach ($aiwgcyaewwagisoo as $momcykaoccoymeig => $ymqmyyeuycgmigyo) { $uusmaiomayssaecw = $aokagokqyuysuksm . $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqswgiawgeaeoecu, $momcykaoccoymeig); if ($eqgoocgaqwqcimie) { goto cwyaysecsakaqgew; } $seumokooiykcomco->smqukgcyacswysqa($uusmaiomayssaecw, $product); goto kgqgcggccmiwayua; cwyaysecsakaqgew: $seumokooiykcomco->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $product); kgqgcggccmiwayua: swesqeqmagkicuws: } wsqeiwkgoiekwasy: kwayumouacgkgyas: rgaagksgsewuwgmo: smmagoyuqoigoesc: } ayucsuwsiocgycww: mcmcocyuugueaeww: eucakkcoiiwkwsme: } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true); } public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig) { if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) { goto ooooceiweeackgie; } $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); if ($ymkomoccmymcoiea->is_taxonomy()) { goto iwsaaiggkciigsmc; } $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); iwsaaiggkciigsmc: if (!($ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig))) { goto kuaiscyqkgcouiye; } $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow); $nsmgceoqaqogqmuw = ''; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto qysmyemoucigsmua; } $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\x5b{$momcykaoccoymeig}\135"); $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render(); qysmyemoucigsmua: kygccamgawookukq: } agsuaimomgsoyiem: echo $this->iuygowkemiiwqmiw("\146\x6f\x72\155", [Constants::gouqcwikiiygyasc => $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5), Constants::qescuiwgsyuikume => __("\103\165\x73\164\x6f\x6d\x20\106\151\x65\154\x64\163", PR__CMN__COVER), Constants::ymckmcsiymwqucoq => $nsmgceoqaqogqmuw, "\x63\141\156\137\x61\144\x64\x5f\152\x73" => $this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(), "\141\154\x65\162\x74\137\x6d\145\163\163\x61\147\145" => __("\103\x61\156\x20\x6e\157\x74\x20\162\x65\x6e\x64\145\x72\40\x66\x69\145\154\144\163\x20\143\157\162\x72\145\x63\x74\154\171\x2c\x20\160\x6c\x65\x61\163\x65\40\x72\145\x66\x72\x65\x73\x68\x20\x70\141\147\145\x20\x6d\141\156\165\x61\154\x6c\171\56", PR__CMN__COVER), "\163\165\143\143\x65\163\x73\x5f\x6d\145\163\163\141\x67\145" => __("\x66\x69\145\x6c\144\x73\40\154\157\x61\x64\x65\144\40\x63\x6f\x72\x72\x65\143\x74\154\171\56", PR__CMN__COVER)]); kuaiscyqkgcouiye: ooooceiweeackgie: } public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array { if (!$ikgwqyuyckaewsow) { goto suiywiakesiegcwu; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $product = $this->aqasygcsqysmmyke(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto yccuomocgmewkeca; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = false; if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto ocwouquuwsaqakae; } if (!$product) { goto swuggqyiaiqywgge; } $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo); swuggqyiaiqywgge: goto gcaykgmmmqomsyis; ocwouquuwsaqakae: if ($aiowsaccomcoikus instanceof Checkbox) { goto tagquiiokseckkqs; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]); goto qoacckkkwsqkokye; tagquiiokseckkqs: $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]); qoacckkkwsqkokye: gcaykgmmmqomsyis: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); yccuomocgmewkeca: qwiyicoywcekgyce: } gkeymcqqsewayscs: suiywiakesiegcwu: return $ikgwqyuyckaewsow; } }
