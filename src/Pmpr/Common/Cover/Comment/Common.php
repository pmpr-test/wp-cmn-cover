<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d5da7b40             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\143\157\155\x6d\x65\156\x74\137"; const wcigqgscaeeqiigq = "\x75\163\145\162\x5f\151\x64"; const cqmeioumqiogmuog = "\143\x6f\x6d\155\145\x6e\x74\137\141\x6c\145\x72\164\x73"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\x65\x70\154\171\x74\157\143\x6f\155"]); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = Constants::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); } elseif ($mksyucucyswaukig instanceof WP_Term) { $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = Constants::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); } $cuakwceieagskoaa = false; if ($mksyucucyswaukig && $mqyaskyaekmkegmg && $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\154\154\157\x77\137\162\145\156\x64\145\162", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { if ($ccamwkygaogkooek) { $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\x65\x6e\x64\145\162\x5f\160\157\x73\164\x5f\164\x79\x70\145\x73", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, Constants::goumieeyyqigueiw); } else { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { $keywesgaqieiugqe = (array) $this->weysguygiseoukqw(Setting::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\145\156\144\x65\162\x5f\164\141\x78\157\156\x6f\x6d\151\145\x73", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if ($cuakwceieagskoaa) { $withcomments = true; } } } if ($cuakwceieagskoaa) { $cuakwceieagskoaa = [Constants::mswoacegomcucaik => $post, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; } } return $cuakwceieagskoaa; } }
