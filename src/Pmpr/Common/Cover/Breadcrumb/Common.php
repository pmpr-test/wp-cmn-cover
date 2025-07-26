<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6884a91566718             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; abstract class Common extends Container { const iukiayaokaiiicwo = 'breadcrumb_'; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . 'before_create_'; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if ($this->weysguygiseoukqw(Setting::mgimioakqsosoqcc)) { $cuakwceieagskoaa = true; if ($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)) { $couiucmsqaieciue = $this->weysguygiseoukqw(Setting::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); } $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . 'allow_render', $cuakwceieagskoaa, $post); } return $cuakwceieagskoaa; } }
