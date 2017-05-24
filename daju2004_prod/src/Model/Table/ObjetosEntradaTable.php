<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ObjetosEntrada Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Objetos
 * @property \Cake\ORM\Association\BelongsTo $Objetos
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

        $this->belongsTo('Objetos', [
            'foreignKey' => 'entrada_id'
        ]);
        $this->belongsTo('Objetos', [
            'foreignKey' => 'salida_id'
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
            ->integer('cantidad_entrada')
            ->allowEmpty('cantidad_entrada');

        $validator
            ->integer('cantidad_producida')
            ->allowEmpty('cantidad_producida');

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
        $rules->add($rules->existsIn(['entrada_id'], 'Objetos'));
        $rules->add($rules->existsIn(['salida_id'], 'Objetos'));

        return $rules;
    }
}
