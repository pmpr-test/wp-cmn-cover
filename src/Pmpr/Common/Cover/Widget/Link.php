<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3e8e0add             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class Link extends Widget { public function __construct() { parent::__construct(__('Link', PR__CMN__COVER), __('Display a link.', PR__CMN__COVER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::TEXT)->gswweykyogmsyawy(__('Text', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::mswoacegomcucaik)->gswweykyogmsyawy(__('Post/Page', PR__CMN__COVER))->ukqywcsoogkyoaoa())->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(Constants::wscuyecqcuigkuyq)->gswweykyogmsyawy(__('As Button', PR__CMN__COVER))->agywyaaquwawwuiy([Constants::waguuiqqgsysuukq, Constants::igssuqwuicwawgam]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::waguuiqqgsysuukq)->gswweykyogmsyawy(__('Size', PR__CMN__COVER))->acauweqyyugwisqc($this->ocksiywmkyaqseou('theme_button_sizes', [])))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::igssuqwuicwawgam)->gswweykyogmsyawy(__('Color', PR__CMN__COVER))->acauweqyyugwisqc($this->ocksiywmkyaqseou('theme_colors', []))); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qookweymeqawmcwo = parent::gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); if ($post = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::mswoacegomcucaik)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qescuiwgsyuikume); if (!$meqocwsecsywiiqs) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); } $qookweymeqawmcwo[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $qookweymeqawmcwo[Constants::ysskgssgwuwmqwym] = ['href' => $seumokooiykcomco->ycqquoiyyuesegsy($post, true), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, 'aria-label' => $meqocwsecsywiiqs]; } return $qookweymeqawmcwo; } }
