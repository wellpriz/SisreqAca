<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiposrequerimentos Model
 *
 * @method \App\Model\Entity\Tiposrequerimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tiposrequerimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tiposrequerimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiposrequerimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposrequerimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposrequerimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposrequerimento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TiposrequerimentosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tiposrequerimentos');
        $this->setDisplayField('tipo_requerimento');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('tipo_requerimento')
            ->maxLength('tipo_requerimento', 220)
            ->requirePresence('tipo_requerimento', 'create')
            ->notEmpty('tipo_requerimento');

        return $validator;
    }
}
