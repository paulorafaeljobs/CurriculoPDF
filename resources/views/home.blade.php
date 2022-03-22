<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Currículo PDF </title>
    <link rel="shortcut icon" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gerador de Curriculo">
    <link rel="curriculopdf" href="https://www.curriculopdf.com/">
    <meta name="author" content="Paulo Rafael de Souza Silva">
    <meta name="robots" content="index">
 </head>
<style>
    * {box-sizing: border-box;font-family: Arial, Helvetica, sans-serif;margin: 0;padding: 0;}
    body{background-color: rgb(238, 237, 237);}
    .conteiner {width: 80%;margin: 0 auto;}
    .subtitulo {text-align: center;margin-top: 50px;font-size: 20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;}
    .conteiner_1{text-align: left;margin-bottom: 40px;}
    .conteiner_1_title{color: red;font-size: 30px;}
    .conteiner_1_text{font-size: 20px;}
    .conteiner_1_text_red{color: red;font-size: 22px;}
    .titulo1{font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-size: 20px;}
    .form1 {margin: 10px; width: 100%;line-height: 50px; font-size: 20px;border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;margin-top: 5px;}
    .form2 {width: 49%;line-height: 50px; font-size: 20px;border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;margin-top: 5px;}
    .btn1 {width: 200px;height: 50px;background-color: #c23949;color: rgb(255, 255, 255);padding: 5px;font-size: 18px;cursor: pointer;margin: 12px 0;transition-duration: 1s;border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;}
    .btn1:hover {background: blue;}
    .anuncio_patrocinio_img{width: 100%;}

    .flexbox{display: flex;flex-wrap: wrap;width: 100%;margin: 0 auto;}
    .flex{flex: 1 1 250px;margin: 10px;}
    .flex_img{max-width: 250px;min-width: 100px;}

    .row {display: flex;width: 60%;text-align: center; flex-wrap: wrap;margin: auto;}
    .primeira_coluna_anuncios {flex: 20%;}
    .segunda_coluna_post {flex: 75%;padding: 30px;}
    .cabecalho{text-align: center;}
    @media screen and (max-width: 900px) 
    {
        .row{flex-direction: column;}
        .btn1{width: 150px;}
        .h1 {font-size: 43px;}
        .img_titulo {width: 300px;margin-top: -30px;}
        .primeira_coluna_anuncios{display: none;}   
    }
    @media screen and (max-width: 600px) 
    {
        .row{width:100%;}
    }

    .conteiner_final{text-align: center;}
    footer{background-color: #c23949;width: 100%;line-height: 40px;}
    .texto_final{text-align: center;color: white;font-size: 18px;}
    .header {display: flex;justify-content:center;align-items: center;flex-wrap: wrap;background-color: #c23949;}
    .img_titulo{margin-top: 30px;margin-bottom: 30px;}
</style>
<body>

    <header class="header">
        <div><a href="./"><img class="img_titulo" src="img/Logo-2.png" alt=""></a></div>
    </header>

    <div class="conteiner">
        <div class="subtitulo"> O currículopdf é um Gerador de Currículo on-line GRATUITO que visa em ajudar pessoas que estão em busca de uma nova Oportunidade de Trabalho.</div>
    </div>

    <div class="row">
        <div class="segunda_coluna_post">
            <div class="conteiner_1">
                <div class="conteiner_1_title">Siga as Etapas abaixo:</div>
                <div class="conteiner_1_text"><br></div>
                <div class="conteiner_1_text">1º = Preencha todos os campos com seus dados.</div>
                <div class="conteiner_1_text">2º = Verifique todos os dados Preenchidos.</div>
                <div class="conteiner_1_text">3º = Depois de Verificado clique em Criar Currículo.</div>
                <div class="conteiner_1_text"><br></div>
                <div class="conteiner_1_text_red">Importante!!! O Nosso site não armazena dados pessoais e não ultiliza Cookies.</div>

            </div>

            <label class="titulo1"> Informações Pessoais: </label>

                <form name="f_card" action="gerarcurriculo" method="post">
                    @csrf
                    <input class="form1" Placeholder="Nome Completo:" type="text" name="f_nome" maxlength="100" />
                    <input class="form1" Placeholder="Email:" type="text" name="f_email" maxlength="50" />
                    <input class="form1" Placeholder="Endereço Completo:" type="text" name="f_ender" maxlength="100" />
                    <input class="form1" Placeholder="Telefone:" type="text" name="f_tel" maxlength="50" />
                    <input class="form1" Placeholder="Nascionalidade:" type="text" name="f_nascionalidade" maxlength="50"/>
                    <input class="form1" Placeholder="Idade:" type="text" name="f_idade" maxlength="50" />
                    <input class="form1" Placeholder="CNH: ex CNH AB" type="text" name="f_cnh" maxlength="50" />
                    <label class="titulo1"> Objetivo Profissional: </label>
                    <input class="form1" Placeholder="Objetivo:" type="text" name="f_objet" />
                    <label class="titulo1"> Experiências Profissional 1 </label>
                    <input class="form1" Placeholder="Empresa:" type="text" name="f_empre1" maxlength="100" />
                    <input class="form1" Placeholder="Cargo:" type="text" name="f_carg1" maxlength="100" />
                    <input class="form1" Placeholder="Periodo: Ex 01/01/2020 a 01/01/2021" type="text" name="f_periodo1" maxlength="100" />
                    <label class="titulo1"> Experiências Profissional 2 </label>
                    <input class="form1" Placeholder="Empresa:" type="text" name="f_empre2" maxlength="100" />
                    <input class="form1" Placeholder="Cargo:" type="text" name="f_carg2" maxlength="100" />
                    <input class="form1" Placeholder="Periodo: Ex 01/01/2020 a 01/01/2021" type="text" name="f_periodo2" maxlength="100" />
                    <label class="titulo1"> Experiências Profissional 3 </label>
                    <input class="form1" Placeholder="Empresa:" type="text" name="f_empre3" maxlength="100" />
                    <input class="form1" Placeholder="Cargo:" type="text" name="f_carg3" maxlength="100" />
                    <input class="form1" Placeholder="Periodo: Ex 01/01/2020 a 01/01/2021" type="text" name="f_periodo3" maxlength="100" />
                    <label class="titulo1">Formação Técnica:</label><br>
                    <input class="form2" Placeholder="Curso 1:" type="text" name="f_curso1" maxlength="100" />
                    <input class="form2" Placeholder="Escola 1:" type="text" name="f_escola1" maxlength="50" /></br>
                    <input class="form2" Placeholder="Curso 2:" type="text" name="f_curso2" maxlength="100" />
                    <input class="form2" Placeholder="Escola 2:" type="text" name="f_escola2" maxlength="50" /></br>
                    <input class="form2" Placeholder="Curso 3:" type="text" name="f_curso3" maxlength="100" />
                    <input class="form2" Placeholder="Escola 3:" type="text" name="f_escola3" maxlength="50" /></br>
                    <input class="form2" Placeholder="Curso 4:" type="text" name="f_curso4" maxlength="100" />
                    <input class="form2" Placeholder="Escola 4:" type="text" name="f_escola4" maxlength="50" /></br>
                    <input class="form2" Placeholder="Curso 5:" type="text" name="f_curso5" maxlength="100" />
                    <input class="form2" Placeholder="Escola 5:" type="text" name="f_escola5" maxlength="50" /></br>
                    <input class="form2" Placeholder="Curso 6:" type="text" name="f_curso6" maxlength="100" />
                    <input class="form2" Placeholder="Escola 6:" type="text" name="f_escola6" maxlength="50"/>
                    <button class="btn1" type="submit" onclick="msg()"> Gerar Currículo </button>
                    <button class="btn1" type="reset"> Limpar </button>
                </form>

            </div>
        <div class="primeira_coluna_anuncios">
            <div class="flexbox">
                <div class="flex">
                    

                </div>
                <div class="flex">
                    
                    
                </div>


            </div>    
        </div>
    </div>
    <footer> 
        <div class="texto_final">© 2022 CurrículoPDF - Todos os direitos reservados</div>
    </footer>
    <script>function msg() {alert("Curriculo Gerado com Sucesso ,Boa Sorte!!!");}</script>
</body>
</html>
