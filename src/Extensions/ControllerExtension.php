<?php

namespace ilateral\SilverStripe\CallToAction\Extensions;

use ilateral\SilverStripe\CallToAction\Model\CallToAction;
use SilverStripe\Core\Extension;

class ControllerExtension extends Extension
{
    public function CTABanner($code = "")
    {
        $cta = CallToAction::get()->find('ShortCode', $code);
        if (!$cta) {
            return false;
        }
        return $this
            ->owner
            ->renderWith(
                'ilateral\SilverStripe\CallToAction\Model\CallToAction',
                [
                    'CTA' => $cta
                ]
            );
    }
}