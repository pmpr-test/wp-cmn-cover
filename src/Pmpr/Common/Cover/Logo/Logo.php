<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a3643eff             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Logo; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Logo extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('render_site_logo', [$this, 'kasoyswssgmiquis']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('get_site_logo', [$this, 'ciooemuisugskoqc']); } public function kasoyswssgmiquis(array $ywmkwiwkosakssii = []) { echo $this->ciooemuisugskoqc('', $ywmkwiwkosakssii); } public function ciooemuisugskoqc($weowoqykiyuqcwam, array $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => null, Constants::waguuiqqgsysuukq => Constants::egwoacukmsioosum, Constants::squoamkioomemiyi => null, Constants::ysskgssgwuwmqwym => [], Constants::aisguagukaewucii => Constants::gsqoooskigukokks]); if ($uusmaiomayssaecw = $ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]) { $weowoqykiyuqcwam = $this->weysguygiseoukqw(Setting::gmsauqmowwymgmui, [], [Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); } else { if ($sqeykgyoooqysmca = $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { $oeismeeeiouoqouo = $this->weysguygiseoukqw(Setting::gmsauqmowwymgmui, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::kyyscqqmsikeuaea => Constants::squoamkioomemiyi, Constants::wosqwewmqmyweqea => $sqeykgyoooqysmca]); if (empty($oeismeeeiouoqouo)) { $oeismeeeiouoqouo = $this->weysguygiseoukqw(Setting::gmsauqmowwymgmui, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::kyyscqqmsikeuaea => Constants::squoamkioomemiyi, Constants::wosqwewmqmyweqea => Constants::wikgqsqysyuoykse]); } $weowoqykiyuqcwam = end($oeismeeeiouoqouo); } } $ksaameoqigiaoigg = ''; if ($mcqieaigyeeyaksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($weowoqykiyuqcwam, Constants::mkousmkiawwousws)) { $aqykuigiuwmmcieu = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; if (Constants::gouqcwikiiygyasc !== $aqykuigiuwmmcieu) { $oiegiwogmwmawkeo = $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq]; $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); switch ($aqykuigiuwmmcieu) { case Constants::auqoykcmsiauccao: $ksaameoqigiaoigg = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($mcqieaigyeeyaksm, $oiegiwogmwmawkeo); break; default: case Constants::gsqoooskigukokks: $wwgucssaecqekuek = $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]; if (is_array($oiegiwogmwmawkeo)) { if (!isset($wwgucssaecqekuek['alt'])) { $wwgucssaecqekuek['alt'] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw('_wp_attachment_image_alt', $mcqieaigyeeyaksm); } $ogomymegcoacqisg = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($mcqieaigyeeyaksm); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sokmmckycgmeesoa($ogomymegcoacqisg, $oiegiwogmwmawkeo[0], $oiegiwogmwmawkeo[1], $wwgucssaecqekuek); } else { $ksaameoqigiaoigg = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($mcqieaigyeeyaksm, $oiegiwogmwmawkeo, $wwgucssaecqekuek); } break; } } } return $ksaameoqigiaoigg; } public function kcuiykquaggusqka() { $weowoqykiyuqcwam = $this->ciooemuisugskoqc([Constants::squoamkioomemiyi => Constants::zmmsyimwiiaweocw]); if ($weowoqykiyuqcwam) { $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw('menu.css', [Constants::mscgqqsgosmsqygq => $weowoqykiyuqcwam]); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs('style', [], $icyaoosaykeskiuu); } } }
