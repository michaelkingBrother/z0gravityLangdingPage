<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LpContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LpContentsTable Test Case
 */
class LpContentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LpContentsTable
     */
    public $LpContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LpContents',
        'app.LpImages',
        'app.LpContentsTitleTranslation',
        'app.LpContentsDescriptionTranslation',
        'app.LpContentsBtnContentTranslation',
        'app.I18n',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LpContents') ? [] : ['className' => LpContentsTable::class];
        $this->LpContents = TableRegistry::getTableLocator()->get('LpContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LpContents);

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
