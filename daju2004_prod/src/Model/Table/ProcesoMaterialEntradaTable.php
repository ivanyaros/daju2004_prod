<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProcesoMaterialEntrada Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Proceso
 * @property \Cake\ORM\Association\BelongsTo $Material
 *
 * @method \App\Model\Entity\ProcesoMaterialEntrada get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProcesoMaterialEntrada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProcesoMaterialEntrada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProcesoMaterialEntrada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProcesoMaterialEntrada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProcesoMaterialEntrada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProcesoMaterialEntrada findOrCreate($search, callable $callback = null, $options = [])
 */
class ProcesoMaterialEntradaTable extends Table
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

        $this->setTable('proceso_material_entrada');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Proceso', [
            'foreignKey' => 'proceso_id'
        ]);
        $this->belongsTo('Material', [
            'foreignKey' => 'material_id'
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
            ->numeric('metros_lineales')
            ->allowEmpty('metros_lineales');

        $validator
            ->numeric('metros_cuadrados')
            ->allowEmpty('metros_cuadrados');

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
        $rules->add($rules->existsIn(['proceso_id'], 'Proceso'));
        $rules->add($rules->existsIn(['material_id'], 'Material'));

        return $rules;
    }
}
