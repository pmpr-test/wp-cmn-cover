<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d8eb9d924             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media; use WP_Image_Editor_GD; require_once ABSPATH . WPINC . "\57\143\x6c\x61\163\x73\x2d\167\160\x2d\x69\x6d\x61\x67\x65\55\x65\144\151\164\x6f\x72\56\x70\150\x70"; require_once ABSPATH . WPINC . "\x2f\143\154\x61\163\x73\x2d\x77\x70\x2d\151\155\141\x67\x65\x2d\145\x64\151\x74\157\162\x2d\147\x64\x2e\x70\150\160"; class Editor extends WP_Image_Editor_GD { const mqoakwwmgqqsesmq = 0.01; const keseeyikosacsoem = 1200; const euucyeauiyuyckco = 675; const uuquqqmsmeqyuasw = 1200; const scmawswkkcamgsos = 900; const eoksmcquaikkcyee = 1200; const kwsgiuceksisqqma = 1200; public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null) { if ($yuwymayicwwqiske) { goto cggowoquuiwqkyew; } $yuwymayicwwqiske = $this->get_suffix(); cggowoquuiwqkyew: $acyuemiyqmkmewku = explode("\170", $yuwymayicwwqiske); $mwweeceqggqmogwk = ''; if (!(1 == get_option(Image::emskikwmugwkeegu) && 2 == count($acyuemiyqmkmewku) && !empty($acyuemiyqmkmewku[1]))) { goto egasokooagakisiy; } $acyuemiyqmkmewku[0] = (int) $acyuemiyqmkmewku[0]; $acyuemiyqmkmewku[1] = (int) $acyuemiyqmkmewku[1]; if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 16 / 9)) { goto wcesymwqykqoyuqk; } if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 4 / 3)) { goto usqgaogkqgemuima; } if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 1)) { goto mswsoaimesegiiic; } goto meawswgwagoqgkye; wcesymwqykqoyuqk: if (!(self::keseeyikosacsoem <= $acyuemiyqmkmewku[0] && self::euucyeauiyuyckco <= $acyuemiyqmkmewku[1])) { goto ocokwuuquaokmasc; } $mwweeceqggqmogwk = "\61\x36\170\71"; ocokwuuquaokmasc: goto meawswgwagoqgkye; usqgaogkqgemuima: if (!(self::uuquqqmsmeqyuasw <= $acyuemiyqmkmewku[0] && self::scmawswkkcamgsos <= $acyuemiyqmkmewku[1])) { goto yiwiqaqmwiogawym; } $mwweeceqggqmogwk = "\64\x78\63"; yiwiqaqmwiogawym: goto meawswgwagoqgkye; mswsoaimesegiiic: if (!(self::eoksmcquaikkcyee <= $acyuemiyqmkmewku[0] && self::kwsgiuceksisqqma <= $acyuemiyqmkmewku[1])) { goto goacqqsgaaigyuaw; } $mwweeceqggqmogwk = "\x31\170\x31"; goacqqsgaaigyuaw: meawswgwagoqgkye: egasokooagakisiy: $yyimiwcuegayoskq = pathinfo($this->file); $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\151\162\x6e\141\x6d\x65"]; $yucgcsieomwqgwws = $yyimiwcuegayoskq["\x65\170\164\145\156\163\151\157\156"]; $ymqmyyeuycgmigyo = wp_basename($this->file, "\56{$yucgcsieomwqgwws}"); $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws); if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) { goto kecwuwwcwokuksyq; } $miawkwqioaeasiig = $_dest_path; kecwuwwcwokuksyq: if ('' != $mwweeceqggqmogwk) { goto qgegkeomwscwwiuw; } $scqcgogsiaiksiiq = $this->get_suffix(); return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\x2d{$scqcgogsiaiksiiq}\56{$new_ext}"; goto qmiwsequckckoaei; qgegkeomwscwwiuw: return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\x2f{$ymqmyyeuycgmigyo}\56{$new_ext}"; qmiwsequckckoaei: } }
