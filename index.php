<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIFA</title>
</head>
<body>
    <style>
td{
	border:1px solid black;
	padding: 12px 18px;
	background-color: white;
	user-select: none;
	position: relative;
	top:40%;
	transform: translate(-70%,-10%);
	
}

 .formato{
    background-color:rgb(0, 99, 0);
	border:solid  rgb(0, 255, 0) 5px;
	border-radius: 20px;
    padding: 1vh 10vh;
    width:50vh;
    position:absolute;
    top: 60%;
    left:50%;
    transform: translate(-50%,-50%);
}
.tel,.num,.button,.txt,.txt2{
    margin-top: 5px;
    margin-bottom: 20px;
    

}
.selecionado{
	background-color: yellow;
}
body{background-color: black;}

@media only screen and (max-width: 780px) {
  /* Change the layout to a single column for mobile devices */
  .container {
    flex-direction: column;
  }
  
  /* Increase the font size for better readability */
  body {
    font-size: 18px;
  }
  
  /* Add some extra padding to improve touchscreen usability */
  button {
    padding: 10px 20px;

  }
  .formato{
  transform: translate(-40%,-50%);
  padding: 1vh 8vh;
  }
}

</style>
<form id="rifaForm" method="post" action="envia.php" enctype="multipart/form-data">
 <div class="formato" >
	<hr><hr>
    <em style="font-size: 40px;color:white">Rifa Simples </em><br><em style="font-size: 40px;margin-left: 30%;color:white"> 10 Para R$900,00</em>
	<hr><hr>
	<em style="font-size: 20px;color:white">Nome</em>
	<br>
	<input style="padding:3px 7px ;outline: none;width: 200px;" id="nameid" type="text" name="nome" placeholder="Digite seu nome" minlength="5" pattern="[A-Za-zÀ-ú ]+" title="Por favor, insira apenas letras e espaços (sem números ou caracteres especiais)" required>
	<br>
