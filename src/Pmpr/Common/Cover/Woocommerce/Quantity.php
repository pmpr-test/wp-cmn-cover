<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc359d0b521             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WC_Product; class Quantity extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, 'enqueue']); $this->qcsmikeggeemccuu('woocommerce_after_quantity_input_field', [$this, 'osawiwkkmgiamgww'], 99)->qcsmikeggeemccuu('woocommerce_before_quantity_input_field', [$this, 'oeasawmuksmcigsk'], 0); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_quantity_input_args', [$this, 'aymgcmkwcgaqyqgu'], 10, 2); } public function csaueuycewaiuaay($product = null) : bool { $cuakwceieagskoaa = false; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $product = $usmsssmiougymckk->get($product); if ($product instanceof WC_Product) { $cuakwceieagskoaa = (bool) $this->ocksiywmkyaqseou('is_quantity_enable', $usmsssmiougymckk->eksssooaeasoymyi($product) && !$usmsssmiougymckk->muyimmegaeguayya($product)); } return $cuakwceieagskoaa; } public function aymgcmkwcgaqyqgu($ywmkwiwkosakssii, $kicccmgaoiissqys) { if ($this->csaueuycewaiuaay($kicccmgaoiissqys)) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($ywmkwiwkosakssii, 'class', 'increment-quantity'); } return $ywmkwiwkosakssii; } public function wgscokkqoqogiama($wkaqekwwgqsqwcoi, $sqeykgyoooqysmca) { $wkaqekwwgqsqwcoi = $this->ocksiywmkyaqseou('woocommerce_quantity_icon', $wkaqekwwgqsqwcoi, $sqeykgyoooqysmca); $wwgucssaecqekuek = $this->ocksiywmkyaqseou('woocommerce_quantity_icon_attrs', [], $wkaqekwwgqsqwcoi, $sqeykgyoooqysmca); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, [Constants::kicoscymgmgqeqgy => true]); } public function oeasawmuksmcigsk() { global $product; if ($this->csaueuycewaiuaay($product)) { echo '<div class="increment-btns">'; echo $this->iuygowkemiiwqmiw('button', [Constants::qgqyauaqwqmqseim => $this->wgscokkqoqogiama(IconInterface::koesowskiwueqwsm, 'decrease'), 'prepend' => true, 'increase' => false]); } } public function osawiwkkmgiamgww() { global $product; if ($this->csaueuycewaiuaay($product)) { echo $this->iuygowkemiiwqmiw('button', [Constants::qgqyauaqwqmqseim => $this->wgscokkqoqogiama(IconInterface::scqkowciwiiwiuwy, 'increase'), 'prepend' => false, 'increase' => true]); echo "</div>"; } } public function enqueue() { if ($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wmqwkwyuqwksiiqk() || $this->csaueuycewaiuaay($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu())) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'quantity', 'quantity.js')->simswskycwagoeqy()); if ($icyaoosaykeskiuu = $this->ocksiywmkyaqseou('woo_qty_styles', '')) { $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'quantity')->awagieqcmmwkgwgs($icyaoosaykeskiuu)); } } } }
