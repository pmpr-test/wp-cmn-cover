<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e934c577f87             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; abstract class BaseAttribute extends Container { protected array $fields = []; protected ?string $name = null; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_attribute_output', [$this, 'noqumqaqismmkacu'], 99, 4); parent::kgquecmsgcouyaya(); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ugmceccgwaaaigiy($product = null) : array { return (array) $this->ocksiywmkyaqseou("woocommerce_{$this->aakmagwggmkoiiyu()}_attribute_custom_fields", $this->fields, $product); } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int { $product = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::kqigmeickowqiiyy); if (!$product || $aokagokqyuysuksm) { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($aokagokqyuysuksm); } return absint($product); } public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product) { $product = $this->aqasygcsqysmmyke($product); if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { if (is_numeric($uusmaiomayssaecw)) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); } if (!$gkyciwoiiisgywcs->get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) { $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea)); } } } } return $aqykuigiuwmmcieu; } public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea); public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string; }
