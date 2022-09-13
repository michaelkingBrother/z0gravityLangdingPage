<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LpContents Model
 *
 * @method \App\Model\Entity\LpContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\LpContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LpContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LpContent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LpContent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LpContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LpContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LpContent findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LpContentsTable extends Table
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

        $this->setTable('lp_contents');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Translate', [
            'fields' => ['title','description', 'btn_content'],
            'allowEmptyTranslations' => false,
            'translationTable' => 'lpcontentsI18n',
        
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('video_url')
            ->maxLength('video_url', 255)
            ->requirePresence('video_url', 'create')
            ->notEmptyString('video_url');

        $validator
            ->scalar('btn_content')
            ->maxLength('btn_content', 255)
            ->requirePresence('btn_content', 'create')
            ->notEmptyString('btn_content');

        return $validator;
    }
}
