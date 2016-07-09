$(function(){
    var vm = new Vue({
            el: '#modulemaker',
            data: {
                entries: window.$data.entries,
                newEntry: ''
            },

            methods: {

                toggle: function(entry){
                    entry.done = !entry.done;
                },

                save: function() {
                    this.$http.post('admin/modulemaker/save', { entries: this.entries},
                        function(){
                            UIkit.notify('Saved');
                        }).error(function() {
                            UIkit.notify('Oops');
                        });
                },

                add: function (e) {
                    e.preventDefault();

                    if(!this.newEntry) return;

                    this.entries.push({
                        title: this.newEntry,
                        done: false
                    });

                    this.newEntry = '';
                },

                remove: function(entry) {
                    this.entries.$remove(entry);
                },

            },
        });
});
