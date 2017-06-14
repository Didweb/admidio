<?php

$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace('{title_legend}',
                                                                 '{title_legend_visibility},grupeadmidio;{title_legend}',
                                                                  $GLOBALS['TL_DCA']['tl_page']['palettes']['root'] );



$GLOBALS['TL_DCA']['tl_page'] ['fields'] ['grupeadmidio']=  array
        (
          'label'               => &$GLOBALS['TL_LANG']['tl_page']['grupeadmidio'],
          'exclude'		          => true,
          'inputType'           => 'checkbox',
          'options_callback'    => array('contactadmidio', 'getListGrupe'),
          'eval'	              => array('multiple' => true),
          'sql'                 => "varchar(255) NOT NULL default ''"
        );
