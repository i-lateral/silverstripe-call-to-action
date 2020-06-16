<?php

namespace ilateral\SilverStripe\CallToAction\Extensions;

use ilateral\SilverStripe\CallToAction\Model\CallToAction;
use SilverStripe\ORM\DataExtension;

class LinkExtension extends DataExtension
{
    private static $has_one = [
        'CallToAction' => CallToAction::class
    ];
}