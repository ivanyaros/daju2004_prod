<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Familias Model
 *
 * @property \Cake\ORM\Association\HasMany $Material
 * @property \Cake\ORM\Association\HasMany $Proceso
 * @property \Cake\ORM\Association\HasMany $Producto
 *
 * @method \App\Model\Entity\Familia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Familia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Familia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Familia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Familia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Familia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Familia findOrCreate($search, callable $callback = null, $options = [])
 */
class FamiliasTable extends Table
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

        $this->setTable('familias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Material', [
            'foreignKey' => 'familia_id'
        ]);
        $this->hasMany('Proceso', [
            'foreignKey' => 'familia_id'
        ]);
        $this->hasMany('Producto', [
            'foreignKey' => 'familia_id'
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
            ->allowEmpty('observaciones');

        return $validator;
    }
}
