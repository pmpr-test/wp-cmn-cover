<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038b8edf05             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\147\x6c\x6f\142\x61\x6c"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\157\x63\157\155\155\x65\162\x63\x65\x5f\x61\x74\x74\x72\x69\142\x75\x74\x65\137\165\160\x64\141\x74\145\x64", [$this, "\x73\141\x76\x65"])->qcsmikeggeemccuu("\x77\157\157\143\x6f\155\x6d\x65\x72\x63\x65\137\x61\146\x74\145\162\x5f\141\x64\144\x5f\x61\164\164\x72\151\142\165\164\x65\x5f\x66\151\145\154\144\x73", [$this, "\x69\151\x73\x63\161\x63\167\141\151\143\145\157\x6b\157\x79\165"])->qcsmikeggeemccuu("\x77\x6f\157\143\157\155\x6d\x65\162\x63\x65\x5f\141\146\164\x65\x72\137\145\144\151\164\137\141\164\x74\x72\151\x62\165\164\x65\137\x66\x69\x65\x6c\144\163", [$this, "\147\x67\x63\171\147\141\x79\x63\155\143\143\x63\x65\163\167\x6f"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\x63\x6f\155\155\145\162\x63\x65\137\x61\164\164\162\x69\x62\165\x74\x65\x5f\x74\141\170\157\156\157\155\151\x65\x73", [$this, "\x67\163\143\x6b\x71\171\163\x6f\153\x75\155\x6b\x77\161\x73\161"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\x77\157\x6f\x63\x6f\155\x6d\x65\x72\143\145\137\x61\164\164\162\151\x62\165\164\145\x5f\x74\x61\x78\157\156\x6f\155\151\145\163\x5f\x76\x61\x6c\x75\145\137\164\x79\160\145\163", [Constants::kumuoysauoagaiiy => __("\x44\x61\164\145", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\116\x75\x6d\142\x65\x72", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\126\x61\x6c\165\x65\x20\x74\171\x70\x65", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\x63\157\x6e", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (is_array($oammesyieqmwuwyi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\164\x74\162\x69\142\x75\164\145\x5f\151\x64"); if ($mqeiemgcoiugcyuc) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } } return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea())) { if ($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '')) { $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } } } } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); } } public function ggcygaycmccceswo() { if ($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq)) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); } } } } }
