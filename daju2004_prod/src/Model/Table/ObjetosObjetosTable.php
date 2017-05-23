<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ObjetosObjetos Model
 *
 * @method \App\Model\Entity\ObjetosObjeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ObjetosObjeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ObjetosObjeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosObjeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ObjetosObjeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosObjeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosObjeto findOrCreate($search, callable $callback = null, $options = [])
 */
class ObjetosObjetosTable extends Table
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

        $this->setTable('objetos_objetos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsTo('Objetos', [
            'foreignKey' => 'entada'
        ]);
        $this->belongsTo('Objetos', [
            'foreignKey' => 'salida'
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
            ->integer('cantidad_producida')
            ->allowEmpty('cantidad_producida');

        $validator
            ->integer('cantidad_gastada')
            ->allowEmpty('cantidad_gastada');

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
        $rules->add($rules->existsIn(['entrada'], 'Objetos'));
        $rules->add($rules->existsIn(['salida'], 'Objetos'));

        return $rules;
    }
}
