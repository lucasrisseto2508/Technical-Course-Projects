function abrirForm(){
				var maskHeight = $(document).height();
				var maskWidth = $(window).width();
			
				$('#mask').css({'width':maskWidth,'height':maskHeight});
		 
				$('#mask').fadeIn(1000);	
				$('#mask').fadeTo("slow",0.8);

				$('#dialog').fadeIn(2000); 
			}

			$(document).ready(function() {
				var operacao="";

				$('.inserir').click(function (e){
					operacao = "inserir";

					$('#txtCodigo').val("");
					$('#txtNome').val("");
					$('#txtPreco').val("");
					$('#txtQuantidade').val("");
					$('#txtDescricao').val("");
					$('#txtAltura').val("");
					$('#txtLargura').val("");
					$('#txtProfundidade').val("");
					$('#txtPeso').val("");
					$('#txtFabricante').val("");
					$('#txtCodBarras').val("");
					$('#imgFoto').attr('src', 'data:image/jpeg;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=');

					abrirForm();
				});
								
				$('#mask').click(function () {
					$(this).hide();
					$('#dialog').hide();
				});


				$('#btnEnviar').click(function(){
					$('#txtFoto').val($('#imgFoto').attr('src'));
					var pagina = "";
					if (operacao == "inserir"){
						pagina = "ins.php";
					}else{
						pagina = "alt.php";	
					}

					$.post(pagina, $('#formCadastro').serialize() , function(data) {
						alert(data);
						window.location.reload();
					});
				});

				$('.btnExcluir').click(function(){
					$.post("exc.php", "codigo=" + $(this).attr('codExcluir') , function(data){
						alert(data);
						window.location.reload();
					});
				});

				$('.btnAlterar').click(function(){
					operacao = "alterar";

					$.post("lerDados.php", "codigo=" + $(this).attr('codAlterar') , function(data){
						alert(data);
						var retorno = data.split("|");
						$('#txtCodigo').val(retorno[0]);
						$('#txtNome').val(retorno[1]);
						$('#txtPreco').val(retorno[2]);
						$('#txtQuantidade').val(retorno[3]);
						$('#txtDescricao').val(retorno[4]);
						$('#txtAltura').val(retorno[5]);
						$('#txtLargura').val(retorno[6]);
						$('#txtProfundidade').val(retorno[7]);
						$('#txtPeso').val(retorno[8]);
						$('#txtFabricante').val(retorno[9]);
						$('#txtCodBarras').val(retorno[10]);
						$('#imgFoto').attr('src', 'data:image/png;base64,'+retorno[11]);

						abrirForm();
					});
				});

				$("#fileFoto").change(function () {
		            if (this.files && this.files[0]) {
		                var reader = new FileReader();
		                reader.onload = function (e) {
		                    $('#imgFoto').attr('src', e.target.result);
		                }
		                reader.readAsDataURL(this.files[0]);
		            }
		        });

		        $("#btnLogin").click(function(){
		        	$.post("login.php", $('#formLogin').serialize() , function(data) {
						alert(data);
						window.location.reload();
					});
		        });
		         $("#logoff").click(function(){
		        	$.post("logoff.php", "" , function(data) {
						window.location.reload();
					});
		        });
			});