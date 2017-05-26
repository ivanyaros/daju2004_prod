<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materiales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Material
 * @property \Cake\ORM\Association\BelongsTo $Localizaciones
 * @property \Cake\ORM\Association\BelongsTo $EntradasDeMateriales
 * @property \Cake\ORM\Association\HasMany $MaterialesEntrada
 *
 * @method \App\Model\Entity\Materiale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Materiale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Materiale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Materiale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materiale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Materiale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Materiale findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialesTable extends Table
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

        $this->setTable('materiales');
        $this->setDisplayField('label');

        $this->setPrimaryKey('id');

        $this->belongsTo('Material', [
            'foreignKey' => 'material_id'
        ]);
        $this->belongsTo('Localizaciones', [
            'foreignKey' => 'localizacione_id'
        ]);
        $this->belongsTo('EntradasDeMateriales', [
            'foreignKey' => 'entradas_de_materiale_id'
        ]);
        $this->hasMany('MaterialesEntrada', [
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
            ->dateTime('fecha_entega')
            ->allowEmpty('fecha_entega');

        $validator
            ->boolean('bobina_lote')
            ->allowEmpty('bobina_lote');

        $validator
            ->integer('bobinas')
            ->allowEmpty('bobinas');

        $validator
            ->integer('bobinas_actual')
            ->allowEmpty('bobinas_actual');

        $validator
            ->allowEmpty('lote');

        $validator
            ->integer('numero_bobina')
            ->allowEmpty('numero_bobina');

        $validator
            ->integer('taras')
            ->allowEmpty('taras');

        $validator
            ->integer('taras_reales')
            ->allowEmpty('taras_reales');

        $validator
            ->allowEmpty('taras_mediciones');

        $validator
            ->numeric('metros_brutos')
            ->allowEmpty('metros_brutos');

        $validator
            ->numeric('metros_netos')
            ->allowEmpty('metros_netos');

        $validator
            ->numeric('metros_actuales')
            ->allowEmpty('metros_actuales');

        $validator
            ->numeric('metros_utiles')
            ->allowEmpty('metros_utiles');

        $validator
            ->numeric('scrap')
            ->allowEmpty('scrap');

        $validator
            ->boolean('en_uso')
            ->allowEmpty('en_uso');

        $validator
            ->boolean('terminado')
            ->allowEmpty('terminado');

        $validator
            ->numeric('peso_ud')
            ->allowEmpty('peso_ud');

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
        $rules->add($rules->existsIn(['material_id'], 'Material'));
        $rules->add($rules->existsIn(['localizacione_id'], 'Localizaciones'));
        $rules->add($rules->existsIn(['entradas_de_materiale_id'], 'EntradasDeMateriales'));

        return $rules;
    }
}