<em style="font-size: 20px;color:white" class="txt" >N°de telefone</em>
<br>
<input style="padding:3px 7px ;outline: none;width: 200px;" id="telid" type="text" class="tel" name="telefone" placeholder="(99)9 9999-9999" oninput="formatarTelefone(this)" title="No minimo 11 numeros para telefone" required>
<br>
<table>
	<tr>
		<td onclick="marcarNumero(this,1,0);selecionar(this)" id="num0" >00</td>
		<td onclick="marcarNumero(this,1,1);selecionar(this)" id="num1" >01</td>
		<td onclick="marcarNumero(this,1,2);selecionar(this)" id="num2" >02</td>
		<td onclick="marcarNumero(this,1,3);selecionar(this)" id="num3" >03</td>
        <td onclick="marcarNumero(this,1,4);selecionar(this)" id="num4" >04</td>
		<td onclick="marcarNumero(this,1,5);selecionar(this)" id="num5" >05</td>
		<td onclick="marcarNumero(this,1,6);selecionar(this)" id="num6" >06</td>
		<td onclick="marcarNumero(this,1,7);selecionar(this)" id="num7" >07</td>
		<td onclick="marcarNumero(this,1,8);selecionar(this)" id="num8" >08</td>
		<td onclick="marcarNumero(this,1,9);selecionar(this)" id="num9" >09</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,10);selecionar(this)" id="num10" >10</td>
		<td onclick="marcarNumero(this,1,11);selecionar(this)" id="num11" >11</td>
		<td onclick="marcarNumero(this,1,12);selecionar(this)" id="num12" >12</td>
		<td onclick="marcarNumero(this,1,13);selecionar(this)" id="num13" >13</td>
        <td onclick="marcarNumero(this,1,14);selecionar(this)" id="num14" >14</td>
		<td onclick="marcarNumero(this,1,15);selecionar(this)" id="num15" >15</td>
		<td onclick="marcarNumero(this,1,16);selecionar(this)" id="num16" >16</td>
		<td onclick="marcarNumero(this,1,17);selecionar(this)" id="num17" >17</td>
		<td onclick="marcarNumero(this,1,18);selecionar(this)" id="num18" >18</td>
		<td onclick="marcarNumero(this,1,19);selecionar(this)" id="num19" >19</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,20);selecionar(this)" id="num20" >20</td>
		<td onclick="marcarNumero(this,1,21);selecionar(this)" id="num21" >21</td>
		<td onclick="marcarNumero(this,1,22);selecionar(this)" id="num22" >22</td>
		<td onclick="marcarNumero(this,1,23);selecionar(this)" id="num23" >23</td>
        <td onclick="marcarNumero(this,1,24);selecionar(this)" id="num24" >24</td>
		<td onclick="marcarNumero(this,1,25);selecionar(this)" id="num25" >25</td>
		<td onclick="marcarNumero(this,1,26);selecionar(this)" id="num26" >26</td>
		<td onclick="marcarNumero(this,1,27);selecionar(this)" id="num27" >27</td>
		<td onclick="marcarNumero(this,1,28);selecionar(this)" id="num28" >28</td>
		<td onclick="marcarNumero(this,1,29);selecionar(this)" id="num29" >29</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,30);selecionar(this)" id="num30" >30</td>
		<td onclick="marcarNumero(this,1,31);selecionar(this)" id="num31" >31</td>
		<td onclick="marcarNumero(this,1,32);selecionar(this)" id="num32" >32</td>
		<td onclick="marcarNumero(this,1,33);selecionar(this)" id="num33" >33</td>
        <td onclick="marcarNumero(this,1,34);selecionar(this)" id="num34" >34</td>
		<td onclick="marcarNumero(this,1,35);selecionar(this)" id="num35" >35</td>
		<td onclick="marcarNumero(this,1,36);selecionar(this)" id="num37" >36</td>
		<td onclick="marcarNumero(this,1,37);selecionar(this)" id="num37" >37</td>
		<td onclick="marcarNumero(this,1,38);selecionar(this)" id="num38" >38</td>
		<td onclick="marcarNumero(this,1,39);selecionar(this)" id="num39" >39</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,40);selecionar(this)" id="num40" >40</td>
		<td onclick="marcarNumero(this,1,41);selecionar(this)" id="num41" >41</td>
		<td onclick="marcarNumero(this,1,42);selecionar(this)" id="num42" >42</td>
		<td onclick="marcarNumero(this,1,43);selecionar(this)" id="num43" >43</td>
        <td onclick="marcarNumero(this,1,44);selecionar(this)" id="num44" >44</td>
		<td onclick="marcarNumero(this,1,45);selecionar(this)" id="num45" >45</td>
		<td onclick="marcarNumero(this,1,46);selecionar(this)" id="num46" >46</td>
		<td onclick="marcarNumero(this,1,47);selecionar(this)" id="num47" >47</td>
		<td onclick="marcarNumero(this,1,48);selecionar(this)" id="num48" >48</td>
		<td onclick="marcarNumero(this,1,49);selecionar(this)" id="num49" >49</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,50);selecionar(this)" id="num50" >50</td>
		<td onclick="marcarNumero(this,1,51);selecionar(this)" id="num51" >51</td>
		<td onclick="marcarNumero(this,1,52);selecionar(this)" id="num52" >52</td>
		<td onclick="marcarNumero(this,1,53);selecionar(this)" id="num53" >53</td>
        <td onclick="marcarNumero(this,1,54);selecionar(this)" id="num54" >54</td>
		<td onclick="marcarNumero(this,1,55);selecionar(this)" id="num55" >55</td>
		<td onclick="marcarNumero(this,1,56);selecionar(this)" id="num56" >56</td>
		<td onclick="marcarNumero(this,1,57);selecionar(this)" id="num57" >57</td>
		<td onclick="marcarNumero(this,1,58);selecionar(this)" id="num58" >58</td>
		<td onclick="marcarNumero(this,1,59);selecionar(this)" id="num59" >59</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,60);selecionar(this)" id="num60" >60</td>
		<td onclick="marcarNumero(this,1,61);selecionar(this)" id="num61" >61</td>
		<td onclick="marcarNumero(this,1,62);selecionar(this)" id="num62" >62</td>
		<td onclick="marcarNumero(this,1,63);selecionar(this)" id="num63" >63</td>
        <td onclick="marcarNumero(this,1,64);selecionar(this)" id="num64" >64</td>
		<td onclick="marcarNumero(this,1,65);selecionar(this)" id="num65" >65</td>
		<td onclick="marcarNumero(this,1,66);selecionar(this)" id="num66" >66</td>
		<td onclick="marcarNumero(this,1,67);selecionar(this)" id="num67" >67</td>
		<td onclick="marcarNumero(this,1,68);selecionar(this)" id="num68" >68</td>
		<td onclick="marcarNumero(this,1,69);selecionar(this)" id="num69" >69</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,70);selecionar(this)" id="num70" >70</td>
		<td onclick="marcarNumero(this,1,71);selecionar(this)" id="num71" >71</td>
		<td onclick="marcarNumero(this,1,72);selecionar(this)" id="num72" >72</td>
		<td onclick="marcarNumero(this,1,73);selecionar(this)" id="num73" >73</td>
        <td onclick="marcarNumero(this,1,74);selecionar(this)" id="num74" >74</td>
		<td onclick="marcarNumero(this,1,75);selecionar(this)" id="num75" >75</td>
		<td onclick="marcarNumero(this,1,76);selecionar(this)" id="num76" >76</td>
		<td onclick="marcarNumero(this,1,77);selecionar(this)" id="num77" >77</td>
		<td onclick="marcarNumero(this,1,78);selecionar(this)" id="num78" >78</td>
		<td onclick="marcarNumero(this,1,79);selecionar(this)" id="num79" >79</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,80);selecionar(this)" id="num80" >80</td>
		<td onclick="marcarNumero(this,1,81);selecionar(this)" id="num81" >81</td>
		<td onclick="marcarNumero(this,1,82);selecionar(this)" id="num82" >82</td>
		<td onclick="marcarNumero(this,1,83);selecionar(this)" id="num83" >83</td>
        <td onclick="marcarNumero(this,1,84);selecionar(this)" id="num84" >84</td>
		<td onclick="marcarNumero(this,1,85);selecionar(this)" id="num85" >85</td>
		<td onclick="marcarNumero(this,1,86);selecionar(this)" id="num86" >86</td>
		<td onclick="marcarNumero(this,1,87);selecionar(this)" id="num87" >87</td>
		<td onclick="marcarNumero(this,1,88);selecionar(this)" id="num88" >88</td>
		<td onclick="marcarNumero(this,1,89);selecionar(this)" id="num89" >89</td>
	</tr>
	<tr>
		<td onclick="marcarNumero(this,1,90);selecionar(this)" id="num90" >90</td>
		<td onclick="marcarNumero(this,1,91);selecionar(this)" id="num91" >91</td>
		<td onclick="marcarNumero(this,1,92);selecionar(this)" id="num92" >92</td>
		<td onclick="marcarNumero(this,1,93);selecionar(this)" id="num93" >93</td>
        <td onclick="marcarNumero(this,1,94);selecionar(this)" id="num94" >94</td>
		<td onclick="marcarNumero(this,1,95);selecionar(this)" id="num95" >95</td>
		<td onclick="marcarNumero(this,1,96);selecionar(this)" id="num96" >96</td>
		<td onclick="marcarNumero(this,1,97);selecionar(this)" id="num97" >97</td>
		<td onclick="marcarNumero(this,1,98);selecionar(this)" id="num98" >98</td>
		<td onclick="marcarNumero(this,1,99);selecionar(this)" id="num99" >99</td>

	</tr>

