<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Envios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ProveedoresClientes
 * @property \Cake\ORM\Association\BelongsTo $PedidosEmpresas
 * @property \Cake\ORM\Association\BelongsTo $Centros
 * @property \Cake\ORM\Association\BelongsTo $Direcciones
 * @property \Cake\ORM\Association\BelongsToMany $Objetos
 *
 * @method \App\Model\Entity\Envio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Envio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Envio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Envio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Envio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Envio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Envio findOrCreate($search, callable $callback = null, $options = [])
 */
class EnviosTable extends Table
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

        $this->setTable('envios');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('ProveedoresClientes', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->belongsTo('PedidosEmpresas', [
            'foreignKey' => 'pedidos_empresa_id'
        ]);
        $this->belongsTo('Centros', [
            'foreignKey' => 'centro_id'
        ]);
        $this->belongsTo('Direcciones', [
            'foreignKey' => 'direccione_id'
        ]);
        $this->belongsToMany('Objetos', [
            'foreignKey' => 'envio_id',
            'targetForeignKey' => 'objeto_id',
            'joinTable' => 'envios_objetos'
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
            ->dateTime('fecha_pedido')
            ->allowEmpty('fecha_pedido');

        $validator
            ->dateTime('fecha_envio')
            ->allowEmpty('fecha_envio');

        $validator
            ->allowEmpty('albaran');

        $validator
            ->dateTime('fecha_entrega')
            ->allowEmpty('fecha_entrega');

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
        $rules->add($rules->existsIn(['proveedores_cliente_id'], 'ProveedoresClientes'));
        $rules->add($rules->existsIn(['pedidos_empresa_id'], 'PedidosEmpresas'));
        $rules->add($rules->existsIn(['centro_id'], 'Centros'));
        $rules->add($rules->existsIn(['direccione_id'], 'Direcciones'));

        return $rules;
    }
}
