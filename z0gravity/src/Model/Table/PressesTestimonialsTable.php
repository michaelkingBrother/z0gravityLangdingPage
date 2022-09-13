<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PressesTestimonials Model
 *
 * @method \App\Model\Entity\PressesTestimonial get($primaryKey, $options = [])
 * @method \App\Model\Entity\PressesTestimonial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PressesTestimonial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PressesTestimonial|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PressesTestimonial saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PressesTestimonial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PressesTestimonial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PressesTestimonial findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PressesTestimonialsTable extends Table
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

        $this->setTable('presses_testimonials');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Translate', [
            'fields' => ['description', 'author_position'],
            'allowEmptyTranslations' => false,
            'translationTable' => 'pressesI18n',
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
            ->scalar('logo_url')
            ->maxLength('logo_url', 255)
            ->requirePresence('logo_url', 'create')
            ->notEmptyString('logo_url');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('author')
            ->maxLength('author', 255)
            ->allowEmptyString('author');

        $validator
            ->scalar('author_position')
            ->maxLength('author_position', 255)
            ->allowEmptyString('author_position');

        $validator
            ->scalar('presse_url')
            ->maxLength('presse_url', 255)
            ->requirePresence('presse_url', 'create')
            ->notEmptyString('presse_url');

        return $validator;
    }
}
