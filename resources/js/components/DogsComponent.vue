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
                axios.get('https://dog.ceo/api/breeds/list/all')
                .then(response => {
                    console.log(response.data.data);
                })
                .catch(error => console.log(error))
            }
        }
    }
</script>
