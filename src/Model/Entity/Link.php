<?php
namespace Links\Model\Entity;

use Cake\ORM\Entity;

/**
 * Link Entity
 *
 * @property int $id
 * @property string $model
 * @property int $foreign_key
 * @property string $title
 * @property string $url
 * @property string $options
 * @property int $position
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Links\Model\Entity\Phinxlog[] $phinxlog
 */
class Link extends Entity
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
        'model' => true,
        'foreign_key' => true,
        'title' => true,
        'url' => true,
        'options' => true,
        'position' => true,
        'created' => true,
        'modified' => true,
        'phinxlog' => true
    ];
}
