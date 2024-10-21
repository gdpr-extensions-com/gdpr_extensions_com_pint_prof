<?php

declare(strict_types=1);

namespace GdprExtensionsCom\GdprExtensionsComPinterestProfile\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class gdprpinterestTest extends UnitTestCase
{
    /**
     * @var \GdprExtensionsCom\GdprExtensionsComPinterestProfile\Domain\Model\gdprpinterest|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GdprExtensionsCom\GdprExtensionsComPinterestProfile\Domain\Model\gdprpinterest::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty(): void
    {
        self::markTestIncomplete();
    }
}
