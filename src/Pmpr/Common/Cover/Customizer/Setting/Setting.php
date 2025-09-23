<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68d2c739f2b3d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use WP_Customize_Setting; class Setting extends WP_Customize_Setting { use WrapperTrait, HelperTrait; protected ?Field $field = null; public $type = 'theme_mod'; public function __construct(Field $aiowsaccomcoikus, $eygsasmqycagyayw) { $this->field = $aiowsaccomcoikus; $ywmkwiwkosakssii = ['transport' => 'refresh', 'capability' => 'edit_theme_options', 'default' => $aiowsaccomcoikus->oiswysuiioecsaae(), 'sanitize_callback' => $aiowsaccomcoikus->ikaukuqokwgsyeia()]; parent::__construct($eygsasmqycagyayw, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); } public function ygwimyogyaqgumam() : ?Field { return $this->field; } }
