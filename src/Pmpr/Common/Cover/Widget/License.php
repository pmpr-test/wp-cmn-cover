<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038b8edf05             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Cover\Setting\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class License extends Widget { public function __construct() { parent::__construct(__("\x4c\x69\143\x65\156\x73\x65", PR__CMN__COVER), __("\x44\151\x73\160\154\x61\171\x20\164\150\x65\x20\x6c\x69\x63\x65\x6e\163\x65\x73\x20\x6f\x66\x20\x79\157\x75\x72\x20\163\x69\164\x65\56", PR__CMN__COVER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ackcaikowcokggsc)->gswweykyogmsyawy(__("\x49\x6e\x63\x6c\x75\144\145", PR__CMN__COVER))->gucwmccyimoagwcm(__("\x4c\x65\141\166\x65\40\145\155\160\164\171\40\151\x66\40\x79\157\x75\x20\x77\141\x6e\x74\40\x74\x6f\40\x73\150\157\167\40\x61\x6c\154\40\151\164\x65\x6d\163", PR__CMN__COVER))->acauweqyyugwisqc($this->siggceeeowgkoaam([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))->oikgogcweiiaocka()); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $ooiewiwkegguusum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($owgumcsyqsamiemg, Constants::ackcaikowcokggsc, []); $qookweymeqawmcwo = []; if ($oammesyieqmwuwyi = $this->siggceeeowgkoaam([Constants::ackcaikowcokggsc => $ooiewiwkegguusum])) { $qookweymeqawmcwo = [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } return $qookweymeqawmcwo; } public function siggceeeowgkoaam(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wkweqssoakmmmguq => [Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm]]); $rsywwkgoeeiscsik = $this->weysguygiseoukqw(Setting::mgieaomemyywoqwa, [], $ywmkwiwkosakssii); if ($rsywwkgoeeiscsik && is_array($rsywwkgoeeiscsik) && Constants::ckmqoekmugkggeym === $ywmkwiwkosakssii[Constants::aisguagukaewucii]) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); foreach ($rsywwkgoeeiscsik as $momcykaoccoymeig => $caicqiiuwsyaeeko) { $qgciuiagkkguykgs = $caicqiiuwsyaeeko[Constants::kkeogqiyysoyuemk] ?? Constants::kicoscymgmgqeqgy; switch ($qgciuiagkkguykgs) { case Constants::kicoscymgmgqeqgy: $gskuwmeemyeuwogc = stripcslashes($caicqiiuwsyaeeko[Constants::kicoscymgmgqeqgy] ?? ''); if ($gskuwmeemyeuwogc) { if ($smuykqsageuocuos->has($gskuwmeemyeuwogc, "\151\155\147")) { $oiegiwogmwmawkeo = $caicqiiuwsyaeeko[Constants::qmeuakmyaucgeyeu] ?? ''; $mcqieaigyeeyaksm = $caicqiiuwsyaeeko[Setting::eeewoeyqoigcuuyg] ?? ''; $siquossayskcwkea = []; $qeswwaqqsyymqawg = $caicqiiuwsyaeeko[Constants::qomookamaskuoswk] ?? 0; $cswemwoyesycwkuq = $caicqiiuwsyaeeko[Constants::sogmkkcwuamuqegw] ?? 0; if ($mcqieaigyeeyaksm) { if ($oiegiwogmwmawkeo) { $icwicymcioeyeyek = $eaeiswmwiqewicoc->uikkssqcoewckces($mcqieaigyeeyaksm, $oiegiwogmwmawkeo); $ogomymegcoacqisg = $icwicymcioeyeyek[0] ?? ''; $qeswwaqqsyymqawg = $icwicymcioeyeyek[1] ?? 80; $cswemwoyesycwkuq = $icwicymcioeyeyek[2] ?? 80; } else { $ogomymegcoacqisg = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($mcqieaigyeeyaksm); } $siquossayskcwkea["\163\143\x72"] = $ogomymegcoacqisg; } else { if ($oiegiwogmwmawkeo) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qucaqeskcaoqgkso($oiegiwogmwmawkeo); if ($icwicymcioeyeyek) { $qeswwaqqsyymqawg = $icwicymcioeyeyek[1] ?? 80; $cswemwoyesycwkuq = $icwicymcioeyeyek[2] ?? 80; } } } if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { $siquossayskcwkea[Constants::qomookamaskuoswk] = $qeswwaqqsyymqawg; $siquossayskcwkea[Constants::sogmkkcwuamuqegw] = $cswemwoyesycwkuq; } if ($siquossayskcwkea = array_filter($siquossayskcwkea)) { $gskuwmeemyeuwogc = $smuykqsageuocuos->qcgocuceocquqcuw($gskuwmeemyeuwogc, ["\151\x6d\147" => $siquossayskcwkea]); } } $rsywwkgoeeiscsik[$momcykaoccoymeig][Constants::kicoscymgmgqeqgy] = html_entity_decode($gskuwmeemyeuwogc); } break; case Constants::ogigqueukwysusii: if (!empty($caicqiiuwsyaeeko[Constants::qmeuakmyaucgeyeu])) { $rsywwkgoeeiscsik[$momcykaoccoymeig][Constants::qmeuakmyaucgeyeu] = [$caicqiiuwsyaeeko[Constants::qomookamaskuoswk] ?? 80, $caicqiiuwsyaeeko[Constants::sogmkkcwuamuqegw] ?? 80]; } break; } } } return $rsywwkgoeeiscsik; } }
