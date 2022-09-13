<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PressesTestimonialsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PressesTestimonialsTable Test Case
 */
class PressesTestimonialsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PressesTestimonialsTable
     */
    public $PressesTestimonials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PressesTestimonials',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PressesTestimonials') ? [] : ['className' => PressesTestimonialsTable::class];
        $this->PressesTestimonials = TableRegistry::getTableLocator()->get('PressesTestimonials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PressesTestimonials);

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
