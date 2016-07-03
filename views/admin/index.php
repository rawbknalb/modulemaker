<?php $view->script('modulemaker', 'modulemaker:js/modules.js', 'vue') ?>

<div id="modulemaker">
    <h2>{{ '{0} Questions|{1} One Question|]1,Inf[ %count% Questions' | transChoice entries.length {count:entries.length} }}</h2>

    <form class="uk-width-large-2-3" @submit="add">
        <input class="uk-input-large uk-width-3-4" placeholder="{{ 'New Question' | trans }}" v-model="newEntry">
        <button class="uk-button" @click="add">{{ 'Add' | trans}}</button>
    </form>

    <hr>

    <div class="uk-alert" v-if="!entries.length">{{ 'You can add your first Question using the input field above. Go ahead!' | trans }}</div>

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

    <button class="uk-button uk-button-success uk-width-1-2 uk-align-left" @click="save">{{ 'Save' | trans }}</button>

</div>
