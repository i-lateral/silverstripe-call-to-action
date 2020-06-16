<?php

namespace ilateral\SilverStripe\CallToAction\Extensions;

use ilateral\SilverStripe\CallToAction\Model\CallToAction;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension
{
    public function updateCMSFields(\SilverStripe\Forms\FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.CTA',
            GridField::create(
                'CTAs',
                'Call To Actions',
                CallToAction::get(),
                GridFieldConfig_RelationEditor::create()
            )
        );
    }
}