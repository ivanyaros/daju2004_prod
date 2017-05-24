<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ObjetosEntrada Model
 *
 * @method \App\Model\Entity\ObjetosEntrada get($primaryKey, $options = [])
 * @method \App\Model\Entity\ObjetosEntrada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ObjetosEntrada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosEntrada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ObjetosEntrada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosEntrada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosEntrada findOrCreate($search, callable $callback = null, $options = [])
 */
class ObjetosEntradaTable extends Table
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

        $this->setTable('objetos_entrada');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('entrada')
            ->allowEmpty('entrada');

        $validator
            ->integer('salida')
            ->allowEmpty('salida');

        $validator
            ->integer('cantidad_producida')
            ->allowEmpty('cantidad_producida');

        $validator
            ->integer('cantidad_gastada')
            ->allowEmpty('cantidad_gastada');

        $validator
            ->allowEmpty('observaciones');

        return $validator;
    }
}
