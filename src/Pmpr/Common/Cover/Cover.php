<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceca1dd3ca3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Cover\Breadcrumb\Breadcrumb; use Pmpr\Common\Cover\Comment\Comment; use Pmpr\Common\Cover\Logo\Logo; use Pmpr\Common\Cover\Media\Media; use Pmpr\Common\Cover\Metadata\Metadata; use Pmpr\Common\Cover\Navigation\Navigation; use Pmpr\Common\Cover\Optimization\Optimization; use Pmpr\Common\Cover\Pagination\Pagination; use Pmpr\Common\Cover\Search\Search; use Pmpr\Common\Cover\Setting\Setting; use Pmpr\Common\Cover\Widget\About; use Pmpr\Common\Cover\Widget\Copyright; use Pmpr\Common\Cover\Widget\License; use Pmpr\Common\Cover\Widget\Link; use Pmpr\Common\Cover\Widget\Post; use Pmpr\Common\Cover\Widget\Taxonomy; use Pmpr\Common\Cover\Widget\Title; use Pmpr\Common\Cover\Widget\Search as SearchWidget; use Pmpr\Common\Cover\Widget\Metadata as MetadataWidget; use Pmpr\Common\Cover\Woocommerce\Woocommerce; use Pmpr\Common\Foundation\Container\CommonInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Term; class Cover extends CommonInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Common Cover', PR__CMN__COVER); }, Constants::wuowaiyouwecckaw => false]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye'], 0); if ($this->quceougqagwauyom()) { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('wp_head', [$this, 'ckqoykiiammyemge'])->qcsmikeggeemccuu('wp_footer', [$this, 'aaykyawwwekuwuoq']); $this->waqewsckuayqguos('render_logo', [$this, 'nkycsweiaggucsuq'])->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, 'enqueue'])->waqewsckuayqguos('add_twig_functions', [$this, 'skwummgooccgymac'], 0); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_prepare_themes_for_js', [$this, 'cqysimecwwmawmyc'])->cecaguuoecmccuse('theme_root_uri', [$this, 'iugqgsguiagcmkow'], 999, 3); if ($this->quceougqagwauyom()) { $this->cecaguuoecmccuse('show_admin_bar', [$this, 'umicygkgqeauoiek'], 9999)->cecaguuoecmccuse('post_type_archive_title', [$this, 'iewaosisukcougwk'], 999)->cecaguuoecmccuse('get_the_post_type_description', [$this, 'ascakcocgsaosies'], 999); $this->aqaqisyssqeomwom('icon_remote_base', [$this, 'yoouiwwoikkougqo'])->aqaqisyssqeomwom('icon_set', [$this, 'ogeygayguwksyski'], 10, 2)->aqaqisyssqeomwom('get_cover_option', [$this, 'uqugwueyikoeessi'], 10, 2); } } public function mameiwsayuyquoeq() { if ($this->quceougqagwauyom()) { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Editor::ksyueceqagwomguk(); } if ($owaoeyikmqaeegma->gaawugksaskamooe()) { Link::symcgieuakksimmu(); Post::symcgieuakksimmu(); Title::symcgieuakksimmu(); About::symcgieuakksimmu(); License::symcgieuakksimmu(); Taxonomy::symcgieuakksimmu(); Copyright::symcgieuakksimmu(); SearchWidget::symcgieuakksimmu(); MetadataWidget::symcgieuakksimmu(); } Logo::ksyueceqagwomguk(); Media::ksyueceqagwomguk(); Comment::ksyueceqagwomguk(); Metadata::ksyueceqagwomguk(); Navigation::ksyueceqagwomguk(); Development::ksyueceqagwomguk(); if ($owaoeyikmqaeegma->syukqeyowauuucwi() || $owaoeyikmqaeegma->uywcakyieooyscis()) { Search::ksyueceqagwomguk(); Element::ksyueceqagwomguk(); Template::ksyueceqagwomguk(); Pagination::ksyueceqagwomguk(); Breadcrumb::ksyueceqagwomguk(); } } } public function init() { $umqqgsiscygmeiem = $this->kmuweyayaqoeqiyw(); if ($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw()) { Setting::symcgieuakksimmu(); } } public function ckqoykiiammyemge() { $oammesyieqmwuwyi = ['width' => 'device-width', 'initial-scale' => '1.0', 'maximum-scale' => '5.0', 'minimum-scale' => '1.0']; $ewgwqamkygiqaawc = ''; $geqcesmqwkeayoiu = ', '; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ewgwqamkygiqaawc .= "{$uusmaiomayssaecw}={$eqgoocgaqwqcimie}{$geqcesmqwkeayoiu}"; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw('meta', [Constants::NAME => 'viewport', Constants::ssmskyqgcmeiayco => rtrim($ewgwqamkygiqaawc, $geqcesmqwkeayoiu)]); } public function uqugwueyikoeessi(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = $ggauoeuaesiymgee; $qgciuiagkkguykgs = $this->caokeucsksukesyo()->owgcciayoweymuws()->qoqowykumameucwa("get_{$uusmaiomayssaecw}"); if ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()) { if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($ykquycoiqesuckco, $qgciuiagkkguykgs)) { $sogksuscggsicmac = $ykquycoiqesuckco->{$qgciuiagkkguykgs}($ywmkwiwkosakssii); } else { $sogksuscggsicmac = $ykquycoiqesuckco->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); } } return $this->ocksiywmkyaqseou('cover_option', $sogksuscggsicmac, $uusmaiomayssaecw, $ggauoeuaesiymgee, $ykquycoiqesuckco); } public function ykqeaoaywqgaoouy() : array { $meqocwsecsywiiqs = $ukwokcuqauuosmoo = $kugsomueokogcawo = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->migkyseymeomymmy()) { $sqeykgyoooqysmca = ''; $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if ($mksyucucyswaukig instanceof WP_Term) { $sqeykgyoooqysmca = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); } else { if ($mumyimcwkaemyyue->moegwqkekcawsggs()) { $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); } } if ($sqeykgyoooqysmca) { $meqocwsecsywiiqs = $this->weysguygiseoukqw(Setting::ygiuusywiucccwqk . $sqeykgyoooqysmca, ''); $kugsomueokogcawo = $this->weysguygiseoukqw(Setting::gasuscmquiokwcak . $sqeykgyoooqysmca); $ukwokcuqauuosmoo = $this->weysguygiseoukqw(Setting::wusmaqmagugmywwe . $sqeykgyoooqysmca, ''); } } return [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::qoawsacmmgmimqaw => $kugsomueokogcawo, Constants::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; } public function iewaosisukcougwk($meqocwsecsywiiqs) { $uiewakwqscemywuo = $this->ykqeaoaywqgaoouy(); if ($uiewakwqscemywuo[Constants::qescuiwgsyuikume]) { $meqocwsecsywiiqs = $uiewakwqscemywuo[Constants::qescuiwgsyuikume]; } return $meqocwsecsywiiqs; } public function ascakcocgsaosies($ukwokcuqauuosmoo) { $uiewakwqscemywuo = $this->ykqeaoaywqgaoouy(); if ($uiewakwqscemywuo[Constants::qoawsacmmgmimqaw]) { if ($uiewakwqscemywuo[Constants::eqkeooqcsscoggia]) { $ukwokcuqauuosmoo = $uiewakwqscemywuo[Constants::eqkeooqcsscoggia]; } } else { $ukwokcuqauuosmoo = ''; } return $ukwokcuqauuosmoo; } public function yoouiwwoikkougqo($mqumqwwemwgskykc) { $eeamcawaiqocomwy = trim($this->weysguygiseoukqw(Setting::wgwowcckwymsoeyg, '')); if ($eeamcawaiqocomwy) { $mqumqwwemwgskykc = $eeamcawaiqocomwy; } return $mqumqwwemwgskykc; } public function ogeygayguwksyski($muocgugcqiewywag, $ymiuaqwqkqoqkmck = 'fasm') { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ('fasm' === $ymiuaqwqkqoqkmck && ($owaoeyikmqaeegma->syukqeyowauuucwi() || $owaoeyikmqaeegma->gimisysaiasieees() || $owaoeyikmqaeegma->uywcakyieooyscis())) { if ($ouucgiwcgsoowqic = $this->weysguygiseoukqw(Setting::migwcseqcocyqcge)) { $muocgugcqiewywag = $ouucgiwcgsoowqic; } } return $muocgugcqiewywag; } public function umicygkgqeauoiek($ekcswiguywieeeoc) : bool { $ekcswiguywieeeoc = !$this->weysguygiseoukqw(Setting::mguiyugauoweycka, $ekcswiguywieeeoc); if (!$ekcswiguywieeeoc) { $uikaeimosywgkwey = $this->weysguygiseoukqw(Setting::wsoekweikuyuyuwg, []); if (is_array($uikaeimosywgkwey) && $uikaeimosywgkwey) { foreach ($uikaeimosywgkwey as $oeucsuyqysaciasy) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($oeucsuyqysaciasy)) { $ekcswiguywieeeoc = true; break; } } } } return $ekcswiguywieeeoc; } public function nkycsweiaggucsuq(array $ywmkwiwkosakssii = []) { echo $this->ocksiywmkyaqseou('get_logo_html', '', $ywmkwiwkosakssii); } public function aaykyawwwekuwuoq() { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->cawwmsmyseesuyee('wp-embed'); } public function aqyikqugcomoqqqi() { if (!$this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('optimization')) { Optimization::symcgieuakksimmu(); } } public function icwcgmcoimqeigye() { $this->aoumqccgqscuwyim(); if ($this->quceougqagwauyom() && $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme('get_cover_option', [$this, 'uqugwueyikoeessi'])->kmmegqceukkkawme('get_theme_mode', function ($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); }); } public function cqysimecwwmawmyc($sgmuqamasucuikqa = []) : array { if ($giueegeuogwkqoog = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->ecsauegycguaqwsy(Constants::ykywsqyeckcgqyik)) { $igumcmscoyoieiky = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->mkwomgueyaaooyye(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($sgmuqamasucuikqa as $aaokuekaimigoyue => $mumucmmgemqwqiia) { if ($yyauwyaeewsickwk->skksumsyamssouqc($aaokuekaimigoyue, 'wp-' . Constants::kicaioiokgkqqywe)) { $oqwkmoswisqwoewg = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, 'screenshot', []); if (is_array($oqwkmoswisqwoewg)) { foreach ($oqwkmoswisqwoewg as $momcykaoccoymeig => $sucqugkssiyoyaso) { if ($sucqugkssiyoyaso) { foreach ($giueegeuogwkqoog as $egsqwmeeeowomomi) { if ($egsqwmeeeowomomi === $aaokuekaimigoyue) { $sgmuqamasucuikqa[$aaokuekaimigoyue]['screenshot'][$momcykaoccoymeig] = $igumcmscoyoieiky . "/{$egsqwmeeeowomomi}.png"; break; } } } } } } } } return $sgmuqamasucuikqa; } public function iugqgsguiagcmkow($oywygeeswomqqmcu, $ieokeoyugcmwuumq, $uccyimuwqccawaaq) { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($oywygeeswomqqmcu)) { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aigqycwckeyoqmoi(trailingslashit($oywygeeswomqqmcu) . $uccyimuwqccawaaq, Constants::kicaioiokgkqqywe); if ($wksoawcgagcgoask) { $oywygeeswomqqmcu = $wksoawcgagcgoask->mceoyuqgagciommq(); } } return $oywygeeswomqqmcu; } public function aoumqccgqscuwyim() { if ($wyocmuqcwyskkcyo = untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms('PR_BASE_PATH'))) { $mwccauiqsaesegqs = "{$wyocmuqcwyskkcyo}/pmpr/" . Constants::ykywsqyeckcgqyik; if (!is_dir($mwccauiqsaesegqs)) { $mwccauiqsaesegqs = "{$wyocmuqcwyskkcyo}/component/" . Constants::ykywsqyeckcgqyik; } if (is_dir($mwccauiqsaesegqs)) { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mokkauciousseuge($mwccauiqsaesegqs); } } } public function quceougqagwauyom() : bool { static $cmygoyygwqemsiee; if (!is_bool($cmygoyygwqemsiee) && ($mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw())) { $cmygoyygwqemsiee = $this->caokeucsksukesyo()->owgcciayoweymuws()->wkgaescyescmucmg($mumucmmgemqwqiia->get_template(), 'wp-cvr-'); } return $cmygoyygwqemsiee; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); if ($uicgeimguomekwuu = $this->weysguygiseoukqw(Setting::qqswqycisgaqiuse)) { $egsumesakcaaukem = $meakksicouekcgoe->owygwqwawqoiusis($this, 'google-analytics', "https://www.googletagmanager.com/gtag/js?id={$uicgeimguomekwuu}"); $egsumesakcaaukem->jyumyyugiwwiqomk(999); $egsumesakcaaukem->yiuoscqaekcgiyuy('async', true)->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'analytics.js', ['analytics_id' => $uicgeimguomekwuu])); $meakksicouekcgoe->yawoscugkyysowie($egsumesakcaaukem); } $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'load-icon')->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'icon.js'))->qcgcugswouueymok()); if ($this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ygokeyuugqiciuiu('aside')) { $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'aside')->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'aside.js'))->qcgcugswouueymok()); } } }
