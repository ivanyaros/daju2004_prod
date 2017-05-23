<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Utensilios Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $OrdensEstados
 *
 * @method \App\Model\Entity\Utensilio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Utensilio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Utensilio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Utensilio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Utensilio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Utensilio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Utensilio findOrCreate($search, callable $callback = null, $options = [])
 */
class UtensiliosTable extends Table
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

        $this->setTable('utensilios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('OrdensEstados', [
            'foreignKey' => 'utensilio_id',
            'targetForeignKey' => 'ordens_estado_id',
            'joinTable' => 'ordens_estados_utensilios'
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
