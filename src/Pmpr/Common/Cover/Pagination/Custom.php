<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             674458708a1bd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Interfaces\Constants; class Custom extends Common { protected ?string $type = "\x63\x75\163\164\x6f\155"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] > 0) { $ocqawgquwsqioses = ceil((int) $ywmkwiwkosakssii[Constants::qiyqwyiiwykeccmo] / (int) $ywmkwiwkosakssii[Constants::ausqeuugegoygouq]); $ocqawgquwsqioses = $this->mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\x75\162\x72\x65\x6e\x74"]); } else { $ocqawgquwsqioses = []; } $ywmkwiwkosakssii[Constants::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\165\163\x74\157\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [Constants::gouqcwikiiygyasc => Constants::ycuusiweasqygwiw, Constants::qiyqwyiiwykeccmo => 1, Constants::asmooogmgyecqqka => 1, Constants::ausqeuugegoygouq => 10, "\x6e\145\x78\164\x5f\164\145\x78\x74" => __("\116\x65\x78\x74", PR__CMN__COVER), "\x70\x72\145\166\137\164\x65\x78\164" => __("\x50\162\x65\166\151\x6f\165\x73", PR__CMN__COVER), "\x63\165\162\x72\145\156\x74\137\x74\145\170\164" => __("\103\x75\162\162\145\x6e\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if ($ocqawgquwsqioses > 1) { if ($yeacayasgueouoqc > 1) { $oammesyieqmwuwyi[__("\x50\x72\x65\166\151\157\165\163", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; } if ($ocqawgquwsqioses > 5) { $oammesyieqmwuwyi[1] = 1; if ($yeacayasgueouoqc > 3) { $oammesyieqmwuwyi["\x62\145\x66\x6f\162\x65\x2d\x64\157\x74"] = "\x2e\56\x2e"; } if ($yeacayasgueouoqc > 1) { $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; } $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if ($yeacayasgueouoqc < $ocqawgquwsqioses) { $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; } if ($yeacayasgueouoqc < $ocqawgquwsqioses - 2) { $oammesyieqmwuwyi["\x61\x66\164\x65\x72\x2d\x64\157\164"] = "\56\x2e\x2e"; } $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; } else { $oammesyieqmwuwyi += $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); } if ($yeacayasgueouoqc < $ocqawgquwsqioses) { $oammesyieqmwuwyi[__("\116\145\170\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; } } return $oammesyieqmwuwyi; } }
