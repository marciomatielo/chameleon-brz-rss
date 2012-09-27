<!DOCTYPE html>
<html>
	<head>
	
		<title>Settings</title>
				
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		
		<!-- General CSS styles for Chameleon Widgets -->
		<link rel="stylesheet" href="http://chameleonlauncher.com/widgets/common/css/chameleon.css" />
		
		<!-- General CSS styles for ChameleonSettings Windows -->
		<link rel="stylesheet" href="http://chameleonlauncher.com/widgets/common/css/chameleon-settings.css" />
			
			
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
		
		<!-- Chameleon Javascript access -->
		<script src="http://chameleonlauncher.com/widgets/common/js/chameleon.js" type="text/javascript"></script>
		
		<!-- jQuery extensions for Chameleon -->
		<script src="http://chameleonlauncher.com/widgets/common/js/chameleon.jquery.js" type="text/javascript"></script>
		
		
		<!-- 
			Your code goes in here	
		 -->
		<script src="js/settings.main.js" type="text/javascript"></script>

		<script>
			function salvaURL(url){
				var rss=chameleon.getData();
				rss.url=url;
				chameleon.saveData(rss);
				window.open('settings.html','_this');
			}
        </script>	
	
	</head>

	<body>
		<div id="chameleon-widget-settings">
        	<div id="settings-conteudo">
				<script language="javascript">
                    document.write(chameleon.getData(rss));
                </script>
                <input name="inputURL" type="text" value="Digite a URL do RSS Feed" onClick="document.getElementById('inputURL').setAttribute('value','');">
                <input name="botaoSalvar" type="button" onClick="salvaURL(document.write(document.getElementById('inputURL').value);window.close();" value="SALVAR">
			</div>
		</div>
			
			<a id="close-button" href="#" class="done">Done</a>
			
		</div>
	</body>
</html>