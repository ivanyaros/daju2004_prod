<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bobinas Model
 *
 * @method \App\Model\Entity\Bobina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bobina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bobina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bobina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bobina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bobina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bobina findOrCreate($search, callable $callback = null, $options = [])
 */
class BobinasTable extends Table
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

        $this->setTable('bobinas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('lote');

        $validator
            ->integer('numero')
            ->allowEmpty('numero');

        $validator
            ->integer('taras')
            ->allowEmpty('taras');

        $validator
            ->numeric('metros_brutos')
            ->allowEmpty('metros_brutos');

        $validator
            ->numeric('metros_netos')
            ->allowEmpty('metros_netos');

        $validator
            ->numeric('metros_actuales')
            ->allowEmpty('metros_actuales');

        $validator
            ->numeric('metros_utiles')
            ->allowEmpty('metros_utiles');

        $validator
            ->numeric('scrap')
            ->allowEmpty('scrap');

        $validator
            ->boolean('en_uso')
            ->allowEmpty('en_uso');

        return $validator;
    }
}
