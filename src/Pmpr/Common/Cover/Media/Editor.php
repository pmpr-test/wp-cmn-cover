<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7677fb1d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media; use WP_Image_Editor_GD; require_once ABSPATH . WPINC . "\57\143\x6c\141\163\x73\55\167\160\x2d\x69\155\141\x67\145\x2d\x65\144\151\x74\x6f\162\56\160\x68\160"; require_once ABSPATH . WPINC . "\57\143\x6c\x61\163\163\55\167\x70\x2d\151\x6d\x61\x67\x65\55\145\x64\x69\x74\157\x72\55\147\144\56\160\x68\160"; class Editor extends WP_Image_Editor_GD { const mqoakwwmgqqsesmq = 0.01; const keseeyikosacsoem = 1200; const euucyeauiyuyckco = 675; const uuquqqmsmeqyuasw = 1200; const scmawswkkcamgsos = 900; const eoksmcquaikkcyee = 1200; const kwsgiuceksisqqma = 1200; public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null) { if ($yuwymayicwwqiske) { goto qsaoyggkqwcgskwk; } $yuwymayicwwqiske = $this->get_suffix(); qsaoyggkqwcgskwk: $acyuemiyqmkmewku = explode("\170", $yuwymayicwwqiske); $mwweeceqggqmogwk = ''; if (!(1 == get_option(Image::emskikwmugwkeegu) && 2 == count($acyuemiyqmkmewku) && !empty($acyuemiyqmkmewku[1]))) { goto eiicmcasqikiyasw; } $acyuemiyqmkmewku[0] = (int) $acyuemiyqmkmewku[0]; $acyuemiyqmkmewku[1] = (int) $acyuemiyqmkmewku[1]; if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 16 / 9)) { goto ykogqmmywykgouqy; } if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 4 / 3)) { goto aqksouwmeckaqyaq; } if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 1)) { goto gmsyoscesymiwwue; } goto kqwyogqqwumumiwg; ykogqmmywykgouqy: if (!(self::keseeyikosacsoem <= $acyuemiyqmkmewku[0] && self::euucyeauiyuyckco <= $acyuemiyqmkmewku[1])) { goto myooisakyuggoggc; } $mwweeceqggqmogwk = "\x31\66\x78\x39"; myooisakyuggoggc: goto kqwyogqqwumumiwg; aqksouwmeckaqyaq: if (!(self::uuquqqmsmeqyuasw <= $acyuemiyqmkmewku[0] && self::scmawswkkcamgsos <= $acyuemiyqmkmewku[1])) { goto awkqcyusycccekwq; } $mwweeceqggqmogwk = "\64\x78\x33"; awkqcyusycccekwq: goto kqwyogqqwumumiwg; gmsyoscesymiwwue: if (!(self::eoksmcquaikkcyee <= $acyuemiyqmkmewku[0] && self::kwsgiuceksisqqma <= $acyuemiyqmkmewku[1])) { goto yugmwomumkosucsc; } $mwweeceqggqmogwk = "\61\x78\x31"; yugmwomumkosucsc: kqwyogqqwumumiwg: eiicmcasqikiyasw: $yyimiwcuegayoskq = pathinfo($this->file); $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\151\162\x6e\141\x6d\145"]; $yucgcsieomwqgwws = $yyimiwcuegayoskq["\x65\170\164\x65\x6e\x73\x69\157\x6e"]; $ymqmyyeuycgmigyo = wp_basename($this->file, "\56{$yucgcsieomwqgwws}"); $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws); if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) { goto ayucsuwsiocgycww; } $miawkwqioaeasiig = $_dest_path; ayucsuwsiocgycww: if ('' != $mwweeceqggqmogwk) { goto smmagoyuqoigoesc; } $scqcgogsiaiksiiq = $this->get_suffix(); return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\x2d{$scqcgogsiaiksiiq}\x2e{$new_ext}"; goto wsqeiwkgoiekwasy; smmagoyuqoigoesc: return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\x2f{$ymqmyyeuycgmigyo}\56{$new_ext}"; wsqeiwkgoiekwasy: } }
