<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estatus Entity
 *
 * @property int $id
 * @property string $tipo_estatus
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Requerimento[] $requerimentos
 */
class Estatus extends Entity
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
        'tipo_estatus' => true,
        'created' => true,
        'modified' => true,
        'requerimentos' => true
    ];
}
