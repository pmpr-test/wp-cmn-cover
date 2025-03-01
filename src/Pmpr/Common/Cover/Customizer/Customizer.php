<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c31f14d8a80             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Customizer\Segment\Panel; use Pmpr\Common\Cover\Customizer\Segment\Section; use Pmpr\Common\Cover\Customizer\Segment\Segment; use Pmpr\Common\Cover\Customizer\Setting\Setting; use Pmpr\Common\Cover\Customizer\Setting\SiteOption; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Media; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Container { use ObjectTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = 'theme_mode'; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('customize_register', [$this, 'comsgmcwccywkiuo']); $this->waqewsckuayqguos('add_twig_functions', [$this, 'skwummgooccgymac']); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme('customizer_option', [$this, 'giiuwsmyumqwwiyq']); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ['theme_mode' => Setting::class, 'site_option' => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if ($gcggigoeyymgeaoc instanceof WP_Customize_Manager) { $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if ($skeuoeoiuwwyqwou instanceof Panel) { $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if ($mgiqqesweuqmsymo) { $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if ($myusoqwwewieagou) { $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); } } } } $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); } } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (is_array($mgiqqesweuqmsymo)) { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if ($awcmekyiwwkeyisq instanceof Section) { $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if ($kqcoqkucyacciaoe) { $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); } } } } } } } } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if ($oceoauekaygmuoko && $gcggigoeyymgeaoc) { $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); } } return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if ($gcggigoeyymgeaoc) { $ywmkwiwkosakssii = ['label' => $aiowsaccomcoikus->aakmagwggmkoiiyu(), 'section' => $awcmekyiwwkeyisq, 'settings' => $aiowsaccomcoikus->mwikyscisascoeea(), 'priority' => $aiowsaccomcoikus->yywskysiycwkwsgw(), 'description' => $aiowsaccomcoikus->meqceykmywmqgoym()]; $sqeykgyoooqysmca = Control::class; if ($aiowsaccomcoikus instanceof Media) { $sqeykgyoooqysmca = WP_Customize_Image_Control::class; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if ($ymaucmwyqwuuqyqe instanceof Control) { $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); } } return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if ($gcggigoeyymgeaoc) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { $sqeykgyoooqysmca = Setting::class; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); } return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "_{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case 'theme_mode': $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); break; case 'site_option': $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); break; case 'user_meta': $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($ymqmyyeuycgmigyo); break; } $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
