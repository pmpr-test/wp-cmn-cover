<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0253760             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class Search extends Widget { const ymwqsgcsiuwgoams = 'show_count'; public function __construct() { parent::__construct(__('Advanced Search', PR__CMN__COVER), __('Advanced Search functionality.', PR__CMN__COVER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::ymwqsgcsiuwgoams)->gswweykyogmsyawy(__('Show Count', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::uouymeyqasaeckso)->gswweykyogmsyawy(__('Post Type', PR__CMN__COVER))->gucwmccyimoagwcm(__('If you want process target post type automatically, leave this field empty.', PR__CMN__COVER))->acauweqyyugwisqc($this->caokeucsksukesyo()->gscioiumssogceuc()->mwyawsooaimmcwiu())); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eaoumsseceiowgsk = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->qggoeuwkeacoeksm([Constants::qaacaqioeyiuakeu => false, Constants::uissasisiuymwsmu => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qescuiwgsyuikume), Constants::uouymeyqasaeckso => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::uouymeyqasaeckso)]); $gaeqamemwmwsyukm = 0; if ($gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::ymwqsgcsiuwgoams) && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->gouusicsisumuiei()) { $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gusouagusgyoaeya(sprintf(__('%s Results', PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($this->caokeucsksukesyo()->owicscwgeuqcqaig()->qooeaookuemoqecm('post_count')))); } return array_merge($owgumcsyqsamiemg, [Constants::ygeqsmugcaeeeuwu => $eaoumsseceiowgsk, Constants::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm]); } }
