<template>
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Your Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form @submit.prevent="category()" role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input id="exampleInputEmail1" v-model="form.name" type="text" name="name"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <router-link class="btn btn-danger" to="/category">Back</router-link>
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

                })
            }
        },

        methods:{
            category(){
                this.form.post('/add-category')
                    .then((response)=>{
                        this.$router.push('/category')

                        toast({
                            type: 'success',
                            title: 'Category added successfully'
                        })
                    })
            }
        }
    }
</script>

<style scoped>

</style>
