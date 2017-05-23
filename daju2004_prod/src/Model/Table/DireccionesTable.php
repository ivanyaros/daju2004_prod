<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Direcciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ProveedoresClientes
 *
 * @method \App\Model\Entity\Direccione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Direccione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Direccione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direccione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Direccione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direccione findOrCreate($search, callable $callback = null, $options = [])
 */
class DireccionesTable extends Table
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

        $this->setTable('direcciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'proveedores_cliente_id']);

        $this->belongsTo('ProveedoresClientes', [
            'foreignKey' => 'proveedores_cliente_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('direccion');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('fax');

        $validator
            ->allowEmpty('correo');

        $validator
            ->allowEmpty('pagina_web');

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

        return $rules;
    }
}
