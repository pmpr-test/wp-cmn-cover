<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169333f8db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media\Video; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Aparat extends Container { protected bool $videoAdded = false; public function wigskegsqequoeks() { $this->waqewsckuayqguos('video_aparat_render_styles', [$this, 'gcisayoakgwmgqgs'])->waqewsckuayqguos('video_aparat_render_iframe', [$this, 'qoykgucqyekqgkis']); $this->qcsmikeggeemccuu('wp_footer', [$this, 'ueiqiksiwiqokmoi'], 999); } public function ueiqiksiwiqokmoi() { if ($this->qusmwukqoyusowgi()) { $this->gcisayoakgwmgqgs(); } } public function gcisayoakgwmgqgs() { $icyaoosaykeskiuu = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->souwykwwmyygqyqi($this, 'video.css'); if ($icyaoosaykeskiuu) { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qiokaomckmywuwqo($icyaoosaykeskiuu, ['class' => 'pr-aparat-video']); } } public function qoykgucqyekqgkis($ywmkwiwkosakssii = []) { $this->videoAdded = true; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::yeowwkiiyimoykye => ['allowfullscreen' => true], Constants::gouqcwikiiygyasc => '', Constants::auqoykcmsiauccao => '', Constants::mqyyywgkccgqqsky => '', Constants::ysskgssgwuwmqwym => []]); $aokagokqyuysuksm = 'video-iframe-' . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); $ogomymegcoacqisg = $ywmkwiwkosakssii[Constants::mqyyywgkccgqqsky]; if (!$ogomymegcoacqisg) { $wmqqwuoqikuoogyg = $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]; if (!$wmqqwuoqikuoogyg) { if ($eeamcawaiqocomwy = $ywmkwiwkosakssii[Constants::auqoykcmsiauccao]) { $wmqqwuoqikuoogyg = preg_replace('/https?:\\/\\/www.aparat.com\\/v\\/?/', '', untrailingslashit($eeamcawaiqocomwy)); } } if ($wmqqwuoqikuoogyg) { $ogomymegcoacqisg = "https://www.aparat.com/video/video/embed/videohash/{$wmqqwuoqikuoogyg}/vt/frame"; } } if ($ogomymegcoacqisg) { $wwgucssaecqekuek = $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu()) { $ogomymegcoacqisg .= '?isamp'; $wwgucssaecqekuek['layout'] = 'responsive'; $wwgucssaecqekuek['sandbox'] = 'allow-scripts allow-same-origin'; } $wwgucssaecqekuek['src'] = $ogomymegcoacqisg; $uiewakwqscemywuo = $ywmkwiwkosakssii[Constants::yeowwkiiyimoykye]; if ($uiewakwqscemywuo) { $wwgucssaecqekuek = array_merge($wwgucssaecqekuek, $uiewakwqscemywuo); } $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym] = $wwgucssaecqekuek; $siokqmqwewamguwy = $this->iuygowkemiiwqmiw('iframe', $ywmkwiwkosakssii); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $bekumeqsugqcceis = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ['class' => 'video-iframe-block']); $swqimwqeweekeusq->sykissckqqccoiqs('div', [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, 'class' => 'pr-video-embed-block'], $bekumeqsugqcceis . $siokqmqwewamguwy); } } public function qusmwukqoyusowgi() : bool { return $this->videoAdded; } }
