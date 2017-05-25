<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EnviosObjetos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Envios
 * @property \Cake\ORM\Association\BelongsTo $Objetos
 *
 * @method \App\Model\Entity\EnviosObjeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\EnviosObjeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EnviosObjeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EnviosObjeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnviosObjeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EnviosObjeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EnviosObjeto findOrCreate($search, callable $callback = null, $options = [])
 */
class EnviosObjetosTable extends Table
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

        $this->setTable('envios_objetos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Envios', [
            'foreignKey' => 'envio_id'
        ]);
        $this->belongsTo('Objetos', [
            'foreignKey' => 'objeto_id'
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
        $rules->add($rules->existsIn(['envio_id'], 'Envios'));
        $rules->add($rules->existsIn(['objeto_id'], 'Objetos'));

        return $rules;
    }
}
