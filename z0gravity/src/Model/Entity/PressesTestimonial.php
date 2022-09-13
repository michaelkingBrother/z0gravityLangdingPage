<?php
namespace App\Model\Entity;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\ORM\Entity;

/**
 * PressesTestimonial Entity
 *
 * @property int $id
 * @property string $logo_url
 * @property string|null $description
 * @property string|null $author
 * @property string|null $author_position
 * @property string $presse_url
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class PressesTestimonial extends Entity
{   
    use TranslateTrait;
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
        'logo_url' => true,
        'description' => true,
        'author' => true,
        'author_position' => true,
        'presse_url' => true,
        'created' => true,
        'modified' => true,
        '_translations'=> true,
    ];
}
