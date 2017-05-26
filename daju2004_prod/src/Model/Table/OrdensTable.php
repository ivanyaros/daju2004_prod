<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ordens Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\BelongsTo $Centros
 * @property \Cake\ORM\Association\BelongsTo $Proceso
 * @property \Cake\ORM\Association\BelongsTo $Prioridades
 * @property \Cake\ORM\Association\HasMany $EstadosDeOrdens
 * @property \Cake\ORM\Association\HasMany $Objetos
 *
 * @method \App\Model\Entity\Orden get($primaryKey, $options = [])
 * @method \App\Model\Entity\Orden newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Orden[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Orden|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orden patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Orden[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Orden findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdensTable extends Table
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

        $this->setTable('ordens');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id'
        ]);
        $this->belongsTo('Centros', [
            'foreignKey' => 'centro_id'
        ]);
        $this->belongsTo('Proceso', [
            'foreignKey' => 'proceso_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Prioridades', [
            'foreignKey' => 'prioridade_id'
        ]);
        $this->hasMany('EstadosDeOrdens', [
            'foreignKey' => 'orden_id'
        ]);
        $this->hasMany('Objetos', [
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
            ->allowEmpty('name');

        $validator
            ->allowEmpty('referencia');

        $validator
            ->integer('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->dateTime('fecha_creacion')
            ->allowEmpty('fecha_creacion');

        $validator
            ->dateTime('fecha_terminacion')
            ->allowEmpty('fecha_terminacion');

        $validator
            ->numeric('scrap')
            ->allowEmpty('scrap');

        $validator
            ->numeric('coste_operario')
            ->allowEmpty('coste_operario');

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
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));
        $rules->add($rules->existsIn(['centro_id'], 'Centros'));
        $rules->add($rules->existsIn(['proceso_id'], 'Proceso'));
        $rules->add($rules->existsIn(['prioridade_id'], 'Prioridades'));

        return $rules;
    }
}
