<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e934c577f87             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Metadata; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Data\Meta; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Stat extends Container { const oswseauqqwwuiwcg = 'metadata_'; public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::oswseauqqwwuiwcg . 'stat_render', [$this, 'render'])->waqewsckuayqguos(self::oswseauqqwwuiwcg . 'stat_get_html', [$this, 'wgqqgewcmcemoewo'], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . 'stat_get_all_items', [$this, 'sksykqasgyyyqkie'])->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . 'stat_get_items', [$this, 'wasgwsogmuquqeaa'], 10, 2); } public function wgqqgewcmcemoewo($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uwceyikaaaqgkkee => Constants::qwumqqyuasyskkkc, Constants::uouymeyqasaeckso => Constants::mswoacegomcucaik]); $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); if ($oammesyieqmwuwyi) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[Constants::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } return $nsmgceoqaqogqmuw; } public function render($ywmkwiwkosakssii = []) { echo $this->wgqqgewcmcemoewo('', $ywmkwiwkosakssii); } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::cgiswgcumueqgcmw => 0, Constants::ackcaikowcokggsc => [], Constants::uouymeyqasaeckso => Constants::mswoacegomcucaik]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ackcaikowcokggsc, []); $useksmwkuswkwcqg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::uouymeyqasaeckso, Constants::mswoacegomcucaik); if ($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum)) { $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); } if ($useksmwkuswkwcqg && $ooiewiwkegguusum) { $eqomywkesmwsiaik = $this->ocksiywmkyaqseou('metadata_stat_get_all_items', []); if (Constants::ALL === $ooiewiwkegguusum) { $ooiewiwkegguusum = array_keys($eqomywkesmwsiaik); } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $awmkgwkewqigsgsg = new Meta(); $awmkgwkewqigsgsg->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy($eqomywkesmwsiaik[$igqsaukqcqscimok] ?? ''); switch ($igqsaukqcqscimok) { case Constants::qgmuskygocwmouos: $eqgoocgaqwqcimie = $seumokooiykcomco->wsqeykgqiemswysa($useksmwkuswkwcqg); $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::qgmawmcoyqqkcosk); break; case Constants::goumieeyyqigueiw: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gscioiumssogceuc()->gaywomkwewckiwuk($useksmwkuswkwcqg); $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::qmowyycmkagomiiy); break; } $awmkgwkewqigsgsg->iygyugseyaqwywyg($eqgoocgaqwqcimie); $awmkgwkewqigsgsg = $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "stat_update_{$igqsaukqcqscimok}", $awmkgwkewqigsgsg, $useksmwkuswkwcqg, $igqsaukqcqscimok); if ($awmkgwkewqigsgsg->qooeaookuemoqecm()) { $oammesyieqmwuwyi[$igqsaukqcqscimok] = $awmkgwkewqigsgsg; } } } return $oammesyieqmwuwyi; } public function sksykqasgyyyqkie($oammesyieqmwuwyi = []) : array { $oammesyieqmwuwyi[Constants::qgmuskygocwmouos] = __('Post in Blog', PR__CMN__COVER); $oammesyieqmwuwyi[Constants::goumieeyyqigueiw] = __('Comments on Posts', PR__CMN__COVER); return $oammesyieqmwuwyi; } }
