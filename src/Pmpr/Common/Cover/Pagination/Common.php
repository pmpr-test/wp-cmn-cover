<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4ac17f29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Common extends Container { protected ?string $type = null; public function gueasuouwqysmomu() : ?string { return $this->type; } public function kgquecmsgcouyaya() { $this->waqewsckuayqguos("render_{$this->gueasuouwqysmomu()}_pagination", [$this, 'render']); } public function wigskegsqequoeks() { $this->aqaqisyssqeomwom("get_{$this->gueasuouwqysmomu()}_pagination", [$this, 'ocwicgwowyyiouys'], 10, 2); } public function render($ywmkwiwkosakssii = []) { echo $this->ocwicgwowyyiouys('', $ywmkwiwkosakssii); } public function ocwicgwowyyiouys($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $this->kyseuiqusququcek()); $ywmkwiwkosakssii = $this->ocksiywmkyaqseou('pagination_arguments', $ywmkwiwkosakssii); $ywmkwiwkosakssii = $this->ocksiywmkyaqseou("pagination_{$this->gueasuouwqysmomu()}_arguments", $ywmkwiwkosakssii); $ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] = false; $ymiyawysimukkoso = $this->kooycocagkkmaiay($ywmkwiwkosakssii); if ($ymiyawysimukkoso) { $siquossayskcwkea = $this->ocksiywmkyaqseou('pagination_attributes', []); $siquossayskcwkea = $this->ocksiywmkyaqseou("pagination_{$this->gueasuouwqysmomu()}_attributes", $siquossayskcwkea); if ($siquossayskcwkea) { $ymiyawysimukkoso = $this->caokeucsksukesyo()->gkksucgseqqemesc()->igmaewykumgwoaoy($ymiyawysimukkoso, $siquossayskcwkea); } } return $ymiyawysimukkoso; } public function kyseuiqusququcek() : array { return []; } public abstract function kooycocagkkmaiay($ywmkwiwkosakssii = []); }
