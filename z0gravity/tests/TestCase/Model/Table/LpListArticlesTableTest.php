<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LpListArticlesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LpListArticlesTable Test Case
 */
class LpListArticlesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LpListArticlesTable
     */
    public $LpListArticles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LpListArticles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LpListArticles') ? [] : ['className' => LpListArticlesTable::class];
        $this->LpListArticles = TableRegistry::getTableLocator()->get('LpListArticles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LpListArticles);

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
