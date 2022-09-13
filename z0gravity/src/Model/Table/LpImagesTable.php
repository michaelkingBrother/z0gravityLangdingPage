<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LpImages Model
 *
 * @property \App\Model\Table\LpContentsTable&\Cake\ORM\Association\BelongsTo $LpContents
 *
 * @method \App\Model\Entity\LpImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\LpImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LpImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LpImage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LpImage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LpImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LpImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LpImage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LpImagesTable extends Table
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

        $this->setTable('lp_images');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('LpContents', [
            'foreignKey' => 'lp_contents_id',
            'joinType' => 'INNER',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('image_url')
            ->maxLength('image_url', 255)
            ->requirePresence('image_url', 'create')
            ->notEmptyFile('image_url');

        $validator
            ->scalar('background_color')
            ->maxLength('background_color', 255)
            ->allowEmptyString('background_color');

        $validator
            ->scalar('text_color')
            ->maxLength('text_color', 255)
            ->allowEmptyString('text_color');

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
        $rules->add($rules->existsIn(['lp_contents_id'], 'LpContents'));

        return $rules;
    }
}
