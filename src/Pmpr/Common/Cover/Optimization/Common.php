<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f85874abb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Pmpr\Common\Cover\Container; abstract class Common extends Container { public function wigskegsqequoeks() { if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, 'enqueue')) { $this->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, $qgciuiagkkguykgs], 999); } } public function kgquecmsgcouyaya() { if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, 'optimizationBuffer')) { $this->aqaqisyssqeomwom('optimization_buffer', [$this, $qgciuiagkkguykgs]); } } public function macyowwkykkuosce() : bool { static $cuakwceieagskoaa; if (!isset($cuakwceieagskoaa) || !is_bool($cuakwceieagskoaa)) { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $aoymggwyaoymgmym = $this->caokeucsksukesyo()->kyqakacqeumicgag(); $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $cuakwceieagskoaa = !$aoymggwyaoymgmym->cmaecekuqkwmemms('PR_OPTIMIZATION_DONT_OPTIMIZE', false) && !$mumyimcwkaemyyue->goecwaaykqoaaagg() && !$mumyimcwkaemyyue->sskgaouyswsqywgk() && !$mumyimcwkaemyyue->yycwkigueqwacmic() && !$mumyimcwkaemyyue->ksocgccowyqqmeii() && !$cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() && !$mumyimcwkaemyyue->kmmyuiwaogukwqqi() && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc() && !$cgceoyqmmwumqyqa->ckeyeaouokcgeqeq() && !$owaoeyikmqaeegma->mcgoysmkqsqooceq() && !$owaoeyikmqaeegma->goumkccmgysgqueu(); $cuakwceieagskoaa = $this->ocksiywmkyaqseou('cover_optimization_is_allow', $cuakwceieagskoaa); if ($cuakwceieagskoaa) { $couiucmsqaieciue = $this->weysguygiseoukqw(Setting::gwucgosagousgoko, []); if ($couiucmsqaieciue && is_array($couiucmsqaieciue)) { $agqwmkegqacsaeki = $aoymggwyaoymgmym->ckkgiiuoguqggymc(); $qqsoksukumkmgkwm = $aoymggwyaoymgmym->umeecawcsseswoec(); if ($agqwmkegqacsaeki && $mumyimcwkaemyyue->seokosgecygsmqau()) { $cuakwceieagskoaa = !in_array($agqwmkegqacsaeki, $couiucmsqaieciue, true); } else { if ($qqsoksukumkmgkwm && $mumyimcwkaemyyue->takycgcamoacksqw()) { $cuakwceieagskoaa = !in_array($qqsoksukumkmgkwm, $couiucmsqaieciue, true); } else { if ($mumyimcwkaemyyue->kccakwkaqugygwmq()) { $cuakwceieagskoaa = !in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(), $couiucmsqaieciue, true); } } } } } } return $cuakwceieagskoaa; } }
