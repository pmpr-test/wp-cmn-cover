<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716beac1a112             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\x65\137\x67\145\x74\x5f\x70\157\x73\x74\163", [$this, "\x69\x67\171\167\x61\x73\143\163\x69\x65\x6f\153\x6b\157\x77\x73"], 0)->cecaguuoecmccuse("\160\157\163\x74\163\x5f\x73\x65\141\162\143\x68", [$this, "\167\x61\167\161\167\x61\155\163\x75\x75\165\x6d\x65\x73\153\x61"], 500, 2); $this->aqaqisyssqeomwom("\147\145\164\x5f\163\145\x61\162\143\x68\137\x72\x65\x73\x75\x6c\164", [$this, "\x79\x73\x63\x67\x6f\145\167\x6b\x6f\141\x69\171\x77\x6d\x6f\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if ($this->gouusicsisumuiei($gqgemcmoicmgaqie)) { $cwomqsccicsqseiy = $this->weysguygiseoukqw(Setting::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $this->weysguygiseoukqw(Setting::kquocioeygiskksm); if ($wmsuioaookqmyqkw || $cwomqsccicsqseiy) { $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\141\143\x74"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\x20\101\116\104\40"; $_or = "\x20\117\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $this->weysguygiseoukqw(Setting::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if ($cwomqsccicsqseiy) { if (in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\x73\164\137\x74\x69\164\154\x65\x20\x4c\111\x4b\x45\40\x25\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; } if (in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\157\x73\164\x5f\x63\157\156\x74\x65\x6e\164\x20\114\x49\x4b\105\x20\x25\x73{$_or}{$wpdb->posts}\56\160\157\163\x74\137\145\170\143\x65\162\160\164\x20\114\x49\113\x45\x20\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\x6f\163\x74\137\161\165\145\162\x79", $qwcmueausqgiwigy, $iwewcwusemqaiggk); } $cniyckqcgyosooam = false; if (is_numeric($ccamueccusigaaio)) { $uyuaosigqymaqsaa = (array) $this->weysguygiseoukqw(Setting::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { $cniyckqcgyosooam = true; } else { if (!$uyuaosigqymaqsaa) { $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (in_array($kesssewsiegssiya, (array) $this->weysguygiseoukqw(Setting::ammgiseaaguqygig, []), true)) { $cniyckqcgyosooam = true; } } } } if ($cniyckqcgyosooam) { $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\x74\x2e\x74\x65\162\x6d\137\151\144\40\75\40\45\163\51", $ccamueccusigaaio); } if ($wmsuioaookqmyqkw) { $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::ewwmksgyikwikqye, []); if ($seyqqsmuaiegkeeq) { $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $this->weysguygiseoukqw(Setting::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\164\x74\x2e\x74\x61\x78\x6f\156\x6f\155\171\40\75\40\45\x73{$_and}\x61\163\x74\56\163\154\x75\147\x20\114\111\113\105\40\x25\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); break; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\164\56\x74\x61\x78\157\x6e\157\155\171\40\75\40\45\163{$_and}\50\x61\163\164\x2e\x6e\x61\155\145\40\x4c\x49\113\x45\40\45\163\x20\x6f\x72\40\x61\x73\164\56\x73\x6c\x75\x67\40\114\111\113\x45\x20\45\x73\51\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); break; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\x73\164\x74\56\164\141\170\157\x6e\x6f\x6d\171\x20\x3d\40\x25\163{$_and}\x61\163\x74\x2e\156\141\155\x65\x20\114\111\x4b\105\x20\x25\163\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); break; } $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; } } } if ($wmsuioaookqmyqkw || $cniyckqcgyosooam) { $this->cecaguuoecmccuse("\160\x6f\x73\164\163\137\152\x6f\x69\156\137\162\x65\161\165\145\163\x74", [$this, "\153\x67\171\157\171\x69\x71\x71\157\x63\165\155\143\165\153\141"]); } if (!empty($qwcmueausqgiwigy)) { $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\x20"; if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $qwcmueausqgiwigy .= sprintf("\x25\163\x28\45\x73\x2e\160\157\163\x74\x5f\x70\141\x73\x73\167\157\x72\144\40\75\x20\47\47\51\40", $_and, $wpdb->posts); } } $this->cecaguuoecmccuse("\x70\x6f\x73\x74\x73\137\x64\x69\163\x74\x69\x6e\x63\x74\x5f\162\x65\161\165\145\x73\x74", [$this, "\163\x77\x6b\x69\x6b\x73\x6f\163\161\x6f\x63\x79\141\x77\x6f\x65"]); } } return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\114\x45\106\124\x20\112\117\111\x4e\x20\45\x73\40\141\163\164\x72\40\117\x4e\x20\50\45\163\56\x49\x44\x20\75\40\x61\x73\164\162\56\157\x62\152\x65\143\x74\137\x69\x64\51\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\x46\124\x20\x4a\117\x49\x4e\x20\x25\x73\40\141\x73\x74\x74\40\117\116\x20\x28\x61\163\164\162\x2e\164\145\162\155\x5f\164\141\170\x6f\x6e\x6f\155\x79\137\151\144\40\75\40\x61\x73\x74\164\x2e\164\x65\x72\155\137\x74\x61\x78\157\x6e\x6f\x6d\171\x5f\x69\x64\x29\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\x4c\105\x46\x54\40\x4a\117\111\116\40\45\x73\x20\141\x73\164\x20\117\116\x20\x28\x61\163\164\164\56\x74\x65\162\155\137\151\x64\40\75\40\141\163\x74\x2e\x74\145\x72\155\137\x69\144\51\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\152\x6f\151\156\137\x72\145\x71\x75\x65\163\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\x44\111\123\124\x49\116\x43\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if ($this->gouusicsisumuiei($gqgemcmoicmgaqie)) { $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::isksgwqqcmwaccaq, []); if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::mokucseeaqkgkuqy, []); } switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu) { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); } break; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); } else { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); } break; } } return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if ($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true)) { global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio)) { $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (Constants::emcyuiagkcgsckma !== $ccamueccusigaaio) { $seyqqsmuaiegkeeq = $ccamueccusigaaio; } $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $this->weysguygiseoukqw(Setting::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($this->weysguygiseoukqw(Setting::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; break; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; break; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; break; } $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if ($wp_query instanceof WP_Query) { $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); } } } return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if ($this->iemckwasmaugwcwi()) { if (!$gqgemcmoicmgaqie) { global $wp_query; $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", Constants::oimusiegakqgwosg)) { $gouusicsisumuiei = true; } } return $gouusicsisumuiei; } }
