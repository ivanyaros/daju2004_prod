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
<%= $this->element('form');
%>
<%
use Cake\Utility\Inflector;

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
<%
$relations = $associations['HasMany'] + $associations['BelongsToMany'];
%>
<div class="w3-bar w3-black">

<% foreach ($relations as $alias => $details): 

    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize(Inflector::underscore($details['controller']));
    %>
    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'<%= $otherPluralHumanName %>')"><?= __("<%= $otherPluralHumanName %>") ?></button>

<% endforeach; %>
<%
foreach ($relations as $alias => $details):

    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize(Inflector::underscore($details['controller']));
    %>
    <div style="display:none" id="<%= $otherPluralHumanName %>" class="related w3-container w3-theme-d3 w3-border">
        <h4><?= __('Related <%= $otherPluralHumanName %>') ?>
        	<li><?= $this->Html->link(__('New <%= Inflector::humanize(Inflector::singularize(Inflector::underscore($alias))) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'add',<%= $pk %>,'<%=Inflector::underscore(Inflector::classify($singularVar))%>_id']) ?> </li>
        </h4>
        <?php if (!empty($<%= $singularVar %>-><%= $details['property'] %>)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
<% foreach ($details['fields'] as $field): %>
                <%- if (($field!='id')&&($field!=Inflector::underscore(Inflector::classify($singularVar)).'_id')):%>
                <th scope="col"><?= __('<%= Inflector::humanize($field) %>') ?></th>
                <%- endif;%>
<% endforeach; %>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($<%= $singularVar %>-><%= $details['property'] %> as $<%= $otherSingularVar %>): ?>
            <tr>
            <%- foreach ($details['fields'] as $field): %>
                <%- if (($field!='id')&&($field!=Inflector::underscore(Inflector::classify($singularVar)).'_id')):%>
                <td><?= h($<%= $otherSingularVar %>-><%= $field %>) ?></td>
                <%- endif;%>
            <%- endforeach; %>
            <%- $otherPk = "\${$otherSingularVar}->{$details['primaryKey'][0]}"; %>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => '<%= $details['controller'] %>', 'action' => 'view', <%= $otherPk %>]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => '<%= $details['controller'] %>', 'action' => 'edit', <%= $otherPk %>]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => '<%= $details['controller'] %>', 'action' => 'delete', <%= $otherPk %>], ['confirm' => __('Are you sure you want to delete # {0}?', <%= $otherPk %>)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
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

