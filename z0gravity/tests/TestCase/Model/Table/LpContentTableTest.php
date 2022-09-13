<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LpContentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LpContentTable Test Case
 */
class LpContentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LpContentTable
     */
    public $LpContent;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LpContent',
        'app.LpImages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LpContent') ? [] : ['className' => LpContentTable::class];
        $this->LpContent = TableRegistry::getTableLocator()->get('LpContent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LpContent);

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
}
