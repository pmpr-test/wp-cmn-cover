<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d87913155             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; class Model extends BaseClass { const myusimeomsyesgwy = "\x61\x74\164\162\151\142\165\x74\x65\137\x69\144"; public $timestamps = false; public function ckgmycmaukqgkosk() { $quowyokcwswmuois = $this->akuociswqmoigkas(); $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\141\164\164\162\x69\142\x75\164\145\137\x6d\x65\x74\x61")->muuwuqssqkaieqge(__("\101\164\x74\162\151\142\x75\x74\145\40\115\145\164\141\x73", PR__CMN__COVER))->guiaswksukmgageq(__("\101\164\x74\x72\151\142\165\164\145\40\x4d\x65\164\x61", PR__CMN__COVER))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qoemykoeuecmsmwe(self::myusimeomsyesgwy)->gswweykyogmsyawy(__("\x41\x74\x74\162\x69\142\x75\164\x65", PR__CMN__COVER)), $this->gysoeyaguiyewoes(Constants::osocaqqumyuooqyo)->gswweykyogmsyawy(__("\x4d\x65\164\x61\x20\x4b\x65\x79", PR__CMN__COVER)), $this->gysoeyaguiyewoes(Constants::iwmgegikocuwggua)->gswweykyogmsyawy(__("\115\x65\164\141\40\126\x61\154\165\145", PR__CMN__COVER))]); parent::ewaqwooqoqmcoomi(); } public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) { goto syuywgysqyckcqay; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw); if (!$icwicymcioeyeyek) { goto suiywiakesiegcwu; } if (!($gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::iwmgegikocuwggua) === $eqgoocgaqwqcimie)) { goto yccuomocgmewkeca; } return; yccuomocgmewkeca: goto kmseiouukkqiumum; suiywiakesiegcwu: $icwicymcioeyeyek = [Constants::osocaqqumyuooqyo => $uusmaiomayssaecw, Constants::iwmgegikocuwggua => $eqgoocgaqwqcimie, self::myusimeomsyesgwy => $ymkomoccmymcoiea]; kmseiouukkqiumum: $gkyciwoiiisgywcs->set($icwicymcioeyeyek, [Constants::iwmgegikocuwggua => maybe_serialize($eqgoocgaqwqcimie)]); $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek); syuywgysqyckcqay: } public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw) { $mksyucucyswaukig = $this->oqomcmyuuakigusk([Constants::osocaqqumyuooqyo => $uusmaiomayssaecw, self::myusimeomsyesgwy => $ymkomoccmymcoiea]); if (!$mksyucucyswaukig) { goto ggewkaiwwgkmkwgc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eqgoocgaqwqcimie = maybe_unserialize($gkyciwoiiisgywcs->get($mksyucucyswaukig, Constants::iwmgegikocuwggua)); $mksyucucyswaukig = $gkyciwoiiisgywcs->set($mksyucucyswaukig, [Constants::iwmgegikocuwggua => $eqgoocgaqwqcimie]); ggewkaiwwgkmkwgc: return $mksyucucyswaukig; } public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw) { $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, Constants::iwmgegikocuwggua); } }
