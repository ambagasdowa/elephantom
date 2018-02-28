<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Xmf Model
 *
 * @method \App\Model\Entity\Xmf get($primaryKey, $options = [])
 * @method \App\Model\Entity\Xmf newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Xmf[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Xmf|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Xmf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Xmf[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Xmf findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class XmfTable extends Table
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

        $this->setTable('xmf');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('xmf_title')
            ->maxLength('xmf_title', 50)
            ->allowEmpty('xmf_title');

        $validator
            ->scalar('xmf_header')
            ->maxLength('xmf_header', 50)
            ->allowEmpty('xmf_header');

        $validator
            ->integer('xmf_index')
            ->allowEmpty('xmf_index');

        $validator
            ->scalar('xmf_body')
            ->allowEmpty('xmf_body');

        $validator
            ->boolean('xmf_published')
            ->allowEmpty('xmf_published');

        return $validator;
    }
}
