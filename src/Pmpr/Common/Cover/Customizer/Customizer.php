<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbb3b365c59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer; use Pmpr\Common\Cover\Customizer\Segment\Panel; use Pmpr\Common\Cover\Customizer\Segment\Section; use Pmpr\Common\Cover\Customizer\Segment\Segment; use Pmpr\Common\Cover\Customizer\Setting\Setting; use Pmpr\Common\Cover\Customizer\Setting\SiteOption; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Media; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use ObjectTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\164\x68\x65\155\145\x5f\155\157\144\x65"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\165\x73\x74\x6f\x6d\x69\172\145\x5f\162\145\147\151\163\164\145\162", [$this, "\143\157\x6d\163\x67\155\143\x77\143\143\x79\167\153\x69\165\x6f"]); $this->waqewsckuayqguos("\x61\x64\x64\x5f\164\x77\x69\x67\137\x66\165\156\x63\164\151\x6f\156\x73", [$this, "\x73\x6b\167\x75\155\x6d\147\x6f\157\143\x63\x67\x79\155\141\x63"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\165\163\x74\157\155\151\172\145\x72\137\157\x70\x74\151\157\156", [$this, "\147\x69\151\165\x77\163\155\171\x75\x6d\x71\x77\167\151\171\161"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\164\x68\145\x6d\x65\137\x6d\x6f\144\x65" => Setting::class, "\x73\151\x74\145\x5f\157\x70\164\x69\157\156" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto sockeswygwcskeuq; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto uaukmuiwskcemcsw; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto ugqwuugsweqgmywk; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto gmwykkouysyaqwqm; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); gmwykkouysyaqwqm: ugqwuugsweqgmywk: uaukmuiwskcemcsw: cogywoqcqummsyus: } eekcoeikaeaaeyii: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); sockeswygwcskeuq: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto ewscugeuicukkycc; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto eeyyskqsmquyquqw; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto cgyakcqgugqgkqiw; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto uegouoiuyoqkcscg; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto mggeqkcksyaymcsa; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); mggeqkcksyaymcsa: isgwkwacoyimiauk: } cscusseysqygsoiy: uegouoiuyoqkcscg: cgyakcqgugqgkqiw: eeyyskqsmquyquqw: uaqackioaiqwcocy: } mkwkkmkgiqiamacc: ewscugeuicukkycc: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto wusciwkkckmqigms; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto kqswcsysqawkcgye; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); kqswcsysqawkcgye: wusciwkkckmqigms: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto mwysseaekcsiesmm; } $ywmkwiwkosakssii = ["\x6c\141\142\145\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\163\145\143\164\x69\157\x6e" => $awcmekyiwwkeyisq, "\163\x65\164\164\151\156\147\163" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x70\162\151\157\x72\151\164\171" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\x65\163\x63\162\x69\160\164\151\x6f\156" => $aiowsaccomcoikus->meqceykmywmqgoym()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof Media) { goto iiiccouaaqsyikae; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; iiiccouaaqsyikae: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto ukkcmocamwgiqayu; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); ukkcmocamwgiqayu: mwysseaekcsiesmm: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto gygwewcqsmwqismo; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto amgsueumgaguceaa; } $sqeykgyoooqysmca = Setting::class; amgsueumgaguceaa: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); gygwewcqsmwqismo: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\137{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { goto ukqocwewouckikso; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\164\150\x65\155\145\137\x6d\157\144\145": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto uougwgeyiokewkkm; case "\x73\x69\x74\x65\x5f\x6f\160\x74\x69\157\x6e": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto uougwgeyiokewkkm; case "\x75\x73\x65\x72\137\x6d\145\164\x61": $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($ymqmyyeuycgmigyo); goto uougwgeyiokewkkm; } gommacygsykyussk: uougwgeyiokewkkm: $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto ucqmumuygcywwqma; ukqocwewouckikso: $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; ucqmumuygcywwqma: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
