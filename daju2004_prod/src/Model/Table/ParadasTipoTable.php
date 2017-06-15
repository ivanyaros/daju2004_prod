<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ParadasTipo Model
 *
 * @property \Cake\ORM\Association\HasMany $Paradas
 *
 * @method \App\Model\Entity\ParadasTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ParadasTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ParadasTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ParadasTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ParadasTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ParadasTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ParadasTipo findOrCreate($search, callable $callback = null, $options = [])
 */
class ParadasTipoTable extends Table
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

        $this->setTable('paradas_tipo');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->hasMany('Paradas', [
            'foreignKey' => 'paradas_tipo_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        return $validator;
    }
}
