<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LpContent Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $video_url
 * @property string $btn_content
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\LpImage[] $lp_images
 * @property \App\Model\Entity\LpContentsTitleTranslation $title_translation
 * @property \App\Model\Entity\LpContentsDescriptionTranslation $description_translation
 * @property \App\Model\Entity\LpContentsBtnContentTranslation $btn_content_translation
 * @property \App\Model\Entity\I18n[] $_i18n
 */
class LpContent extends Entity
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
        'title' => true,
        'description' => true,
        'video_url' => true,
        'btn_content' => true,
        'created' => true,
        'modified' => true,
        'lp_images' => true,
        'title_translation' => true,
        'description_translation' => true,
        'btn_content_translation' => true,
    ];
    
}
