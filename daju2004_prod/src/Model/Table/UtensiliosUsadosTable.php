<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UtensiliosUsados Model
 *
 * @property \Cake\ORM\Association\BelongsTo $EstadosDeOrdens
 * @property \Cake\ORM\Association\BelongsTo $Utensilios
 *
 * @method \App\Model\Entity\UtensiliosUsado get($primaryKey, $options = [])
 * @method \App\Model\Entity\UtensiliosUsado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UtensiliosUsado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UtensiliosUsado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UtensiliosUsado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UtensiliosUsado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UtensiliosUsado findOrCreate($search, callable $callback = null, $options = [])
 */
class UtensiliosUsadosTable extends Table
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

        $this->setTable('utensilios_usados');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('EstadosDeOrdens', [
            'foreignKey' => 'estados_de_orden_id'
        ]);
        $this->belongsTo('Utensilios', [
            'foreignKey' => 'utensilio_id'
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
        $rules->add($rules->existsIn(['utensilio_id'], 'Utensilios'));

        return $rules;
    }
}
