<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1665c2d208             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Element extends Container { public function kgquecmsgcouyaya() { $wamcomkuwysqgwgk = 'get_%s_html'; $uqyiiwmmueumsgkq = ['rating']; $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); foreach ($uqyiiwmmueumsgkq as $kqywgoqsmuswammk) { if ($qgciuiagkkguykgs = $cgwqqcukiasoicmi->myagqecycsaiyqsk($this, $kqywgoqsmuswammk)) { $this->aqaqisyssqeomwom(sprintf($wamcomkuwysqgwgk, $kqywgoqsmuswammk), [$this, $qgciuiagkkguykgs], 10, 2); } } } public function qqyuqswckkcomeak($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qiyqwyiiwykeccmo => 0, Constants::ciyoccqkiamemcmm => 0, 'icon_attrs' => [], 'is_average' => false, 'container_class' => 'd-flex']); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eqgoocgaqwqcimie = (float) $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ciyoccqkiamemcmm, 0); $eusuamuwcesgkgaw = []; $momcykaoccoymeig = 1; while (count($eusuamuwcesgkgaw) < 5) { $wkaqekwwgqsqwcoi = IconInterface::asaomwmaicuoeekg; $qgokqwkgckkyagiq = $eqgoocgaqwqcimie < $momcykaoccoymeig; $guqckucmmaoceiiy = !$qgokqwkgckkyagiq && $eqgoocgaqwqcimie < $momcykaoccoymeig + 1 && fmod($eqgoocgaqwqcimie, 1) !== 0.0; $wwgucssaecqekuek = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'icon_attrs'); if ($guqckucmmaoceiiy) { $wkaqekwwgqsqwcoi = IconInterface::wikauwmckmkcemco; } if (is_callable($wwgucssaecqekuek)) { $wwgucssaecqekuek = $wwgucssaecqekuek($qgokqwkgckkyagiq, $guqckucmmaoceiiy, $momcykaoccoymeig, $eqgoocgaqwqcimie); } $eusuamuwcesgkgaw[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, ['filter' => false]); $momcykaoccoymeig++; } $ywmkwiwkosakssii['rating'] = implode('', $eusuamuwcesgkgaw); return $this->skciuoqgiqoawwwe(__FUNCTION__, $ywmkwiwkosakssii); } public function skciuoqgiqoawwwe($ymqmyyeuycgmigyo, $qookweymeqawmcwo = []) : string { return $this->iuygowkemiiwqmiw($ymqmyyeuycgmigyo, $qookweymeqawmcwo); } }
