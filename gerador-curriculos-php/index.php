<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário de Currículo</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id= "form">
    
    <nav >
        <a>Formulário de Currículo</a>
    </nav>
       
    <main class="container mt-4 background-custom ">


        <form action="gerar-curriculo.php" method="post" >
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações Gerais</h4>
                    
                    <div class="form-group" name="full-name">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date">data de nascimento</label>
                                <input type="date" class="form-control" name="date" id="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">idade</label>
                                <input type="number" class="form-control" name="age" id="age" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" name="cargo">
                                <label for="cargo">Cargo Pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo" required>
                            </div>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" required>
                    </div>

                    <div class="col-md-6">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control" name="linkedin" id="linkedin" >
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="objetivo">Objetivos</label>
                        <textarea class="form-control" name="objetivo" id="objetivo" rows="4" required></textarea>
                    </div>
                </div>


                <div class="card-body">
                    <h4 class="card-title">Formação</h4>
                    <div id="formacoes">
                     
                    </div>
                    <button type="button" class="btn btn-success btn-sm btn-right" id="btn-adicionar-formacao">Adicionar Formação</button>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Experiência</h4>
                    <div id="experiencias">
                       
                    </div>
                    <button type="button" class="btn btn-success btn-sm btn-right" id="btn-adicionar-experiencia">Adicionar Experiência</button>
                </div>
              
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success">Gerar Currículo</button>
                    <button type="reset" class="btn btn-outline-danger">Limpar Campos</button>
                </div>
            </div>
        </form>
    </main>
    </body>
</html>