<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716c1864a4de             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; class LocalAttribute extends BaseAttribute { public function __construct() { $this->name = "\154\x6f\143\141\x6c"; parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\167\x6f\x6f\x63\157\155\x6d\x65\162\143\145\x5f\x73\141\166\x65\x5f\141\x74\164\x72\x69\x62\x75\164\x65\x73", [$this, "\x73\141\166\145"], 5)->qcsmikeggeemccuu("\x77\157\157\x63\x6f\x6d\155\x65\162\143\145\x5f\141\x66\164\145\162\137\x70\162\x6f\144\x75\x63\164\x5f\x61\164\x74\162\151\142\x75\x74\x65\137\163\145\x74\164\151\156\147\x73", [$this, "\x69\165\x61\x75\143\x75\157\x6f\x6b\x67\x6f\161\x69\151\x69\157"], 10, 2); parent::wigskegsqequoeks(); } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymkomoccmymcoiea->get_name()); } public function save() { if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk("\x73\x61\166\145\55\141\x74\x74\x72\151\x62\x75\x74\x65\163", "\163\145\x63\165\162\151\x74\x79")) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $aiwgcyaewwagisoo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, "\141\164\x74\162\x69\x62\x75\x74\145\x5f\156\x61\x6d\145\163"); if ($icwicymcioeyeyek && $aiwgcyaewwagisoo) { $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ikgwqyuyckaewsow, $icwicymcioeyeyek); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $qqswgiawgeaeoecu = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, []); if (is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu) { foreach ($aiwgcyaewwagisoo as $momcykaoccoymeig => $ymqmyyeuycgmigyo) { $uusmaiomayssaecw = $aokagokqyuysuksm . $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqswgiawgeaeoecu, $momcykaoccoymeig); if ($eqgoocgaqwqcimie) { $seumokooiykcomco->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $product); } else { $seumokooiykcomco->smqukgcyacswysqa($uusmaiomayssaecw, $product); } } } } } } } } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true); } public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig) { if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); if (!$ymkomoccmymcoiea->is_taxonomy()) { $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); } if ($ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig)) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow); $nsmgceoqaqogqmuw = ''; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\x5b{$momcykaoccoymeig}\x5d"); $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render(); } } echo $this->iuygowkemiiwqmiw("\x66\157\x72\x6d", [Constants::gouqcwikiiygyasc => $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5), Constants::qescuiwgsyuikume => __("\x43\x75\163\x74\157\x6d\x20\x46\151\145\x6c\144\163", PR__CMN__COVER), Constants::ymckmcsiymwqucoq => $nsmgceoqaqogqmuw, "\143\141\156\x5f\141\x64\144\137\152\163" => $this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(), "\x61\x6c\145\x72\164\x5f\155\x65\x73\163\141\147\x65" => __("\103\x61\x6e\x20\x6e\157\x74\40\162\145\x6e\144\x65\162\40\146\x69\145\154\144\x73\x20\x63\157\162\162\x65\x63\164\154\x79\x2c\40\160\154\145\141\x73\x65\x20\162\145\x66\x72\145\x73\150\40\160\141\x67\x65\x20\x6d\x61\x6e\x75\141\154\154\171\56", PR__CMN__COVER), "\163\x75\x63\143\145\x73\163\x5f\x6d\x65\x73\163\x61\x67\145" => __("\x66\x69\145\x6c\144\x73\x20\154\x6f\x61\x64\145\144\40\143\157\x72\162\x65\x63\x74\x6c\171\56", PR__CMN__COVER)]); } } } public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array { if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $product = $this->aqasygcsqysmmyke(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = false; if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { if ($aiowsaccomcoikus instanceof Checkbox) { $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]); } else { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]); } } else { if ($product) { $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo); } } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } } return $ikgwqyuyckaewsow; } }
