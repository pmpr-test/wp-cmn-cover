<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceca1dd3ca3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Cover\Metadata\Metadata as MainClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class Metadata extends Widget { public function __construct() { parent::__construct(__('Metadata', PR__CMN__COVER), __('Display the post metadata.', PR__CMN__COVER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::qwumqqyuasyskkkc)->gswweykyogmsyawy(__('Items', PR__CMN__COVER))->acauweqyyugwisqc(MainClass::symcgieuakksimmu()->sksykqasgyyyqkie())->oikgogcweiiaocka()); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = []; $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ywmkwiwkosakssii[Constants::mswoacegomcucaik] ?? ''); $oammesyieqmwuwyi = $owgumcsyqsamiemg[Constants::qwumqqyuasyskkkc] ?? []; if ($post && $oammesyieqmwuwyi) { $kuguwoaesuqsqysu = MainClass::symcgieuakksimmu()->wasgwsogmuquqeaa([], [Constants::mswoacegomcucaik => $post, Constants::ackcaikowcokggsc => $oammesyieqmwuwyi]); if ($kuguwoaesuqsqysu) { $qookweymeqawmcwo = [Constants::qwumqqyuasyskkkc => $kuguwoaesuqsqysu, Constants::okciuaikiyaecwmy => Constants::qwumqqyuasyskkkc]; } } return $qookweymeqawmcwo; } }
