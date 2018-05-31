<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Requerimento Entity
 *
 * @property int $id
 * @property int $tiposrequerimentos_id
 * @property int $setores_id
 * @property int $users_id
 * @property int $cursos_id
 * @property string $justificativa
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Tiposrequerimento $tiposrequerimento
 * @property \App\Model\Entity\Setore $setore
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Curso $curso
 */
class Requerimento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'tiposrequerimentos_id' => true,
        'setores_id'            => true,
        'cursos_id'             => true,
        'justificativa'         => true,
        'created'               => true,
        'modified'              => true,
        'tiposrequerimento'     => true,
        'setore'                => true,
        'user'                  => true,
        'curso'                 => true,
    ];
}
