<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecade94be0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; class Delay extends Common { const swiqcmweeeegqieq = 'coverdelayasset'; public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'theme-delay')->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'delay.js'))->qcgcugswouueymok()); } public function aqgugcgmsyciswgs($moooemyaqewumiay) { if ($moooemyaqewumiay) { $yuumukkaswwoywya = 'script'; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, static function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { $giioumomcoyuauuw = ['text/javascript', 'module', 'application/javascript', 'application/ecmascript', 'application/x-ecmascript', 'application/x-javascript', 'text/ecmascript', 'text/javascript1.0', 'text/javascript1.1', 'text/javascript1.2', 'text/javascript1.3', 'text/javascript1.4', 'text/javascript1.5', 'text/jscript', 'text/livescript', 'text/x-ecmascript', 'text/x-javascript']; if (!empty($smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik))) { $sqeykgyoooqysmca = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, Constants::squoamkioomemiyi); if (in_array($sqeykgyoooqysmca, $giioumomcoyuauuw)) { $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, 'data-cover-type', $sqeykgyoooqysmca); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, 'data-cover-src', $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, 'src')); $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, 'src'); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::squoamkioomemiyi, self::swiqcmweeeegqieq); } } else { $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::squoamkioomemiyi, self::swiqcmweeeegqieq); } return $ymyisaeksssueeik; }, false); } } return $moooemyaqewumiay; } }
