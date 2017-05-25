<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Localizaciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Centros
 * @property \Cake\ORM\Association\HasMany $Materiales
 * @property \Cake\ORM\Association\HasMany $Objetos
 *
 * @method \App\Model\Entity\Localizacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Localizacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Localizacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Localizacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Localizacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Localizacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Localizacione findOrCreate($search, callable $callback = null, $options = [])
 */
class LocalizacionesTable extends Table
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

        $this->setTable('localizaciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Centros', [
            'foreignKey' => 'centro_id'
        ]);
        $this->hasMany('Materiales', [
            'foreignKey' => 'localizacione_id'
        ]);
        $this->hasMany('Objetos', [
            'foreignKey' => 'localizacione_id'
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
        $rules->add($rules->existsIn(['centro_id'], 'Centros'));

        return $rules;
    }
}
