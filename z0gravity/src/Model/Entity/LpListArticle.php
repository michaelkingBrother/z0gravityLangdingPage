<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LpListArticle Entity
 *
 * @property int $id
 * @property string $img_url
 * @property string|null $title
 * @property string|null $category
 * @property string|null $description
 * @property string $presse_url
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class LpListArticle extends Entity
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
        'img_url' => true,
        'title' => true,
        'category' => true,
        'description' => true,
        'presse_url' => true,
        'created' => true,
        'modified' => true,
    ];
}
