<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038189a665             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\x67\154\157\x62\141\154"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\157\x63\157\155\x6d\145\162\143\x65\x5f\x61\164\x74\162\x69\142\x75\164\145\137\x75\x70\x64\x61\164\145\x64", [$this, "\163\x61\x76\x65"])->qcsmikeggeemccuu("\167\x6f\x6f\x63\x6f\155\155\145\162\143\x65\137\x61\x66\164\x65\x72\x5f\141\x64\x64\137\141\164\164\x72\x69\x62\x75\x74\145\137\x66\151\x65\154\x64\163", [$this, "\x69\x69\x73\x63\x71\x63\167\x61\x69\x63\x65\x6f\153\x6f\x79\165"])->qcsmikeggeemccuu("\167\157\x6f\143\x6f\155\155\x65\x72\x63\145\x5f\x61\146\x74\145\x72\137\x65\x64\151\x74\x5f\141\164\x74\162\151\142\x75\164\145\x5f\146\x69\x65\x6c\x64\163", [$this, "\147\x67\x63\171\x67\x61\x79\x63\155\143\143\x63\x65\x73\x77\x6f"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\157\x63\157\155\155\x65\x72\x63\145\137\x61\164\164\162\151\x62\x75\164\x65\137\x74\x61\x78\x6f\156\x6f\155\151\145\x73", [$this, "\147\x73\x63\x6b\161\171\x73\x6f\x6b\x75\x6d\x6b\167\161\163\x71"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\167\x6f\157\143\157\155\155\145\x72\x63\x65\137\x61\x74\164\162\151\x62\165\164\145\137\164\x61\x78\x6f\x6e\157\155\x69\145\x73\x5f\x76\x61\154\165\145\x5f\164\171\x70\x65\163", [Constants::kumuoysauoagaiiy => __("\x44\x61\x74\x65", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\116\x75\155\x62\145\x72", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\x56\x61\x6c\x75\145\x20\x74\x79\x70\145", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\x63\157\156", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (is_array($oammesyieqmwuwyi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x61\164\x74\162\x69\142\x75\x74\x65\x5f\151\144"); if ($mqeiemgcoiugcyuc) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } } return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea())) { if ($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '')) { $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } } } } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); } } public function ggcygaycmccceswo() { if ($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq)) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); } } } } }
