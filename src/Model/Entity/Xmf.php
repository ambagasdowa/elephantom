<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Xmf Entity
 *
 * @property int $id
 * @property string $xmf_title
 * @property string $xmf_header
 * @property int $xmf_index
 * @property string $xmf_body
 * @property bool $xmf_published
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Xmf extends Entity
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
        'xmf_title' => true,
        'xmf_header' => true,
        'xmf_index' => true,
        'xmf_body' => true,
        'xmf_published' => true,
        'created' => true,
        'modified' => true
    ];
}
