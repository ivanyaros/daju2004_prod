<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdensEstadosUsuarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $OrdensEstados
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\OrdensEstadosUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdensEstadosUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdensEstadosUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUsuario findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdensEstadosUsuariosTable extends Table
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

        $this->setTable('ordens_estados_usuarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('OrdensEstados', [
            'foreignKey' => 'ordens_estado_id'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
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
        $rules->add($rules->existsIn(['ordens_estado_id'], 'OrdensEstados'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
