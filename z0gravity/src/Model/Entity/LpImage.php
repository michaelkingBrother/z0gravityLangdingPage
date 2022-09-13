<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LpImage Entity
 *
 * @property int $id
 * @property string $image_url
 * @property string|null $background_color
 * @property string|null $text_color
 * @property int $lp_contents_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\LpContent $lp_content
 */
class LpImage extends Entity
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
        'image_url' => true,
        'background_color' => true,
        'text_color' => true,
        'lp_contents_id' => true,
        'created' => true,
        'modified' => true,
        'lp_content' => true,
    ];
}
