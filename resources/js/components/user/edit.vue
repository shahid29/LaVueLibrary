<template>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Your Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form @submit.prevent="update()" role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName">User Name</label>
                            <input id="exampleInputName" v-model="form.name" type="text" name="name"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                            <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Use Email</label>
                            <input id="exampleInputEmail1" v-model="form.email" type="text" name="email"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <router-link class="btn btn-danger" to="/user">Back</router-link>
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
        data () {
            return {
                form: new Form({
                    name: '',
                    email:''

                })
            }
        },

        mounted(){
            axios.get(`/user-edit/${this.$route.params.id}`)
                .then((response)=>{
                    this.form.fill(response.data.result)
                })
        },

        methods:{
            update(){
                this.form.post(`/update/${this.$route.params.id}`)
                    .then((response)=>{
                        this.$router.push('/user')

                        toast({
                            type: 'success',
                            title: 'User updated successfully'
                        })
                    })
            }
        }

    }
</script>

<style scoped>

</style>
