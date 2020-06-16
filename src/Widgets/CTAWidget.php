<?php

namespace ilateral\SilverStripe\CallToAction\Widgets;

use SilverStripe\Forms\FieldList;
use SilverStripe\Widgets\Model\Widget;
use ilateral\SilverStripe\CallToAction\Model\CallToAction;
use NathanCox\HasOneAutocompleteField\Forms\HasOneAutocompleteField;

if (!class_exists(Widget::class)) {
    return;
}

class CTAWidget extends Widget
{
    private static $title = 'Call To Action';
    private static $cmsTitle = 'CTA';
    private static $description = 'Shows a call to action';

    private static $has_one = [
        'CTA' => CallToAction::class
    ];

    public function getCMSFields()
    {
        return new FieldList(
            new HasOneAutocompleteField('CTA', 'Call to Action', CallToAction::class)
        );
    }
}