<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e841c4cb2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Interfaces\Constants; class Custom extends Common { protected ?string $type = "\x63\x75\x73\164\x6f\155"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] > 0) { $ocqawgquwsqioses = ceil((int) $ywmkwiwkosakssii[Constants::qiyqwyiiwykeccmo] / (int) $ywmkwiwkosakssii[Constants::ausqeuugegoygouq]); $ocqawgquwsqioses = $this->mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\162\162\x65\x6e\164"]); } else { $ocqawgquwsqioses = []; } $ywmkwiwkosakssii[Constants::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\165\163\164\157\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [Constants::gouqcwikiiygyasc => Constants::ycuusiweasqygwiw, Constants::qiyqwyiiwykeccmo => 1, Constants::asmooogmgyecqqka => 1, Constants::ausqeuugegoygouq => 10, "\156\145\x78\164\137\x74\x65\170\164" => __("\116\145\x78\164", PR__CMN__COVER), "\160\x72\145\x76\137\164\x65\170\x74" => __("\x50\162\145\166\x69\x6f\165\163", PR__CMN__COVER), "\x63\x75\x72\x72\145\x6e\164\x5f\x74\x65\x78\164" => __("\x43\165\x72\162\x65\x6e\164", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if ($ocqawgquwsqioses > 1) { if ($yeacayasgueouoqc > 1) { $oammesyieqmwuwyi[__("\120\x72\145\x76\x69\x6f\x75\163", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; } if ($ocqawgquwsqioses > 5) { $oammesyieqmwuwyi[1] = 1; if ($yeacayasgueouoqc > 3) { $oammesyieqmwuwyi["\142\145\x66\x6f\162\145\x2d\x64\x6f\164"] = "\x2e\x2e\56"; } if ($yeacayasgueouoqc > 1) { $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; } $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if ($yeacayasgueouoqc < $ocqawgquwsqioses) { $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; } if ($yeacayasgueouoqc < $ocqawgquwsqioses - 2) { $oammesyieqmwuwyi["\141\x66\x74\x65\162\55\144\x6f\x74"] = "\x2e\56\56"; } $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; } else { $oammesyieqmwuwyi += $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); } if ($yeacayasgueouoqc < $ocqawgquwsqioses) { $oammesyieqmwuwyi[__("\x4e\x65\170\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; } } return $oammesyieqmwuwyi; } }
