<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67052cd52d7c9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\x6f\x6d\x6d\x65\x6e\x74\x5f"; const wcigqgscaeeqiigq = "\x75\163\145\162\137\x69\x64"; const cqmeioumqiogmuog = "\143\x6f\155\155\145\x6e\164\x5f\141\154\145\x72\164\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\x65\x70\x6c\171\164\x6f\x63\157\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\155\155\x65\x6e\x74\137\x61\152\x61\x78\151\146\x79"), true); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = Constants::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); } elseif ($mksyucucyswaukig instanceof WP_Term) { $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = Constants::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); } $cuakwceieagskoaa = false; if ($mksyucucyswaukig && $mqyaskyaekmkegmg) { if ($this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\154\x6c\157\x77\x5f\x72\145\x6e\x64\x65\x72", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { if ($ccamwkygaogkooek) { $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\x65\x6e\x64\x65\162\x5f\160\x6f\163\x74\137\164\x79\x70\145\163", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, Constants::goumieeyyqigueiw); } else { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { $keywesgaqieiugqe = (array) $this->weysguygiseoukqw(Setting::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\156\x64\x65\162\x5f\x74\x61\170\x6f\156\157\x6d\151\145\x73", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if ($cuakwceieagskoaa) { $withcomments = true; } } } if ($cuakwceieagskoaa) { $cuakwceieagskoaa = [Constants::mswoacegomcucaik => $post, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; } } } return $cuakwceieagskoaa; } }
