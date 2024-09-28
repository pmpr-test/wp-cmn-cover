<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d87913155             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\x65\141\144\143\x72\x75\x6d\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\x65\146\157\x72\145\x5f\143\162\x65\141\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto kyggwyywiycksgqq; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto gyeayeuuyiemuwuq; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); gyeayeuuyiemuwuq: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x6c\154\x6f\167\137\x72\145\x6e\x64\145\162", $cuakwceieagskoaa, $post); kyggwyywiycksgqq: return $cuakwceieagskoaa; } }
