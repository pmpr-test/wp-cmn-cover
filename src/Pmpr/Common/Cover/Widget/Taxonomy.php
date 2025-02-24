<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc359d0b521             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class Taxonomy extends Widget { const ymwqsgcsiuwgoams = 'show_count'; const ikowwycwyykigkwu = 'most_used'; const uysccwiykuggosei = 'just_top_parents'; const acekmwyqkymaqquw = 'dont_show'; const cseissuussmiiamw = 'show_post_count'; const cgqoueqkwqsigyoy = 'show_child_count'; const sqqysqswsgcoegms = 'tag_cloud'; public function __construct() { parent::__construct(__('Taxonomies', PR__CMN__COVER), __('Display the taxonomies.', PR__CMN__COVER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qiyqwyiiwykeccmo)->gswweykyogmsyawy(__('Count', PR__CMN__COVER))->escqqisecooswqgo()->eyygsasuqmommkua(5))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ymwqsgcsiuwgoams)->gswweykyogmsyawy(__('Show Count', PR__CMN__COVER))->acauweqyyugwisqc([self::acekmwyqkymaqquw => __('Dont Show', PR__CMN__COVER), self::cseissuussmiiamw => __('Show Post Count', PR__CMN__COVER), self::cgqoueqkwqsigyoy => __('Show Child Count', PR__CMN__COVER)]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::gmmygyiecgmggaam)->gswweykyogmsyawy(__('Taxonomy', PR__CMN__COVER))->acauweqyyugwisqc($this->caokeucsksukesyo()->yyoeeseewqmmyaee()->mwyawsooaimmcwiu()))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Type', PR__CMN__COVER))->acauweqyyugwisqc([Constants::mcwaoqwywimcegca => __('Normal', PR__CMN__COVER), self::ikowwycwyykigkwu => __('Most Used', PR__CMN__COVER), self::uysccwiykuggosei => __('Just Top Level Parents', PR__CMN__COVER)]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(Constants::ikagyegqaweawkkc)->gswweykyogmsyawy(__('Hierarchical', PR__CMN__COVER))->agywyaaquwawwuiy(Constants::ayscagukkeoucmoe))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(Constants::ayscagukkeoucmoe)->gswweykyogmsyawy(__('Collapsible', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kcgwauqkqcyuwwgs)->gswweykyogmsyawy(__('Render Template', PR__CMN__COVER))->acauweqyyugwisqc([Constants::ugmwekegkosuuwii => __('List', PR__CMN__COVER), self::sqqysqswsgcoegms => __('Tag Cloud', PR__CMN__COVER)])); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::squoamkioomemiyi, Constants::mcwaoqwywimcegca); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qiyqwyiiwykeccmo, 5); $kesssewsiegssiya = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::gmmygyiecgmggaam, Constants::qgciomgukmcwscqw); $wkscusiqqyeeyuqw = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ikagyegqaweawkkc, false); $seauiwyeoycowegg = [Constants::awkcoioakcaougmq => 'desc', Constants::eymwucuaaiiciymc => $uuyoeicyoayimaoa]; if (self::ikowwycwyykigkwu === $sqeykgyoooqysmca) { $seauiwyeoycowegg[Constants::gqiasegggowomgie] = Constants::qiyqwyiiwykeccmo; } if ($wkscusiqqyeeyuqw || self::uysccwiykuggosei === $sqeykgyoooqysmca) { $seauiwyeoycowegg['parent'] = '0'; } $qookweymeqawmcwo = []; if ($uyuaosigqymaqsaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($kesssewsiegssiya, $seauiwyeoycowegg)) { $aoaskuimsmmcgwce = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::ymwqsgcsiuwgoams); $qookweymeqawmcwo = [self::ymwqsgcsiuwgoams => $aoaskuimsmmcgwce !== self::acekmwyqkymaqquw, Constants::qwumqqyuasyskkkc => $this->weuooyciqmgccaww($uyuaosigqymaqsaa, $aoaskuimsmmcgwce, $wkscusiqqyeeyuqw), Constants::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qescuiwgsyuikume), Constants::ayscagukkeoucmoe => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ayscagukkeoucmoe), Constants::ikagyegqaweawkkc => $wkscusiqqyeeyuqw, Constants::okciuaikiyaecwmy => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::kcgwauqkqcyuwwgs, Constants::ugmwekegkosuuwii)]; } return $qookweymeqawmcwo; } public function weuooyciqmgccaww($uyuaosigqymaqsaa, $aoaskuimsmmcgwce, $wkscusiqqyeeyuqw) { if ($uyuaosigqymaqsaa && is_array($uyuaosigqymaqsaa)) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($uyuaosigqymaqsaa as $momcykaoccoymeig => $iwewcwusemqaiggk) { if (is_numeric($iwewcwusemqaiggk)) { $iwewcwusemqaiggk = $aoskwucuugeuaeus->get($iwewcwusemqaiggk); } if (is_object($iwewcwusemqaiggk)) { $simoucceqmcgicia = self::cgqoueqkwqsigyoy === $aoaskuimsmmcgwce; $okcscwesammossuq = []; if ($aoaskuimsmmcgwce || $wkscusiqqyeeyuqw) { $okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($iwewcwusemqaiggk, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); } if ($simoucceqmcgicia) { $gaeqamemwmwsyukm = 0; if ($okcscwesammossuq) { $gaeqamemwmwsyukm = count($okcscwesammossuq); } $iwewcwusemqaiggk->count = $gaeqamemwmwsyukm; } if ($wkscusiqqyeeyuqw && $okcscwesammossuq) { $iwewcwusemqaiggk->children = $this->weuooyciqmgccaww($okcscwesammossuq, $aoaskuimsmmcgwce, $wkscusiqqyeeyuqw); } $iwewcwusemqaiggk->meta = $aoskwucuugeuaeus->igawqaomowicuayw($iwewcwusemqaiggk); $uyuaosigqymaqsaa[$momcykaoccoymeig] = $iwewcwusemqaiggk; } } } return $uyuaosigqymaqsaa; } }
