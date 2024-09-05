<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerador de Currículo</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="form">
    
    <nav >
        <a >Gerador de Currículo</a>
    </nav>
       
    <main class="container mt-4 background-custom">
        <form action="gerar-curriculo.php" method="post">
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
                                <label for="date">Data de Nascimento</label>
                                <input type="date" class="form-control" name="date" id="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Idade</label>
                                <input type="number" class="form-control" name="age" id="age" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cargo">Cargo Pretendido</label>
                        <input type="text" class="form-control" name="cargo" id="cargo" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" required>
                    </div>

                    <div class="form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" class="form-control" name="linkedin" id="linkedin">
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
                    <div id="formacoes"></div>
                    <button type="button" class="btn btn-success btn-sm mt-2" id="btn-adicionar-formacao">Adicionar Formação</button>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Experiência</h4>
                    <div id="experiencias"></div>
                    <button type="button" class="btn btn-success btn-sm mt-2" id="btn-adicionar-experiencia">Adicionar Experiência</button>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <button type="submit" class="btn btn-outline-success">Gerar Currículo</button>
                    <button type="reset" class="btn btn-outline-danger">Limpar Campos</button>
                </div>
            </div>
        </form>
    </main>

    <script>
        document.getElementById('btn-adicionar-formacao').addEventListener('click', function() {
            const formacaoDiv = document.getElementById('formacoes');
            const novaFormacao = document.createElement('div');
            novaFormacao.classList.add('form-group');
            novaFormacao.innerHTML = `
                <h5>Formação</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nome_formacao">Nome da Formação</label>
                        <input type="text" class="form-control" name="formacao_nome[]" placeholder="Nome da Formação">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inicio_formacao">Início</label>
                        <input type="text" class="form-control" name="formacao_inicio[]" placeholder="Início">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="conclusao_formacao">Conclusão</label>
                        <input type="text" class="form-control" name="formacao_conclusao[]" placeholder="Conclusão">
                    </div>
                </div>
                <button type="button" class="btn btn-danger btn-sm mt-2 btn-apagar-formacao">Apagar</button>
            `;
            formacaoDiv.appendChild(novaFormacao);
            novaFormacao.querySelector('.btn-apagar-formacao').addEventListener('click', function() {
                novaFormacao.remove();
            });
        });

        document.getElementById('btn-adicionar-experiencia').addEventListener('click', function() {
            const experienciaDiv = document.getElementById('experiencias');
            const novaExperiencia = document.createElement('div');
            novaExperiencia.classList.add('form-group');
            novaExperiencia.innerHTML = `
                <label for="experiencia">Experiência</label>
                <input type="text" class="form-control" name="experiencia[]" placeholder="Nome da Experiência">
                <button type="button" class="btn btn-danger btn-sm mt-2 btn-apagar-experiencia">Apagar</button>
            `;
            experienciaDiv.appendChild(novaExperiencia);
            novaExperiencia.querySelector('.btn-apagar-experiencia').addEventListener('click', function() {
                novaExperiencia.remove();
            });
        });
    </script>
</body>
</html>
