<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceca1dd3ca3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Cover\Setting\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; class Template extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('render_404', [$this, 'cqooqkiyecmycwwq'])->waqewsckuayqguos('render_media', [$this, 'wuiesaeqiaweigug']); } public function cqooqkiyecmycwwq($ywmkwiwkosakssii = []) { $qookweymeqawmcwo = [Constants::TEXT => $this->weysguygiseoukqw(Setting::jsemecycggiyookc), Constants::qescuiwgsyuikume => $this->weysguygiseoukqw(Setting::gmssuqwcwmucmymk), Constants::mkousmkiawwousws => $this->weysguygiseoukqw(Setting::csociausugiaiiku), 'has_search' => !$this->weysguygiseoukqw(Setting::akgosquwywqyooum)]; $msauomoiyyimsgye = $this->weysguygiseoukqw(Setting::suauoeqsmyyyoiqc); if ($msauomoiyyimsgye) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aisqsoicsocqoogy = $this->weysguygiseoukqw(Setting::eocyseaqimgiciso); $qookweymeqawmcwo[Constants::auqoykcmsiauccao] = $seumokooiykcomco->ycqquoiyyuesegsy($msauomoiyyimsgye); if (!$aisqsoicsocqoogy) { $aisqsoicsocqoogy = $seumokooiykcomco->qcgakseyaikigqco($msauomoiyyimsgye); } $qookweymeqawmcwo['action_text'] = $aisqsoicsocqoogy; $qookweymeqawmcwo['action_icon'] = $this->weysguygiseoukqw(Setting::kcqakokswagkymgy); } echo $this->iuygowkemiiwqmiw('404', $qookweymeqawmcwo); } public function wuiesaeqiaweigug($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::waguuiqqgsysuukq => 'thumbnail', 'video_attrs' => [], 'image_attrs' => [], Constants::cqycgsyykemiygou => '']); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aiooqyausygaasqm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cqycgsyykemiygou)) { $nsmgceoqaqogqmuw = $sqeykgyoooqysmca = ''; $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq); $qookweymeqawmcwo = []; $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->qecqsmowoqmwgagu($aiooqyausygaasqm)) { $sqeykgyoooqysmca = Constants::mkousmkiawwousws; $wwgucssaecqekuek = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'image_attrs'); $qookweymeqawmcwo = [Constants::mkousmkiawwousws => $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wwgucssaecqekuek)]; } else { if ($eaeiswmwiqewicoc->mccouuwycwemasea($aiooqyausygaasqm)) { $sqeykgyoooqysmca = Constants::ykigkkwgecsygowo; $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $qookweymeqawmcwo = [Constants::auqoykcmsiauccao => $smeeaysicaigqymu->oiucukewkckkwiqc($aiooqyausygaasqm), 'mimetype' => $smeeaysicaigqymu->ikocqgeqiykwwyqs($aiooqyausygaasqm), Constants::ysskgssgwuwmqwym => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'video_attrs'), Constants::ecioqysekgaasegg => __('Your browser does not support HTML5 video.', PR__CMN__COVER)]; } } if ($sqeykgyoooqysmca) { $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($sqeykgyoooqysmca, $qookweymeqawmcwo); } echo $nsmgceoqaqogqmuw; } } }
