<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4ad59a55             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Customizer\Segment\Panel; use Pmpr\Common\Cover\Customizer\Segment\Section; use Pmpr\Common\Cover\Customizer\Segment\Segment; use Pmpr\Common\Cover\Customizer\Setting\Setting; use Pmpr\Common\Cover\Customizer\Setting\SiteOption; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Media; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Container { use ObjectTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\164\150\x65\155\x65\137\x6d\157\x64\145"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\165\x73\164\x6f\x6d\x69\172\145\x5f\162\145\147\151\x73\x74\145\x72", [$this, "\x63\157\x6d\x73\147\155\143\x77\143\x63\x79\167\153\x69\x75\157"]); $this->waqewsckuayqguos("\x61\x64\144\137\164\167\151\x67\x5f\146\165\156\x63\x74\x69\x6f\x6e\163", [$this, "\x73\x6b\x77\165\155\x6d\147\x6f\157\x63\143\147\171\155\141\x63"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\165\x73\x74\157\155\151\172\145\x72\137\x6f\x70\164\151\157\x6e", [$this, "\147\x69\x69\165\167\163\155\x79\165\155\161\x77\167\151\x79\161"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\164\x68\x65\x6d\145\x5f\155\157\x64\x65" => Setting::class, "\163\151\164\x65\x5f\157\160\164\151\x6f\156" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if ($gcggigoeyymgeaoc instanceof WP_Customize_Manager) { $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if ($skeuoeoiuwwyqwou instanceof Panel) { $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if ($mgiqqesweuqmsymo) { $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if ($myusoqwwewieagou) { $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); } } } } $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); } } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (is_array($mgiqqesweuqmsymo)) { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if ($awcmekyiwwkeyisq instanceof Section) { $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if ($kqcoqkucyacciaoe) { $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); } } } } } } } } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if ($oceoauekaygmuoko && $gcggigoeyymgeaoc) { $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); } } return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if ($gcggigoeyymgeaoc) { $ywmkwiwkosakssii = ["\x6c\141\142\x65\154" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\163\145\143\164\x69\157\156" => $awcmekyiwwkeyisq, "\x73\x65\x74\164\x69\x6e\x67\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x70\x72\151\x6f\162\x69\164\x79" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\145\x73\x63\x72\x69\x70\164\x69\157\156" => $aiowsaccomcoikus->meqceykmywmqgoym()]; $sqeykgyoooqysmca = Control::class; if ($aiowsaccomcoikus instanceof Media) { $sqeykgyoooqysmca = WP_Customize_Image_Control::class; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if ($ymaucmwyqwuuqyqe instanceof Control) { $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); } } return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if ($gcggigoeyymgeaoc) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { $sqeykgyoooqysmca = Setting::class; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); } return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\137{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\x74\x68\x65\155\x65\x5f\155\x6f\144\145": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); break; case "\163\151\164\145\x5f\x6f\160\164\151\157\x6e": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); break; case "\x75\163\x65\162\137\x6d\x65\164\141": $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($ymqmyyeuycgmigyo); break; } $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
