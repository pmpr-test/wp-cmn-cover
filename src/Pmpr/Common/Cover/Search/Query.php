<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716c1864a4de             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\x65\137\147\x65\164\137\160\157\x73\x74\x73", [$this, "\x69\x67\x79\x77\x61\163\x63\x73\151\145\x6f\153\x6b\157\x77\x73"], 0)->cecaguuoecmccuse("\x70\x6f\x73\164\163\x5f\x73\x65\141\x72\143\x68", [$this, "\x77\x61\167\161\167\141\155\163\x75\165\x75\155\145\163\153\141"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\164\137\163\x65\x61\162\143\150\x5f\x72\x65\163\165\x6c\164", [$this, "\171\x73\143\x67\x6f\145\x77\x6b\157\x61\151\171\x77\155\x6f\x73"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if ($this->gouusicsisumuiei($gqgemcmoicmgaqie)) { $cwomqsccicsqseiy = $this->weysguygiseoukqw(Setting::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $this->weysguygiseoukqw(Setting::kquocioeygiskksm); if ($wmsuioaookqmyqkw || $cwomqsccicsqseiy) { $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\141\143\164"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\x20\x41\x4e\x44\x20"; $_or = "\40\117\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $this->weysguygiseoukqw(Setting::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if ($cwomqsccicsqseiy) { if (in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\157\163\164\137\x74\x69\164\x6c\145\40\114\x49\113\x45\x20\x25\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; } if (in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\163\x74\137\x63\x6f\x6e\164\x65\156\x74\x20\x4c\111\113\x45\40\45\x73{$_or}{$wpdb->posts}\56\160\x6f\x73\164\137\x65\170\143\x65\x72\x70\164\x20\114\111\113\105\40\x25\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\x6f\163\x74\137\x71\x75\145\x72\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); } $cniyckqcgyosooam = false; if (is_numeric($ccamueccusigaaio)) { $uyuaosigqymaqsaa = (array) $this->weysguygiseoukqw(Setting::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { $cniyckqcgyosooam = true; } else { if (!$uyuaosigqymaqsaa) { $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (in_array($kesssewsiegssiya, (array) $this->weysguygiseoukqw(Setting::ammgiseaaguqygig, []), true)) { $cniyckqcgyosooam = true; } } } } if ($cniyckqcgyosooam) { $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\x74\56\x74\145\162\x6d\137\x69\x64\x20\x3d\40\x25\163\x29", $ccamueccusigaaio); } if ($wmsuioaookqmyqkw) { $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::ewwmksgyikwikqye, []); if ($seyqqsmuaiegkeeq) { $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $this->weysguygiseoukqw(Setting::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\x74\x74\x2e\164\141\170\157\156\x6f\x6d\171\x20\x3d\x20\45\x73{$_and}\141\x73\164\x2e\163\x6c\x75\147\x20\x4c\111\x4b\105\40\x25\163\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); break; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\x74\164\56\164\x61\170\x6f\156\x6f\155\x79\x20\75\40\45\x73{$_and}\x28\141\163\164\56\156\x61\x6d\145\x20\x4c\x49\x4b\105\x20\45\163\x20\157\162\x20\x61\x73\164\56\x73\x6c\x75\147\40\x4c\111\113\x45\x20\45\163\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); break; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\164\164\56\x74\x61\x78\157\156\x6f\155\171\x20\x3d\40\x25\163{$_and}\141\x73\164\56\x6e\141\x6d\x65\x20\114\111\x4b\105\x20\x25\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); break; } $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; } } } if ($wmsuioaookqmyqkw || $cniyckqcgyosooam) { $this->cecaguuoecmccuse("\160\157\163\x74\163\x5f\x6a\157\151\156\x5f\x72\x65\161\x75\x65\163\x74", [$this, "\x6b\x67\171\157\x79\x69\x71\x71\x6f\x63\x75\x6d\143\x75\153\141"]); } if (!empty($qwcmueausqgiwigy)) { $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\51\x20"; if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $qwcmueausqgiwigy .= sprintf("\x25\x73\50\x25\x73\x2e\160\157\163\164\x5f\x70\141\163\163\x77\x6f\162\x64\x20\x3d\x20\47\47\x29\x20", $_and, $wpdb->posts); } } $this->cecaguuoecmccuse("\x70\157\x73\x74\x73\137\144\151\x73\x74\151\x6e\143\x74\x5f\x72\145\x71\x75\x65\163\164", [$this, "\163\x77\153\x69\153\x73\157\x73\161\157\143\x79\141\167\157\145"]); } } return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\106\124\x20\112\117\111\116\40\45\x73\x20\x61\163\164\x72\x20\x4f\116\40\50\45\163\x2e\111\104\40\x3d\x20\141\163\x74\x72\56\x6f\x62\152\x65\143\164\x5f\x69\x64\x29\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\114\x45\x46\124\40\112\x4f\111\x4e\x20\45\x73\x20\141\x73\164\164\x20\117\116\40\x28\141\163\164\x72\x2e\164\x65\x72\155\137\164\141\170\x6f\x6e\x6f\x6d\171\137\151\144\x20\x3d\x20\x61\163\x74\164\x2e\x74\145\162\x6d\x5f\164\x61\170\157\x6e\157\155\171\x5f\151\x64\x29\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\114\105\x46\x54\40\112\117\x49\116\x20\45\x73\x20\141\163\x74\x20\117\x4e\x20\50\141\163\x74\x74\x2e\164\145\x72\x6d\x5f\x69\144\x20\x3d\x20\141\163\x74\56\x74\145\x72\x6d\x5f\x69\x64\x29\x20", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\151\x6e\x5f\162\145\x71\165\145\x73\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\111\123\x54\x49\116\103\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if ($this->gouusicsisumuiei($gqgemcmoicmgaqie)) { $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::isksgwqqcmwaccaq, []); if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::mokucseeaqkgkuqy, []); } switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu) { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); } break; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); } else { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); } break; } } return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if ($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true)) { global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio)) { $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (Constants::emcyuiagkcgsckma !== $ccamueccusigaaio) { $seyqqsmuaiegkeeq = $ccamueccusigaaio; } $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $this->weysguygiseoukqw(Setting::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($this->weysguygiseoukqw(Setting::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; break; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; break; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; break; } $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if ($wp_query instanceof WP_Query) { $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); } } } return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if ($this->iemckwasmaugwcwi()) { if (!$gqgemcmoicmgaqie) { global $wp_query; $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", Constants::oimusiegakqgwosg)) { $gouusicsisumuiei = true; } } return $gouusicsisumuiei; } }
