export default {
    state:{
       category:[],
        author:[],
        user:[],
        book:[],
        borrow:[],
        borrow_date_return:[]
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
        },
        borrow_date_return(state){
            return state.borrow_date_return
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
        hitActionBorrow_date_return(context){
            axios.get('/getMyborrow_date_return')
                .then((response)=>{
                    context.commit('BorrowDateMutation',response.data.result)
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
        BorrowDateMutation(state,data){
            return state.borrow_date_return = data
        },

    }

}
