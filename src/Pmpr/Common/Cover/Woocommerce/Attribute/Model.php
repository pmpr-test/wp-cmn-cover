<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702cbb7d8f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model as BaseClass; class Model extends BaseClass { const myusimeomsyesgwy = 'attribute_id'; public function register() { $this->usuqmwksoeaayaig('attribute_meta')->muuwuqssqkaieqge(__('Attribute Metas', PR__CMN__COVER))->guiaswksukmgageq(__('Attribute Meta', PR__CMN__COVER)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::myusimeomsyesgwy)->gswweykyogmsyawy(__('Attribute', PR__CMN__COVER)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::osocaqqumyuooqyo)->gswweykyogmsyawy(__('Meta Key', PR__CMN__COVER)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::iwmgegikocuwggua)->gswweykyogmsyawy(__('Meta Value', PR__CMN__COVER))); parent::uwmqacgewuauagai(); } public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if ($ymkomoccmymcoiea && $uusmaiomayssaecw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw); if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = [Constants::osocaqqumyuooqyo => $uusmaiomayssaecw, Constants::iwmgegikocuwggua => $eqgoocgaqwqcimie, self::myusimeomsyesgwy => $ymkomoccmymcoiea]; } else { if ($gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::iwmgegikocuwggua) === $eqgoocgaqwqcimie) { return; } } $gkyciwoiiisgywcs->set($icwicymcioeyeyek, [Constants::iwmgegikocuwggua => maybe_serialize($eqgoocgaqwqcimie)]); $this->gssiscqyqsacmeca()->gsegsiocqmsoayii((array) $icwicymcioeyeyek); } } public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $mksyucucyswaukig = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::osocaqqumyuooqyo, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(self::myusimeomsyesgwy, $ymkomoccmymcoiea)]); if ($mksyucucyswaukig) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eqgoocgaqwqcimie = maybe_unserialize($gkyciwoiiisgywcs->get($mksyucucyswaukig, Constants::iwmgegikocuwggua)); $mksyucucyswaukig = $gkyciwoiiisgywcs->set($mksyucucyswaukig, [Constants::iwmgegikocuwggua => $eqgoocgaqwqcimie]); } return $mksyucucyswaukig; } public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw) { $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, Constants::iwmgegikocuwggua); } }
