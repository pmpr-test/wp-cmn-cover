<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3e8e0add             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Comment\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use WP_Comments_List_Table; class ListTable extends WP_Comments_List_Table { use WrapperTrait, HelperTrait, CommonTrait; public function column_response($comment) { ob_start(); parent::column_response($comment); $nsmgceoqaqogqmuw = ob_get_clean(); if ($ucicuwcaawugkseg = $this->msaiieqagyoqqamc($comment)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($ucicuwcaawugkseg); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie('edit_term', $ucicuwcaawugkseg)) { $qamoesciwmcuqwcu = $swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->yyykkcyiksewsoqy($ucicuwcaawugkseg), ['class' => 'comments-edit-item-link']); } else { $qamoesciwmcuqwcu = $meqocwsecsywiiqs; } $mouwgmeqcygaiwcg = ''; if ($kesssewsiegssiya = $aoskwucuugeuaeus->yyoeeseewqmmyaee($ucicuwcaawugkseg)) { $mouwgmeqcygaiwcg = $swqimwqeweekeusq->yuawgssgauywkiia($this->caokeucsksukesyo()->yyoeeseewqmmyaee()->uikgwcuascgeissw($kesssewsiegssiya, 'view_item'), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($ucicuwcaawugkseg), ['class' => 'comments-view-item-link']); } $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $nsmgceoqaqogqmuw = $smuykqsageuocuos->yqmasmmquoocswuw($nsmgceoqaqogqmuw, '.comments-edit-item-link', $qamoesciwmcuqwcu); $nsmgceoqaqogqmuw = $smuykqsageuocuos->yqmasmmquoocswuw($nsmgceoqaqogqmuw, '.comments-view-item-link', $mouwgmeqcygaiwcg); } echo $nsmgceoqaqogqmuw; } }
