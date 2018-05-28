<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estatus Model
 *
 * @method \App\Model\Entity\Estatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estatus findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstatusTable extends Table
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

        $this->setTable('estatus');
        $this->setDisplayField('tipo_estatus');
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
            ->scalar('tipo_estatus')
            ->maxLength('tipo_estatus', 220)
            ->requirePresence('tipo_estatus', 'create')
            ->notEmpty('tipo_estatus');

        return $validator;
    }
}
