<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0253760             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Term extends Container { const wkyuuowiqugsecag = 'show-on-list'; protected array $fields = []; protected $taxonomy = null; public function ugmceccgwaaaigiy() : array { return $this->fields; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function yyoeeseewqmmyaee() { return $this->taxonomy; } public function __construct($kesssewsiegssiya) { $this->taxonomy = $kesssewsiegssiya; $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($kesssewsiegssiya, Constants::kmywkmmykgoyyyoy) === Constants::kumuoysauoagaiiy) { $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec('date_type')->qigsyyqgewgskemg(Term::wkyuuowiqugsecag)->gswweykyogmsyawy(__('Date Type', PR__CMN__COVER))->acauweqyyugwisqc([Constants::iwsuymskgeygiqyw => __('Seconds', PR__CMN__COVER), Constants::askyqwomciwggekw => __('Minutes', PR__CMN__COVER), Constants::wsgueemccsugoays => __('Minutes', PR__CMN__COVER), Constants::eggusgsscecmiiee => __('Days', PR__CMN__COVER), Constants::mqayweomwsokkqsu => __('Weeks', PR__CMN__COVER), Constants::qummiiakyucoycws => __('Months', PR__CMN__COVER), Constants::caaieqwcccuueamg => __('Years', PR__CMN__COVER)])); } $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->gswweykyogmsyawy(__('Value', PR__CMN__COVER))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::wkyuuowiqugsecag)->gucwmccyimoagwcm(__('If attribute is a number field, fill this field too.', PR__CMN__COVER))); $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou('woocommerce_product_taxonomy_custom_fields', $this->ugmceccgwaaaigiy()); $this->fields = (array) $this->ocksiywmkyaqseou("woocommerce_product_taxonomy_{$this->kuaoscooeuayycye()}_custom_fields", $ikgwqyuyckaewsow); parent::__construct(); } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye(); $this->qcsmikeggeemccuu('edit_term', [$this, 'oewywamoqeiigags'], 10, 3)->qcsmikeggeemccuu('created_term', [$this, 'oewywamoqeiigags'], 10, 3)->qcsmikeggeemccuu('delete_term', [$this, 'smgycasaqmgcaekq'], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}_add_form_fields", [$this, 'add'])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}_edit_form_fields", [$this, 'wwgeaeqgacgwooqi'])->qcsmikeggeemccuu("manage_{$ymqmyyeuycgmigyo}_custom_column", [$this, 'uoaoueswwwmiwwqs'], 10, 3); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("manage_edit-{$this->kuaoscooeuayycye()}_columns", [$this, 'eggecuuwykaawoqw']); parent::kgquecmsgcouyaya(); } public function add() { $this->iuaucuookgoqiiio(); } public function wwgeaeqgacgwooqi($iwewcwusemqaiggk) { $this->iuaucuookgoqiiio($iwewcwusemqaiggk); } public function kuaoscooeuayycye() : string { $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->yyoeeseewqmmyaee(), 'attribute_name'); return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymqmyyeuycgmigyo); } public function eggecuuwykaawoqw($wkkweuacukumqmya) { foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if ($aiowsaccomcoikus->aeiayqcuemyeackg(self::wkyuuowiqugsecag)) { $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu(); } } return $wkkweuacukumqmya; } public function iuaucuookgoqiiio($iwewcwusemqaiggk = false) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { if ($iwewcwusemqaiggk) { $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea())); } echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); } } } public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc) { return $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true); } public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya) { if ($kesssewsiegssiya === $this->kuaoscooeuayycye()) { $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (isset($_POST[$aokagokqyuysuksm])) { $awewoweukmqomqmi->ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]); } } } } } public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya) { if ($kesssewsiegssiya === $this->kuaoscooeuayycye()) { global $wpdb; if ($mceokigoiqekskwe) { $this->caokeucsksukesyo()->skckwsgymkimyuwo()->delete($wpdb->termmeta, [Constants::ooqggksagkoaeeke => $mceokigoiqekskwe], ['%d']); } } } public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true); } }
