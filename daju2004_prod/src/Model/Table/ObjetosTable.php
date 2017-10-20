<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Objetos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Producto
 * @property \Cake\ORM\Association\BelongsTo $Ordens
 * @property \Cake\ORM\Association\BelongsTo $Localizaciones
 * @property \Cake\ORM\Association\BelongsTo $Envios
 * @property \Cake\ORM\Association\HasMany $MaterialesEntrada
 * @property \Cake\ORM\Association\HasMany $ObjetosEntrada
 *
 * @method \App\Model\Entity\Objeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Objeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Objeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Objeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Objeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Objeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Objeto findOrCreate($search, callable $callback = null, $options = [])
 */
class ObjetosTable extends Table
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

        $this->setTable('objetos');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Producto', [
            'foreignKey' => 'producto_id'
        ]);
        $this->belongsTo('Ordens', [
            'foreignKey' => 'orden_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Localizaciones', [
            'foreignKey' => 'localizacione_id'
             
        ]);
        $this->belongsTo('Envios', [
            'foreignKey' => 'envio_id'
        ]);
        $this->hasMany('MaterialesEntrada', [
            'foreignKey' => 'objeto_id'
        ]);
        $this->hasMany('ObjetosEntrada', [
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

        $validator
            ->allowEmpty('name');

        $validator
            ->integer('numero_serie')
            ->allowEmpty('numero_serie');

        $validator
            ->allowEmpty('referencia')
            ->allowEmpty('localizacione_id');

        $validator
            ->integer('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->allowEmpty('lote');

        $validator
            ->numeric('coste')
            ->allowEmpty('coste');

        $validator
            ->integer('defectuosos')
            ->allowEmpty('defectuosos');

        $validator
            ->numeric('peso')
            ->allowEmpty('peso');

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
        $rules->add($rules->existsIn(['producto_id'], 'Producto'));
        $rules->add($rules->existsIn(['orden_id'], 'Ordens'));
        $rules->add($rules->existsIn(['localizacione_id'], 'Localizaciones'));
        $rules->add($rules->existsIn(['envio_id'], 'Envios'));

        return $rules;
    }
}
