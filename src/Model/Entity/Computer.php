<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Computer Entity
 *
 * @property int $id
 * @property int $location_id
 * @property string $model
 * @property string $cond
 *
 * @property \App\Model\Entity\Location $location
 */
class Computer extends Entity
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
        'location_id' => true,
        'model' => true,
        'cond' => true,
        'location' => true
    ];
}
