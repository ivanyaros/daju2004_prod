<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Maquinas Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $OrdensEstados
 *
 * @method \App\Model\Entity\Maquina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Maquina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Maquina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Maquina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Maquina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Maquina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Maquina findOrCreate($search, callable $callback = null, $options = [])
 */
class MaquinasTable extends Table
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

        $this->setTable('maquinas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('OrdensEstados', [
            'foreignKey' => 'maquina_id',
            'targetForeignKey' => 'ordens_estado_id',
            'joinTable' => 'ordens_estados_maquinas'
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
            ->allowEmpty('nombre');

        $validator
            ->allowEmpty('referencia');

        $validator
            ->allowEmpty('observaciones');

        return $validator;
    }
}
