<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e841c4cb2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; abstract class BaseAttribute extends Container { protected array $fields = []; protected ?string $name = null; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\143\x6f\x6d\x6d\x65\x72\143\145\137\141\164\x74\x72\x69\x62\x75\164\145\x5f\157\x75\x74\160\165\164", [$this, "\156\157\161\x75\155\x71\141\161\x69\x73\155\155\153\x61\143\165"], 99, 4); parent::kgquecmsgcouyaya(); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ugmceccgwaaaigiy($product = null) : array { return (array) $this->ocksiywmkyaqseou("\167\x6f\157\143\x6f\155\x6d\145\162\143\145\x5f{$this->aakmagwggmkoiiyu()}\x5f\x61\x74\x74\x72\x69\142\x75\x74\x65\137\143\x75\x73\x74\x6f\155\137\x66\x69\x65\154\x64\x73", $this->fields, $product); } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int { $product = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::kqigmeickowqiiyy); if (!$product || $aokagokqyuysuksm) { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($aokagokqyuysuksm); } return absint($product); } public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product) { $product = $this->aqasygcsqysmmyke($product); if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { if (is_numeric($uusmaiomayssaecw)) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); } if (!$gkyciwoiiisgywcs->get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) { $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea)); } } } } return $aqykuigiuwmmcieu; } public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea); public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string; }
