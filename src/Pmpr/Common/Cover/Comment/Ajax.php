<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839bededf1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Common { const wiysygukkaksueso = 'pr_cover_ajax_'; const yaouagmmkiyguiso = self::wiysygukkaksueso . 'submit_comment_form'; const kceoggiuqkiimsum = self::wiysygukkaksueso . 'get_comment_list'; const myikkigscysoykgy = ['get_list' => self::kceoggiuqkiimsum, 'submit_form' => self::yaouagmmkiyguiso]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yaouagmmkiyguiso, [$this, 'aeaqgysgaeowagug'])->iqkqummseggmikgo(self::kceoggiuqkiimsum, [$this, 'ciugwooasaqcywas']); } public function aeaqgysgaeowagug() { $occymigcemkqucuw = false; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); try { $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ygkskmsksmmiqaqu($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->ayueggmoqeeukqmq())); if (is_wp_error($comment)) { $iswcokucwmiosiaq = (int) $comment->get_error_data(); if ($iswcokucwmiosiaq) { $keccaugmemegoimu = $comment->get_error_message(); } else { $keccaugmemegoimu = __('Unknown Error', PR__CMN__COVER); } } else { if ($comment) { if ($mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get()) { $this->cqscqicucmeamkyq('set_comment_cookies', $comment, $mkucggyaiaukqoce); } $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::kiywiwgciwcoiiyy); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __('Something is wrong, please try again.', PR__CMN__COVER); } } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $wgaoewqkwgomoaai->sagusgigmkeysock(); } $keccaugmemegoimu = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug([Constants::ssmskyqgcmeiayco => $keccaugmemegoimu, Constants::squoamkioomemiyi => $occymigcemkqucuw ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg]); $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function ciugwooasaqcywas() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $ogougosiwuoqymou = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $sogksuscggsicmac = $eiicaiwgqkgsekce->aoyemeikggcigigu(); $gqiuywqwmiieqcww = $occymigcemkqucuw = false; if (!is_wp_error($sogksuscggsicmac)) { $suaemuyiacqyugsm = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::imywcsggckkcywgk, 1); $sqeykgyoooqysmca = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::squoamkioomemiyi, Constants::COMMENT); $moqewomugocaueis = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::eggygikowgywcayq, 0); $mqyaskyaekmkegmg = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::wwcycgyaiaksckuk, Constants::uouymeyqasaeckso); if ($moqewomugocaueis && $suaemuyiacqyugsm) { $ywmkwiwkosakssii = ['is_ajax' => true, 'is_render' => false, Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kkcqmwgccaygggcu => $suaemuyiacqyugsm, Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $mqyaskyaekmkegmg]; $sogksuscggsicmac = Frontend::symcgieuakksimmu()->ckgkesscwwgyimsq('', $ywmkwiwkosakssii); if ($sogksuscggsicmac) { $uuwmqqqiwksuaise = 0; switch ($mqyaskyaekmkegmg) { case Constants::gmmygyiecgmggaam: break; case Constants::uouymeyqasaeckso: $uuwmqqqiwksuaise = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ymgsgecsiqeegseg($moqewomugocaueis); break; } $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga(); $gqiuywqwmiieqcww = !($uuwmqqqiwksuaise && $weyoqgcesqgeusiu) || $uuwmqqqiwksuaise / $weyoqgcesqgeusiu <= $suaemuyiacqyugsm; $sogksuscggsicmac = $this->caokeucsksukesyo()->gkksucgseqqemesc()->gyqqesecwssesmyy($sogksuscggsicmac, 'li.comment-list-item:not(.comment-child)'); } else { $gqiuywqwmiieqcww = true; } $occymigcemkqucuw = true; } else { $sogksuscggsicmac = $ogougosiwuoqymou->oockkqiqsssakuug(__('Required data not passed', PR__CMN__COVER)); } } else { $sogksuscggsicmac = $ogougosiwuoqymou->oockkqiqsssakuug($sogksuscggsicmac); } $eiicaiwgqkgsekce->uaggqsoeugksgooc([Constants::DONE => $gqiuywqwmiieqcww, Constants::syomkiqgogwyuiyw => $sogksuscggsicmac], $occymigcemkqucuw); } }
