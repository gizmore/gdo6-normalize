<?php
namespace GDO\Normalize;

use GDO\Core\GDO_Module;

/**
 * Normalize CSS assets.
 * 
 * @author gizmore
 * @version 6.10.6
 * @since 6.10.6
 */
final class Module_Normalize extends GDO_Module
{
    public $module_priority = 8;
    
    public function onIncludeScripts()
    {
        $this->addBowerCSS('normalize.css/normalize.css');
    }
    
}
