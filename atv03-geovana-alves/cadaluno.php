<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1 style="color: #f27c7c;">Sistema de Cadastro Acadêmico</h1>
    </div>

    <div class="titulo">
            <ul>
                <li><a href="index.php">HOME</a>
                </li>
                <li><a href="listaaluno.php">LISTA DE ALUNOS</a>
                </li>
            </ul>
    </div>

    <div class="centro">
        <div class="formulario">
        <div class="container">
            <h1>FORMULÁRIO</h1>
        <form action="listaaluno.php" method="post">
            <div class="primeiro"> 
            <p>CPF: <input type="tel" id="cpf" name="cpf"></p>
            <p>D. nascimento: <input type="date" id="nascimento" name="nascimento"></p>
            <p>Nome: <input type="text" id="nome" name="nome"></p>
            <p>Sobrenome: <input type="text" id="sobrenome" name="sobrenome"></p>
        </div>
                    <div class="segundo">
                        <p>ZAP: <input type="tel" id="zap" name="zap"></p>
                        <p>Telefone fixo: <input type="tel" id="telfix" name="telfix"></p>
                </div>
                        <div class="terceiro">
                        <p>Endereço: <input type="text" id="endereco" name="endereco"></p>
                        <p>Bairro: <input type="name" id="bairro" name="bairro"></p>
                        <p>Cidade: <input type="text" id="cidade" name="cidade"></p>
                        <p>UF: <select name="uf"></p>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                            </select> </div> </div>
                                

                                    <div class="disciplinas">
                                        
                                        <div class="disciplinasc">
                                            <h2>Disciplinas cursadas:</h2>
                                            <p><input type="checkbox" name="op1" value="webdesign">Webdesign </p>
                                            <p><input type="checkbox" name="op2" value="bancodedados">Banco de Dados</p>
                                            <p><input type="checkbox" name="op3" value="projetointegrador">Projeto Integrador </p>
                                            <p><input type="checkbox" name="op4" value="logiccadeprogramacao">Lógica de Programação</p>
                                            <p><input type="checkbox" name="op5" value="redesdecomputadores">Redes de Computadores</p>
                                            <p><input type="checkbox" name="op6" value="fundamentosdeinformatica">Fundamentos de Informática</p>
                                            <p><input type="checkbox" name="op7" value="asw">Análise de Sistemas Para Web</p>
                                            <p><input type="checkbox" name="op8" value="projetodeconclusaodecurso">Projeto de Conclusão de Curso</p>
                                            <p><input type="checkbox" name="op9" value="orientacaodepraticaprofissional">Orientação de Prática Profissional</p>
                                            <p><input type="checkbox" name="op10" value="psw">Programação de Sistemas Para Web I</p>
                                            <p><input type="checkbox" name="op11" value="pswii">Programação de Sistemas Para Web II</p>
                                            <p><input type="checkbox" name="op12" value="instalacaoeconfiguracaodeservidores">Instalação e Confguração de Servidores</p>
                                            <p><input type="checkbox" name="op13" value="fundamentodesistemasoperacionais">Fundamentos de Sistemas Operacionais</p>
                                        </div>
                                        <div class="disciplinasfav">
                                            <h2>Disciplinas favoritas:</h2>
                                            <p><input type="checkbox" name="op1" value="webdesign">Webdesign</p>
                                            <p><input type="checkbox" name="op2" value="bancodedados">Banco de Dados</p>
                                            <p><input type="checkbox" name="op3" value="projetointegrador">Projeto Integrador</p>
                                            <p><input type="checkbox" name="op4" value="logiccadeprogramacao">Lógica de Programação</p>
                                            <p><input type="checkbox" name="op5" value="redesdecomputadores">Redes de Computadores</p>
                                            <p><input type="checkbox" name="op6" value="fundamentosdeinformatica">Fundamentos de Informática</p>
                                            <p><input type="checkbox" name="op7" value="asw">Análise de Sistemas Para Web</p>
                                            <p><input type="checkbox" name="op8" value="projetodeconclusaodecurso">Projeto de Conclusão de Curso</p>
                                            <p><input type="checkbox" name="op9" value="orientacaodepraticaprofissional">Orientação de Prática Profissional
                                            </p>
                                            <p><input type="checkbox" name="op10" value="psw">Programação de Sistemas Para Web I</p>
                                            <p><input type="checkbox" name="op11" value="pswii">Programação de Sistemas Para Web II</p>
                                            <p><input type="checkbox" name="op12" value="instalacaoeconfiguracaodeservidores">Instalação e Confguração de
                                                Servidores</p>
                                            <p><input type="checkbox" name="op13" value="fundamentodesistemasoperacionais">Fundamentos de Sistemas
                                                Operacionais</p>
                                        </div>
                                    </div>
            <div class="inputs">
            <input type="submit" value="Salvar">
            </div>
        </form>
        </div>
    </div>
    </div>

    <div class="rodape">
        <div id="div6">Sistema criado por: Geovana Alves (1AII)</div>
    </div>

</body>

</html>