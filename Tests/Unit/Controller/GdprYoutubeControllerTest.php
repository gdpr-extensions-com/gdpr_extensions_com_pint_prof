<?php

declare(strict_types=1);

namespace GdprExtensionsCom\GdprExtensionsComPintProf\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 */
class gdprpinterestControllerTest extends UnitTestCase
{
    /**
     * @var \GdprExtensionsCom\GdprExtensionsComPintProf\Controller\gdprpinterestController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\GdprExtensionsCom\GdprExtensionsComPintProf\Controller\gdprpinterestController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

}
