<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Producto Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Familias
 * @property \Cake\ORM\Association\BelongsTo $Monedas
 * @property \Cake\ORM\Association\BelongsTo $Ivas
 * @property \Cake\ORM\Association\HasMany $Objetos
 * @property \Cake\ORM\Association\BelongsToMany $PedidosEmpresas
 * @property \Cake\ORM\Association\BelongsToMany $Proceso
 *
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductoTable extends Table
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

        $this->setTable('producto');
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
        $this->hasMany('Objetos', [
            'foreignKey' => 'producto_id'
        ]);
        $this->belongsToMany('PedidosEmpresas', [
            'foreignKey' => 'producto_id',
            'targetForeignKey' => 'pedidos_empresa_id',
            'joinTable' => 'pedidos_empresas_producto'
        ]);
        $this->belongsToMany('Proceso', [
            'foreignKey' => 'producto_id',
            'targetForeignKey' => 'proceso_id',
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
            ->allowEmpty('referencia_proveedor');

        $validator
            ->numeric('precio')
            ->allowEmpty('precio');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->boolean('visible')
            ->allowEmpty('visible');

        $validator
            ->numeric('peso')
            ->allowEmpty('peso');

        $validator
            ->integer('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->allowEmpty('descripcion');

        $validator
            ->allowEmpty('larga');

        $validator
            ->numeric('coste')
            ->allowEmpty('coste');

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
