<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d8eb9d924             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\x67\x6c\x6f\142\141\154"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\155\155\145\162\143\x65\137\x61\x74\x74\x72\x69\142\x75\x74\145\x5f\165\160\x64\141\x74\x65\x64", [$this, "\163\x61\x76\x65"])->qcsmikeggeemccuu("\167\x6f\x6f\x63\157\155\x6d\x65\162\143\145\137\141\146\164\145\x72\x5f\x61\x64\144\137\141\x74\164\x72\x69\x62\165\164\145\x5f\x66\151\145\154\x64\163", [$this, "\x69\x69\163\x63\x71\x63\x77\141\x69\x63\145\157\153\157\x79\165"])->qcsmikeggeemccuu("\167\x6f\157\143\157\x6d\155\x65\162\x63\x65\x5f\x61\146\164\x65\x72\x5f\x65\144\151\164\x5f\141\164\164\162\151\x62\165\x74\x65\x5f\x66\x69\x65\154\x64\163", [$this, "\x67\x67\143\x79\147\141\171\x63\155\143\x63\x63\x65\163\167\x6f"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\x6f\155\x6d\x65\162\143\x65\137\x61\164\164\x72\151\142\165\x74\x65\137\164\141\170\x6f\156\x6f\155\x69\x65\163", [$this, "\x67\x73\x63\x6b\161\171\163\x6f\153\x75\155\153\x77\161\163\161"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\167\x6f\x6f\x63\x6f\155\155\x65\162\x63\x65\137\x61\164\x74\162\x69\142\x75\164\145\x5f\164\x61\x78\157\156\157\155\x69\145\x73\137\166\x61\154\x75\x65\137\x74\171\x70\145\x73", [Constants::kumuoysauoagaiiy => __("\104\x61\164\145", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\x4e\x75\x6d\142\x65\x72", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\x56\141\154\x75\145\40\x74\x79\x70\x65", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\x63\157\156", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!is_array($oammesyieqmwuwyi)) { goto oqckuigyqswmqcqg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x61\164\164\162\151\x62\x75\164\x65\x5f\151\x64"); if (!$mqeiemgcoiugcyuc) { goto ioiwoukauoeamuca; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); cceggewquoaemcwq: } iuwccksomkkouogy: ioiwoukauoeamuca: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; mesesokuoomcioom: } aqwoykqaquewcaki: oqckuigyqswmqcqg: return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea()))) { goto qsaoyggkqwcgskwk; } if (!($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, ''))) { goto equwcsciiggsuiam; } $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); equwcsciiggsuiam: qsaoyggkqwcgskwk: oiywguooqeasueqq: } owismwmeqcmukagu: } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); awkqcyusycccekwq: } myooisakyuggoggc: } public function ggcygaycmccceswo() { if (!($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq))) { goto aqksouwmeckaqyaq; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ykogqmmywykgouqy; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); ykogqmmywykgouqy: kqwyogqqwumumiwg: } yugmwomumkosucsc: aqksouwmeckaqyaq: } }
