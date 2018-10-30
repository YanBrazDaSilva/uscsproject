<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body{
        font-size:17px;
        margin:0;
        background-color:lightray;

    }

    *{
       box-sizing:border-box;
    }

    .cabecalho{
        
            background-color: #222;
            padding: 5px;
            border-bottom: 4px solid #005eff;
            height: 60px;
            box-sizing: content-box;
    }


    .menu ul{
        padding: 0px;
        margin: 0px;
    }

    .menu{
        
         display: inline-block;
          vertical-align: top;
          height: 60px;
          padding:5px;

    }
    .menu li{
        display:inline-block;
        margin:5px;
        text-decoration:none;
       
    }

     .menu li a{
         padding:10px;
     }

     .menu li a:hover{
         background-color:#606060;
     }

     .selected{
         background-color:#005eff;
     }
    
     .cabecalho a{
            font-size: 1.3em;
            color: #eef;
            padding: 15px;
            text-decoration: none;
        }

    .menu-toggle{
        margin:5px;
        padding:5px 10px;;
        float:right;
        border-radius:10px;
        background-color:#222;
        box-shadow:2px 2px 2px 2px black;
        color: #eef;
        
    }

    @media(min-width:580px){
        .menu-toggle{
            display:none;
        }
    }

    @media(max-width:580px){
        .menu{
            display:none;
        }
    }
</style>





<header class="cabecalho"> 
    <div >
    <button class="menu-toggle">
            <i class="fa fa-lg fa-bars"></i>
        </button>
    </div>
   
    <nav class="menu">
    <li><a href="/home" class="selected">Home</a></li>
    <li><a href="/posts">Posts</li></a>
    </nav>
</header>

<script>
    document.querySelectorAll('.menu a').forEach(listas=>{
        listas.onclick = ()=>{
            document.querySelectorAll('.menu a').forEach(itens=>{
                itens.classList = ''
                if(listas.attributes['href'].value === itens.attributes['href'].value){
                    itens.classList = 'selected'
                }
            })
        }
    })
</script>