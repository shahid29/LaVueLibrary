<template>
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Your Author</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form @submit.prevent="author()"  role="form">
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
                form :new Form({
                    'name':''
                })


            }
        },

        methods:{
            author(){
                this.form.post('/add-author')
                    .then((response)=>{
                        this.$router.push('/author')

                        toast({
                            type: 'success',
                            title: 'Author added successfully'
                        })
                    })
            }
        }

    }
</script>

<style scoped>

</style>
