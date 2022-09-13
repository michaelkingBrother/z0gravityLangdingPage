<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LpImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LpImagesTable Test Case
 */
class LpImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LpImagesTable
     */
    public $LpImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LpImages',
        'app.LpContents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LpImages') ? [] : ['className' => LpImagesTable::class];
        $this->LpImages = TableRegistry::getTableLocator()->get('LpImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LpImages);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
