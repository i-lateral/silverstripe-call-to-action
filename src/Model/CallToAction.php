<?php

namespace ilateral\SilverStripe\CallToAction\Model;

use SilverStripe\Core\Convert;
use gorriecoe\Link\Models\Link;
use SilverStripe\ORM\DataObject;

/**
 * base Call to Action object
 */
class CallToAction extends DataObject
{
    private static $table_name = 'CallToAction';
    
    private static $db = [
        'Title' => 'Varchar',
        'ShortCode' => 'Varchar',
        'ExtraClasses' => 'Varchar',
        'Text' => 'HTMLText',
        'LightText' => 'Boolean',
        'LinkDivider' => 'Varchar'
    ];

    private static $has_many = [
        'Links' => Link::class
    ];

    /**
     * generate ShortCode on write
     *
     * @return void
     */
    public function onBeforeWrite()
    {
        parent::onBeforeWrite();
        
        // Ensure the slug is URL safe
        $this->ShortCode = ($this->ShortCode) ? Convert::raw2url($this->ShortCode) : Convert::raw2url($this->Title);
    }

}