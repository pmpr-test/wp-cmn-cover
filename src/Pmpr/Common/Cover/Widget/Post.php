<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0253760             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; use WP_Post; class Post extends Widget { const isykgqoakcgoqguw = 'recent'; const usaagimwaekgcgua = 'last_updated'; const sugamaiuggmykggu = 'related_posts'; const ucawomsemakyosms = 'most_controversial'; public function __construct() { parent::__construct(__('Posts', PR__CMN__COVER), __('Display the posts.', PR__CMN__COVER)); } public function ykwqaukkycogooii() { $kuguwoaesuqsqysu = $this->ocksiywmkyaqseou('metadata_get_all_items', []); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Type', PR__CMN__COVER))->acauweqyyugwisqc([self::isykgqoakcgoqguw => __('Recent Posts', PR__CMN__COVER), self::usaagimwaekgcgua => __('Last Updated', PR__CMN__COVER), self::sugamaiuggmykggu => __('Related Posts By Taxonomies', PR__CMN__COVER), self::ucawomsemakyosms => __('Most Controversial', PR__CMN__COVER), Constants::kqeokggqcsesmqco => __('Custom', PR__CMN__COVER)])->eyygsasuqmommkua(self::isykgqoakcgoqguw)->qyucewwiggkyeaso([self::isykgqoakcgoqguw, self::usaagimwaekgcgua, self::sugamaiuggmykggu, self::ucawomsemakyosms], [Constants::uouymeyqasaeckso, Constants::qiyqwyiiwykeccmo])->qyucewwiggkyeaso(Constants::kqeokggqcsesmqco, Constants::kqeokggqcsesmqco))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kqeokggqcsesmqco)->gswweykyogmsyawy(__('Custom', PR__CMN__COVER))->oikgogcweiiaocka()->ukqywcsoogkyoaoa())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::uouymeyqasaeckso)->gswweykyogmsyawy(__('Post Type', PR__CMN__COVER))->oikgogcweiiaocka()->acauweqyyugwisqc($this->caokeucsksukesyo()->gscioiumssogceuc()->mwyawsooaimmcwiu()))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qiyqwyiiwykeccmo)->gswweykyogmsyawy(__('Count', PR__CMN__COVER))->eyygsasuqmommkua(5)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ckcuiukmyisueqeo)->gswweykyogmsyawy(__('Metadata', PR__CMN__COVER))->eksgyasugmuassok($kuguwoaesuqsqysu)->oikgogcweiiaocka()->wywmmeyauqkeskeq(!empty($kuguwoaesuqsqysu)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kcgwauqkqcyuwwgs)->gswweykyogmsyawy(__('Render Template', PR__CMN__COVER))->eksgyasugmuassok([Constants::ugmwekegkosuuwii => __('List', PR__CMN__COVER), Constants::ugsuecoyuqcamsac => __('Table', PR__CMN__COVER), Constants::iouekwycqkqiceea => __('Simple List', PR__CMN__COVER)])->eyygsasuqmommkua(Constants::ugmwekegkosuuwii)); } public function iesosoqeuuwaiaky($post, $uuyoeicyoayimaoa) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $kmmywmgcgwceeqii = $seumokooiykcomco->weescwwgqgiyumyw($post, Constants::ocsomysosuqaimuc); $oysoyeaucuawyaky = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->iqwuoaqymgqoskko($kmmywmgcgwceeqii, Constants::ooqggksagkoaeeke); $ksiyqouuaoymsycg = []; if ($oysoyeaucuawyaky) { $ksiyqouuaoymsycg = $seumokooiykcomco->ciugwooasaqcywas(Constants::mswoacegomcucaik, [Constants::mseyycuaieswieuu => $oysoyeaucuawyaky, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm, Constants::kcaoouwiygwwmiok => [$seumokooiykcomco->iooowgsqoyqseyuu($post)], Constants::goqgcigmiawyauai => $uuyoeicyoayimaoa]); } return $ksiyqouuaoymsycg; } public function qqiumsqyicskowsq($post, $uuyoeicyoayimaoa) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ksiyqouuaoymsycg = []; $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($post, Constants::qgciomgukmcwscqw); $qcmggaiwyoeyguco = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->iqwuoaqymgqoskko($uyuaosigqymaqsaa, Constants::ouywiegeiyuaaawo); if ($qcmggaiwyoeyguco) { $ksiyqouuaoymsycg = $seumokooiykcomco->ciugwooasaqcywas(Constants::mswoacegomcucaik, [Constants::gqiasegggowomgie => 'rand', Constants::kymceekcoyyeuocm => [[Constants::ucoiewcoucauqwko => $qcmggaiwyoeyguco, Constants::gueokgaoyascgeqe => Constants::ouywiegeiyuaaawo, Constants::gmmygyiecgmggaam => Constants::qgciomgukmcwscqw]], Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm, Constants::kcaoouwiygwwmiok => [$seumokooiykcomco->iooowgsqoyqseyuu($post)], Constants::goqgcigmiawyauai => $uuyoeicyoayimaoa]); } return $ksiyqouuaoymsycg; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $wyoiwuqokyeeuguk = []; $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::squoamkioomemiyi, self::isykgqoakcgoqguw); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qiyqwyiiwykeccmo, 5); $useksmwkuswkwcqg = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::uouymeyqasaeckso, Constants::mswoacegomcucaik); $seauiwyeoycowegg = [Constants::awkcoioakcaougmq => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko), Constants::goqgcigmiawyauai => $uuyoeicyoayimaoa]; if ($mumyimcwkaemyyue->cukiusasccucgwqc($useksmwkuswkwcqg)) { $seauiwyeoycowegg[Constants::kcaoouwiygwwmiok] = [$seumokooiykcomco->iooowgsqoyqseyuu()]; } switch ($sqeykgyoooqysmca) { case Constants::kqeokggqcsesmqco: $seauiwyeoycowegg[Constants::goqgcigmiawyauai] = -1; $wyoiwuqokyeeuguk = $seumokooiykcomco->wgkooswsoccegaew($gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::kqeokggqcsesmqco, []), $seauiwyeoycowegg); break; case self::isykgqoakcgoqguw: $wyoiwuqokyeeuguk = $seumokooiykcomco->ymuqsscwmcumcama($useksmwkuswkwcqg, $seauiwyeoycowegg); break; case self::ucawomsemakyosms: $seauiwyeoycowegg[Constants::gqiasegggowomgie] = Constants::yggikwwysksgwoge; $wyoiwuqokyeeuguk = $seumokooiykcomco->ciugwooasaqcywas($useksmwkuswkwcqg, $seauiwyeoycowegg); break; case self::sugamaiuggmykggu: if (is_array($useksmwkuswkwcqg)) { $useksmwkuswkwcqg = $gkyciwoiiisgywcs->get($useksmwkuswkwcqg, 0); } if ($mumyimcwkaemyyue->cukiusasccucgwqc($useksmwkuswkwcqg)) { $post = $seumokooiykcomco->get(); $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::wwcycgyaiaksckuk => [$this->caokeucsksukesyo()->gscioiumssogceuc()->aakmagwggmkoiiyu($useksmwkuswkwcqg)]]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $oissegscgyqycmcy = []; switch ($kesssewsiegssiya) { case Constants::ocsomysosuqaimuc: $oissegscgyqycmcy = $this->iesosoqeuuwaiaky($post, $uuyoeicyoayimaoa); break; case Constants::qgciomgukmcwscqw: $oissegscgyqycmcy = $this->qqiumsqyicskowsq($post, $uuyoeicyoayimaoa); break; } if ($oissegscgyqycmcy) { $wyoiwuqokyeeuguk = array_merge($wyoiwuqokyeeuguk, $oissegscgyqycmcy); } } } break; case self::usaagimwaekgcgua: $seauiwyeoycowegg[Constants::gqiasegggowomgie] = 'modified'; $wyoiwuqokyeeuguk = $seumokooiykcomco->ciugwooasaqcywas($useksmwkuswkwcqg, $seauiwyeoycowegg); break; } $qookweymeqawmcwo = []; if ($wyoiwuqokyeeuguk) { $qookweymeqawmcwo = [Constants::qwumqqyuasyskkkc => $wyoiwuqokyeeuguk, Constants::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qescuiwgsyuikume), Constants::ckcuiukmyisueqeo => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ckcuiukmyisueqeo), Constants::okciuaikiyaecwmy => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::kcgwauqkqcyuwwgs, Constants::ugmwekegkosuuwii)]; } return $qookweymeqawmcwo; } }
