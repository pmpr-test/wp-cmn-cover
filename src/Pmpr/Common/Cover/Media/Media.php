<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6e896efa             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Media\Image\DynamicResizer; use Pmpr\Common\Cover\Media\Image\Image; use Pmpr\Common\Cover\Media\Video\Aparat; use Pmpr\Common\Cover\Setting\Setting; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Media extends Container { const gimuyoqkwqgiqmeo = 'check_post_feature_image'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']); $this->koaegcswmcqsiykq(self::gimuyoqkwqgiqmeo, [$this, 'wgaeymmagkugqmas']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('get_avatar', [$this, 'issceageaomagegc'], 99)->cecaguuoecmccuse('intermediate_image_sizes', [$this, 'mqmackkwaukamwgc'])->cecaguuoecmccuse('post_thumbnail_url', [$this, 'quugyycgyygggmcg'], 99)->cecaguuoecmccuse('wp_get_attachment_url', [$this, 'quugyycgyygggmcg'], 99)->cecaguuoecmccuse('admin_post_thumbnail_html', [$this, 'gywcmgqmiuekikwg'], 9999)->cecaguuoecmccuse('post_thumbnail_html', [$this, 'gisewyuawqaakqyg'], 999, 5)->cecaguuoecmccuse('wp_get_attachment_image_attributes', [$this, 'mqyacwaaocgcsyag'], 99, 3)->cecaguuoecmccuse('ajax_query_attachments_args', [$this, 'ywsgaqiaoueyuyaa'], 10, 3); $this->aqaqisyssqeomwom('get_term_thumbnail', [$this, 'kukqogomoueecuka']); $this->aqaqisyssqeomwom('image_placeholder_id', [$this, 'cskmiyuaesumyigg'])->aqaqisyssqeomwom('image_placeholder_url', [$this, 'sqogiksomgaoegcy']); parent::kgquecmsgcouyaya(); } public function mameiwsayuyquoeq() { Image::symcgieuakksimmu(); Aparat::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->cmaecekuqkwmemms('PR_DYNAMIC_IMAGE_RESIZER')) { DynamicResizer::symcgieuakksimmu(); } } public function init() { $this->kagmsgckcysasgwk(); } public function yeyiguyegmmyusea() { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); if ($seumokooiykcomco->uqwgsuysegkweago($sciomagaqmgggsiu, Constants::awysmmukegasimmq)) { $post = $seumokooiykcomco->get(); $aswmaawsiyamkyys = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($post); if ($aswmaawsiyamkyys) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); $iqauecoycmqkimak = $this->egswssgkimymecua($aswmaawsiyamkyys, $useksmwkuswkwcqg); if (!$gkyciwoiiisgywcs->get($iqauecoycmqkimak, 'is_valid', true)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, $gkyciwoiiisgywcs->get($iqauecoycmqkimak, Constants::eoskkkieowogacws) . '. ' . __('Please set new picture for this post.', PR__CMN__COVER), 'feature-image', Constants::imkacwmiuiykyuim); } } } } public function ywsgaqiaoueyuyaa($gqgemcmoicmgaqie = []) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::uqgcmmosieyimiku); $yekqqesogweecqyc = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::kqigmeickowqiiyy); $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::waguuiqqgsysuukq, false); $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('media_library_filter_image_size'), $oiegiwogmwmawkeo, $yekqqesogweecqyc, $gqgemcmoicmgaqie, $aiamqeawckcsuaou); $oiegiwogmwmawkeo = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iuwsgyqakicakuoq($oiegiwogmwmawkeo); if ($oiegiwogmwmawkeo) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yemgmmgogcwccuky = []; $aieaqakyuyewkkwe = $seumokooiykcomco->ciugwooasaqcywas(Constants::cqycgsyykemiygou, $gqgemcmoicmgaqie); if ($aieaqakyuyewkkwe) { $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) { $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($aiooqyausygaasqm); $ugugimquukqwogge = $smeeaysicaigqymu->kymakekgqcqyqgmy($aokagokqyuysuksm); $qiwqkoiamayyqase = $smeeaysicaigqymu->ikocqgeqiykwwyqs($aokagokqyuysuksm); $ugugimquukqwogge['mime-type'] = $smeeaysicaigqymu->ikocqgeqiykwwyqs($aokagokqyuysuksm); $wosisusmomqewmok = $gkyciwoiiisgywcs->get($ugugimquukqwogge, Constants::qomookamaskuoswk, 0); $cewqqwquewgeuoaa = $gkyciwoiiisgywcs->get($oiegiwogmwmawkeo, Constants::qomookamaskuoswk, 0); if ($wosisusmomqewmok < $cewqqwquewgeuoaa && in_array($qiwqkoiamayyqase, ['image/jpeg', 'image/png'])) { $yemgmmgogcwccuky[] = $aokagokqyuysuksm; } } } $gqgemcmoicmgaqie[Constants::kcaoouwiygwwmiok] = $yemgmmgogcwccuky; } return $gqgemcmoicmgaqie; } public function mqmackkwaukamwgc($wyicceigkekkkwgs) { $woueywkoeegkgyga = $this->wgogyccwcysggaig(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo) { $myagqecycsaiyqsk = $gkyciwoiiisgywcs->get($woueywkoeegkgyga, $oiegiwogmwmawkeo, false); if (!$myagqecycsaiyqsk) { $gkyciwoiiisgywcs->gyciysooayoqiisg($wyicceigkekkkwgs, $oiegiwogmwmawkeo); } } return $wyicceigkekkkwgs; } public function kagmsgckcysasgwk() { if ($wyicceigkekkkwgs = $this->wgogyccwcysggaig()) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $ycismyeesqqgiwmc = []; foreach ($wyicceigkekkkwgs as $ggagccwiiwgcwmqk => $oiegiwogmwmawkeo) { $sociqikgoyemqaac = ''; if ($oiegiwogmwmawkeo instanceof Size) { $sociqikgoyemqaac = $oiegiwogmwmawkeo->qoqouugaaimaiqmi() . 'x' . $oiegiwogmwmawkeo->miskeyiwqsgcqwwo(); if ($oiegiwogmwmawkeo->megcasiyeqqowmmi()) { $sociqikgoyemqaac .= 'c'; } } $ycismyeesqqgiwmc[$ggagccwiiwgcwmqk] = $sociqikgoyemqaac; } $omkysikckkcieckq = md5(serialize($ycismyeesqqgiwmc)); $ecukkacusqswqoem = 0; $swyyywwskqyemius = $qkqgcaykemoiecma->get($omkysikckkcieckq); foreach ($wyicceigkekkkwgs as $ymqmyyeuycgmigyo => $oiegiwogmwmawkeo) { $qeswwaqqsyymqawg = $this->oaqwammkuqeckgak($oiegiwogmwmawkeo); $cswemwoyesycwkuq = $this->oaqwammkuqeckgak($oiegiwogmwmawkeo, Constants::sogmkkcwuamuqegw); if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { if ($oiegiwogmwmawkeo->somyygqqawwswkyk()) { $euciqcqmqamuoqga = false; if ($oiegiwogmwmawkeo->megcasiyeqqowmmi()) { $euciqcqmqamuoqga = ['center', 'center']; } add_image_size($ymqmyyeuycgmigyo, $qeswwaqqsyymqawg, $cswemwoyesycwkuq, $euciqcqmqamuoqga); } else { if (!$swyyywwskqyemius) { $qkqgcaykemoiecma->update("{$ymqmyyeuycgmigyo}_size_w", $qeswwaqqsyymqawg); $qkqgcaykemoiecma->update("{$ymqmyyeuycgmigyo}_size_h", $cswemwoyesycwkuq); $qkqgcaykemoiecma->update("{$ymqmyyeuycgmigyo}_crop", $oiegiwogmwmawkeo->megcasiyeqqowmmi() ? 1 : 0); $ecukkacusqswqoem = 1; } } } } if ($ecukkacusqswqoem) { $qkqgcaykemoiecma->update($omkysikckkcieckq, $ecukkacusqswqoem); } } } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, string $gkiuoymeukweiaaw = Constants::qomookamaskuoswk) : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); } else { if (is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo) { $qcgkuqesqqymcuui = $oiegiwogmwmawkeo[$gkiuoymeukweiaaw] ?? ''; } } return (int) $qcgkuqesqqymcuui; } public function iuwsgyqakicakuoq($ymqmyyeuycgmigyo) { return $this->wgogyccwcysggaig()[$ymqmyyeuycgmigyo] ?? null; } public function wgogyccwcysggaig() : array { static $theme_image_sizes; if (!$theme_image_sizes) { $wyicceigkekkkwgs = (array) $this->ocksiywmkyaqseou('get_cover_image_sizes', []); foreach ($wyicceigkekkkwgs as $ymqmyyeuycgmigyo => $oiegiwogmwmawkeo) { $mksyucucyswaukig = new Size($ymqmyyeuycgmigyo, $this->oaqwammkuqeckgak($oiegiwogmwmawkeo), $this->oaqwammkuqeckgak($oiegiwogmwmawkeo, Constants::sogmkkcwuamuqegw), $oiegiwogmwmawkeo[Constants::jkiyuoygceaaogoq] ?? true); $mksyucucyswaukig->yogkakywcccsikkg($oiegiwogmwmawkeo[Constants::kqeokggqcsesmqco] ?? false); $theme_image_sizes[$ymqmyyeuycgmigyo] = $mksyucucyswaukig; } } return (array) $theme_image_sizes; } public function oiqqguakwcieaioo() { $icyaoosaykeskiuu = ''; foreach ($this->wgogyccwcysggaig() as $ymqmyyeuycgmigyo => $oiegiwogmwmawkeo) { $qeswwaqqsyymqawg = $this->oaqwammkuqeckgak($oiegiwogmwmawkeo); if ($qeswwaqqsyymqawg) { $icyaoosaykeskiuu .= "img.img-size.size-{$ymqmyyeuycgmigyo}:not(.w-100){width:{$qeswwaqqsyymqawg}px !important; height: auto;}"; } } $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'image-sizes')->awagieqcmmwkgwgs($icyaoosaykeskiuu)); } public function issceageaomagegc($nsmgceoqaqogqmuw) { if ($nsmgceoqaqogqmuw) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->gkksucgseqqemesc()->ogaeogwycyqqckeu($nsmgceoqaqogqmuw, ['img' => ['srcset']]); } return $nsmgceoqaqogqmuw; } public function wgaeymmagkugqmas() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($post = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::mswoacegomcucaik)) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); } else { $useksmwkuswkwcqg = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::uouymeyqasaeckso); } $aiooqyausygaasqm = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::cqycgsyykemiygou); $keccaugmemegoimu = $this->egswssgkimymecua($aiooqyausygaasqm, $useksmwkuswkwcqg); $occymigcemkqucuw = $keccaugmemegoimu['is_valid'] ?? false; if (!$occymigcemkqucuw) { $keccaugmemegoimu[Constants::eoskkkieowogacws] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($keccaugmemegoimu[Constants::eoskkkieowogacws]); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function mqyacwaaocgcsyag($wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo) { unset($wwgucssaecqekuek['rol']); if ($oiegiwogmwmawkeo && is_string($oiegiwogmwmawkeo)) { $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', "img-size size-{$oiegiwogmwmawkeo}"); } return $wwgucssaecqekuek; } public function awouiaqwgakuumeg($useksmwkuswkwcqg) { $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou('media_feature_image_validation_sizes', '', $useksmwkuswkwcqg); if ($oiegiwogmwmawkeo) { $oiegiwogmwmawkeo = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iuwsgyqakicakuoq($oiegiwogmwmawkeo); } return $oiegiwogmwmawkeo; } public function gywcmgqmiuekikwg($nsmgceoqaqogqmuw) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $weaakkwoqiawsiua = $this->awouiaqwgakuumeg($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu()); $coauwigqauceoyiu = $gkyciwoiiisgywcs->get($weaakkwoqiawsiua, Constants::qomookamaskuoswk, 0); $mymosemimcaequmk = $gkyciwoiiisgywcs->get($weaakkwoqiawsiua, Constants::sogmkkcwuamuqegw, 0); $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->iaaacsuskiakkwui('', ['class' => 'thumbnail-error-message']); if ($mymosemimcaequmk > 0 || $coauwigqauceoyiu > 0) { $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->gusouagusgyoaeya([$swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uimgcyyaugqcacea, ['class' => 'icon-xs mr-1'], [Constants::kicoscymgmgqeqgy => true]), sprintf(__('Upload Image files that are %1$s x %2$s pixels or larger (max. %3$s).', PR__CMN__COVER), $coauwigqauceoyiu, $mymosemimcaequmk, size_format(wp_max_upload_size()))])], ['class' => 'thumbnail-suggestion']); } return $nsmgceoqaqogqmuw; } public function egswssgkimymecua($aiooqyausygaasqm, $useksmwkuswkwcqg) : array { $sogksuscggsicmac = ['is_valid' => true, Constants::eoskkkieowogacws => '']; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $weaakkwoqiawsiua = $this->awouiaqwgakuumeg($useksmwkuswkwcqg); $coauwigqauceoyiu = $gkyciwoiiisgywcs->get($weaakkwoqiawsiua, Constants::qomookamaskuoswk, 0); $mymosemimcaequmk = $gkyciwoiiisgywcs->get($weaakkwoqiawsiua, Constants::sogmkkcwuamuqegw, 0); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm) && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw('attachment_is_svg'), false, $aiooqyausygaasqm)) { $ogomymegcoacqisg = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, 'full'); $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($ogomymegcoacqisg, 1); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($ogomymegcoacqisg, 2); if ($qeswwaqqsyymqawg < $coauwigqauceoyiu || $cswemwoyesycwkuq < $mymosemimcaequmk) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); $sogksuscggsicmac['is_valid'] = false; $sogksuscggsicmac['message'] = sprintf(__('Your selected image dimension not valid. minimum dimension for %s must be %s x %s. but your image is %s x %s', PR__CMN__COVER), $useksmwkuswkwcqg->label, $coauwigqauceoyiu, $mymosemimcaequmk, $qeswwaqqsyymqawg, $cswemwoyesycwkuq); } } return $sogksuscggsicmac; } public function mgigoeseckumsiee($oiegiwogmwmawkeo, $wisgiwskwawciiee = []) : string { $nsmgceoqaqogqmuw = ''; if ($aokagokqyuysuksm = $this->cskmiyuaesumyigg()) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, false); } return $nsmgceoqaqogqmuw; } public function quugyycgyygggmcg($eeamcawaiqocomwy = null) : ?string { if (!$eeamcawaiqocomwy) { $iwiewowoqmoekyqi = $this->sqogiksomgaoegcy(); if ($iwiewowoqmoekyqi) { $eeamcawaiqocomwy = $iwiewowoqmoekyqi; } } return $eeamcawaiqocomwy; } public function aguuwgaqkmoscswu($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi, $wisgiwskwawciiee = []) : ?string { return $this->hwiuciiskyikogac($nsmgceoqaqogqmuw, $oiegiwogmwmawkeo, $wisgiwskwawciiee); } public function gisewyuawqaakqyg($nsmgceoqaqogqmuw, $post, $uickqscmwgggsmgy, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) : ?string { return $this->hwiuciiskyikogac($nsmgceoqaqogqmuw, $oiegiwogmwmawkeo, $wisgiwskwawciiee); } public function kukqogomoueecuka($uickqscmwgggsmgy) { if (!$uickqscmwgggsmgy) { $uickqscmwgggsmgy = $this->cskmiyuaesumyigg(); } return $uickqscmwgggsmgy; } public function hwiuciiskyikogac($nsmgceoqaqogqmuw, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) : ?string { if (!$nsmgceoqaqogqmuw) { $nsmgceoqaqogqmuw = $this->mgigoeseckumsiee($oiegiwogmwmawkeo, $wisgiwskwawciiee); } return $nsmgceoqaqogqmuw; } public function cskmiyuaesumyigg() { return $this->weysguygiseoukqw(Setting::gqgseikcqgoiuqeg, 0); } public function sqogiksomgaoegcy() { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($this->cskmiyuaesumyigg()); } }
