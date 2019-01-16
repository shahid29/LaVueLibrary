<template>
    <div>
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category List</h3>
                            <div class="card-tools">
                                <router-link to="/create-category" class="btn btn-success"   href="">Add Category</router-link>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Name</th>
                                    <th>Created_AT</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(result,index) in printCategoryInform">
                                    <td>{{index +1}}</td>
                                    <td>{{result.name}}</td>
                                    <td>{{result.created_at | timeFormat}}</td>
                                    <td>
                                        <router-link :to="`/cat-edit/${result.id}`" class="btn btn-info" href="">Edit</router-link> <a @click.prevent="deleteCategoryById(result.id)" class="btn btn-info" href="">Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SN.</th>
                                    <th>Name</th>
                                    <th>Created_AT</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card --
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
</template>

<script>
    export default {
        name: "index",

        mounted(){
            this.$store.dispatch("allCategory")
        },

        computed:{
            printCategoryInform(){
                return this.$store.getters.getMyCategory
            }
        },

        methods:{
            deleteCategoryById(id){
                Swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'No, cancel!',
                    cancelButtonColor: '#d33',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel){

                    }else{
                        axios.get('/delete-CatById/'+id).then(()=>{
                            this.$store.dispatch("allCategory")
                            if (result.value) {
                                Swal(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            }
                        })
                    }


                })


            }
        }
    }

</script>

<style scoped>

</style>
