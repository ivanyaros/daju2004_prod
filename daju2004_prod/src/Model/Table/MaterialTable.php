<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Material Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Familias
 * @property \Cake\ORM\Association\BelongsTo $Monedas
 * @property \Cake\ORM\Association\BelongsTo $Ivas
 * @property \Cake\ORM\Association\HasMany $Materiales
 * @property \Cake\ORM\Association\BelongsToMany $Objetos
 * @property \Cake\ORM\Association\BelongsToMany $Proceso
 * @property \Cake\ORM\Association\BelongsToMany $ProveedoresClientes
 *
 * @method \App\Model\Entity\Material get($primaryKey, $options = [])
 * @method \App\Model\Entity\Material newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Material[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Material|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Material[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Material findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialTable extends Table
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

        $this->setTable('material');
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
        $this->hasMany('Materiales', [
            'foreignKey' => 'material_id'
        ]);
        $this->belongsToMany('Objetos', [
            'foreignKey' => 'material_id',
            'targetForeignKey' => 'objeto_id',
            'joinTable' => 'objetos_materiales'
        ]);
        $this->belongsToMany('Proceso', [
            'foreignKey' => 'material_id',
            'targetForeignKey' => 'proceso_id',
            'joinTable' => 'proceso_material'
        ]);
        $this->belongsToMany('ProveedoresClientes', [
            'foreignKey' => 'material_id',
            'targetForeignKey' => 'proveedores_cliente_id',
            'joinTable' => 'proveedores_clientes_material'
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
            ->numeric('longitud')
            ->allowEmpty('longitud');

        $validator
            ->numeric('anchura')
            ->allowEmpty('anchura');

        $validator
            ->numeric('profundidad')
            ->allowEmpty('profundidad');

        $validator
            ->allowEmpty('color');

        $validator
            ->numeric('gramaje')
            ->allowEmpty('gramaje');

        $validator
            ->numeric('peso_ud')
            ->allowEmpty('peso_ud');

        $validator
            ->integer('unidades_embalaje')
            ->allowEmpty('unidades_embalaje');

        $validator
            ->numeric('precio')
            ->allowEmpty('precio');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->boolean('visible')
            ->allowEmpty('visible');

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

        return $rules;
    }
}
