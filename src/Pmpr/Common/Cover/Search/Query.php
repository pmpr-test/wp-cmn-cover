<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d8eb9d924             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\x65\137\x67\x65\164\x5f\x70\157\163\164\x73", [$this, "\151\147\171\x77\x61\163\143\163\151\x65\157\x6b\x6b\x6f\x77\x73"], 0)->cecaguuoecmccuse("\x70\x6f\163\164\x73\x5f\163\x65\141\162\143\x68", [$this, "\167\x61\167\x71\167\141\x6d\163\165\165\165\155\145\163\x6b\x61"], 500, 2); $this->aqaqisyssqeomwom("\147\x65\x74\x5f\163\x65\141\x72\143\x68\x5f\162\x65\163\165\x6c\164", [$this, "\x79\x73\143\147\157\x65\x77\x6b\x6f\141\151\x79\x77\x6d\x6f\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto qmuwoecuacmkwgem; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto wakmayaoqoskekqy; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\x78\141\143\164"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\40\101\x4e\x44\40"; $_or = "\x20\117\x52\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto ewymsmkkiksgwysk; } if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { goto syiqkaasoueowwui; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\x73\164\137\164\x69\x74\154\145\x20\114\x49\113\105\40\x25\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; syiqkaasoueowwui: if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { goto giaacoqqqsekcayy; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\x70\157\163\164\137\143\157\156\164\145\156\x74\x20\x4c\x49\x4b\105\x20\x25\x73{$_or}{$wpdb->posts}\56\x70\157\x73\164\x5f\145\170\143\x65\x72\160\x74\x20\114\x49\x4b\105\40\x25\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; giaacoqqqsekcayy: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\157\163\164\137\x71\165\145\162\x79", $qwcmueausqgiwigy, $iwewcwusemqaiggk); ewymsmkkiksgwysk: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto egyyiccaeeiooaua; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto gkyawqqcmigqgaiq; } if ($uyuaosigqymaqsaa) { goto wmywuusgukmmaams; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto cmegwsegsosyqcai; } $cniyckqcgyosooam = true; cmegwsegsosyqcai: wmywuusgukmmaams: goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $cniyckqcgyosooam = true; ooeausyowguqicuo: egyyiccaeeiooaua: if (!$cniyckqcgyosooam) { goto scisgsyemmsekgos; } $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\x74\x2e\164\145\x72\x6d\x5f\151\x64\x20\x3d\40\x25\x73\x29", $ccamueccusigaaio); scisgsyemmsekgos: if (!$wmsuioaookqmyqkw) { goto kqgcyoscsusgoaqi; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto wgewmqieuamsoayy; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\x74\164\x2e\x74\141\x78\x6f\x6e\x6f\155\171\40\x3d\40\x25\163{$_and}\141\x73\x74\56\163\x6c\x75\147\x20\x4c\x49\x4b\x45\x20\45\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto omqiayeucoioqoao; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\x74\x74\56\x74\x61\x78\157\x6e\x6f\155\171\40\x3d\40\x25\163{$_and}\50\x61\163\x74\56\156\141\x6d\x65\40\114\x49\113\105\40\45\163\40\157\x72\x20\x61\163\164\56\163\x6c\165\147\40\x4c\x49\113\x45\x20\45\x73\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto omqiayeucoioqoao; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\x74\164\56\x74\141\x78\x6f\x6e\157\x6d\x79\40\75\x20\45\163{$_and}\x61\163\164\56\x6e\141\x6d\145\x20\114\111\113\105\x20\x25\163\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto omqiayeucoioqoao; } ugqaaewwmkocwwgy: omqiayeucoioqoao: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; igooksugieceoege: } cewmoqyysgsmuiya: wgewmqieuamsoayy: kqgcyoscsusgoaqi: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto ueigkucgaucgeimc; } $this->cecaguuoecmccuse("\160\x6f\163\x74\x73\137\152\157\x69\156\137\162\x65\x71\x75\145\163\x74", [$this, "\x6b\147\x79\157\171\151\161\161\x6f\143\165\x6d\x63\165\x6b\141"]); ueigkucgaucgeimc: if (empty($qwcmueausqgiwigy)) { goto wkeuuycukmuqiaom; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto sggawugoykqcmsug; } $qwcmueausqgiwigy .= sprintf("\45\163\x28\45\x73\56\160\x6f\x73\x74\x5f\x70\x61\163\x73\167\157\162\144\x20\x3d\40\x27\x27\51\x20", $_and, $wpdb->posts); sggawugoykqcmsug: wkeuuycukmuqiaom: $this->cecaguuoecmccuse("\x70\x6f\x73\164\163\x5f\144\x69\x73\164\x69\x6e\x63\164\137\x72\145\161\x75\145\163\164", [$this, "\163\x77\153\x69\x6b\x73\x6f\163\x71\157\x63\x79\x61\167\157\x65"]); wakmayaoqoskekqy: qmuwoecuacmkwgem: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\114\105\106\x54\x20\112\x4f\111\x4e\x20\x25\x73\x20\x61\x73\x74\162\40\117\116\40\50\45\163\x2e\111\x44\x20\x3d\40\141\163\164\162\x2e\x6f\142\x6a\145\x63\164\x5f\x69\144\51\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\x4c\105\x46\124\40\112\117\111\116\40\x25\163\40\x61\163\164\164\x20\117\x4e\x20\x28\141\x73\x74\x72\56\x74\145\162\x6d\x5f\x74\141\170\157\x6e\x6f\155\171\137\x69\144\40\75\40\141\163\x74\x74\x2e\164\x65\162\155\137\164\141\170\x6f\x6e\157\155\x79\x5f\x69\144\x29\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\x4c\105\x46\x54\40\x4a\117\x49\116\40\x25\163\40\141\163\164\x20\117\x4e\40\50\x61\x73\x74\164\x2e\164\x65\162\x6d\137\x69\144\40\x3d\40\141\163\164\x2e\x74\x65\162\155\137\x69\144\51\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\x6f\151\x6e\137\x72\145\161\165\x65\x73\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\x49\123\x54\x49\116\x43\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto qoqskyuuwueqkquk; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto owmuceyswmgueasi; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); owmuceyswmgueasi: switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (!(Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto eogwckcymuugikuy; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); eogwckcymuugikuy: goto mwsmsguqqkcwiiuk; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { goto msemumccgceyugmg; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); goto wagqgeqymeqoeuyi; msemumccgceyugmg: $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); wagqgeqymeqoeuyi: goto mwsmsguqqkcwiiuk; } eeauyscekuckoues: mwsmsguqqkcwiiuk: qoqskyuuwueqkquk: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true))) { goto qgeugwymkkiacwoc; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto mqicocmqegwukkwg; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (!(Constants::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto iwsuawwqomaowuii; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; iwsuawwqomaowuii: $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto wcugqegqsuuuwqao; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; goto wcugqegqsuuuwqao; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; goto wcugqegqsuuuwqao; } asiqwuoswmigcaki: wcugqegqsuuuwqao: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto ciykoyeioqgyaeqo; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); ciykoyeioqgyaeqo: mqicocmqegwukkwg: qgeugwymkkiacwoc: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto mugqyyeayeyggqqk; } if ($gqgemcmoicmgaqie) { goto emmsycooskoqmgeg; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; emmsycooskoqmgeg: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", Constants::oimusiegakqgwosg))) { goto ouamogymawucwswu; } $gouusicsisumuiei = true; ouamogymawucwswu: mugqyyeayeyggqqk: return $gouusicsisumuiei; } }
