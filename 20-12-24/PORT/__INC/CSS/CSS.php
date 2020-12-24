<style>
    * {
        margin: 0;
        padding: 0;
    }
    
    html{
        background:#fcfcfc;
    }

    .nav{
        padding-top:40px;
        padding-right:40px;
        height:60px;
        text-align:right;
        border-bottom:1px solid gray;
        background:white;
    }
        .nav .home{
            margin-right:40px;
            cursor:pointer;
            font-size:20px;
            border-radius:30%;
        }
        .nav .home:hover{
            box-shadow:0 0 20px whitesmoke, 0 0 20px whitesmoke;
        }

    .top{
        height:320px;
        width:100%;
        margin-top:10px;
    }
        .members{
            margin:auto;
            display:flex;
            width:880px;
            /* border:1px solid black; */
        }
            .member{
                /* border:1px solid black; */
                height:300px;
                margin:10px;
                width:200px;
                text-align:center;
                cursor:pointer;
                border-radius:40%;
            }
                .member:hover{
                    box-shadow:0 0 20px whitesmoke, 0 20px 200px whitesmoke;
                    background:#fcfcfc;
                }
                .member-img{
                    margin-top:30px;
                    width:150px;
                    height:150px;
                    border-radius:50%;
                }
                        .member-img2{
                            width:280px;
                            height:280px;
                            border-radius:50%;
                            margin:10px;
                        }
                .infor{
                    text-align:center;
                    padding:20px;
                }
                    .tech{
                        font-size:15px;
                        color:gray;
                        margin-top:3px;
                        margin-bottom:3px;
                    }
                    .name{
                        font-size:20px;
                        font-weight:bold;
                    }
    #intro{ 
        width:1015px;
        display:flex;
        margin:auto;
        margin-bottom:40px;
        margin-top:50px;
    }
        #left{
            width:300px;
            padding-top:80px;
        }
            .infor2{
                text-align:center;
                padding:20px;
            }
                .infor2 .tech{
                    font-size:20px;
                    color:gray;
                    margin-top:-20px;
                    margin-bottom:3px;
                }
                .infor2 .name{
                    font-size:30px;
                    font-weight:bold;
                }
    .border{
        /* border:10px solid red; */
        height:450px;
        width:600px;
        padding:50px;
        padding-top:30px;
        background:white;
    }
        #padding 
            td,th{
                padding-right:30px;
            }
        .border .head{
            font-weight:bold;
            margin:20px 0 15px 20px;
        }            
</style>