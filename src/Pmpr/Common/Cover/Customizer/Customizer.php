<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d88946bbc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Customizer\Segment\Panel; use Pmpr\Common\Cover\Customizer\Segment\Section; use Pmpr\Common\Cover\Customizer\Segment\Segment; use Pmpr\Common\Cover\Customizer\Setting\Setting; use Pmpr\Common\Cover\Customizer\Setting\SiteOption; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Media; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Container { use ObjectTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\x74\150\145\x6d\145\x5f\x6d\157\x64\x65"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x75\x73\164\157\155\151\172\145\137\162\145\147\x69\163\x74\x65\x72", [$this, "\143\x6f\x6d\x73\147\x6d\x63\167\143\143\x79\x77\x6b\x69\165\x6f"]); $this->waqewsckuayqguos("\141\x64\144\137\x74\167\x69\147\137\146\165\x6e\x63\x74\x69\x6f\x6e\x73", [$this, "\163\153\167\165\155\x6d\x67\x6f\157\143\143\x67\x79\155\141\x63"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\x75\163\x74\x6f\x6d\x69\172\x65\x72\x5f\157\160\164\151\157\x6e", [$this, "\147\151\x69\165\167\163\x6d\171\x75\x6d\x71\167\x77\x69\x79\x71"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\164\150\x65\155\145\x5f\155\x6f\144\x65" => Setting::class, "\163\151\x74\145\137\157\160\x74\151\157\x6e" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if ($gcggigoeyymgeaoc instanceof WP_Customize_Manager) { $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if ($skeuoeoiuwwyqwou instanceof Panel) { $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if ($mgiqqesweuqmsymo) { $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if ($myusoqwwewieagou) { $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); } } } } $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); } } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (is_array($mgiqqesweuqmsymo)) { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if ($awcmekyiwwkeyisq instanceof Section) { $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if ($kqcoqkucyacciaoe) { $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); } } } } } } } } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if ($oceoauekaygmuoko && $gcggigoeyymgeaoc) { $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); } } return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if ($gcggigoeyymgeaoc) { $ywmkwiwkosakssii = ["\154\x61\x62\x65\154" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\x73\145\143\164\x69\157\156" => $awcmekyiwwkeyisq, "\x73\145\x74\x74\151\156\147\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\160\162\151\x6f\162\x69\x74\171" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\145\x73\143\x72\151\x70\x74\x69\x6f\156" => $aiowsaccomcoikus->meqceykmywmqgoym()]; $sqeykgyoooqysmca = Control::class; if ($aiowsaccomcoikus instanceof Media) { $sqeykgyoooqysmca = WP_Customize_Image_Control::class; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if ($ymaucmwyqwuuqyqe instanceof Control) { $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); } } return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if ($gcggigoeyymgeaoc) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { $sqeykgyoooqysmca = Setting::class; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); } return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\137{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\x74\x68\x65\155\x65\x5f\x6d\157\x64\145": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); break; case "\163\151\164\145\137\157\x70\164\151\x6f\x6e": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); break; case "\165\163\x65\x72\137\155\145\x74\141": $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($ymqmyyeuycgmigyo); break; } $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
