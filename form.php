<?php

    if(isset($_POST['submit']))

    {   
        include_once('config.php');

        $faixa_etaria = $_POST['faixa-etaria'];
        $genero = $_POST['genero'];
        $escolaridade = $_POST['escolaridade'];
        $deficiencia = $_POST['deficiencia'];
        $empregado = $_POST['empregado'];
        $renda = $_POST['renda'];
        $internet = $_POST['internet'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $preocupacao = $_POST['preocupacao'];
        $satisfacao = $_POST['satisfacao'];
        $frequencia = $_POST['frequencia'];
        $seguranca = $_POST['seguranca'];
        $meio_ambiente = $_POST['meio_ambiente'];
        $saudeAdequada = $_POST['saudeAdequada'];
        $opiniaoInfra = $_POST['opiniaoInfra'];
        $acesso_publico = $_POST['acesso_publico'];
        $oportunidade = $_POST['oportunidade'];
        $moradiaAdequada = $_POST['moradiaAdequada'];
        $opiniaoTransporte = $_POST['opiniaoTransporte'];
        $opiniaoEducacao = $_POST['opiniaoEducacao'];
        $alimentosAcessiveis = $_POST['alimentosAcessiveis'];
        $dificuldadeSaude = $_POST['dificuldadeSaude'];
        $atuacaoAutoridade = $_POST['atuacaoAutoridade'];
        $acessoCultura = $_POST['acessoCultura'];
        $poluicaoDegradacao = $_POST['poluicaoDegradacao'];
        $opiniaoSuporte = $_POST['opiniaoSuporte'];

        $result = mysqli_query($conn, "INSERT INTO tbperguntasforms(FaixaEtaria, Genero, Escolaridade, Deficiencia, Ocupacao, Renda_Familiar, Acesso_Internet, Bairro, Cidade, Estado, Preocupacao, Servicos_Publicos, Frequencia_ServicosPublicos, Seguranca_Comunidade, Meio_Ambiente, Servicos_Saude, Infraestrutura_Comunidade, Espaco_Publicos, Oportunidades_Empregos,Moradia_Adequada, Sistema_Transporte, Qualidade_Educacao, Acesso_AlimentosSaudaveis, Dificuldades_Servicos, Atuacao_Autoridades, Espacos_Culturais, Problemas_Poluicao, Grupos_Vulneraveis) VALUES ('$faixa_etaria','$genero','$escolaridade','$deficiencia','$empregado','$renda','$internet','$bairro', '$cidade', '$estado', '$preocupacao','$satisfacao','$frequencia','$seguranca','$meio_ambiente','$saudeAdequada', '$opiniaoInfra','$acesso_publico','$oportunidade','$moradiaAdequada','$opiniaoTransporte','$opiniaoEducacao','$alimentosAcessiveis','$dificuldadeSaude','$atuacaoAutoridade','$acessoCultura','$poluicaoDegradacao','$opiniaoSuporte')");

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Formulário</title>
</head>
<body class="corpoForm">

<form action="index.html" method="post">

    <!-- FORMULARIO 1 -->
    <div id="form1">
        <fieldset class="inputBox"><p style="text-align: center;"><strong>DADOS DEMOGRÁFICOS E SOCIAIS</strong></p></fieldset>
        <div class="Dados-Demograficos">
            <fieldset class="inputBox">
                <p aria-required="true"><strong> 1. Qual é a sua faixa etária?</strong></p>
                <label class="tab" for="iFaixa-menos18"><input type="radio" name="faixa-etaria" id="iFaixa-menos18" class="inputUser" value="Menos de 18 ano"> Menos de 18 anos</label>
                <label class="tab" for="iFaixa-18_24"><input type="radio" name="faixa-etaria" id="iFaixa-18_24" class="inputUser" value="18-24 anos"> 18-24 anos</label>
                <label class="tab" for="iFaixa-25_34"><input type="radio" name="faixa-etaria" id="iFaixa-25_34" class="inputUser" value="25-34 anos"> 25-34 anos</label>
                <label class="tab" for="iFaixa-35_44"><input type="radio" name="faixa-etaria" id="iFaixa-35_44" class="inputUser" value="35-44 anos"> 35-44 anos</label>
                <label class="tab" for="iFaixa-45_54"><input type="radio" name="faixa-etaria" id="iFaixa-45_54" class="inputUser" value="45-54 anos"> 45-54 anos</label>
                <label class="tab" for="iFaixa_55_64"><input type="radio" name="faixa-etaria" id="iFaixa_55_64" class="inputUser" value="55-64 anos"> 55-64 anos</label>
                <label class="tab" for="iFaixa-mais65"><input type="radio" name="faixa-etaria" id="iFaixa-mais65" class="inputUser" value="65 anos ou mais"> 65 anos ou mais</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong> 2. Qual é o seu gênero?</strong></p>
                <label class="tab" for="iGenero-Masculino"><input type="radio" name="genero" id="iGenero-Masculino" class="inputUser"  value="Masculino"> Masculino</label>
                <label class="tab" for="iGenero-Feminino"><input type="radio" name="genero" id="iGenero-Feminino" class="inputUser" value="Feminino"> Feminino</label>
                <label class="tab" for="iGenero-Binario"><input type="radio" name="genero" id="iGenero-Binario" class="inputUser" value="Não binário"> Não binário</label>
                <label class="tab" for="iGenero-Outro"><input type="radio" name="genero" id="iGenero-Outro" class="inputUser" value="Outro"> Outro</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong> 3. Qual é o seu nível de escolaridade?</strong></p>
                <label class="tab" for="iFundamentalncompleto"><input type="radio" name="escolaridade" id="iFundamentalncompleto" class="inputUser"  value="Ensino fundamental incompleto"> Ensino fundamental incompleto</label>
                <label class="tab" for="iFundamentalCompleto"><input type="radio" name="escolaridade" id="iFundamentalCompleto" class="inputUser" value="Ensino fundamental completo"> Ensino fundamental completo</label>
                <label class="tab" for="iMedioIncompleto"><input type="radio" name="escolaridade" id="iMedioIncompleto" class="inputUser" value="Ensio médio incompleto"> Ensio médio incompleto</label>
                <label class="tab" for="iMedioCompleto"><input type="radio" name="escolaridade" id="iMedioCompleto" class="inputUser" value="Ensino médio completo"> Ensino médio completo</label>
                <label class="tab" for="iSuperiorIncompleto"><input type="radio" name="escolaridade" id="iSuperiorIncompleto" class="inputUser" value="Ensisno superior incompleto"> Ensino superior incompleto</label>
                <label class="tab" for="iSuperiorCompleto"><input type="radio" name="escolaridade" id="iSuperiorCompleto" class="inputUser" value="Ensisno superior completo"> Ensino superior completo</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>4. Você possui algum tipo de deficiência?</strong></p>
                <label for="iDeficienciaSim"><input type="radio" name="deficiencia" id="iDeficienciaSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iDeficienciaNao"><input type="radio" name="deficiencia" id="iDeficienciaNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>5. Está empregado atualmente?</strong></p>
                <label for="iEmpregadoSim"><input type="radio" name="empregado" id="iEmpregadoSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iEmpregadoNao"><input type="radio" name="empregado" id="iEmpregadoNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>6. Qual é a sua renda familiar mensal?</strong></p>
                <label for="iMenosUmSalario"><input type="radio" name="renda" id="iMenosUmSalario" class="inputUser" value="Menos de 1 salário mínimo"> Menos de 1 salário mínimo</label>
                <label for="iAteUmSalario"><input type="radio" name="renda" id="iAteUmSalario" class="inputUser" value="Até 1 salário mínimo"> Até 1 salário mínimo</label>
                <label for="iUm_DoisSalarios"><input type="radio" name="renda" id="iUm_DoisSalarios" class="inputUser" value="De 1 a 2 salários mínimos"> De 1 a 2 salários mínimos</label>
                <label for="iDois_TresSalarios"><input type="radio" name="renda" id="iDois_TresSalarios" class="inputUser" value="De 2 a 3 salários mínimos"> De 2 a 3 salários mínimos</label>
                <label for="iMaisTresSalarios"><input type="radio" name="renda" id="iMaisTresSalarios" class="inputUser" value="Mais de 3 salários mínimos"> Mais de 3 salários mínimos</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>7. Você possui acesso regular à internet?</strong></p>
                <label for="iInternetSim"><input type="radio" name="internet" id="iInternetSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iInternetNao"><input type="radio" name="internet" id="iInternetNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox ">
                    <p aria-required="true"><strong>8. Informe seu endereço</strong></p>
                    <div class="input-group">
                        <label for="cep">CEP</label>
                    <input type="text" name="cep" minlength="8" maxlength="8" requeried />
                    </div>    

                    <input type="text" name="rua" id="iRua" style="display: none"/>

                    <div class="input-group">
                        <label for="">Bairro</label>
                    <input type="text" name="bairro" id="iBairro" requeried  />
                    </div>

                    <div class="input-group">
                        <label for="">Cidade</label>
                    <input type="text" name="cidade"  id="iCidade" requeried  />
                    </div>

                    <div class="input-group">
                        <label for="">Estado</label>
                    <input type="text" name="estado"  id="iEstado" requeried />
                    </div>     
            </fieldset>
    </div>
            <!--FORMULARIO PARTE 2-->
    <div id="form2">
        <fieldset class="inputBox"><p style="text-align: center;"><strong>OPINIÕES E PERCEPÇÕES SOBRE A REGIÃO</strong></p></fieldset>
        <div class="opinoes_percepcoes">
            <fieldset class="inputBox">
                <p aria-required="true"><strong>9. Quais é a sua principal preocupação em relação à comunidade onde vive?</strong></p>
                <label for="iSeguranca"><input type="radio" name="preocupacao" id="iSeguranca" class="inputUser" value="Seguranca"> Segurança</label>
                <label for="iSaude"><input type="radio" name="preocupacao" id="iSaude" class="inputUser" value="Saude"> Saúde</label>
                <label for="iEducacao"><input type="radio" name="preocupacao" id="iEducacao" class="inputUser" value="Educacao"> Educação</label>
                <label for="iSaneamento"><input type="radio" name="preocupacao" id="iSaneamento" class="inputUser" value="Saneamento"> Saneamento básico</label>
                <label for="iOutro"><input type="radio" name="preocupacao" id="iOutro" class="inputUser" value="Outro"> Outros</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>10. Você está satisfeito com os serviços público disponíveis na sua região (saúde, educação, transporte, etc.)?</strong></p>
                <label for="iSatisfacaoSim"><input type="radio" name="satisfacao" id="iSatisfacaoSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iSatisfacaoNao"><input type="radio" name="satisfacao" id="iSatisfacaoNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>
            
            <fieldset class="inputBox">
                <p aria-required="true"><strong>11. Com que frequência você utiliza os serviços públicos disponíveis ns sua região?</strong></p>
                <label for="iSempre"><input type="radio" name="frequencia" id="iSempre" class="inputUser" value="Sempre"> Sempre</label>
                <label for="iFrequemente"><input type="radio" name="frequencia" id="iFrequemente" class="inputUser" value="Frequentemente"> Frequentemente</label>
                <label for="iRaramente"><input type="radio" name="frequencia" id="iRaramente" class="inputUser" value="Raramente"> Raramente</label>
                <label for="iNunca"><input type="radio" name="frequencia" id="iNunca" class="inputUser" value="Nunca"> Nunca</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>12. Você se sente seguro(a) na sua comunidade/localidade?</strong></p>
                <label for="iSeguroSim"><input type="radio" name="seguranca" id="iSeguroSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iSeguroNao"><input type="radio" name="seguranca" id="iSeguroNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>13. Como você avalia o estado atual do meio ambiente na sua região?</strong></p>
                <label for="iPerfeito"><input type="radio" name="meio_ambiente" id="iPerfeito" class="inputUser" value="Perfeito"> Está em perfeitas condições</label>
                <label for="iBom"><input type="radio" name="meio_ambiente" id="iBom" class="inputUser" value="Bom"> Está em um estado bom</label>
                <label for="iRazoavel"><input type="radio" name="meio_ambiente" id="iRazoavel" class="inputUser" value="Razoavel"> Está em um estado razoável</label>
                <label for="iMelhorias"><input type="radio" name="meio_ambiente" id="iMelhorias" class="inputUser" value="Melhorias"> Precisa de melhorias</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>14. Você tem acesso a serviços de saúde adequados?</strong></p>
                <label for="iSaudeAdequadaSim"><input type="radio" name="saudeAdequada" id="iSaudeAdequadaSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iSaudeAdequadaNao"><input type="radio" name="saudeAdequada" id="iSaudeAdequadaNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>
        </div>
    </div>

            <!--FORMULARIO PARTE 3-->
    <div id="form3">
        <fieldset class="inputBox"><p style="text-align: center;"><strong>INFRAESTRUTURA E QUALIDADE DE VIDA</strong></p></fieldset>
        <div class="infra_qualidade">
            <fieldset class="inputBox">
                <p aria-required="true"><strong>15. Você está satisfeito com a infraestrutura disponível na sua região (estradas, iluminação pública, etc.)?</strong></p>
                <label for="iOpiniaoSatisfeito"><input type="radio" name="opiniaoInfra" id="iOpiniaoSatisfeito" class="inputUser" value="Satisfeito"> Estou satisfeito</label>
                <label for="iOpiniaoMelhorias"><input type="radio" name="opiniaoInfra" id="iOpiniaoMelhorias" class="inputUser" value="Melhorias"> Precisa de melhorias</label>
                <label for="iOpiniaoPessimo"><input type="radio" name="opiniaoInfra" id="iOpiniaoPessimo" class="inputUser" value="Pessima"> Está péssima</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>16. Como você avalia o acesso aos espaços públicos, como parques e áreas de lazer, na sua região?</strong></p>
                <label for="iBons"><input type="radio" name="acesso_publico" id="iBons" class="inputUser" value="Bons"> Bons</label>
                <label for="iMedianos"><input type="radio" name="acesso_publico" id="iMedianos" class="inputIser" value="Medianos"> Medianos</label>
                <label for="iRuins"><input type="radio" name="acesso_publico" id="iRuins" class="inputUser" value="Ruins"> Ruins</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>17. Você acredita que há oportunidades de emprego suficientes na sua região?</strong></p>
                <label for="iOportunidadeSim"><input type="radio" name="oportunidade" id="iOportunidadeSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iOportunidadeNao"><input type="radio" name="oportunidade" id="iOportunidadeNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>18. Você tem acesso a moradia adequada?</strong></p>
                <label for="iMoradiaSim"><input type="radio" name="moradiaAdequada" id="iMoradiaSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iMoradiaNao"><input type="radio" name="moradiaAdequada" id="iMoradiaNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputUser">
                <p aria-required="true"><strong>19. Como você avalia o sistema de transporte público na sua região?</strong></p>
                <label for="iTransporteExcelente"><input type="radio" name="opiniaoTransporte" id="iTransporteExcelente" class="inputUser" value="Excelente"> Excelente</label>
                <label for="iTransporteBom"><input type="radio" name="opiniaoTransporte" id="iTransporteBom" class="inputUser" value="Bom"> Bom</label>
                <label for="iTransporteRazoavel"><input type="radio" name="opiniaoTransporte" id="iTransporteRazoavel" class="inputUser" value="Razoavel"> Razoável</label>
                <label for="iTransportePessimo"><input type="radio" name="opiniaoTransporte" id="iTransportePessimo" class="inputUser" value="Pssimo"> Péssimo</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>20. Como você classificaria a qualidade da educação oferecida na sua região?</strong></p>
                <label for="iEducacaoExcelente"><input type="radio" name="opiniaoEducacao" id="iEducacaoExcelente" class="inputUser" value="Excelente"> Excelente</label>
                <label for="iEducacaoBoa"><input type="radio" name="opiniaoEducacao" id="iEducacaoBoa" class="inputUser" value="Boa"> Boa</label>
                <label for="iEducacaoRazoavel"><input type="radio" name="opiniaoEducacao" id="iEducacaoRazoavel" class="inputUser" value="Razoavel"> Razoável</label>
                <label for="iEducacaoPessimo"><input type="radio" name="opiniaoEducacao" id="iEducacaoPessimo" class="inputUser" value="Péssimo"> Péssimo</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>21. Você tem acesso a alimentos saudáveis e nutritivos a preços acessíveis?</strong></p>
                <label for="iAlimentosSim"><input type="radio" name="alimentosAcessiveis" id="iAlimentosSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iAlimentosNao"><input type="radio" name="alimentosAcessiveis" id="iAlimentosNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>22. Você já teve dificuldades para acessar serviços de saúde na sua região?</strong></p>
                <label for="iDificuldadeSim"><input type="radio" name="dificuldadeSaude" id="iDificuldadeSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iDificuldadeNao"><input type="radio" name="dificuldadeSaude" id="iDificuldadeNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>23. Como você avalia a atuação das autoridades locais (prefeitura, câmara dos vereadores, etc.) na solução dos problemas na sua região?</strong></p>
                <label for="iAtuacaoExcelente"><input type="radio" name="atuacaoAutoridade" id="iAtuacaoExcelente" class="inputUser" value="Excelente"> Excelente</label>
                <label for="iAtuacaoBoa"><input type="radio" name="atuacaoAutoridade" id="iAtuacaoBoa" class="inputUser" value="Boa"> Boa</label>
                <label for="iAtuacaoRazoavel"><input type="radio" name="atuacaoAutoridade" id="iAtuacaoRazoavel" class="inputUser" value="Razoavel"> Razoável</label>
                <label for="iAtuacaoPessima"><input type="radio" name="atuacaoAutoridade" id="iAtuacaoPessima" class="inputUser" value="Péssima"> Péssima</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>24. Você tem acesso a espaços culturais e eventos na sua região?</strong></p>
                <label for="iCulturaSim"><input type="radio" name="acessoCultura" id="iCulturaSim" class="inputUser" value="Sim"> Sim</label>
                <label for="iCulturaNao"><input type="radio" name="acessoCultura" id="iCulturaNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>25. Você acredita que há problemas de poluição ou degradação ambiental na sua região?</strong></p>
            <label for="iPoluicaoSim"><input type="radio" name="poluicaoDegradacao" id="iPoluicaoSim" class="inputUser" value="Sim"> Sim</label>
            <label for="iPoluicaoNao"><input type="radio" name="poluicaoDegradacao" id="iPoluicaoNao" class="inputUser" value="Nao"> Não</label>
            </fieldset>

            <fieldset class="inputBox">
                <p aria-required="true"><strong>26. Como você avalia o suporte disponível para grupos vulneráveis, como idosos, crianças e pessoas em situação de rua, na sua região?</strong></p>
                <label for="iSuporteExcelente"><input type="radio" name="opiniaoSuporte" id="iSuporteExcelente" class="inputUser" value="Excelente"> Excelente</label>
                <label for="iSuporteBom"><input type="radio" name="opiniaoSuporte" id="iSuporteBom" class="inputUser" value="Bom"> Bom</label>
                <label for="iSuporteRazoavel"><input type="radio" name="opiniaoSuporte" id="iSuporteRazoavel" class="inputUser" value="Razoavel"> Razoável</label>
                <label for="iSuportePessimo"><input type="radio" name="opiniaoSuporte" id="iSuportePessimo" class="inputUser" value="Pessimo"> Péssimo</label>
            </fieldset>

                <input type="submit" name="submit" value="ENVIAR" id="botao" class="button-form">

        </div>
    </div>
        
       
</form>

</script>
<script src="script.js"></script>
</body>
</html>