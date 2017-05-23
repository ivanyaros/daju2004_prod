<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monedas Model
 *
 * @property \Cake\ORM\Association\HasMany $Material
 * @property \Cake\ORM\Association\HasMany $Proceso
 * @property \Cake\ORM\Association\HasMany $Producto
 *
 * @method \App\Model\Entity\Moneda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Moneda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Moneda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moneda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moneda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Moneda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moneda findOrCreate($search, callable $callback = null, $options = [])
 */
class MonedasTable extends Table
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

        $this->setTable('monedas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Material', [
            'foreignKey' => 'moneda_id'
        ]);
        $this->hasMany('Proceso', [
            'foreignKey' => 'moneda_id'
        ]);
        $this->hasMany('Producto', [
            'foreignKey' => 'moneda_id'
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
