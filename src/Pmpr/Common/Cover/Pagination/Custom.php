<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecade94be0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Interfaces\Constants; class Custom extends Common { protected ?string $type = 'custom'; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] > 0) { $ocqawgquwsqioses = ceil((int) $ywmkwiwkosakssii[Constants::qiyqwyiiwykeccmo] / (int) $ywmkwiwkosakssii[Constants::ausqeuugegoygouq]); $ocqawgquwsqioses = $this->mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii['current']); } else { $ocqawgquwsqioses = []; } $ywmkwiwkosakssii[Constants::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw('custom', $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [Constants::gouqcwikiiygyasc => Constants::ycuusiweasqygwiw, Constants::qiyqwyiiwykeccmo => 1, Constants::asmooogmgyecqqka => 1, Constants::ausqeuugegoygouq => 10, 'next_text' => __('Next', PR__CMN__COVER), 'prev_text' => __('Previous', PR__CMN__COVER), 'current_text' => __('Current', PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if ($ocqawgquwsqioses > 1) { if ($yeacayasgueouoqc > 1) { $oammesyieqmwuwyi[__('Previous', PR__CMN__COVER)] = $yeacayasgueouoqc - 1; } if ($ocqawgquwsqioses > 5) { $oammesyieqmwuwyi[1] = 1; if ($yeacayasgueouoqc > 3) { $oammesyieqmwuwyi['before-dot'] = '...'; } if ($yeacayasgueouoqc > 1) { $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; } $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if ($yeacayasgueouoqc < $ocqawgquwsqioses) { $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; } if ($yeacayasgueouoqc < $ocqawgquwsqioses - 2) { $oammesyieqmwuwyi['after-dot'] = '...'; } $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; } else { $oammesyieqmwuwyi += $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); } if ($yeacayasgueouoqc < $ocqawgquwsqioses) { $oammesyieqmwuwyi[__('Next', PR__CMN__COVER)] = $yeacayasgueouoqc + 1; } } return $oammesyieqmwuwyi; } }
