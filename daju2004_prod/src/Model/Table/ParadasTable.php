<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paradas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParadasTipo
 * @property \Cake\ORM\Association\BelongsTo $Ordens
 *
 * @method \App\Model\Entity\Parada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parada findOrCreate($search, callable $callback = null, $options = [])
 */
class ParadasTable extends Table
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

        $this->setTable('paradas');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('ParadasTipo', [
            'foreignKey' => 'paradas_tipo_id'
        ]);
        $this->belongsTo('Ordens', [
            'foreignKey' => 'orden_id'
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
            ->dateTime('fecha_inicio')
            ->allowEmpty('fecha_inicio');

        $validator
            ->integer('duracion')
            ->allowEmpty('duracion');

        $validator
            ->allowEmpty('comentario');

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
        $rules->add($rules->existsIn(['paradas_tipo_id'], 'ParadasTipo'));
        $rules->add($rules->existsIn(['orden_id'], 'Ordens'));

        return $rules;
    }
}
