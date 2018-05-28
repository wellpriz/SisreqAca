<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequerimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequerimentosTable Test Case
 */
class RequerimentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequerimentosTable
     */
    public $Requerimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.requerimentos',
        'app.tiposrequerimentos',
        'app.setores',
        'app.cursos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Requerimentos') ? [] : ['className' => RequerimentosTable::class];
        $this->Requerimentos = TableRegistry::get('Requerimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Requerimentos);

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
