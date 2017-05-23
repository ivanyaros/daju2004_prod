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
 * @property \Cake\ORM\Association\HasMany $EntradasMaterial
 * @property \Cake\ORM\Association\HasMany $PedidosEmpresas
 * @property \Cake\ORM\Association\HasMany $SalidasObjetos
 * @property \Cake\ORM\Association\BelongsToMany $Material
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
        $this->hasMany('EntradasMaterial', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->hasMany('PedidosEmpresas', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->hasMany('SalidasObjetos', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->belongsToMany('Material', [
            'foreignKey' => 'proveedores_cliente_id',
            'targetForeignKey' => 'material_id',
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
            ->boolean('tipo')
            ->allowEmpty('tipo');

        $validator
            ->boolean('visible')
            ->allowEmpty('visible');

        $validator
            ->allowEmpty('persona_contacto');

        return $validator;
    }
}
