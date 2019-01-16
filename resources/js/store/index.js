export default {
    state:{
       category:[],
        author:[],
        user:[],
        book:[],
        borrow:[]
    },
    getters:{
        getMyCategory(state){
            return state.category
        },
        author(state){
            return state.author
        },
        user(state){
            return state.user
        },
        book(state){
            return state.book
        },
        borrow(state){
            return state.borrow
        }
    },
    actions:{
        allCategory(context){
            axios.get('/getMyCat')
                .then((response)=>{
                    context.commit('showCategoryInMutation',response.data.result)
                })
        },
        hitActionAuthor(context){
            axios.get('/getMyAuthor')
                .then((response)=>{
                    context.commit('AuthorMutation',response.data.author)
                })
        },
        hitActionUser(context){
            axios.get('/getMyUser')
                .then((response)=>{
                    context.commit('UserMutation',response.data.result)
                })
        },
        hitActionBook(context){
            axios.get('/getMyBook')
                .then((response)=>{
                    context.commit('BookMutation',response.data.result)
                })
        },
        hitActionBorrow(context){
            axios.get('/getMyborrow')
                .then((response)=>{
                    context.commit('BorrowMutation',response.data.result)
                })
        },


    },
    mutations:{
        showCategoryInMutation(state,data){
            return state.category = data
        },
        AuthorMutation(state,data){
            return state.author = data
        },
        UserMutation(state,data){
            return state.user = data
        },
        BookMutation(state,data){
            return state.book = data
        },
        BorrowMutation(state,data){
            return state.borrow = data
        },

    }

    // getters: {
    //     // and state within method and return it
    //     getCategory(state){
    //     return state.category
    //     },
    //     getPost(state){
    //         return state.post
    //     },
    //
    //     //frontend
    //     getDataFromAction(state){
    //         return state.blogPost
    //     },
    //     singlePostById(state){
    //         return state.singlePost
    //     },
    //     sidebarCategory(state){
    //         return state.sidebarCategory
    //     },
    //     latestPost(state){
    //         return state.latestPost
    //     },
    //     getAllPostByCategoryId(state){
    //         return state.blogPost
    //     }
    // },
    // actions: {
    //     allCategory(context){
    //         axios.get('/getCategories')
    //             .then((response)=>{
    //               context.commit('showCategoryInMutation',response.data.showResult)
    //             });
    //
    //     },
    //
    //     //Post
    //     AllPost(context){
    //         axios.get('/getPosts')
    //             .then((response)=>{
    //                 context.commit('showPostMutation',response.data.result)
    //             });
    //     },
    //
    //     //Frontend
    //
    //     allBlogPost(context){
    //         axios.get('/getblogPost')
    //             .then((response)=>{
    //                 context.commit('showblogPostMutation',response.data.result)
    //             })
    //     },
    //     getSinglePost(context,payload){
    //         axios.get('/singlePost/'+payload)
    //             .then((response)=>{
    //                 context.commit('getSinglePostMutation',response.data.result)
    //             })
    //     },
    //     categoryForSidebar(context){
    //         axios.get('/categoryForSidebar')
    //             .then((response)=>{
    //                 context.commit('sidebarCategoryMutation',response.data.result)
    //             })
    //     },
    //     latest(context){
    //         axios.get('/latest')
    //             .then((response)=>{
    //                 context.commit('latestMutation',response.data.result)
    //             })
    //     },
    //     allCategoryPost(context,payload){
    //          axios.get('/allpostbyCategoryId/'+payload)
    //              .then((response)=>{
    //                  context.commit('allpostbyCategoryId_Mutation',response.data.result)
    //              })
    //     },
    //     SearchPost(context,payload){
    //         axios.get('/search?s='+payload)
    //             .then((response)=>{
    //                 context.commit('Search_Mutation',response.data.result)
    //             })
    //     }
    // },
    // mutations: {
    //     showCategoryInMutation(state,data){
    //         return state.category = data
    //     },
    //     showPostMutation(state,data){
    //         return state.post = data
    //     },
    //
    //
    //     //frontend
    //     showblogPostMutation(state,data){
    //         return state.blogPost = data
    //     },
    //     getSinglePostMutation(state,payload){
    //         return state.singlePost = payload
    //     },
    //     sidebarCategoryMutation(state,payload){
    //         return state.sidebarCategory = payload
    //     },
    //     latestMutation(state,payload){
    //         return state.latestPost = payload
    //     },
    //     allpostbyCategoryId_Mutation(state,payload){
    //         return state.blogPost=payload
    //     },
    //     Search_Mutation(state,payload){
    //         return state.blogPost=payload
    //     }
    //
    // }

}
