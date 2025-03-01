<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c31f14d8a80             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\WebPage; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\BreadcrumbList; class StructuredData extends AbstractStructuredData { public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::ocmiuacywmgycowk . 'before_render_webpage_schema', [$this, 'wiwiouyegiqwyoss']); } public function wiwiouyegiqwyoss($mooimoaemiymkucu) { if ($mooimoaemiymkucu instanceof WebPage && ($eaekkwggowaaogiu = Generator::symcgieuakksimmu()) && $eaekkwggowaaogiu->uiqcwsowwswommka()) { $eaekkwggowaaogiu->create(); if ($oammesyieqmwuwyi = $eaekkwggowaaogiu->ecwoamckysyqikqi()) { $mooimoaemiymkucu->kmsouiywgsysyogm(new BreadcrumbList($oammesyieqmwuwyi)); } } return $mooimoaemiymkucu; } }
