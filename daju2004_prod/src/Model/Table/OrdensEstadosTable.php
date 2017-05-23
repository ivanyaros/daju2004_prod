<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdensEstados Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Ordens
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\BelongsToMany $Maquinas
 * @property \Cake\ORM\Association\BelongsToMany $Usuarios
 * @property \Cake\ORM\Association\BelongsToMany $Utensilios
 *
 * @method \App\Model\Entity\OrdensEstado get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdensEstado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdensEstado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdensEstado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstado findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdensEstadosTable extends Table
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

        $this->setTable('ordens_estados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ordens', [
            'foreignKey' => 'orden_id'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id'
        ]);
        $this->belongsToMany('Maquinas', [
            'foreignKey' => 'ordens_estado_id',
            'targetForeignKey' => 'maquina_id',
            'joinTable' => 'ordens_estados_maquinas'
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'ordens_estado_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'ordens_estados_usuarios'
        ]);
        $this->belongsToMany('Utensilios', [
            'foreignKey' => 'ordens_estado_id',
            'targetForeignKey' => 'utensilio_id',
            'joinTable' => 'ordens_estados_utensilios'
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
