<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialesEntrada Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Objetos
 * @property \Cake\ORM\Association\BelongsTo $Materiales
 *
 * @method \App\Model\Entity\MaterialesEntrada get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialesEntrada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaterialesEntrada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesEntrada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialesEntrada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesEntrada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesEntrada findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialesEntradaTable extends Table
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

        $this->setTable('materiales_entrada');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Objetos', [
            'foreignKey' => 'objeto_id'
        ]);
        $this->belongsTo('Materiales', [
            'foreignKey' => 'materiale_id'
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
            ->numeric('metros_gastados')
            ->allowEmpty('metros_gastados');

        $validator
            ->numeric('metros_utiles')
            ->allowEmpty('metros_utiles');

        $validator
            ->numeric('scrap')
            ->allowEmpty('scrap');

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
        $rules->add($rules->existsIn(['objeto_id'], 'Objetos'));
        $rules->add($rules->existsIn(['materiale_id'], 'Materiales'));

        return $rules;
    }
}