</table>
<label style="font-size: 30px;color: white;" for="numerosSelecionados" >Numeros Selecionados</label>

<input name="numeros" style="padding: 8px 1px;width: 300px;outline: none;" type="text" id="numerosSelecionados" placeholder="CLIQUE EM UM NUMERO ACIMA" minlength="1" pattern="\b\d{2}(,\d{2})*\b" title="Por favor, insira números de dois dígitos separados por vírgulas" required>
<br><br>
<p style="color: white;font-size: 20px;">Números Marcados: <span id="quantidadeMarcados">0</span></p>
   <p style="font-size: 20px;color: white;" >Valor total R$<span id="valortotal"></span></p>
<br>
<input type="button" value="Chave Pix" onclick="copiarTexto('75981256512')" required></input><br><br>
<em style="color: white;font-size: 20px;" >Adicione imagem do comprovante de pagamento
</em>
<br>&nbsp;<em style="color:white">|</em><br><em style="color:white">\/</em><br>
	<input style="outline:none ;" name="imagem" type="file" id="imagem" accept="image/*" required>
	<script>
		const imagemInput = document.getElementById('imagem');
		const adicionarBotão = document.getElementById('adicionar-botão');
		adicionarBotão.addEventListener('click', () => {
			const file = imagemInput.files[0];
			// Faça algo com o arquivo uploadado, como enviá-lo para o servidor
		});
	</script>
	<script defer>
		var numerosMarcados = 0;
        var valortotal = 0;

