<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e870e21cd7a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Frontend extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('after_setup_theme', [$this, 'kgkmwucmkcqaksmo']); $this->waqewsckuayqguos(self::ukyommesgeqqcayq . 'list_render', [$this, 'render'])->waqewsckuayqguos(self::ukyommesgeqqcayq . 'form_and_list_render', [$this, 'isiyasyuakuksiam']); parent::wigskegsqequoeks(); } public function kgkmwucmkcqaksmo() { if ($this->weysguygiseoukqw(Setting::ayumqueugowuywqs)) { $this->cecaguuoecmccuse('get_avatar', [$this, 'ayseiumoaouacqcu'], 10, 3)->cecaguuoecmccuse('get_comment_author', [$this, 'meuoeukiwkeumggk'], 10, 2); } } public function isiyasyuakuksiam(array $ywmkwiwkosakssii = []) { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $icwicymcioeyeyek); echo $this->iuygowkemiiwqmiw('form_and_list', [Constants::qescuiwgsyuikume => __('Comment form and list', PR__CMN__COVER), 'comment_list' => $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii), 'comment_form' => Form::symcgieuakksimmu()->wgqqgewcmcemoewo([Constants::qaacaqioeyiuakeu => false]), Constants::eggygikowgywcayq => $ywmkwiwkosakssii[Constants::eggygikowgywcayq]]); } } public function render(array $ywmkwiwkosakssii = []) { echo $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($comment) : bool { $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(Setting::osoyyuwymacswyum, []); $comment = $kuowggqsyksiyygi->get($comment); if ($comment && $uagwmwoawiwkycao && $comment->comment_parent) { $mkucggyaiaukqoce = $kuowggqsyksiyygi->msyqmssukoqkqkau($comment); $cuakwceieagskoaa = $mkucggyaiaukqoce && $this->caokeucsksukesyo()->issssuygyewuaswa()->esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); } return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $comment) { if ($this->uuyycaeqcawcaiqe($comment)) { $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); } return $qscaoekmoooeuyqg; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $comment, $oiegiwogmwmawkeo) { if ($this->uuyycaeqcawcaiqe($comment)) { $uouuguwawimuemic = $this->weysguygiseoukqw(Setting::aammuqouwoakgwgq, 0); if ($uouuguwawimuemic) { $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . 'avatar_size', $oiegiwogmwmawkeo, false); if (is_numeric($oiegiwogmwmawkeo)) { $oiegiwogmwmawkeo = [$oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; } $wwgucssaecqekuek = ['class' => $mowgokyeuymuwiew ? $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($mowgokyeuymuwiew, 'img', 'class') : '', 'alt' => __('Author Logo', PR__CMN__COVER)]; if ($uouuguwawimuemic = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek)) { $mowgokyeuymuwiew = $uouuguwawimuemic; } } } return $mowgokyeuymuwiew; } public function ckgkesscwwgyimsq($nsmgceoqaqogqmuw = '', array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::eggygikowgywcayq => null, Constants::wwcycgyaiaksckuk => Constants::uouymeyqasaeckso, Constants::kkcqmwgccaygggcu => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg('cpage'), Constants::qescuiwgsyuikume => __('Comment', PR__CMN__COVER), 'date_format' => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), 'empty_message' => __('There are no comments yet.', PR__CMN__COVER), 'get_comments_args' => [], 'comment_waiting_text' => __('Your comment is awaiting moderation.', PR__CMN__COVER)]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . 'render_args', $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $qawuqcsueakkgiio = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu); $moqewomugocaueis = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eggygikowgywcayq); $mqyaskyaekmkegmg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wwcycgyaiaksckuk); $kcagcoeuiasswusq = ''; $qookweymeqawmcwo = ['empty_message' => $ywmkwiwkosakssii['empty_message'], 'has_comment' => false, Constants::qescuiwgsyuikume => $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]]; if ($moqewomugocaueis) { if ($this->uiqcwsowwswommka()) { $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $weeomyummeocueyk = array_merge($ywmkwiwkosakssii['get_comments_args'], [Constants::qaacaqioeyiuakeu => false, Constants::kkcqmwgccaygggcu => $qawuqcsueakkgiio, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::eymwucuaaiiciymc => $kuowggqsyksiyygi->omkaowmygoqwsywq(), Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::wwgusigoaksqmwsm => [$this, 'gsyyqqeueckagyys'], Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $mqyaskyaekmkegmg, 'comment_waiting_text' => $ywmkwiwkosakssii['comment_waiting_text'] ?? '']); $kcagcoeuiasswusq = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ekysoioumkkwawwm(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $qookweymeqawmcwo['pagination'] = $this->ocksiywmkyaqseou('get_comment_pagination', '', [Constants::qaacaqioeyiuakeu => false, Constants::eggygikowgywcayq => $moqewomugocaueis]); } switch ($mqyaskyaekmkegmg) { case Constants::gmmygyiecgmggaam: $qookweymeqawmcwo['has_comment'] = !empty($kcagcoeuiasswusq); break; case Constants::uouymeyqasaeckso: $qookweymeqawmcwo['has_comment'] = $seumokooiykcomco->gamoemyysmgugccu($moqewomugocaueis); break; } $qookweymeqawmcwo[Constants::qiyqwyiiwykeccmo] = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($ywmkwiwkosakssii[Constants::mswoacegomcucaik] ?? $moqewomugocaueis); } $qookweymeqawmcwo[Constants::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo['spinner'] = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi(['transparent' => true, Constants::waguuiqqgsysuukq => '2x']); return $this->iuygowkemiiwqmiw('list', $qookweymeqawmcwo); } public function gsyyqqeueckagyys($comment, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[Constants::COMMENT] = $comment; $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . 'avatar_size', Constants::meugkwqwuyoyeeqs, false); echo $this->iuygowkemiiwqmiw('item', ['depth' => $gquaqgsmiuqsaoum, 'time_mask' => __('%1$s at %2$s', PR__CMN__COVER), 'max_depth' => $ywmkwiwkosakssii['max_depth'] ?? 0, 'reply_icon' => IconInterface::wgcuaiqkaoqksgqo, 'avatar_size' => $oiegiwogmwmawkeo, 'reply_text' => __('Reply', PR__CMN__COVER), Constants::gouqcwikiiygyasc => $this->caokeucsksukesyo()->yagekskwwyqosqcs()->iooowgsqoyqseyuu($comment), Constants::TEXT => $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ykgcioecqcwwkime($comment), Constants::imywcsggckkcywgk => $ywmkwiwkosakssii[Constants::kkcqmwgccaygggcu] ?? 1, Constants::okeuagwgwkmiokac => $ywmkwiwkosakssii, Constants::COMMENT => $comment, Constants::eggygikowgywcayq => $ywmkwiwkosakssii[Constants::eggygikowgywcayq] ?? 0]); } }
