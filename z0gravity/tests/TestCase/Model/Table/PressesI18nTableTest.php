<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PressesI18nTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PressesI18nTable Test Case
 */
class PressesI18nTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PressesI18nTable
     */
    public $PressesI18n;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PressesI18n',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PressesI18n') ? [] : ['className' => PressesI18nTable::class];
        $this->PressesI18n = TableRegistry::getTableLocator()->get('PressesI18n', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PressesI18n);

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
