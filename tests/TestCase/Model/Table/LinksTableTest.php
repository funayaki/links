<?php
namespace Links\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Links\Model\Table\LinksTable;

/**
 * Links\Model\Table\LinksTable Test Case
 */
class LinksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Links\Model\Table\LinksTable
     */
    public $Links;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.links.links',
        'plugin.links.phinxlog'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Links') ? [] : ['className' => LinksTable::class];
        $this->Links = TableRegistry::get('Links', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Links);

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
