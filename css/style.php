<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{margin: 0;
    padding: 0; 
    box-sizing: border-box;
    font-family: 'Muli', sans-serif;
}

.nav_style{
    background-color: #a29efe!important;
}

.nav-item a:hover{
    color: #606060;
}
.nav_style a{color: white;}

.navbar-toggler-icon{
    background-color: deepskyblue;
    color: white;
}
/*========main_header========*/
.main_header{
    height: 540px;
    width: 100%;
}
.rightside{
    font-size: 3rem;
}
.corona_rot img{
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}

.leftside img{
    animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat{
    0%{
        transform: scale(.75);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(.75);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(.75);
    }
    100%{
        transform: scale(.75);
    }
}

/*================corona update============*/
.corona_update{
    margin: 0 0 30px 0;
}
.corona_update h3{
    color: #ff7675;
}
.corona_update h1{
    font-size: 2rem; 
    text-align: center;
}

/*============about section========*/

.sub-section{
    background-color: #fbfaf4;
}

.img-fluidimg{
    width: 380px;
    height: 270px;
    padding-left: 34px;
}



/*===========coronavirus symptome===========*/
.sub-section{
    background-color: #fbfaf4;
}

/*============contact============*/

#symptomsc{
    background-color: #fefe;
}

/*===========footer========*/

.footer_style{
    background-color: #a29bfe !important;
}
.copyright{
    font-size: 13px;
}
.footer_style p{
    margin-bottom: 0!important;
}
.fa{
    color: red;
}

/*==============top scroll===============*/
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 30px; /* place the button at the button of the page */
    right: 40px; /* place the button 30px from the right */
    z-index: 99; /*Make sure it dose not overlap*/
    border: none; /*Remove borders*/
    outline: none; /*Remove outline*/
    background-color: #00A8FF; /* Set a bg color*/
    color: white; /*Text color*/
    cursor: pointer; /*Add a mouse pointer on hover*/
    padding: 10px; /*Some padding*/
    border-radius: 5px; /*Rounded corners*/
}

#myBtn:hover {
    background: #606060;
}



@media(max-width:768px){
    .main_header{
        height: 700px;
        text-align: center;
    }
    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 30px;
    }

    .count_style{
        display: inline!important;
    }
    .count_style p{
        text-align: center;
    }

    .about_res{
        margin-left: 0!important;
    }

}



</style>