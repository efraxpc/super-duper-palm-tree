<template>
    <div class="col-lg-12 col-sm-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Timeline</h3>
            </div>
            <div class="panel-body">
                <div style="height: 400px; overflow-y : auto;">
                    <ul class="timeline timeline-update" style="height: 508px; overflow: hidden;">

                    </ul>
                </div>

            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Chat list</div>

                    <div class="panel-body">
                        <ul class="list-messages list-group"></ul>
                    </div>

                    <div class="panel-footer">
                        <div class="form-group">
                            <input class="form-control" v-model="message" v-on:keyup.enter="postMessage" placeholder="Type message and press enter to send message" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {message: null};
        },
        sockets: {
            message: function (val) {
                var data = JSON.parse(val);
                //var html = '<li class="list-group-item"><strong>'+data.user+'</strong> '+data.message+'</li>';
                var html = '<li style="margin-top: 0px;"> ' +
                    '<div class="timeline-badge info wow lightSpeedIn center"> ' +
                    '<img src="img/authors/avatar.jpg" height="36" width="36" class="img-circle pull-right" alt="avatar-image"> </div>' +
                    '<div class="timeline-panel wow slideInLeft"> ' +
                    '<div class="timeline-heading"> ' +
                    '<h4 class="timeline-title">'+data.user+'</h4> ' +
                    '<p><small class="text-primary">Sept 10, 2016</small></p> ' +
                    '</div> ' +
                    '<div class="timeline-body"> ' +
                    '<p>'+data.message+'</p>' +
                    '</div>' +
                    '</div>' +
                    '</li>';
                $('.timeline').append(html);
            }
        },
        methods: {
            postMessage: function() {
                if( this.message ){
                    axios.post('./post-message', {message: this.message}).then(response => {this.chats = response.data}).catch(function (error) {
                        console.log(error.response);
                    });
                    this.message = '';
                }
            }
        }
    }
</script>
