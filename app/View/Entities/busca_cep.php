<html>
	<head>
		<title>Bem vindo ao website dos Correios</title>		
		<base href="http://www.correios.com.br"> 
		<link rel="stylesheet" href="http://www.correios.com.br/correios.css" type="text/css">
    <script Language="JavaScript">
    function CriticaCampos()
    {
    if (document.Geral.Localidade.value == "")
    {
    alert("Informe o nome completo da Cidade/Munic�pio/Distrito/Povoado. Para o DF poder� ser informado o nome da Regi�o Administrativa (Lago Sul, Lago Norte, Cruzeiro, Taguatinga, etc) !!");
    document.Geral.Localidade.focus();
    return (false);
    } 
    else
    { 
    var Branco = " ";
    var Posic, Carac;
    var Temp = document.Geral.Localidade.value.length;    
    var Cont = 0;
    for (var i=0; i < Temp; i++)   
    {  
    Carac =  document.Geral.Localidade.value.charAt (i);
    Posic  = Branco.indexOf (Carac);   
    if (Posic == -1)   
    Cont++;      
    }   
    if (Cont <= 0)
    {
    alert("Informe o nome completo da Cidade/Munic�pio/Distrito/Povoado. Para o DF poder� ser informado o nome da Regi�o Administrativa (Lago Sul, Lago Norte, Cruzeiro, Taguatinga, etc) !!");
    document.Geral.Localidade.focus();
    return (false);
    }   
    }
    if (document.Geral.Logradouro.value == "")
    {
    alert("Informe o nome do logradouro");
    document.Geral.Logradouro.focus();
    return (false);
    }  
    else
    { 
    var Branco = " ";
    var Posic, Carac;
    var Temp = document.Geral.Logradouro.value.length;    
    var Cont = 0;
    for (var i=0; i < Temp; i++)   
    {  
    Carac =  document.Geral.Logradouro.value.charAt (i);
    Posic  = Branco.indexOf (Carac);   
    if (Posic == -1)   
    Cont++;      
    }   
    if (Cont <= 0)
    {
    alert("Informe o nome do logradouro");
    document.Geral.Logradouro.focus();
    return (false);
    }  
    }
    } 
    function AjudaLogradouro()
    {   
       DocRemote = window.open ('http://www.buscacep.correios.com.br/servicos/dnec/ajuda/ajudaLogradouro.jsp','Logradouro','scrollbars,resizable,width=300,height=400');
    }   
    </script>
	</head>
	<body>		
				<!-- inicio borda -->	
		<table width="320" border="0" cellspacing="0" cellpadding="0">	
			<tr>				
				<td bgcolor="#002a78">					
					<table width="100%" border="0" cellspacing="1" cellpadding="5">								
						<tr>
							<td bgcolor="#FFFFFF">
								<img src="http://www.correios.com.br/images/cep/busca_horizontal.gif" alt="-" border="0">			 								
								<hr>
								<h1>Consulta de CEP - Localidade / Logradouro</h1>
								<table align="center" width="300" border="0" cellspacing="0" cellpadding="0">	
									<tr>				
										<td bgcolor="#002a78">									
											<table width="100%" border="0" cellspacing="1" cellpadding="5">								
												<tr>
													<td bgcolor="#d8e6ed">
													  <table border="0" cellspacing="1" cellpadding="5">
  														<form name="Geral" method="post" onSubmit="return CriticaCampos();" action="">
																<tr> 
																	<td bgcolor="#d8e6ed"><b>UF:</b></td> 
																	<td bgcolor="#d8e6ed"><b>  
																	<select name=UF>
																	<option value="AC">AC</option>
																	<option value="AL">AL</option>
																	<option value="AM">AM</option>
																	<option value="AP">AP</option>
																	<option value="BA">BA</option>
																	<option value="CE">CE</option>
																	<option value="DF">DF</option>
																	<option value="ES">ES</option>
																	<option value="GO">GO</option>
																	<option value="MA">MA</option>
																	<option value="MG">MG</option>
																	<option value="MS">MS</option>
																	<option value="MT">MT</option>
																	<option value="PA">PA</option>
																	<option value="PB">PB</option>
																	<option value="PE">PE</option>
																	<option value="PI">PI</option>
																	<option value="PR">PR</option>
																	<option value="RJ">RJ</option>
																	<option value="RN">RN</option>
																	<option value="RO">RO</option>
																	<option value="RR">RR</option>
																	<option value="RS">RS</option>
																	<option value="SC">SC</option>
																	<option value="SE">SE</option>
																	<option value="SP">SP</option>
																	<option value="TO">TO</option>
																	</select>
																	</b>
                                  									</td>														
																</tr> 	
																<tr>
																	<td bgcolor="#d8e6ed"><b>Localidade:</b></td> 
																	<td bgcolor="#d8e6ed"><input align=left maxLength=40 name=Localidade size=32 ></td>
																</tr>														
																<tr> 
																	<td bgcolor="#d8e6ed"><b>Tipo:</b><br>
																	<td bgcolor="#d8e6ed"><b>
																	<select name=Tipo >
																	<option value=""></option>
																	<option value="Avenida">Avenida</option>
																	<option value="Bloco">Bloco</option>
																	<option value="Pra�a">Pra�a</option>
																	<option value="Quadra">Quadra</option>
																	<option value="Rua">Rua</option>
																	<option value="Outros">Travessa</option>
																	</select>
																	</td>
																</tr>
																<tr>	
																	<td><b>Logradouro:</b></td>
																	<td><input align=left maxLength=60 name=Logradouro size=32></td>
																</tr>
																<tr>
																	<td><b>N�/Lote/Apto/Casa:</b></td>
																	<td><input align=left maxlength=5 name=Numero size=5></td>
																</tr>
																<tr>
																	<td colspan="2">
																	<a href="http://www.correios.com.br/servicos/cep/dne.cfm"><img src="http://www.correios.com.br/images/cep/dne_azul_p.gif" alt="DNE"  align="right" border="0"></a>
      																<input type="Submit" value="Ok" style="background-color: #FFCA00;">
      																<input type="Button" value=" ? " style="background-color: #FFCA00;" onclick="AjudaLogradouro()">
			      													<a onclick="AjudaLogradouro()"><b> Ajuda</b></a>
                                  									</td>
																</tr>
																<input type="Hidden" name="cfm" value="1">
                      											<input type="hidden" name="Metodo" value="listaLogradouro">
                      											<input type="hidden" name="TipoConsulta" value="logradouro">
                      											<input type="hidden" name="StartRow" value="1">
                      											<input type="hidden" name="EndRow" value="10">
  															</form>			
														</table>
													</td>
												</tr>
											</table>									
										</td>
									</tr>
								</table>														
							</td>				
						</tr>			
					</table>			
				</td>				
			</tr>			
		</table>								
	</body>
</html>

