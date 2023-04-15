    <?php get_header(); ?>
        <header id="header">
            <p>Atena Idiomas</p>
            <?php
                if(have_posts()){ // Se não houver posts criados os botões Home e Posts não irão aparecer
                    echo '
                        <div>
                            <a href="#home">Home</a>
                            <a href="#newposts">Posts</a>
                        </div>
                        <script>
                            let header = document.getElementById("header");
                            header.style.justifyContent = "space-between";
                        </script>
                    ';  
                }
            ?>       
        </header>
        <main>
            <h1 id="home"></h1> <!-- Button home - elevação do site ao topo -->
            <h3>
                Domine novas línguas e conquiste o mundo com a Atena Idiomas. 
            </h3>
            <p> 
                Aprenda de forma fácil e divertida! 
                Desperte o poliglota que existe em você com a Atena Idiomas! 
                Com um método de ensino inovador e professores experientes, 
                aprender um novo idioma nunca foi tão fácil e divertido. 
                Seja para viagens, estudos ou crescimento profissional, a 
                Atena Idiomas tem o curso ideal para você. <br> <br>
                Venha se surpreender com a facilidade de se comunicar em inglês, 
                espanhol, francês, alemão ou italiano. Aprender idiomas é transformar 
                o mundo e você pode começar agora com a Atena Idiomas.
            </p>
            <h3 id="cadastre-se">Cadastre-se agora mesmo!</h3>
            <form method="post">
                <div>
                    <label for="name">Nome:</label>    
                    <input type="text" name="name" id="name">                   
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">  
                </div>
                <div>
                    <label for="password">Senha:</label>
                    <input type="password" name="password" id="password"> 
                </div>   
                <div>
                    <button>Cadastrar</button>
                </div>   
            </form>
        </main>
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
        ?>
            <div id="newposts" class="posts">
                <div class="content-post">
                    <h2 class="title-post">Título: <?php the_title();?></h2> <br>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="meta-post">  
                    <h3>Categoria: <?php the_category();?></h3> <br>
                    <h3>Autor: <?php get_the_author()?></h3> 
                </div>
            </div>
        <?php
                }//fim do while
            }//fim do if loop wordpress
        ?>
    <?php get_footer(); ?>