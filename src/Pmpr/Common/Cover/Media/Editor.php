<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517377ff95             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media; use WP_Image_Editor_GD; require_once ABSPATH . WPINC . "\x2f\x63\154\141\x73\163\55\167\x70\55\x69\x6d\141\x67\145\55\x65\144\x69\164\x6f\x72\x2e\160\150\x70"; require_once ABSPATH . WPINC . "\x2f\143\154\x61\163\163\55\x77\x70\x2d\151\x6d\141\147\145\x2d\145\144\151\x74\157\x72\55\147\x64\56\x70\x68\160"; class Editor extends WP_Image_Editor_GD { const mqoakwwmgqqsesmq = 0.01; const keseeyikosacsoem = 1200; const euucyeauiyuyckco = 675; const uuquqqmsmeqyuasw = 1200; const scmawswkkcamgsos = 900; const eoksmcquaikkcyee = 1200; const kwsgiuceksisqqma = 1200; public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null) { if ($yuwymayicwwqiske) { goto cggowoquuiwqkyew; } $yuwymayicwwqiske = $this->get_suffix(); cggowoquuiwqkyew: $acyuemiyqmkmewku = explode("\x78", $yuwymayicwwqiske); $mwweeceqggqmogwk = ''; if (!(1 == get_option(Image::emskikwmugwkeegu) && 2 == count($acyuemiyqmkmewku) && !empty($acyuemiyqmkmewku[1]))) { goto egasokooagakisiy; } $acyuemiyqmkmewku[0] = (int) $acyuemiyqmkmewku[0]; $acyuemiyqmkmewku[1] = (int) $acyuemiyqmkmewku[1]; if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 16 / 9)) { goto wcesymwqykqoyuqk; } if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 4 / 3)) { goto usqgaogkqgemuima; } if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 1)) { goto mswsoaimesegiiic; } goto meawswgwagoqgkye; wcesymwqykqoyuqk: if (!(self::keseeyikosacsoem <= $acyuemiyqmkmewku[0] && self::euucyeauiyuyckco <= $acyuemiyqmkmewku[1])) { goto ocokwuuquaokmasc; } $mwweeceqggqmogwk = "\x31\66\170\x39"; ocokwuuquaokmasc: goto meawswgwagoqgkye; usqgaogkqgemuima: if (!(self::uuquqqmsmeqyuasw <= $acyuemiyqmkmewku[0] && self::scmawswkkcamgsos <= $acyuemiyqmkmewku[1])) { goto yiwiqaqmwiogawym; } $mwweeceqggqmogwk = "\64\170\x33"; yiwiqaqmwiogawym: goto meawswgwagoqgkye; mswsoaimesegiiic: if (!(self::eoksmcquaikkcyee <= $acyuemiyqmkmewku[0] && self::kwsgiuceksisqqma <= $acyuemiyqmkmewku[1])) { goto goacqqsgaaigyuaw; } $mwweeceqggqmogwk = "\x31\170\61"; goacqqsgaaigyuaw: meawswgwagoqgkye: egasokooagakisiy: $yyimiwcuegayoskq = pathinfo($this->file); $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\151\x72\156\141\155\x65"]; $yucgcsieomwqgwws = $yyimiwcuegayoskq["\145\x78\x74\145\x6e\x73\151\157\x6e"]; $ymqmyyeuycgmigyo = wp_basename($this->file, "\x2e{$yucgcsieomwqgwws}"); $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws); if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) { goto kecwuwwcwokuksyq; } $miawkwqioaeasiig = $_dest_path; kecwuwwcwokuksyq: if ('' != $mwweeceqggqmogwk) { goto qgegkeomwscwwiuw; } $scqcgogsiaiksiiq = $this->get_suffix(); return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\55{$scqcgogsiaiksiiq}\56{$new_ext}"; goto qmiwsequckckoaei; qgegkeomwscwwiuw: return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\x2f{$ymqmyyeuycgmigyo}\56{$new_ext}"; qmiwsequckckoaei: } }
