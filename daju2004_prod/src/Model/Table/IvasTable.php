<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ivas Model
 *
 * @property \Cake\ORM\Association\HasMany $Material
 * @property \Cake\ORM\Association\HasMany $Proceso
 * @property \Cake\ORM\Association\HasMany $Producto
 *
 * @method \App\Model\Entity\Iva get($primaryKey, $options = [])
 * @method \App\Model\Entity\Iva newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Iva[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Iva|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Iva patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Iva[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Iva findOrCreate($search, callable $callback = null, $options = [])
 */
class IvasTable extends Table
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

        $this->setTable('ivas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Material', [
            'foreignKey' => 'iva_id'
        ]);
        $this->hasMany('Proceso', [
            'foreignKey' => 'iva_id'
        ]);
        $this->hasMany('Producto', [
            'foreignKey' => 'iva_id'
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
            ->numeric('valor')
            ->allowEmpty('valor');

        $validator
            ->allowEmpty('observaciones');

        return $validator;
    }
}
