<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6e896efa             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media\Image; use WP_Image_Editor_GD; require_once ABSPATH . WPINC . "/class-wp-image-editor.php"; require_once ABSPATH . WPINC . "/class-wp-image-editor-gd.php"; class Editor extends WP_Image_Editor_GD { const mqoakwwmgqqsesmq = 0.01; const keseeyikosacsoem = 1200; const euucyeauiyuyckco = 675; const uuquqqmsmeqyuasw = 1200; const scmawswkkcamgsos = 900; const eoksmcquaikkcyee = 1200; const kwsgiuceksisqqma = 1200; public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null) { if (!$yuwymayicwwqiske) { $yuwymayicwwqiske = $this->get_suffix(); } $acyuemiyqmkmewku = explode('x', $yuwymayicwwqiske); $mwweeceqggqmogwk = ''; if (1 == get_option(Image::emskikwmugwkeegu) && 2 == count($acyuemiyqmkmewku) && !empty($acyuemiyqmkmewku[1])) { $acyuemiyqmkmewku[0] = (int) $acyuemiyqmkmewku[0]; $acyuemiyqmkmewku[1] = (int) $acyuemiyqmkmewku[1]; if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 16 / 9)) { if (self::keseeyikosacsoem <= $acyuemiyqmkmewku[0] && self::euucyeauiyuyckco <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = '16x9'; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 4 / 3)) { if (self::uuquqqmsmeqyuasw <= $acyuemiyqmkmewku[0] && self::scmawswkkcamgsos <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = '4x3'; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 1)) { if (self::eoksmcquaikkcyee <= $acyuemiyqmkmewku[0] && self::kwsgiuceksisqqma <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = '1x1'; } } } $yyimiwcuegayoskq = pathinfo($this->file); $miawkwqioaeasiig = $yyimiwcuegayoskq['dirname']; $yucgcsieomwqgwws = $yyimiwcuegayoskq['extension']; $ymqmyyeuycgmigyo = wp_basename($this->file, ".{$yucgcsieomwqgwws}"); $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws); if (!is_null($dest_path) && ($_dest_path = realpath($dest_path))) { $miawkwqioaeasiig = $_dest_path; } if ('' != $mwweeceqggqmogwk) { return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}/{$ymqmyyeuycgmigyo}.{$new_ext}"; } else { $scqcgogsiaiksiiq = $this->get_suffix(); return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}-{$scqcgogsiaiksiiq}.{$new_ext}"; } } }
