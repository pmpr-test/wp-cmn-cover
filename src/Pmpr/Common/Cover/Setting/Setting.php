<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc359d0b521             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Setting; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseSetting; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Logo\Setting as LogoSetting; use Pmpr\Common\Cover\Search\Setting as SearchSetting; use Pmpr\Common\Cover\Comment\Setting as CommentSetting; use Pmpr\Common\Cover\Breadcrumb\Setting as BreadcrumbSetting; use Pmpr\Common\Cover\Optimization\Setting as OptimizationSetting; class Setting extends Container { const migwcseqcocyqcge = 'icon_set'; const wgwowcckwymsoeyg = 'icon_base_url'; const qqswqycisgaqiuse = 'google_analytics'; const gqgseikcqgoiuqeg = 'image_placeholder'; const mguiyugauoweycka = 'disable_frontend_admin_bar'; const wsoekweikuyuyuwg = 'show_frontend_admin_bar_to'; const qmwqkeocouqykuwc = 'disable_delay'; const mesmawyqgaugkmag = 'disable_cleanup'; const mgwkysuyugygacma = 'disable_lazyload'; const gwucgosagousgoko = 'exclude_from_optimization'; const mgieaomemyywoqwa = 'licenses'; const eeewoeyqoigcuuyg = Constants::kicoscymgmgqeqgy . Constants::wassgkgmoyygyaya . Constants::mkousmkiawwousws; const waywmkogcywugikw = 'not_found_'; const jsemecycggiyookc = self::waywmkogcywugikw . Constants::TEXT; const csociausugiaiiku = self::waywmkogcywugikw . Constants::mkousmkiawwousws; const gmssuqwcwmucmymk = self::waywmkogcywugikw . Constants::qescuiwgsyuikume; const suauoeqsmyyyoiqc = self::waywmkogcywugikw . Constants::uqgcmmosieyimiku . Constants::imywcsggckkcywgk; const eocyseaqimgiciso = self::waywmkogcywugikw . Constants::uqgcmmosieyimiku . Constants::TEXT; const kcqakokswagkymgy = self::waywmkogcywugikw . Constants::uqgcmmosieyimiku . Constants::qgqyauaqwqmqseim; const akgosquwywqyooum = self::waywmkogcywugikw . Constants::wuasowoqaccigqqu . Constants::yayciqueeakqwese; const mesmkcqcgusoieck = 'taxonomy_'; const acsigocoaacakgqs = 'post_type_'; const wsqycwuumsssqqcq = self::acsigocoaacakgqs . self::mesmkcqcgusoieck; const ygiuusywiucccwqk = self::wsqycwuumsssqqcq . 'title_'; const wusmaqmagugmywwe = self::wsqycwuumsssqqcq . 'description_'; const gasuscmquiokwcak = self::wsqycwuumsssqqcq . 'display_description_'; public function kgquecmsgcouyaya() { $uusmaiomayssaecw = $this->caokeucsksukesyo()->ogciwyoqgciosgcw()->youaqkimaoecgsye(); $this->waqewsckuayqguos("after_generate_{$uusmaiomayssaecw}_panel", [$this, 'wcaageaequicawqc']); $this->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($uusmaiomayssaecw, Constants::ioomakeyqiqowgmk, true), [$this, 'kmuwyaoscooegyms']); } public function mameiwsayuyquoeq() { LogoSetting::symcgieuakksimmu(); SearchSetting::symcgieuakksimmu(); CommentSetting::symcgieuakksimmu(); BreadcrumbSetting::symcgieuakksimmu(); OptimizationSetting::symcgieuakksimmu(); } public function wcaageaequicawqc($amakmumgguksgmum) { if ($amakmumgguksgmum instanceof BaseSetting) { $mgiqqesweuqmsymo = []; $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $sciomagaqmgggsiu = $cskucqcumqsyimye->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $micugwgqicqmeoqq = []; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if ($cskucqcumqsyimye->auiemgkycsemicim($useksmwkuswkwcqg)) { $ymqmyyeuycgmigyo = $cskucqcumqsyimye->aakmagwggmkoiiyu($useksmwkuswkwcqg); $meqocwsecsywiiqs = $cskucqcumqsyimye->uikgwcuascgeissw($useksmwkuswkwcqg); $micugwgqicqmeoqq[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw($ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__('%s Config', PR__CMN__COVER), $meqocwsecsywiiqs))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ygiuusywiucccwqk . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__('%s archive title', PR__CMN__COVER), $meqocwsecsywiiqs)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::gasuscmquiokwcak . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(__('Display Description', PR__CMN__COVER))->agywyaaquwawwuiy(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__('%s archive description', PR__CMN__COVER), $meqocwsecsywiiqs))->qsecygiycssgacqs(5)->gsomueooycksswcy()); } } if ($micugwgqicqmeoqq) { $mgiqqesweuqmsymo[] = $uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::uouymeyqasaeckso)->gswweykyogmsyawy(__('Post Type', PR__CMN__COVER))->ciwuiwsyckiiogwo($micugwgqicqmeoqq)->saemoowcasogykak(IconInterface::qgmawmcoyqqkcosk); } if ($mgiqqesweuqmsymo) { $amakmumgguksgmum->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('post_type_taxonomy')->gswweykyogmsyawy(__('Post Type & Taxonomy', PR__CMN__COVER))->gucwmccyimoagwcm(__('Archive Configurations', PR__CMN__COVER))->saemoowcasogykak(IconInterface::oiogyiqiyikmsmcm)->mgisqyswkkuceisu($mgiqqesweuqmsymo)); } $amakmumgguksgmum->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('404_page')->gswweykyogmsyawy(__('404 Page', PR__CMN__COVER))->gucwmccyimoagwcm(__('Layout & Configuration', PR__CMN__COVER))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__CMN__COVER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::csociausugiaiiku)->gswweykyogmsyawy(__('Image', PR__CMN__COVER))->ycueqsmmommygueu())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::gmssuqwcwmucmymk)->gswweykyogmsyawy(__('Title', PR__CMN__COVER))->eyygsasuqmommkua(__('Page Not Found', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::jsemecycggiyookc)->gswweykyogmsyawy(__('Text', PR__CMN__COVER))->qsecygiycssgacqs(3)->gsomueooycksswcy()->eyygsasuqmommkua(__('The link you clicked may be broken or the page may have been removed.', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::akgosquwywqyooum)->gswweykyogmsyawy(__('Disable Search Box', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::suauoeqsmyyyoiqc)->gswweykyogmsyawy(__('Action URL', PR__CMN__COVER))->ukqywcsoogkyoaoa(Constants::imywcsggckkcywgk))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::eocyseaqimgiciso)->gswweykyogmsyawy(__('Action Text', PR__CMN__COVER))->gucwmccyimoagwcm(__('Leave empty if you want show page title.', PR__CMN__COVER))->eyygsasuqmommkua(__('Back To Home Page', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->gosycecgwuesyysq(self::kcqakokswagkymgy)->gswweykyogmsyawy(__('Action Icon', PR__CMN__COVER)))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->saemoowcasogykak(IconInterface::kmuciaqoiwuyagia)); $this->ewcsyqaaigkicgse('cover_setting_generate_form', $amakmumgguksgmum); } } public function kmuwyaoscooegyms($mgiqqesweuqmsymo) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $wkuikksoimmikkek = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wgogyccwcysggaig(Constants::eoaiagsgqsmskugs); $mgiqqesweuqmsymo[] = $uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__CMN__COVER))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::wgwowcckwymsoeyg)->gswweykyogmsyawy(__('Icons URL', PR__CMN__COVER))->xkgcwkwsqysqamic()->gucwmccyimoagwcm(__('Leave empty if you want use default icons url', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::migwcseqcocyqcge)->gswweykyogmsyawy(__('Icon Set', PR__CMN__COVER))->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->kegqkaysmmqquysc($this->guowcwummeykeqkm()[Constants::aeweusomuikewuis])->gucwmccyimoagwcm(__('You can change icon set of frontend by changing this option', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::mguiyugauoweycka)->gswweykyogmsyawy(__('Disable Admin Bar', PR__CMN__COVER))->ecyiaeoqyuyuoyya(self::wsoekweikuyuyuwg))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::wsoekweikuyuyuwg)->gswweykyogmsyawy(__('Show Admin Bar to', PR__CMN__COVER))->oikgogcweiiaocka()->acauweqyyugwisqc($this->caokeucsksukesyo()->issssuygyewuaswa()->yagwwwqikmkuyicq(true)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::gqgseikcqgoiuqeg)->gswweykyogmsyawy(__('Image Placeholder', PR__CMN__COVER))->gucwmccyimoagwcm(__('Default image for all post types.', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::qqswqycisgaqiuse)->gswweykyogmsyawy(__('Google Analytics', PR__CMN__COVER))->kyiucygqsgequoys('G-##########')->kqqqugemmqagucuq()); $mgiqqesweuqmsymo[] = $uuyucgkyusckoaeq->ycgeeoiieoiakgam('license')->gswweykyogmsyawy(__('Licenses', PR__CMN__COVER))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::oawqokqscewgoogg)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::mgieaomemyywoqwa)->gswweykyogmsyawy(__('Items', PR__CMN__COVER))->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__CMN__COVER))->mkmssscwmeekwgqo()->gucwmccyimoagwcm(__('Title of license to show on admin', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::kkeogqiyysoyuemk)->gswweykyogmsyawy(__('Display Method', PR__CMN__COVER))->mkmssscwmeekwgqo()->kesomeowemmyygey(Constants::kicoscymgmgqeqgy, __('By Markup', PR__CMN__COVER))->kesomeowemmyygey(Constants::ogigqueukwysusii, __('By Link & Image', PR__CMN__COVER))->eyygsasuqmommkua(Constants::kicoscymgmgqeqgy)->qyucewwiggkyeaso(Constants::kicoscymgmgqeqgy, [Constants::kicoscymgmgqeqgy, self::eeewoeyqoigcuuyg])->qyucewwiggkyeaso(Constants::ogigqueukwysusii, [Constants::ogigqueukwysusii, Constants::mkousmkiawwousws, Constants::caoiqkqugiqqqimm]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ogigqueukwysusii)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Link', PR__CMN__COVER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::caoiqkqugiqqqimm)->gswweykyogmsyawy(__('Rel', PR__CMN__COVER))->mkmssscwmeekwgqo()->oikgogcweiiaocka()->acauweqyyugwisqc($this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qykoimeycmqgwkui()))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__('Image', PR__CMN__COVER))->ycueqsmmommygueu())->mkksewyosgeumwsa($uuyucgkyusckoaeq->uouyygwcgsmygaee(Constants::kicoscymgmgqeqgy)->gswweykyogmsyawy(__('Markup', PR__CMN__COVER))->qsecygiycssgacqs(3)->kqqqugemmqagucuq()->woiuekkeucikkyum(__('If you have a html markup of your license, put here to show it.', PR__CMN__COVER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::eeewoeyqoigcuuyg)->gswweykyogmsyawy(__('Markup Image', PR__CMN__COVER))->ycueqsmmommygueu())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::qmeuakmyaucgeyeu)->gswweykyogmsyawy(__('Image Size', PR__CMN__COVER))->mkmssscwmeekwgqo()->qyucewwiggkyeaso('', [Constants::qomookamaskuoswk, Constants::sogmkkcwuamuqegw])->acauweqyyugwisqc($wkuikksoimmikkek))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qomookamaskuoswk)->gswweykyogmsyawy(__('Image Width', PR__CMN__COVER))->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::sogmkkcwuamuqegw)->gswweykyogmsyawy(__('Image Height', PR__CMN__COVER))->escqqisecooswqgo()->mkmssscwmeekwgqo())); return $mgiqqesweuqmsymo; } public function guowcwummeykeqkm() : array { $qiouiwasaauyaaue = $iwkyyocymeukcceu = []; $ucseauqiioaksuou = ['thin' => __('Thin', PR__CMN__COVER), 'light' => __('Light', PR__CMN__COVER), 'regular' => __('Regular', PR__CMN__COVER), 'solid' => __('Solid', PR__CMN__COVER), 'duotone' => __('Duotone', PR__CMN__COVER)]; $wkaqekwwgqsqwcoi = IconInterface::owmeckkckykywmec; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ucseauqiioaksuou as $cekceegqqaoiisei => $pkyyagewkiyckmwy) { $wckgqkawmusqwkoo = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => 'mr-2 my-auto pr-icon d-block icon-loaded'], [Constants::uociqugwegocyuue => $cekceegqqaoiisei, Constants::ELEMENT => 'img']); $iwkyyocymeukcceu[$cekceegqqaoiisei] = $wckgqkawmusqwkoo . $pkyyagewkiyckmwy; $qiouiwasaauyaaue[$cekceegqqaoiisei] = [Constants::ssmskyqgcmeiayco => $swqimwqeweekeusq->iaaacsuskiakkwui([$wckgqkawmusqwkoo, $swqimwqeweekeusq->gmqyuaqwgiayskei($pkyyagewkiyckmwy, ['class' => 'my-auto'])], ['class' => 'd-flex']), Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy]; } return [Constants::emgcgiseaoouacge => $ucseauqiioaksuou, Constants::eoaiagsgqsmskugs => $iwkyyocymeukcceu, Constants::aeweusomuikewuis => $qiouiwasaauyaaue]; } }
