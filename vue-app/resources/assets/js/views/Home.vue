<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses">
                    <div class="message-header">
                        <p>
                        {{status.user.name}} said......
                        </p>
                        <p>
                            {{status.created_at | ago}}
                        </p>
                    </div>

                    <div class="message-body" v-text="status.body">
                        I'm an example component!
                    </div>
                </div>
                <add-to-stream @completed="addToStream"></add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
moment.locale('zh-cn');
import Status from '../models/Status';
import AddToStream from '../components/AddToStream';
    export default {
        components: {
            AddToStream
        },
        data() {
            return {
                statuses: []
            }
        },
        filters: {
            ago(date) {
                return moment(date).fromNow();
            }
        },
        created() {
            // fire off an ajax request
            Status.all(statuses => this.statuses = statuses);
            // .then(({data}) => this.statuses = data);
        },
        methods : {
            addToStream(status) {
                this.statuses.unshift(status);
                window.scrollTo(0,0);
            }
        }
    }
</script>
