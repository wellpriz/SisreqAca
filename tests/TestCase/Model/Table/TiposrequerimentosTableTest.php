<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposrequerimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposrequerimentosTable Test Case
 */
class TiposrequerimentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposrequerimentosTable
     */
    public $Tiposrequerimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tiposrequerimentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tiposrequerimentos') ? [] : ['className' => TiposrequerimentosTable::class];
        $this->Tiposrequerimentos = TableRegistry::get('Tiposrequerimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tiposrequerimentos);

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
