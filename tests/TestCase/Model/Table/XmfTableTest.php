<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\XmfTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\XmfTable Test Case
 */
class XmfTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\XmfTable
     */
    public $Xmf;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.xmf'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Xmf') ? [] : ['className' => XmfTable::class];
        $this->Xmf = TableRegistry::get('Xmf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Xmf);

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
