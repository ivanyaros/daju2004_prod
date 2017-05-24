<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaquinasUsadas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $EstadosDeOrdens
 * @property \Cake\ORM\Association\BelongsTo $Maquinas
 *
 * @method \App\Model\Entity\MaquinasUsada get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaquinasUsada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaquinasUsada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaquinasUsada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaquinasUsada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaquinasUsada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaquinasUsada findOrCreate($search, callable $callback = null, $options = [])
 */
class MaquinasUsadasTable extends Table
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

        $this->setTable('maquinas_usadas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('EstadosDeOrdens', [
            'foreignKey' => 'estados_de_orden_id'
        ]);
        $this->belongsTo('Maquinas', [
            'foreignKey' => 'maquina_id'
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
            ->integer('operaciones')
            ->allowEmpty('operaciones');

        $validator
            ->numeric('uso')
            ->allowEmpty('uso');

        $validator
            ->allowEmpty('observaciones');

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
        $rules->add($rules->existsIn(['estados_de_orden_id'], 'EstadosDeOrdens'));
        $rules->add($rules->existsIn(['maquina_id'], 'Maquinas'));

        return $rules;
    }
}
