<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PedidosProductosDetalle Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PedidosEmpresas
 * @property \Cake\ORM\Association\BelongsTo $Producto
 * @property \Cake\ORM\Association\BelongsTo $Prioridades
 *
 * @method \App\Model\Entity\PedidosProductosDetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\PedidosProductosDetalle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PedidosProductosDetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PedidosProductosDetalle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidosProductosDetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosProductosDetalle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosProductosDetalle findOrCreate($search, callable $callback = null, $options = [])
 */
class PedidosProductosDetalleTable extends Table
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

        $this->setTable('pedidos_productos_detalle');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('PedidosEmpresas', [
            'foreignKey' => 'pedidos_empresa_id'
        ]);
        $this->belongsTo('Producto', [
            'foreignKey' => 'producto_id'
        ]);
        $this->belongsTo('Prioridades', [
            'foreignKey' => 'prioridade_id'
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
            ->integer('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->dateTime('fecha')
            ->allowEmpty('fecha');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->boolean('terminado')
            ->allowEmpty('terminado');

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
        $rules->add($rules->existsIn(['pedidos_empresa_id'], 'PedidosEmpresas'));
        $rules->add($rules->existsIn(['producto_id'], 'Producto'));
        $rules->add($rules->existsIn(['prioridade_id'], 'Prioridades'));

        return $rules;
    }
}
