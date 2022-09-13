<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LpListArticles Model
 *
 * @method \App\Model\Entity\LpListArticle get($primaryKey, $options = [])
 * @method \App\Model\Entity\LpListArticle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LpListArticle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LpListArticle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LpListArticle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LpListArticle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LpListArticle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LpListArticle findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LpListArticlesTable extends Table
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

        $this->setTable('lp_list_articles');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->addBehavior('Translate', [
            'fields' => ['title','category','description'],
            'allowEmptyTranslations' => false,
            'translationTable' => 'articlesI18n',
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
            ->scalar('img_url')
            ->maxLength('img_url', 255)
            ->requirePresence('img_url', 'create')
            ->notEmptyString('img_url');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->scalar('category')
            ->maxLength('category', 255)
            ->allowEmptyString('category');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('presse_url')
            ->maxLength('presse_url', 255)
            ->requirePresence('presse_url', 'create')
            ->notEmptyString('presse_url');

        return $validator;
    }
}
