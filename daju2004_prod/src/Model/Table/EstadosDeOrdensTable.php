<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstadosDeOrdens Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Ordens
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\HasMany $MaquinasUsadas
 * @property \Cake\ORM\Association\HasMany $UsuariosEnEstadosOrden
 * @property \Cake\ORM\Association\HasMany $UtensiliosUsados
 *
 * @method \App\Model\Entity\EstadosDeOrden get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstadosDeOrden newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstadosDeOrden[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstadosDeOrden|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstadosDeOrden patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstadosDeOrden[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstadosDeOrden findOrCreate($search, callable $callback = null, $options = [])
 */
class EstadosDeOrdensTable extends Table
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

        $this->setTable('estados_de_ordens');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Ordens', [
            'foreignKey' => 'orden_id'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id'
        ]);
        $this->hasMany('MaquinasUsadas', [
            'foreignKey' => 'estados_de_orden_id'
        ]);
        $this->hasMany('UsuariosEnEstadosOrden', [
            'foreignKey' => 'estados_de_orden_id'
        ]);
        $this->hasMany('UtensiliosUsados', [
            'foreignKey' => 'estados_de_orden_id'
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
            ->dateTime('fecha_inicio')
            ->allowEmpty('fecha_inicio');

        $validator
            ->dateTime('fecha_fin')
            ->allowEmpty('fecha_fin');

        $validator
            ->allowEmpty('descripcion');

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
        $rules->add($rules->existsIn(['orden_id'], 'Ordens'));
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));

        return $rules;
    }
}
