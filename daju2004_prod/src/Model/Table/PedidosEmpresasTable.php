<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PedidosEmpresas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ProveedoresClientes
 * @property \Cake\ORM\Association\HasMany $SalidasObjetos
 * @property \Cake\ORM\Association\BelongsToMany $Producto
 *
 * @method \App\Model\Entity\PedidosEmpresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\PedidosEmpresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PedidosEmpresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PedidosEmpresa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidosEmpresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosEmpresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosEmpresa findOrCreate($search, callable $callback = null, $options = [])
 */
class PedidosEmpresasTable extends Table
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

        $this->setTable('pedidos_empresas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ProveedoresClientes', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->hasMany('SalidasObjetos', [
            'foreignKey' => 'pedidos_empresa_id'
        ]);
        $this->belongsToMany('Producto', [
            'foreignKey' => 'pedidos_empresa_id',
            'targetForeignKey' => 'producto_id',
            'joinTable' => 'pedidos_empresas_producto'
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
            ->dateTime('fecha')
            ->allowEmpty('fecha');

        $validator
            ->allowEmpty('albaran');

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
        $rules->add($rules->existsIn(['proveedores_cliente_id'], 'ProveedoresClientes'));

        return $rules;
    }
}
