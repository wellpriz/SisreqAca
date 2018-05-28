<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticleTable Test Case
 */
class ArticleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticleTable
     */
    public $Article;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.article'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Article') ? [] : ['className' => ArticleTable::class];
        $this->Article = TableRegistry::get('Article', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Article);

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
