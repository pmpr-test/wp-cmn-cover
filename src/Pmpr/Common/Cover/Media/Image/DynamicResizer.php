<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6e896efa             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media\Image; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class DynamicResizer extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('template_redirect', [$this, 'gowuqwwkmiuisiuu'])->qcsmikeggeemccuu('intermediate_image_sizes_advanced', [$this, 'qwusgqoioogwaggu'], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_generate_attachment_metadata', [$this, 'smiqaaaecemiwugu']); } public function qwusgqoioogwaggu($wyicceigkekkkwgs) { global $pmpr_cover_image_sizes; $pmpr_cover_image_sizes = $wyicceigkekkkwgs; return []; } public function smiqaaaecemiwugu($ugugimquukqwogge) { global $pmpr_cover_image_sizes; foreach ($pmpr_cover_image_sizes as $ggagccwiiwgcwmqk => $oiegiwogmwmawkeo) { $gkceekswiaccowmo = image_resize_dimensions($ugugimquukqwogge[Constants::qomookamaskuoswk] ?? 0, $ugugimquukqwogge[Constants::sogmkkcwuamuqegw] ?? 0, $oiegiwogmwmawkeo[Constants::qomookamaskuoswk] ?? 0, $oiegiwogmwmawkeo[Constants::sogmkkcwuamuqegw] ?? 0, $oiegiwogmwmawkeo[Constants::jkiyuoygceaaogoq] ?? false); if ($gkceekswiaccowmo) { $yyimiwcuegayoskq = pathinfo($ugugimquukqwogge[Constants::kekgqaemqessuwmq] ?? ''); $yucgcsieomwqgwws = $yyimiwcuegayoskq['extension'] ?? ''; $ymqmyyeuycgmigyo = wp_basename($ugugimquukqwogge[Constants::kekgqaemqessuwmq], ".{$yucgcsieomwqgwws}"); $scqcgogsiaiksiiq = "{$gkceekswiaccowmo[4]}x{$gkceekswiaccowmo[5]}"; $okaoeswsaqscqics = [Constants::kekgqaemqessuwmq => "{$ymqmyyeuycgmigyo}-{$scqcgogsiaiksiiq}.{$yucgcsieomwqgwws}", Constants::qomookamaskuoswk => $gkceekswiaccowmo[4], Constants::sogmkkcwuamuqegw => $gkceekswiaccowmo[5]]; $ugugimquukqwogge[Constants::hwuckiugumsugwas][$ggagccwiiwgcwmqk] = $okaoeswsaqscqics; } } return $ugugimquukqwogge; } public function gowuqwwkmiuisiuu() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kmmyuiwaogukwqqi()) { $magawcseesgowoeo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); if (preg_match('/(.*)-([0-9]+)x([0-9]+)\\.(jpg|jpeg|webp|avif|png|gif)/i', $magawcseesgowoeo, $meyiiwcswqmuggyg)) { $wkcwykowmmmwioqs = ($meyiiwcswqmuggyg[1] ?? '') . '.' . ($meyiiwcswqmuggyg[4] ?? ''); $qeswwaqqsyymqawg = (int) ($meyiiwcswqmuggyg[2] ?? 0); $cswemwoyesycwkuq = (int) ($meyiiwcswqmuggyg[3] ?? 0); $goikwuimccsykokk = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $mckmqeqaekwkwems = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($goikwuimccsykokk['baseurl']); $usuwmommwquwiiia = $mckmqeqaekwkwems[Constants::okmiyqowuqogaiiy]; $oykuiowggesyuoci = str_replace($usuwmommwquwiiia, '', $wkcwykowmmmwioqs); $giciwqcguuicuyus = $goikwuimccsykokk['basedir'] . $oykuiowggesyuoci; $scqcgogsiaiksiiq = $qeswwaqqsyymqawg . 'x' . $cswemwoyesycwkuq; if (file_exists($giciwqcguuicuyus)) { $ouosqoiwgcoykick = wp_get_registered_image_subsizes(); $euciqcqmqamuoqga = false; foreach ($ouosqoiwgcoykick as $oiegiwogmwmawkeo) { $cewqqwquewgeuoaa = (int) ($oiegiwogmwmawkeo[Constants::qomookamaskuoswk] ?? 0); $wqcaqoqcmcayoeok = (int) ($oiegiwogmwmawkeo[Constants::sogmkkcwuamuqegw] ?? 0); if ($cewqqwquewgeuoaa === $qeswwaqqsyymqawg && $wqcaqoqcmcayoeok === $cswemwoyesycwkuq) { $euciqcqmqamuoqga = $oiegiwogmwmawkeo[Constants::jkiyuoygceaaogoq] ?? false; break; } } $okaoeswsaqscqics = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ccswwumysouogmqo($giciwqcguuicuyus, $qeswwaqqsyymqawg, $cswemwoyesycwkuq, $euciqcqmqamuoqga, $scqcgogsiaiksiiq); if ($okaoeswsaqscqics && !is_wp_error($okaoeswsaqscqics)) { foreach (get_allowed_mime_types() as $euqycomoaegysuga => $oqoquuiqeaqykuuu) { if (preg_match('!^(' . $euqycomoaegysuga . ')$!i', $meyiiwcswqmuggyg[4])) { header('Content-Type: ' . $oqoquuiqeaqykuuu); header('Content-Length: ' . filesize($okaoeswsaqscqics)); readfile($okaoeswsaqscqics); exit; } } } } } } } }
