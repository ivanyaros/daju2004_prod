<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proceso Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Familias
 * @property \Cake\ORM\Association\BelongsTo $Monedas
 * @property \Cake\ORM\Association\BelongsTo $Ivas
 * @property \Cake\ORM\Association\BelongsTo $Centros
 * @property \Cake\ORM\Association\HasMany $Ordens
 * @property \Cake\ORM\Association\BelongsToMany $Material
 * @property \Cake\ORM\Association\BelongsToMany $Producto
 *
 * @method \App\Model\Entity\Proceso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proceso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proceso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proceso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proceso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proceso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proceso findOrCreate($search, callable $callback = null, $options = [])
 */
class ProcesoTable extends Table
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

        $this->setTable('proceso');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Familias', [
            'foreignKey' => 'familia_id'
        ]);
        $this->belongsTo('Monedas', [
            'foreignKey' => 'moneda_id'
        ]);
        $this->belongsTo('Ivas', [
            'foreignKey' => 'iva_id'
        ]);
        $this->belongsTo('Centros', [
            'foreignKey' => 'centro_id'
        ]);
        $this->hasMany('Ordens', [
            'foreignKey' => 'proceso_id'
        ]);
        $this->belongsToMany('Material', [
            'foreignKey' => 'proceso_id',
            'targetForeignKey' => 'material_id',
            'joinTable' => 'proceso_material'
        ]);
        $this->belongsToMany('Producto', [
            'foreignKey' => 'proceso_id',
            'targetForeignKey' => 'producto_id',
            'joinTable' => 'proceso_producto'
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
            ->allowEmpty('nombre');

        $validator
            ->allowEmpty('referencia');

        $validator
            ->numeric('precio')
            ->allowEmpty('precio');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->boolean('visible')
            ->allowEmpty('visible');

        $validator
            ->allowEmpty('enlaces');

        $validator
            ->allowEmpty('procesocol');

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
        $rules->add($rules->existsIn(['familia_id'], 'Familias'));
        $rules->add($rules->existsIn(['moneda_id'], 'Monedas'));
        $rules->add($rules->existsIn(['iva_id'], 'Ivas'));
        $rules->add($rules->existsIn(['centro_id'], 'Centros'));

        return $rules;
    }
}
