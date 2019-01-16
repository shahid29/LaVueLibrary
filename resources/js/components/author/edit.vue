<template>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Your Author</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form @submit.prevent="update()"  role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Author Name</label>
                            <input id="exampleInputEmail1" v-model="form.name" type="text" name="name"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                            <has-error :form="form" field="name"></has-error>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <router-link class="btn btn-danger" to="/author">Back</router-link>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "create",
        data(){
            return{
                form : new Form({
                   'name':''
                })
            }
        },

        mounted(){
            axios.get(`/author-edit/${this.$route.params.id}`)
                .then((response)=>{
                    this.form.fill(response.data.result)

                })
        },
        methods:{
            update(){
                this.form.post(`/author-update/${this.$route.params.id}`)
                    .then((response)=>{
                        this.$router.push('/author')

                        toast({
                            type: 'success',
                            title: 'Author updated successfully'
                        })
                    })
            }
        }


    }
</script>

<style scoped>

</style>
