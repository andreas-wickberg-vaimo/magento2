<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Cms\Test\Constraint;

use Magento\Mtf\Constraint\AbstractConstraint;
use Magento\Cms\Test\Page\CmsIndex;

/**
 * Assert that authorization link is visible on the Store Front.
 */
class AssertAuthorizationLinkIsVisibleOnStoreFront extends AbstractConstraint
{
    /**
     * Assert that authorization link is visible on the Store Front.
     *
     * @param CmsIndex $cmsIndex
     * @return void
     */
    public function processAssert(CmsIndex $cmsIndex)
    {
        $cmsIndex->open();
        \PHPUnit_Framework_Assert::assertTrue(
            $cmsIndex->getLinksBlock()->isAuthorizationVisible(),
            "Authorization link is not visible on the Store Front."
        );
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return "Authorization link is visible on the Store Front.";
    }
}
