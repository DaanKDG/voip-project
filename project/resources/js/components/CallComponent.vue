<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Start a conversation</div>

                    <div class="card-body">
                        <a href="" class="btn btn-outline-dark">Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import * as call from './call';

    export default {
        mounted() {
            var sinchClient = new SinchClient({
                applicationKey: '<application_key>',
                capabilities: {
                     messaging: true,
                     calling: true
                     },
                supportActiveConnection: true,
                onLogMessage: function(msg) {
                    console.log(msg);
                },
            });
           
        }
    }
</script>
