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
%>
<?php
/**
  * @var \<%= $namespace %>\View\AppView $this
  */
?>
<%
use Cake\Utility\Inflector;
use Bake\Utility\Model\AssociationFilter;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
$associations += ['BelongsTo' => [], 'HasOne' => [], 'HasMany' => [], 'BelongsToMany' => []];
$immediateAssociations = $associations['BelongsTo'];
$associationFields = collection($fields)
    ->map(function($field) use ($immediateAssociations) {
        foreach ($immediateAssociations as $alias => $details) {
            if ($field === $details['foreignKey']) {
                return [$field => $details];
            }
        }
    })
    ->filter()
    ->reduce(function($fields, $value) {
        return $fields + $value;
    }, []);

$groupedFields = collection($fields)
    ->filter(function($field) use ($schema) {
        return $schema->columnType($field) !== 'binary';
    })
    ->groupBy(function($field) use ($schema, $associationFields) {
        $type = $schema->columnType($field);
        if (isset($associationFields[$field])) {
            return 'string';
        }
        if (in_array($type, ['integer', 'float', 'decimal', 'biginteger'])) {
            return 'number';
        }
        if (in_array($type, ['date', 'time', 'datetime', 'timestamp'])) {
            return 'date';
        }
        return in_array($type, ['text', 'boolean']) ? $type : 'string';
    })
    ->toArray();

$groupedFields += ['number' => [], 'string' => [], 'boolean' => [], 'date' => [], 'text' => []];
$pk = "\$$singularVar->{$primaryKey[0]}";
%>

<div class="w3-container">
    <h3><?= h($<%= $singularVar %>-><%= $displayField %>) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => '<%= $pluralVar %>','action' => 'edit',$<%= $singularVar%>->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
<% if ($groupedFields['string']) : %>
<% foreach ($groupedFields['string'] as $field) : %>
<% if (isset($associationFields[$field])) :
            $details = $associationFields[$field];
%>
        <tr>
            <td class="w3-border"><?= __('<%= Inflector::humanize($details['property']) %>') ?></td>
            <td class="w3-border"><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
        </tr>
<% else : %>
        <tr>
            <td class="w3-border"><?= __('<%= Inflector::humanize($field) %>') ?></td>
            <td class="w3-border"><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
        </tr>
<% endif; %>
<% endforeach; %>
<% endif; %>
<% if ($associations['HasOne']) : %>
    <%- foreach ($associations['HasOne'] as $alias => $details) : %>
        <tr>
            <td class="w3-border" ><?= __('<%= Inflector::humanize(Inflector::singularize(Inflector::underscore($alias))) %>') ?></td>
            <td class="w3-border"><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
        </tr>
    <%- endforeach; %>
<% endif; %>
<% if ($groupedFields['number']) : %>
<% foreach ($groupedFields['number'] as $field) : %>
        <tr>
            <td class="w3-border"><?= __('<%= Inflector::humanize($field) %>') ?></td>
            <td class="w3-border"><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
        </tr>
<% endforeach; %>
<% endif; %>
<% if ($groupedFields['date']) : %>
<% foreach ($groupedFields['date'] as $field) : %>
        <tr>
            <td class="w3-border"><%= "<%= __('" . Inflector::humanize($field) . "') %>" %></td>
            <td class="w3-border"><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
        </tr>
<% endforeach; %>
<% endif; %>
<% if ($groupedFields['boolean']) : %>
<% foreach ($groupedFields['boolean'] as $field) : %>
        <tr>
            <td class="w3-border"><?= __('<%= Inflector::humanize($field) %>') ?></td>
            <td class="w3-border"><?= $<%= $singularVar %>-><%= $field %> ? __('Yes') : __('No'); ?></td>
        </tr>
<% endforeach; %>
<% endif; %>
    </table>
<% if ($groupedFields['text']) : %>
<% foreach ($groupedFields['text'] as $field) : %>
    <div class="row">
        <h4 class="w3-border"><?= __('<%= Inflector::humanize($field) %>') ?></h4>
        <?= $this->Text->autoParagraph(h($<%= $singularVar %>-><%= $field %>)); ?>
    </div>
<% endforeach; %>
<% endif; %>
<%
$relations = $associations['HasMany'] + $associations['BelongsToMany'];
%>
<div class="w3-bar w3-black">

<% foreach ($relations as $alias => $details): 

    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize(Inflector::underscore($details['controller']));
    %>
    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'<%= $otherSingularVar %>')"><?= __("<%= $otherPluralHumanName %>") ?></button>

<% endforeach; %>
<%
foreach ($relations as $alias => $details):
    $modelObject = TableRegistry::get($alias);
    $my_filter= new AssociationFilter;
    $my_belongs=$my_filter->filterAssociations($modelObject);
    $my_belongs=$my_belongs['BelongsTo'];
    $otherSingularVar = Inflector::singularize(Inflector::variable($alias));
    $otherPluralVar= Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize(Inflector::underscore($details['controller']));
    %>
<div style="display:none" id="<%= $otherPluralVar %>" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related <%= $otherPluralHumanName %>') ?>
        <?php $my_url_add=$this->Url->build(['controller' => '<%= Inflector::dasherize($otherPluralVar) %>', 'action' => 'add',$<%= $singularVar %>->id,'<%= Inflector::singularize(Inflector::tableize($singularVar)) %>_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($<%= $otherPluralVar %>)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'<%= $alias %>']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'<%= $alias %>']) ?>
                <?= $this->Paginator->numbers(['model'=>'<%= $alias %>','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'<%= $alias %>']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'<%= $alias %>']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
<% foreach ($details['fields'] as $field): 
	
%>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('<%= $field %>','<%= $field %>', ['model'=>'<%= $alias %>']) ?></th>
<% 
endforeach; %>
			</thead>
			<tbody>
<?php foreach ($<%= $otherPluralVar %> as $<%= $otherSingularVar %>): ?>
				<?php $my_url= $this->Url->build(['controller' => '<%= $otherPluralVar %>', 'action' => 'view',$<%= $otherSingularVar %>->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
            <%  foreach ($details['fields'] as $field):             		
                    $isKey = false;
                    if (!empty($my_belongs)) {
                        foreach ($my_belongs as $my_alias => $my_details) {                            
                            if ($field === $my_details['foreignKey']) {
                                $isKey = true; %>

                                <td class="w3-border"><?= $<%= $otherSingularVar %>->has('<%= $my_details['property'] %>') ? $this->Html->link($<%= $otherSingularVar %>-><%= $my_details['property'] %>-><%= $my_details['displayField'] %>, ['controller' => '<%= $my_details['controller'] %>', 'action' => 'view', $<%= $otherSingularVar %>-><%= $my_details['property'] %>-><%= $my_details['primaryKey'][0] %>]) : '' ?></td>
<%
                                break;
                            }
                        }
                    }
                    if ($isKey !== true) {  %>
                        <td class="w3-border"><?= h($<%= $otherSingularVar %>-><%= $field %>) ?></td>
<%                  }
                endforeach; %>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'<%= $alias %>']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'<%= $alias %>']) ?>
                <?= $this->Paginator->numbers(['model'=>'<%= $alias %>','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'<%= $alias %>']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'<%= $alias %>']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'<%= $alias %>']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<% endforeach; %>
</div>
<script>
function openRelated(evt, relatedName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("related");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(relatedName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