function marcarNumero(elemento,quantidade,numero) {
	var numeroSelecionado = null;
      const campo = document.getElementById("numerosSelecionados");
     

	   if (elemento.style.backgroundColor === "yellow"){
		elemento.style.backgroundColor = "";
	    numerosMarcados--;
		valortotal -= 10;
	  }
	  else{
		elemento.style.backgroundColor = "yellow";
		numerosMarcados++;
		valortotal = numerosMarcados * 10;
	  }

	document.getElementById("quantidadeMarcados").innerText = numerosMarcados;
    document.getElementById("valortotal").innerText = valortotal;
	atualizarNumerosSelecionados();
}
function atualizarNumerosSelecionados() {
            var numeros = Array.from(document.querySelectorAll('td')).filter(td => td.style.backgroundColor === 'yellow').map(td => td.innerText);
            document.getElementById("numerosSelecionados").value = numeros.join(",");
        }

	</script>
	<script>
    function formatarTelefone(input) {
    // Remove caracteres indesejados do valor inserido
    var cleaned = ('' + input.value).replace(/\D/g, '');
    
    // Verifica o tamanho do número de telefone para aplicar a formatação correta
    var formatted = '';
    if (cleaned.length < 11) {
        formatted = cleaned.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
    } else {
        formatted = cleaned.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
    }
    
    // Atualiza o valor no campo de entrada
    input.value = formatted;
}
	</script>
	<script>
		function copiarTexto(texto) {
  // Cria um elemento textarea temporário
  var inputTemp = document.createElement("textarea");
  
  // Define o valor do texto a ser copiado
  inputTemp.value = texto;
  
  // Adiciona o elemento ao corpo do documento
  document.body.appendChild(inputTemp);
  
  // Seleciona o conteúdo do textarea
  inputTemp.select();
  
  // Copia o texto selecionado para a área de transferência
  document.execCommand("copy");
  
  // Remove o elemento textarea temporário
  document.body.removeChild(inputTemp);
  
  // Alerta que o texto foi copiado
  alert("Texto copiado: " + texto);
}
	</script>

<button id="bot" type="submit" class="button" onclick="enviarNumeros()" >ENVIAR</button>

<script>
    var numerosSelecionados = [];

    function selecionar(botao) {
        if (botao.classList.contains('amarelo')) {
            numerosSelecionados = numerosSelecionados.filter(numero => numero !== botao.innerText);
        } else {
            numerosSelecionados.push(botao.innerText);
        }
    }

    function enviarNumeros() {

       fetch('enviar_numeros.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ numeros: numerosSelecionados })
        })
        .then(response => {
            if (response.ok) {
                console.log('Números enviados com sucesso!');
            } else {
                console.error('Erro ao enviar os números.');
            }
        })
        .catch(error => {
            console.error('Erro ao enviar os números:', error);
        });
    }
</script>

</div>
</form>
<?php include 'consultar_cor.php'; ?>
</body>
</html>