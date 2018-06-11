<?php
namespace Links\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Links Model
 *
 * @property \Links\Model\Table\PhinxlogTable|\Cake\ORM\Association\BelongsToMany $Phinxlog
 *
 * @method \Links\Model\Entity\Link get($primaryKey, $options = [])
 * @method \Links\Model\Entity\Link newEntity($data = null, array $options = [])
 * @method \Links\Model\Entity\Link[] newEntities(array $data, array $options = [])
 * @method \Links\Model\Entity\Link|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Links\Model\Entity\Link patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Links\Model\Entity\Link[] patchEntities($entities, array $data, array $options = [])
 * @method \Links\Model\Entity\Link findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LinksTable extends Table
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

        $this->setTable('links');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Phinxlog', [
            'foreignKey' => 'link_id',
            'targetForeignKey' => 'phinxlog_id',
            'joinTable' => 'links_phinxlog',
            'className' => 'Links.Phinxlog'
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
            ->scalar('model')
            ->maxLength('model', 100)
            ->allowEmpty('model');

        $validator
            ->allowEmpty('foreign_key');

        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('url')
            ->maxLength('url', 150)
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->scalar('options')
            ->requirePresence('options', 'create')
            ->notEmpty('options');

        $validator
            ->integer('position')
            ->allowEmpty('position');

        return $validator;
    }
}
