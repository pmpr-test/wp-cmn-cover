<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             674458708a1bd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model as BaseClass; class Model extends BaseClass { const myusimeomsyesgwy = "\141\x74\x74\162\x69\x62\165\x74\145\137\x69\x64"; public function register() { $this->usuqmwksoeaayaig("\141\164\x74\x72\x69\x62\165\164\x65\137\x6d\x65\164\141")->muuwuqssqkaieqge(__("\x41\x74\x74\162\151\x62\x75\164\145\x20\x4d\x65\x74\141\163", PR__CMN__COVER))->guiaswksukmgageq(__("\x41\x74\x74\162\x69\142\x75\x74\145\40\115\145\x74\x61", PR__CMN__COVER)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::myusimeomsyesgwy)->gswweykyogmsyawy(__("\x41\x74\164\x72\x69\142\x75\x74\145", PR__CMN__COVER)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::osocaqqumyuooqyo)->gswweykyogmsyawy(__("\115\145\164\141\x20\113\145\171", PR__CMN__COVER)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::iwmgegikocuwggua)->gswweykyogmsyawy(__("\x4d\145\164\x61\x20\x56\141\154\165\x65", PR__CMN__COVER))); parent::uwmqacgewuauagai(); } public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if ($ymkomoccmymcoiea && $uusmaiomayssaecw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw); if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = [Constants::osocaqqumyuooqyo => $uusmaiomayssaecw, Constants::iwmgegikocuwggua => $eqgoocgaqwqcimie, self::myusimeomsyesgwy => $ymkomoccmymcoiea]; } else { if ($gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::iwmgegikocuwggua) === $eqgoocgaqwqcimie) { return; } } $gkyciwoiiisgywcs->set($icwicymcioeyeyek, [Constants::iwmgegikocuwggua => maybe_serialize($eqgoocgaqwqcimie)]); $this->gssiscqyqsacmeca()->gsegsiocqmsoayii((array) $icwicymcioeyeyek); } } public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $mksyucucyswaukig = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::osocaqqumyuooqyo, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(self::myusimeomsyesgwy, $ymkomoccmymcoiea)]); if ($mksyucucyswaukig) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eqgoocgaqwqcimie = maybe_unserialize($gkyciwoiiisgywcs->get($mksyucucyswaukig, Constants::iwmgegikocuwggua)); $mksyucucyswaukig = $gkyciwoiiisgywcs->set($mksyucucyswaukig, [Constants::iwmgegikocuwggua => $eqgoocgaqwqcimie]); } return $mksyucucyswaukig; } public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw) { $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, Constants::iwmgegikocuwggua); } }
