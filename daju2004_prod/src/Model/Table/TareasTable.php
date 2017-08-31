<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tareas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Subproceso
 * @property \Cake\ORM\Association\BelongsTo $Ordens
 * @property \Cake\ORM\Association\HasMany $MaquinasUsadas
 * @property \Cake\ORM\Association\HasMany $UsuariosEnTareas
 * @property \Cake\ORM\Association\HasMany $UtensiliosUsados
 *
 * @method \App\Model\Entity\Tarea get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tarea newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tarea[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tarea|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tarea patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tarea[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tarea findOrCreate($search, callable $callback = null, $options = [])
 */
class TareasTable extends Table
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

        $this->setTable('tareas');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Subproceso', [
            'foreignKey' => 'subproceso_id'
        ]);
        $this->belongsTo('Ordens', [
            'foreignKey' => 'orden_id'
        ]);
        $this->hasMany('MaquinasUsadas', [
            'foreignKey' => 'tarea_id'
        ]);
        $this->hasMany('UsuariosEnTareas', [
            'foreignKey' => 'tarea_id'
        ]);
        $this->hasMany('UtensiliosUsados', [
            'foreignKey' => 'tarea_id'
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
        $rules->add($rules->existsIn(['subproceso_id'], 'Subproceso'));
        $rules->add($rules->existsIn(['orden_id'], 'Ordens'));

        return $rules;
    }
}
