<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$allAssociations = array_merge(
    $this->Bake->aliasExtractor($modelObj, 'BelongsTo'),
    $this->Bake->aliasExtractor($modelObj, 'BelongsToMany'),
    $this->Bake->aliasExtractor($modelObj, 'HasOne'),
    $this->Bake->aliasExtractor($modelObj, 'HasMany')
);
$myAssociations = array_merge(
    $this->Bake->aliasExtractor($modelObj, 'BelongsToMany'),
    $this->Bake->aliasExtractor($modelObj, 'HasMany')
);

use Cake\Utility\Inflector;
%>

    /**
     * View method
     *
     * @param string|null $id <%= $singularHumanName %> id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $<%= $singularName%> = $this-><%= $currentModelName %>->get($id, [
            'contain' => [<%= $this->Bake->stringifyList($allAssociations, ['indent' => false]) %>]
        ]);
<% if(count($myAssociations)>0): %>
        $this->paginate =[
            '<%= $myAssociations[0] %>' => ['scope' => 'mis_<%= $myAssociations[0] %>']
<% for($i=1;$i<count($myAssociations);$i++): %>
            ,'<%= $myAssociations[$i] %>' => ['scope' => 'mis_<%= $myAssociations[$i] %>']
<% endfor; %>
        ];
<% endif; %>

<% foreach($myAssociations as $association): %>
        $this->loadModel('<%= $association %>');
        $query=$this-><%= $association %>->find('all')
                                        ->where(['<%= $singularName%>_id' => $id]);
        $<%= Inflector::variable($association) %>=$this->paginate($query,['scope'=>'mis_<%= $association %>']);
        $this->set(compact('<%= Inflector::variable($association) %>'));

<% endforeach; %>                                         
        $this->set('<%= $singularName %>', $<%= $singularName %>);
        $this->set('_serialize', ['<%= $singularName %>']);
    }
