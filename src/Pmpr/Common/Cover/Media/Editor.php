<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc05648ef2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media; use WP_Image_Editor_GD; require_once ABSPATH . WPINC . "\57\143\x6c\141\163\x73\x2d\167\x70\55\x69\x6d\x61\147\x65\x2d\x65\144\x69\164\x6f\162\x2e\x70\150\160"; require_once ABSPATH . WPINC . "\57\143\x6c\141\x73\163\x2d\167\x70\55\151\x6d\x61\147\x65\55\x65\144\x69\x74\x6f\x72\55\147\144\56\x70\150\x70"; class Editor extends WP_Image_Editor_GD { const mqoakwwmgqqsesmq = 0.01; const keseeyikosacsoem = 1200; const euucyeauiyuyckco = 675; const uuquqqmsmeqyuasw = 1200; const scmawswkkcamgsos = 900; const eoksmcquaikkcyee = 1200; const kwsgiuceksisqqma = 1200; public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null) { if (!$yuwymayicwwqiske) { $yuwymayicwwqiske = $this->get_suffix(); } $acyuemiyqmkmewku = explode("\170", $yuwymayicwwqiske); $mwweeceqggqmogwk = ''; if (1 == get_option(Image::emskikwmugwkeegu) && 2 == count($acyuemiyqmkmewku) && !empty($acyuemiyqmkmewku[1])) { $acyuemiyqmkmewku[0] = (int) $acyuemiyqmkmewku[0]; $acyuemiyqmkmewku[1] = (int) $acyuemiyqmkmewku[1]; if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 16 / 9)) { if (self::keseeyikosacsoem <= $acyuemiyqmkmewku[0] && self::euucyeauiyuyckco <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\61\66\170\x39"; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 4 / 3)) { if (self::uuquqqmsmeqyuasw <= $acyuemiyqmkmewku[0] && self::scmawswkkcamgsos <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\x34\x78\x33"; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 1)) { if (self::eoksmcquaikkcyee <= $acyuemiyqmkmewku[0] && self::kwsgiuceksisqqma <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\x31\x78\x31"; } } } $yyimiwcuegayoskq = pathinfo($this->file); $miawkwqioaeasiig = $yyimiwcuegayoskq["\x64\x69\x72\x6e\x61\x6d\x65"]; $yucgcsieomwqgwws = $yyimiwcuegayoskq["\145\170\x74\x65\x6e\x73\x69\x6f\156"]; $ymqmyyeuycgmigyo = wp_basename($this->file, "\x2e{$yucgcsieomwqgwws}"); $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws); if (!is_null($dest_path) && ($_dest_path = realpath($dest_path))) { $miawkwqioaeasiig = $_dest_path; } if ('' != $mwweeceqggqmogwk) { return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\57{$ymqmyyeuycgmigyo}\56{$new_ext}"; } else { $scqcgogsiaiksiiq = $this->get_suffix(); return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\x2d{$scqcgogsiaiksiiq}\56{$new_ext}"; } } }
