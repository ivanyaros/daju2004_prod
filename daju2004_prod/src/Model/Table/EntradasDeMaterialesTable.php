<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EntradasDeMateriales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ProveedoresClientes
 * @property \Cake\ORM\Association\BelongsTo $Centros
 * @property \Cake\ORM\Association\HasMany $Materiales
 *
 * @method \App\Model\Entity\EntradasDeMateriale get($primaryKey, $options = [])
 * @method \App\Model\Entity\EntradasDeMateriale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EntradasDeMateriale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EntradasDeMateriale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EntradasDeMateriale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EntradasDeMateriale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EntradasDeMateriale findOrCreate($search, callable $callback = null, $options = [])
 */
class EntradasDeMaterialesTable extends Table
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

        $this->setTable('entradas_de_materiales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ProveedoresClientes', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->belongsTo('Centros', [
            'foreignKey' => 'centro_id'
        ]);
        $this->hasMany('Materiales', [
            'foreignKey' => 'entradas_de_materiale_id'
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
            ->allowEmpty('referencia');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->allowEmpty('albaran');

        $validator
            ->dateTime('fecha_envio')
            ->allowEmpty('fecha_envio');

        $validator
            ->dateTime('fecha_recepcion')
            ->allowEmpty('fecha_recepcion');

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
        $rules->add($rules->existsIn(['centro_id'], 'Centros'));

        return $rules;
    }
}
