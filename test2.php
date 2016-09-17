<?php

if (isset($_POST["name"]) && isset($_POST["phonenumber"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
    	'phonenumber' => $_POST["phonenumber"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Article Ajax WH-DB.COM</title>
  <meta name="description" content="Article WH-DB.COM. How send ajax form.">
  <meta name="author" content="wh-db.com">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>

<body>
    <form method="post" id="ajax_form" action="" >
        <input type="text" name="name" placeholder="NAME" /><br>
        <input type="text" name="phonenumber" placeholder="YOUR PHONE" /><br>
        <input type="button" id="btn" value="Отправить" />
    </form>

    <br>

    <div id="result_form"><div> 
    
         <script>
	$(function($) {
										var field = new Array("name", "firma", "email", "phone");
											$("#form").submit(function() {
												var error=0;
													$("#form").find(":input").each(function() {
														for(var i=0;i<field.length;i++){
															if($(this).attr("name")==field[i]){ 
																if(!$(this).val()){
																	$(this).css('border', 'red 1px solid');
																	error=1;						
																} else {
																	$(this).css('border', '1px solid #BBB');
																}
															}						
														}			
													})
										if (error==0) {
										
										var $form = $("#form"),
											s_email 	= $form.find( 'input[name="mail"]' ).val(),
											s_name 		= $form.find( 'input[name="name"]' ).val(),
											url 		= $form.attr( 'action' );
											$.post( url, { email: s_email, name: s_name} ).done(function(data) {
												$('#result').html(data);
											});
											
											return false;
										} else {
											alert("Не все поля зполнены!");
											return false;
										}
								
									});
									});
</script>
</body>
</html>