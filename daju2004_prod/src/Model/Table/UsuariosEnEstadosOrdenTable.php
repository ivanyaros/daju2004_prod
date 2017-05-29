<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsuariosEnEstadosOrden Model
 *
 * @property \Cake\ORM\Association\BelongsTo $EstadosDeOrdens
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UsuariosEnEstadosOrden get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsuariosEnEstadosOrden newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsuariosEnEstadosOrden[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosEnEstadosOrden|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuariosEnEstadosOrden patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosEnEstadosOrden[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosEnEstadosOrden findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosEnEstadosOrdenTable extends Table
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

        $this->setTable('usuarios_en_estados_orden');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('EstadosDeOrdens', [
            'foreignKey' => 'estados_de_orden_id'
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
        $rules->add($rules->existsIn(['estados_de_orden_id'], 'EstadosDeOrdens'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
