<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebd411ad3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\162\145\137\x67\x65\x74\x5f\x70\157\x73\164\163", [$this, "\x69\147\171\x77\141\x73\x63\163\151\x65\157\x6b\153\157\x77\163"], 0)->cecaguuoecmccuse("\160\157\163\x74\163\137\x73\x65\x61\x72\143\x68", [$this, "\x77\141\167\161\167\141\x6d\x73\x75\165\x75\x6d\145\163\153\x61"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\x74\x5f\x73\145\141\x72\143\150\x5f\162\x65\163\165\154\x74", [$this, "\171\x73\x63\147\x6f\145\x77\x6b\x6f\x61\x69\x79\167\x6d\157\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto cuommomwmsackoqc; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto awaqksikyomsuaeo; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\x78\141\143\x74"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\x20\101\x4e\x44\x20"; $_or = "\x20\x4f\122\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto iwkckkeimmeoquyq; } if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { goto qwisiamkmkkwucyo; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\157\163\x74\137\164\151\x74\154\x65\40\114\x49\113\x45\40\x25\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; qwisiamkmkkwucyo: if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { goto yqcusaeysomccaok; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\x70\x6f\x73\164\137\143\157\156\164\145\x6e\x74\x20\x4c\111\113\105\x20\45\163{$_or}{$wpdb->posts}\x2e\x70\157\x73\x74\x5f\x65\x78\143\145\x72\160\164\40\x4c\x49\113\x45\x20\45\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; yqcusaeysomccaok: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\x6f\x73\x74\137\161\x75\x65\162\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); iwkckkeimmeoquyq: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto giugwaeuwaomossq; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto yoqsigmoyaaceqky; } if ($uyuaosigqymaqsaa) { goto yksywwikmeksikqc; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto masakmomqmeocqqg; } $cniyckqcgyosooam = true; masakmomqmeocqqg: yksywwikmeksikqc: goto suqckoccuyeeymww; yoqsigmoyaaceqky: $cniyckqcgyosooam = true; suqckoccuyeeymww: giugwaeuwaomossq: if (!$cniyckqcgyosooam) { goto acgqaeakoyasgkku; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\164\56\164\x65\x72\x6d\x5f\x69\x64\x20\75\x20\45\163\51", $ccamueccusigaaio); acgqaeakoyasgkku: if (!$wmsuioaookqmyqkw) { goto mimacwyuueomgwwy; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto cuwcsamuuqyuyqsu; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\164\164\x2e\164\141\170\157\x6e\x6f\155\171\40\75\40\x25\x73{$_and}\x61\163\164\56\x73\154\x75\x67\x20\114\111\x4b\x45\x20\x25\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto mqgeseysuwcaqwiy; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\164\164\56\164\141\170\157\x6e\x6f\x6d\x79\40\75\40\45\x73{$_and}\x28\x61\163\x74\56\x6e\141\155\x65\x20\x4c\x49\x4b\x45\40\45\163\40\x6f\162\40\x61\163\164\x2e\163\154\165\x67\x20\114\111\113\105\x20\45\163\51\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto mqgeseysuwcaqwiy; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\164\164\x2e\x74\x61\x78\157\156\x6f\155\x79\40\x3d\x20\45\x73{$_and}\141\163\x74\56\x6e\x61\155\145\x20\x4c\x49\x4b\105\x20\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto mqgeseysuwcaqwiy; } ekoqieigyoeyauqa: mqgeseysuwcaqwiy: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; ssagcgqaucssyego: } sycougcyeqmeiagk: cuwcsamuuqyuyqsu: mimacwyuueomgwwy: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto ksckqkmwiqggykke; } $this->cecaguuoecmccuse("\160\x6f\163\x74\163\x5f\152\157\x69\156\137\162\x65\161\x75\145\x73\x74", [$this, "\153\147\x79\x6f\x79\x69\x71\x71\x6f\143\x75\x6d\x63\165\x6b\141"]); ksckqkmwiqggykke: if (empty($qwcmueausqgiwigy)) { goto iqsgossweywksoia; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\x28{$qwcmueausqgiwigy}\51\x20"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto igwkcikeyoowosoi; } $qwcmueausqgiwigy .= sprintf("\45\163\x28\45\x73\x2e\160\x6f\163\x74\137\160\141\x73\163\167\157\162\144\x20\75\x20\47\x27\x29\x20", $_and, $wpdb->posts); igwkcikeyoowosoi: iqsgossweywksoia: $this->cecaguuoecmccuse("\160\157\163\164\x73\137\144\151\x73\x74\151\x6e\143\164\137\162\x65\161\x75\145\x73\x74", [$this, "\x73\167\153\151\x6b\x73\157\163\x71\x6f\143\171\141\167\x6f\x65"]); awaqksikyomsuaeo: cuommomwmsackoqc: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\x46\x54\40\x4a\117\111\x4e\x20\x25\163\40\141\163\164\x72\x20\117\116\x20\x28\45\x73\56\111\x44\40\75\40\141\163\164\x72\x2e\157\x62\x6a\145\143\164\x5f\x69\144\51\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\x46\x54\40\x4a\x4f\111\116\40\x25\x73\40\x61\163\164\x74\40\x4f\116\40\50\141\163\x74\x72\x2e\x74\145\x72\155\x5f\164\141\170\157\x6e\157\155\171\x5f\151\144\x20\75\40\141\x73\x74\x74\x2e\x74\145\162\x6d\x5f\164\x61\x78\157\x6e\x6f\155\171\137\151\x64\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\114\x45\106\124\40\x4a\x4f\x49\116\x20\x25\163\40\141\x73\164\x20\x4f\x4e\40\x28\141\163\164\164\x2e\164\145\162\x6d\137\x69\144\x20\x3d\x20\141\x73\x74\56\x74\145\162\155\x5f\x69\144\51\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\152\x6f\x69\x6e\x5f\162\x65\x71\165\145\163\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\x44\111\123\124\111\116\x43\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto jsmisuccwyukksgc; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto ggeoqeowscwkeumy; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); ggeoqeowscwkeumy: switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (!(Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto uqcsksaywyqeumig; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); uqcsksaywyqeumig: goto qyeswawykmasuqye; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { goto yggmaskeguaqkusc; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); goto ukwoswyyogmsygqg; yggmaskeguaqkusc: $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); ukwoswyyogmsygqg: goto qyeswawykmasuqye; } uwaimsisescsgyqk: qyeswawykmasuqye: jsmisuccwyukksgc: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true))) { goto uyeyscsaigimsqwq; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto kceuusiekagyeoys; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (!(Constants::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto kwmiwaecqcgiaqye; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; kwmiwaecqcgiaqye: $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto yqicwmekwuoywyus; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; goto yqicwmekwuoywyus; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; goto yqicwmekwuoywyus; } gkoaeuekqockuoiq: yqicwmekwuoywyus: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto eekaiaeqewiqkkgm; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); eekaiaeqewiqkkgm: kceuusiekagyeoys: uyeyscsaigimsqwq: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto esqwswmoegiqcckg; } if ($gqgemcmoicmgaqie) { goto mwieyyqamgwicgco; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; mwieyyqamgwicgco: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", Constants::oimusiegakqgwosg))) { goto wkiymcoqqiigqaaw; } $gouusicsisumuiei = true; wkiymcoqqiigqaaw: esqwswmoegiqcckg: return $gouusicsisumuiei; } }
