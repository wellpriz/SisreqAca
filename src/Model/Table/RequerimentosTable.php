<?php
namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requerimentos Model
 *
 * @property \App\Model\Table\TiposrequerimentosTable|\Cake\ORM\Association\BelongsTo $Tiposrequerimentos
 * @property \App\Model\Table\SetoresTable|\Cake\ORM\Association\BelongsTo $Setores
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CursosTable|\Cake\ORM\Association\BelongsTo $Cursos
 *
 * @method \App\Model\Entity\Requerimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Requerimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Requerimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Requerimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requerimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Requerimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Requerimento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RequerimentosTable extends Table
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

        $this->setTable('requerimentos');
        $this->setDisplayField('tipo_requerimento');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tiposrequerimentos', [
            'foreignKey' => 'tiposrequerimentos_id',
            'joinType'   => 'INNER',
        ]);
        $this->belongsTo('Setores', [
            'foreignKey' => 'setores_id',
            'joinType'   => 'INNER',
        ]);
        $this->belongsTo('Cursos', [
            'foreignKey' => 'cursos_id',
            'joinType'   => 'INNER',
        ]);
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tiposrequerimentos_id'], 'Tiposrequerimentos'));
        $rules->add($rules->existsIn(['setores_id'], 'Setores'));
        $rules->add($rules->existsIn(['cursos_id'], 'Cursos'));

        return $rules;
    }
}
