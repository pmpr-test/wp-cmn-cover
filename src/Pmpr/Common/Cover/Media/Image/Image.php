<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceca1dd3ca3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media\Image; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Image extends Container { const qisqmmesuewemeqg = 'large'; const MEDIUM = 'medium'; const emskikwmugwkeegu = 'aspect_ratio_urls'; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_image_editors', [$this, 'okmuegqmewwoieum'])->cecaguuoecmccuse('wp_get_attachment_image_src', [$this, 'wmymmoesqugiuwey'], 99, 3)->cecaguuoecmccuse('wp_get_attachment_image_attributes', [$this, 'eegmigggckyksqqs'], 99, 3); $this->aqaqisyssqeomwom('wordpress_settings_fields', [$this, 'socqoiaiiqgkquoi']); parent::kgquecmsgcouyaya(); } public static function okmuegqmewwoieum($smqcaaeyaweakyoo) { array_unshift($smqcaaeyaweakyoo, Editor::class); return $smqcaaeyaweakyoo; } public function socqoiaiiqgkquoi($qeqooyuoiasweuck) : array { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $aiwaackyimoamgmy = [[Constants::qeiauywscugcaqkq => 'media', Constants::gueokgaoyascgeqe => $uuyucgkyusckoaeq->yqgagqgesqyuyuqq('seo_settings_section')->gswweykyogmsyawy(__('SEO settings', PR__CMN__COVER))->oguessuismosauuu($this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(__('Improve your seo by using these settings.', PR__CMN__COVER)))], [Constants::qeiauywscugcaqkq => 'media', Constants::gueokgaoyascgeqe => $uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::emskikwmugwkeegu)->gswweykyogmsyawy(__('Aspect ratio based URLs', PR__CMN__COVER))->gucwmccyimoagwcm(sprintf('%s https://example.com/upload/1x1/image.jpg', __('Use aspect ratio based image URLs like', PR__CMN__COVER)))]]; return array_merge($qeqooyuoiasweuck, $aiwaackyimoamgmy); } public function wmymmoesqugiuwey($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum) { [$qeswwaqqsyymqawg, $cswemwoyesycwkuq] = $this->gumaowsogweckaee($oiegiwogmwmawkeo); if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { if (!is_array($mcqieaigyeeyaksm)) { $mcqieaigyeeyaksm = []; } $mcqieaigyeeyaksm[1] = $qeswwaqqsyymqawg; $mcqieaigyeeyaksm[2] = $cswemwoyesycwkuq; } return $mcqieaigyeeyaksm; } public function eegmigggckyksqqs($siquossayskcwkea, $aiooqyausygaasqm, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum) { [$qeswwaqqsyymqawg, $cswemwoyesycwkuq] = $this->gumaowsogweckaee($oiegiwogmwmawkeo); if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { $siquossayskcwkea['data-width'] = $qeswwaqqsyymqawg; $siquossayskcwkea['data-height'] = $cswemwoyesycwkuq; } return $siquossayskcwkea; } private function gumaowsogweckaee($oiegiwogmwmawkeo) : array { $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 0; if (is_string($oiegiwogmwmawkeo)) { if (preg_match('/(\\d+)x(\\d+)/', $oiegiwogmwmawkeo, $meyiiwcswqmuggyg)) { [$qeswwaqqsyymqawg, $cswemwoyesycwkuq] = $meyiiwcswqmuggyg; } } else { if (is_array($oiegiwogmwmawkeo) && isset($oiegiwogmwmawkeo[0], $oiegiwogmwmawkeo[1])) { [$qeswwaqqsyymqawg, $cswemwoyesycwkuq] = $oiegiwogmwmawkeo; } } return [$qeswwaqqsyymqawg, $cswemwoyesycwkuq]; } }
