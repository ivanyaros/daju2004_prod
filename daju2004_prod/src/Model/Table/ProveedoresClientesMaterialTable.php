<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProveedoresClientesMaterial Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ProveedoresClientes
 * @property \Cake\ORM\Association\BelongsTo $Material
 *
 * @method \App\Model\Entity\ProveedoresClientesMaterial get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProveedoresClientesMaterial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProveedoresClientesMaterial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresClientesMaterial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProveedoresClientesMaterial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresClientesMaterial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresClientesMaterial findOrCreate($search, callable $callback = null, $options = [])
 */
class ProveedoresClientesMaterialTable extends Table
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

        $this->setTable('proveedores_clientes_material');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ProveedoresClientes', [
            'foreignKey' => 'proveedores_cliente_id'
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
        $rules->add($rules->existsIn(['material_id'], 'Material'));

        return $rules;
    }
}
