<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsuariosEnTareas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tareas
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UsuariosEnTarea get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsuariosEnTarea newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsuariosEnTarea[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosEnTarea|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuariosEnTarea patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosEnTarea[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosEnTarea findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosEnTareasTable extends Table
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

        $this->setTable('usuarios_en_tareas');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Tareas', [
            'foreignKey' => 'tarea_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
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
            ->numeric('parte')
            ->allowEmpty('parte');

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
        $rules->add($rules->existsIn(['tarea_id'], 'Tareas'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
