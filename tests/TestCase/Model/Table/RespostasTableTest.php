<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RespostasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RespostasTable Test Case
 */
class RespostasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RespostasTable
     */
    public $Respostas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.respostas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Respostas') ? [] : ['className' => RespostasTable::class];
        $this->Respostas = TableRegistry::get('Respostas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Respostas);

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
