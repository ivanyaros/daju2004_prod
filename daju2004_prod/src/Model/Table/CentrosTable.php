<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Centros Model
 *
 * @property \Cake\ORM\Association\HasMany $EntradasMaterial
 * @property \Cake\ORM\Association\HasMany $Localizaciones
 * @property \Cake\ORM\Association\HasMany $Ordens
 * @property \Cake\ORM\Association\HasMany $Proceso
 * @property \Cake\ORM\Association\HasMany $SalidasObjetos
 *
 * @method \App\Model\Entity\Centro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Centro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Centro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Centro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Centro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Centro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Centro findOrCreate($search, callable $callback = null, $options = [])
 */
class CentrosTable extends Table
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

        $this->setTable('centros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('EntradasMaterial', [
            'foreignKey' => 'centro_id'
        ]);
        $this->hasMany('Localizaciones', [
            'foreignKey' => 'centro_id'
        ]);
        $this->hasMany('Ordens', [
            'foreignKey' => 'centro_id'
        ]);
        $this->hasMany('Proceso', [
            'foreignKey' => 'centro_id'
        ]);
        $this->hasMany('SalidasObjetos', [
            'foreignKey' => 'centro_id'
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
            ->allowEmpty('direccion');

        $validator
            ->allowEmpty('centroscol');

        return $validator;
    }
}
