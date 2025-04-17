<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6e896efa             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer\Segment; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; class Section extends Segment { protected ?string $type = 'WP_Customize_Section'; protected array $fields = []; protected ?string $panel = null; public function ouuceooysqugqmee(?string $skeuoeoiuwwyqwou) : self { $this->panel = $skeuoeoiuwwyqwou; return $this; } public function ugmceccgwaaaigiy() : array { return $this->fields; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $this->mkksewyosgeumwsa($aiowsaccomcoikus); } return $this; } }
