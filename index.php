<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

        <!-- General CSS styles for Chameleon Widgets -->
        <link rel="stylesheet" href="http://chameleonlauncher.com/widgets/common/css/chameleon.css" />
        <!-- Your own CSS Styles -->
        <link rel="stylesheet" href="./css/widget.css" />
        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <!-- Chameleon Javascript access -->
        <script src="http://chameleonlauncher.com/widgets/common/js/chameleon.js" type="text/javascript"></script>
        <!-- jQuery extensions for Chameleon -->
        <script src="http://chameleonlauncher.com/widgets/common/js/chameleon.jquery.js" type="text/javascript"></script>
        <script src="js/index.main.js" type="text/javascript"></script>
        <title>Teste</title>
    </head>
    
    <body>
        <div id="chameleon-widget">
        	<div id="conteudo">
            <?php
				$counter = 1;
                foreach ( simplexml_load_file ("http://g1.globo.com/dynamo/rss2.xml")->channel->item as $rssg1 )
                    echo sprintf("
						<p id='titulo'><a href='%s'>%s<a/></p>
						<p id='conteudo'>%s</p>
						<script language='javascript'>
							var html".$counter."=\"<a href='%s'>%s</a>\";
						</script>"
						,$rssg1->link, $rssg1->title, $rssg1->description, $rssg1->link, $rssg1->title, $counter++
					);
            ?>
			</div>
        </div>
    </body>
</html>