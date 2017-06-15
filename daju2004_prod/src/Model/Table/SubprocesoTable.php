<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subproceso Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Proceso
 * @property \Cake\ORM\Association\HasMany $Tareas
 *
 * @method \App\Model\Entity\Subproceso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subproceso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subproceso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subproceso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subproceso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subproceso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subproceso findOrCreate($search, callable $callback = null, $options = [])
 */
class SubprocesoTable extends Table
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

        $this->setTable('subproceso');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Proceso', [
            'foreignKey' => 'proceso_id'
        ]);
        $this->hasMany('Tareas', [
            'foreignKey' => 'subproceso_id'
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
            ->integer('segundos_inicio')
            ->allowEmpty('segundos_inicio');

        $validator
            ->integer('segundos_duracion')
            ->allowEmpty('segundos_duracion');

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
        $rules->add($rules->existsIn(['proceso_id'], 'Proceso'));

        return $rules;
    }
}
