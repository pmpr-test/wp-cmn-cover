<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517377ff95             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\x67\154\157\x62\141\154"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\157\143\x6f\x6d\155\145\x72\143\145\x5f\141\x74\x74\162\151\x62\x75\x74\145\x5f\165\x70\x64\x61\164\145\x64", [$this, "\163\x61\166\145"])->qcsmikeggeemccuu("\167\157\157\x63\x6f\155\155\x65\162\x63\145\x5f\x61\146\164\145\x72\x5f\x61\x64\x64\137\x61\164\164\x72\151\142\165\164\x65\137\x66\151\145\x6c\x64\163", [$this, "\x69\151\163\x63\x71\x63\167\141\151\x63\x65\157\153\x6f\171\x75"])->qcsmikeggeemccuu("\x77\x6f\157\143\157\x6d\x6d\x65\x72\143\145\137\x61\x66\x74\145\162\x5f\145\x64\151\x74\137\141\x74\164\x72\x69\x62\x75\x74\x65\137\146\x69\x65\154\x64\x73", [$this, "\x67\x67\143\x79\x67\x61\x79\143\x6d\143\143\143\145\x73\x77\x6f"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\x63\x6f\155\155\145\x72\143\145\137\x61\x74\x74\x72\151\142\x75\164\145\137\164\x61\x78\157\x6e\x6f\x6d\151\145\163", [$this, "\147\163\143\x6b\x71\x79\163\x6f\x6b\x75\155\x6b\x77\x71\163\x71"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\167\157\157\143\157\155\155\x65\162\x63\x65\x5f\141\x74\164\162\x69\x62\165\x74\x65\137\x74\x61\x78\x6f\156\157\155\x69\145\x73\x5f\x76\x61\x6c\x75\x65\x5f\x74\171\x70\x65\x73", [Constants::kumuoysauoagaiiy => __("\104\x61\x74\145", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\116\x75\x6d\142\145\162", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\126\x61\x6c\x75\145\40\x74\x79\x70\145", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\143\x6f\x6e", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!is_array($oammesyieqmwuwyi)) { goto ioiwoukauoeamuca; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\164\164\x72\151\142\165\x74\145\137\x69\144"); if (!$mqeiemgcoiugcyuc) { goto cceggewquoaemcwq; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); iuwccksomkkouogy: } mesesokuoomcioom: cceggewquoaemcwq: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; aqwoykqaquewcaki: } omyquyiguuaociwq: ioiwoukauoeamuca: return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea()))) { goto equwcsciiggsuiam; } if (!($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, ''))) { goto oiywguooqeasueqq; } $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); oiywguooqeasueqq: equwcsciiggsuiam: owismwmeqcmukagu: } oqckuigyqswmqcqg: } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); myooisakyuggoggc: } qsaoyggkqwcgskwk: } public function ggcygaycmccceswo() { if (!($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq))) { goto ykogqmmywykgouqy; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kqwyogqqwumumiwg; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); kqwyogqqwumumiwg: yugmwomumkosucsc: } awkqcyusycccekwq: ykogqmmywykgouqy: } }
