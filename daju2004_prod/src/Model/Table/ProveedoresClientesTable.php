<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProveedoresClientes Model
 *
 * @property \Cake\ORM\Association\HasMany $Direcciones
 * @property \Cake\ORM\Association\HasMany $EntradasDeMateriales
 * @property \Cake\ORM\Association\HasMany $Envios
 * @property \Cake\ORM\Association\HasMany $PedidosEmpresas
 * @property \Cake\ORM\Association\HasMany $ProveedoresMaterial
 *
 * @method \App\Model\Entity\ProveedoresCliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProveedoresCliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProveedoresCliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresCliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProveedoresCliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresCliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresCliente findOrCreate($search, callable $callback = null, $options = [])
 */
class ProveedoresClientesTable extends Table
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

        $this->setTable('proveedores_clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Direcciones', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->hasMany('EntradasDeMateriales', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->hasMany('Envios', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->hasMany('PedidosEmpresas', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->hasMany('ProveedoresMaterial', [
            'foreignKey' => 'proveedores_cliente_id'
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
            ->allowEmpty('direccion_fiscal');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('fax');

        $validator
            ->allowEmpty('correo');

        $validator
            ->allowEmpty('pagina_web');

        $validator
            ->allowEmpty('NIF_CIF');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->boolean('proveedor_cliente')
            ->allowEmpty('proveedor_cliente');

        $validator
            ->boolean('visible')
            ->requirePresence('visible', 'create')
            ->notEmpty('visible');

        $validator
            ->allowEmpty('persona_contacto');

        return $validator;
    }
}
