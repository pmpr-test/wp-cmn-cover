<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecade94be0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class Cleanup extends Common { public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('wp_print_styles', 'print_emoji_styles')->kuieicsuscgmwigg('wp_head', 'print_emoji_detection_script', 7); } public function eogyyugasomygcma() { $this->ggmgmqswqkgecosg('comment_text_rss', 'wp_staticize_emoji')->ggmgmqswqkgecosg('the_content_feed', 'wp_staticize_emoji')->ggmgmqswqkgecosg('wp_mail', 'wp_staticize_emoji_for_email'); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_enqueue_scripts', [$this, 'miwoccuusaqkygsq'], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('emoji_svg_url', '__return_false')->cecaguuoecmccuse('wp_resource_hints', [$this, 'maykcmyyeqskgmew'], 10, 2)->cecaguuoecmccuse('style_loader_src', [$this, 'smawyocmeseoacwc'], 999)->cecaguuoecmccuse('script_loader_src', [$this, 'smawyocmeseoacwc'], 999); parent::kgquecmsgcouyaya(); } public function aqgugcgmsyciswgs($moooemyaqewumiay) : string { return (string) preg_replace('/(<img|<meta|<link|<br|<input|<hr|<base|<param|<area|<embed|<col|<track|<resource)(.[^>]*\\n*\\t*\\s*)(\\/>)/', '$1$2>', $moooemyaqewumiay); } public function maykcmyyeqskgmew($auwuoyyagaiegwae, $ayegqaqygsqsmews) : array { if ('dns-prefetch' === $ayegqaqygsqsmews) { $auwuoyyagaiegwae = array_diff($auwuoyyagaiegwae, ['https://s.w.org/images/core/emoji/2.2.1/svg/']); } return $auwuoyyagaiegwae; } public function smawyocmeseoacwc($ogomymegcoacqisg) { if (strpos($ogomymegcoacqisg, 'ver=' . $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auugqowqueaocgsu))) { $ogomymegcoacqisg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->oiamiqcuyksmmomm('ver', $ogomymegcoacqisg); } return $ogomymegcoacqisg; } public function miwoccuusaqkygsq() { if ($this->macyowwkykkuosce() && $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); if ($cgceoyqmmwumqyqa->ckeyeaouokcgeqeq() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()) { $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); $geoqacegumkcaskk->saisougiwmauksiy('zxcvbn-async'); $geoqacegumkcaskk->saisougiwmauksiy('password-strength-meter'); $geoqacegumkcaskk->saisougiwmauksiy('wc-password-strength-meter'); } } } }
