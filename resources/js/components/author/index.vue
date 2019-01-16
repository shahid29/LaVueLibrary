<template>
    <div>
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Author List</h3>
                            <div class="card-tools">
                                <router-link to="/add-author" class="btn btn-success"  >Add Author</router-link>
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
                                <tr v-for="(author,index) in printmYAuthor">
                                    <td>{{index+1}}</td>
                                    <td>{{author.name}}</td>
                                    <td>{{author.created_at|timeFormat}}</td>
                                    <td>
                                        <router-link  :to="`/author-edit/${author.id}`" class="btn btn-info" href="">Edit</router-link> <a @click.prevent="Author(author.id)" class="btn btn-info" href="">Delete</a>
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
            this.$store.dispatch("hitActionAuthor")
        },
        computed:{
            printmYAuthor(){
                return this.$store.getters.author
            }
        },
        methods:{
            Author(id){
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
                        axios.get('/author-delete/'+id).then(()=>{
                            this.$store.dispatch("hitActionAuthor")
                            if (result.value) {
                                Swal(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success',
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
