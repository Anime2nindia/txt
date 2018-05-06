<?php
require_once('Class-Photo.php');
$id = $_GET['id'];
$megafile = new GooglePhoto($id);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8"/>
<title>Google Photos</title>
<link rel="shortcut icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA9CAYAAAAd1W/BAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAAKGSURBVHja7NpLaxNRFAfwfIGqSZPMTOZ902SaNE3GryO4E9y5UsSFuNRNRcGN+KBUEUVFVKQqWLWCRBeaInRh8d1KoVE/wt/VyECdYW6Ted2exX89c37knjvn3hQAFHZzCgRAAARAAARAAARAAARAAAQwch41avjlsn9Z79q4bFUhPMBFs4o/++uBGboMVy0JQgLcYHJo8f5s9GyckIsQCiBq8f68aekQAuDzrIWdAHh5MFVDrgFGKd7fH87pFexaAC9fZi0IB/Cja3ND9BPuD7EAbLkMzx0NR6r7cJPJWOvw94rrtozcAqx2zG0v/7SpYidNM5cAK20j8MUXGzX87PEtjU8x9od4AGaM0Bc+Jhex5KjcEI8bKoQA8HJUKuLVtJbqskgVwMtpdRLLDh/ElssgDICXOb2MQdtI9LM6UwBeLhgVboj7UwqEAfByyaziG8fH1Ps2/3MzDQCgcKA0gXlLwnpEiNt1vl9C5gH8uVtXxr5L5ArAy5KjYuiyQICzehlCAwAofJgxx3LOkFuAfksPBHjSVMUGOFUr4XtIU1ywJTEBDpX34F5dwe+Q9S9kEzw4OYE7dSXS8LTWscQCuGJJ+Nq1YhuUMguwYEtY7ZixT4mZAzivV7DCOQc8HOF4PTMAc3oZb0O2tnGs90wCnFRKeD2tp3YokhrAcbmIfkvHZo9xFX7NlrJ/IjQIGUsPV/Zi2dGwwXke+MLRkJtD0XcBAM+aKtd8P86jr8QAhi7DGW37NPaRc0vjneoycz1+i/3/Roen8MVGcrfGid3BRSl80DYSKzxTAJs9lnjhiQMEbXfzKf93KNGH+W+JX8a0rdH/BAmAAAiAAAiAAAiAAAggWv4OAI9sgX7ix1myAAAAAElFTkSuQmCC"/>
<meta name="robots" content="noindex" />
<META NAME="GOOGLEBOT" CONTENT="NOINDEX" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="https://content.jwplatform.com/libraries/k455gFjl.js"></script>
<script type="text/javascript">jwplayer.key = "/EfUeVKETfq+V/Gmq7v4QqgjcJHvTPZ2TrQfbv==";</script>
<style type="text/css">*{margin:0;padding:0}#container{position:absolute;width:100%!important;height:100%!important}</style>
</head>
<body>
<div id="container" class="container"></div>
<script type="text/javascript">
var playerInstance = jwplayer("container");
playerInstance.setup({
width: "100%",
height: "100%",
controls: true,
displaytitle: false,
flashplayer: "http://p.jwpcdn.com/player/v/7.1.5/jwplayer.flash.swf",
aspectratio: "16:9",
fullscreen: "true",
primary: 'html5',
provider: 'http',
autostart: false,
image:'<?php echo $megafile->thumb(); ?>',
sources: [<?php echo $megafile->get(); ?>],

logo : {file: "",
		link: "",
		hide: true,
		},
sharing: {
		code: encodeURI("<iframe width=\"640\" height=\"380\" src=\"http://.com/photos.php?id=<?php echo $id; ?>\" frameborder=\"0\" scrolling=\"no\"></iframe>"),
	},
abouttext: "WG Tutoriales",
aboutlink: ""
});

</script>
</body>
</html>