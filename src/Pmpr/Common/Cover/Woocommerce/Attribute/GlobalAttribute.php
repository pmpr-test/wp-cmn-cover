<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7677fb1d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\147\x6c\x6f\142\x61\154"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x6f\157\143\157\x6d\155\x65\x72\143\x65\x5f\141\164\x74\x72\x69\x62\165\164\x65\x5f\165\160\144\141\x74\145\144", [$this, "\163\141\x76\145"])->qcsmikeggeemccuu("\x77\157\157\x63\x6f\x6d\x6d\145\x72\143\x65\137\141\146\164\x65\x72\137\x61\x64\144\137\141\x74\x74\162\x69\x62\x75\x74\x65\137\146\151\145\154\144\163", [$this, "\x69\151\163\143\x71\143\x77\141\x69\143\145\157\x6b\157\171\x75"])->qcsmikeggeemccuu("\x77\x6f\x6f\143\x6f\x6d\155\145\x72\143\145\x5f\x61\146\164\x65\x72\137\x65\144\151\164\x5f\x61\164\x74\x72\151\x62\x75\x74\x65\x5f\x66\x69\145\x6c\144\163", [$this, "\x67\147\x63\171\147\x61\171\x63\155\x63\x63\x63\x65\163\167\157"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\x6f\143\x6f\x6d\155\145\162\x63\x65\137\x61\x74\x74\x72\151\142\x75\x74\145\x5f\164\141\170\x6f\x6e\157\x6d\151\x65\163", [$this, "\147\163\x63\x6b\x71\171\163\x6f\x6b\x75\155\x6b\x77\161\163\161"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\167\x6f\157\x63\x6f\x6d\x6d\x65\x72\143\x65\x5f\141\x74\x74\x72\151\142\x75\x74\145\x5f\164\141\170\x6f\x6e\x6f\155\151\x65\163\137\x76\x61\154\x75\x65\137\164\x79\x70\x65\x73", [Constants::kumuoysauoagaiiy => __("\x44\x61\164\145", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\x4e\165\155\142\x65\162", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\126\141\x6c\x75\145\40\x74\x79\160\145", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\x63\157\156", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!is_array($oammesyieqmwuwyi)) { goto gwiaimosqoiquwkc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x61\x74\x74\x72\151\x62\165\x74\145\137\x69\144"); if (!$mqeiemgcoiugcyuc) { goto ugswokwmkumcmigc; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); qiaaqkymeuuueoqk: } asaowisseacciyia: ugswokwmkumcmigc: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; acesyuieuuqwgkwm: } oqwcmgwimeisusoe: gwiaimosqoiquwkc: return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea()))) { goto gcskyqewysqaceeg; } if (!($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, ''))) { goto qumkwsqqocooyuoq; } $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); qumkwsqqocooyuoq: gcskyqewysqaceeg: cigesysuauaiccms: } owgakkqgckqcegoi: } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); wwswmaewcaisauei: } kkewoqqowugagwoy: } public function ggcygaycmccceswo() { if (!($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq))) { goto ooysmgyeqoiesgqm; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wmaeicoyyciuaiuy; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); wmaeicoyyciuaiuy: ocgkwqqmgasuoies: } wsemeeocquawyauo: ooysmgyeqoiesgqm: } }
