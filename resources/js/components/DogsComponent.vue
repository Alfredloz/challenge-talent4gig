<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                breeds: null
            }
        },
        mounted() {

            this.loadBreeds();
        },
        methods:{
            loadBreeds() {
                fetch('https://dog.ceo/api/breeds/list/all')
                .then(function(response) {
                    console.log(response.json())
                })
                .catch(function() {

                });

            }
        }
    }
</script>
