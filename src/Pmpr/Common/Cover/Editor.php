<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecade94be0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Interfaces\Constants; class Editor extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'enqueue']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('mce_external_plugins', [$this, 'oaaeaoumygmgceas'])->cecaguuoecmccuse('tiny_mce_before_init', [$this, 'yeiacayaaaygqyug']); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'wplink-rel', 'link-rel.js')->simswskycwagoeqy())->wwmusmkkcwsiciou($this, 'link_rels', [Constants::qwumqqyuasyskkkc => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qykoimeycmqgwkui(), Constants::uissasisiuymwsmu => __('Rel Attribute', PR__CMN__COVER)]); } public function oaaeaoumygmgceas($mseykiqqcmyesccu) { $mseykiqqcmyesccu['table'] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, 'table.js'); return $mseykiqqcmyesccu; } public function yeiacayaaaygqyug($qeqooyuoiasweuck) { return $this->mcioweoiukeoomcw($qeqooyuoiasweuck); } public function mcioweoiukeoomcw($qeqooyuoiasweuck) { $qeqooyuoiasweuck['table_default_attributes'] = wp_json_encode(['border' => 0, 'width' => '100%', 'height' => '100%']); $qeqooyuoiasweuck['table_class_list'] = wp_json_encode([['title' => __('None', PR__CMN__COVER), 'value' => ''], ['title' => __('Table', PR__CMN__COVER), 'value' => 'table'], ['title' => __('Striped', PR__CMN__COVER), 'value' => 'table table-striped table-hover'], ['title' => __('Bordered', PR__CMN__COVER), 'value' => 'table table-bordered table-hover']]); $qeqooyuoiasweuck['table_toolbar'] = 'tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol'; $qeqooyuoiasweuck['table_advtab'] = false; $qeqooyuoiasweuck['table_row_advtab'] = false; $qeqooyuoiasweuck['table_cell_advtab'] = false; $qeqooyuoiasweuck['table_resize_bars'] = true; $qeqooyuoiasweuck['table_default_styles'] = '{}'; return $qeqooyuoiasweuck; } }
