<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b6ff66e3be1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Cover\Setting\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class License extends Widget { public function __construct() { parent::__construct(__('License', PR__CMN__COVER), __('Display the licenses of your site.', PR__CMN__COVER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ackcaikowcokggsc)->gswweykyogmsyawy(__('Include', PR__CMN__COVER))->gucwmccyimoagwcm(__('Leave empty if you want to show all items', PR__CMN__COVER))->acauweqyyugwisqc($this->siggceeeowgkoaam([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))->oikgogcweiiaocka()); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $ooiewiwkegguusum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($owgumcsyqsamiemg, Constants::ackcaikowcokggsc, []); $qookweymeqawmcwo = []; if ($oammesyieqmwuwyi = $this->siggceeeowgkoaam([Constants::ackcaikowcokggsc => $ooiewiwkegguusum])) { $qookweymeqawmcwo = [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } return $qookweymeqawmcwo; } public function siggceeeowgkoaam(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wkweqssoakmmmguq => [Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm]]); $rsywwkgoeeiscsik = $this->weysguygiseoukqw(Setting::mgieaomemyywoqwa, [], $ywmkwiwkosakssii); if ($rsywwkgoeeiscsik && is_array($rsywwkgoeeiscsik) && Constants::ckmqoekmugkggeym === $ywmkwiwkosakssii[Constants::aisguagukaewucii]) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); foreach ($rsywwkgoeeiscsik as $momcykaoccoymeig => $caicqiiuwsyaeeko) { $qgciuiagkkguykgs = $caicqiiuwsyaeeko[Constants::kkeogqiyysoyuemk] ?? Constants::kicoscymgmgqeqgy; switch ($qgciuiagkkguykgs) { case Constants::kicoscymgmgqeqgy: $gskuwmeemyeuwogc = stripcslashes($caicqiiuwsyaeeko[Constants::kicoscymgmgqeqgy] ?? ''); if ($gskuwmeemyeuwogc) { if ($smuykqsageuocuos->has($gskuwmeemyeuwogc, 'img')) { $oiegiwogmwmawkeo = $caicqiiuwsyaeeko[Constants::qmeuakmyaucgeyeu] ?? ''; $mcqieaigyeeyaksm = $caicqiiuwsyaeeko[Setting::eeewoeyqoigcuuyg] ?? ''; $siquossayskcwkea = []; $qeswwaqqsyymqawg = $caicqiiuwsyaeeko[Constants::qomookamaskuoswk] ?? 0; $cswemwoyesycwkuq = $caicqiiuwsyaeeko[Constants::sogmkkcwuamuqegw] ?? 0; if ($mcqieaigyeeyaksm) { if ($oiegiwogmwmawkeo) { $icwicymcioeyeyek = $eaeiswmwiqewicoc->uikkssqcoewckces($mcqieaigyeeyaksm, $oiegiwogmwmawkeo); $ogomymegcoacqisg = $icwicymcioeyeyek[0] ?? ''; $qeswwaqqsyymqawg = $icwicymcioeyeyek[1] ?? 80; $cswemwoyesycwkuq = $icwicymcioeyeyek[2] ?? 80; } else { $ogomymegcoacqisg = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($mcqieaigyeeyaksm); } $siquossayskcwkea['scr'] = $ogomymegcoacqisg; } else { if ($oiegiwogmwmawkeo) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qucaqeskcaoqgkso($oiegiwogmwmawkeo); if ($icwicymcioeyeyek) { $qeswwaqqsyymqawg = $icwicymcioeyeyek[1] ?? 80; $cswemwoyesycwkuq = $icwicymcioeyeyek[2] ?? 80; } } } if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { $siquossayskcwkea[Constants::qomookamaskuoswk] = $qeswwaqqsyymqawg; $siquossayskcwkea[Constants::sogmkkcwuamuqegw] = $cswemwoyesycwkuq; } if ($siquossayskcwkea = array_filter($siquossayskcwkea)) { $gskuwmeemyeuwogc = $smuykqsageuocuos->qcgocuceocquqcuw($gskuwmeemyeuwogc, ['img' => $siquossayskcwkea]); } } $rsywwkgoeeiscsik[$momcykaoccoymeig][Constants::kicoscymgmgqeqgy] = html_entity_decode($gskuwmeemyeuwogc); } break; case Constants::ogigqueukwysusii: if (!empty($caicqiiuwsyaeeko[Constants::qmeuakmyaucgeyeu])) { $rsywwkgoeeiscsik[$momcykaoccoymeig][Constants::qmeuakmyaucgeyeu] = [$caicqiiuwsyaeeko[Constants::qomookamaskuoswk] ?? 80, $caicqiiuwsyaeeko[Constants::sogmkkcwuamuqegw] ?? 80]; } break; } } } return $rsywwkgoeeiscsik; } }
