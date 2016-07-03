<?php $view->script('modulemaker', 'modulemaker:js/modules.js', 'vue') ?>

<div id="modulemaker" class="uk-form uk-form-horizontal" v-cloak>

    <!-- <div class="pk-table-fake pk-table-fake-header" :class="{'pk-table-fake-border': !forms || !forms.length}">
        <div class="pk-table-width-minimum pk-table-fake-nestable-padding">
            <input type="checkbox" v-check-all:selected.literal="input[name=id]"></div>
        <div class="pk-table-min-width-100">{{ 'Title' | trans }}</div>
        <div class="pk-table-width-100 uk-text-center">{{ 'Status' | trans }}</div>
        <div class="pk-table-width-150">{{ 'Submissions' | trans }}</div>
        <div class="pk-table-width-150">{{ 'Plugin code' | trans }}<a class="uk-icon-info uk-icon-hover uk-margin-small-left"
                data-uk-tooltip="{delay:200}" :title="'Add this code to any Pagekit content to show the form.' | trans"></a></div>
        <div class="pk-table-width-150">{{ 'Url' | trans }}</div>
    </div> -->


    <ul class="uk-list uk-list-space" v-if="entries.length">
        <li class="uk-text-large" v-for="entry in entries" :class="{'uk-text-muted' : entry.done}">

            <span class="uk-align-right">
                <button class="uk-button" @click="toggle(entry)"> {{ entry.done ? 'Undo' : 'Do' }}</button>
                <button class="uk-button uk-button-danger" @click="remove(entry)" v-if="entry.done">
                    <i class="uk-icon-remove"></i> Remove
                </button>
            </span>
            {{ entry.question }}
        </li>
    </ul>

    <h2>{{ '{0} Questions|{1} One Question|]1,Inf[ %count% Questions' | transChoice entries.length {count:entries.length} }}</h2>

    <form class="uk-width-large-2-3" @submit="add">
        <input class="uk-input-large uk-width-3-4" placeholder="{{ 'New Question' | trans }}" v-model="newEntry">
        <button class="uk-button" @click="add">{{ 'Add' | trans}}</button>
    </form>

    <hr>

    <div class="uk-alert" v-if="!entries.length">{{ 'You can add your first Question using the input field above. Go ahead!' | trans }}</div>


    <button class="uk-button uk-button-success uk-width-1-2 uk-align-left" @click="save">{{ 'Save' | trans }}</button>

</div>
