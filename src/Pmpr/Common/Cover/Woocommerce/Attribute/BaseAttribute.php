<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038189a665             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; abstract class BaseAttribute extends Container { protected array $fields = []; protected ?string $name = null; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\x6f\143\157\x6d\x6d\145\162\143\145\x5f\141\164\164\162\x69\x62\165\164\145\x5f\157\165\x74\x70\x75\x74", [$this, "\x6e\x6f\x71\165\155\161\141\x71\151\163\155\155\x6b\x61\x63\165"], 99, 4); parent::kgquecmsgcouyaya(); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ugmceccgwaaaigiy($product = null) : array { return (array) $this->ocksiywmkyaqseou("\x77\157\x6f\143\x6f\x6d\x6d\x65\162\x63\145\x5f{$this->aakmagwggmkoiiyu()}\137\x61\x74\164\x72\x69\142\165\x74\145\137\x63\x75\x73\x74\157\x6d\x5f\x66\151\145\154\x64\163", $this->fields, $product); } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int { $product = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::kqigmeickowqiiyy); if (!$product || $aokagokqyuysuksm) { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($aokagokqyuysuksm); } return absint($product); } public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product) { $product = $this->aqasygcsqysmmyke($product); if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { if (is_numeric($uusmaiomayssaecw)) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); } if (!$gkyciwoiiisgywcs->get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) { $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea)); } } } } return $aqykuigiuwmmcieu; } public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea); public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string; }
