<?php

$name = "";
$email = "";
$phone = "";
$firma = "";
$message = "";


$color_name ="";
$color_email ="";
$color_firma ="";


if(isset($_POST['submit'])) {

    $solutions = $_POST['type'];
    $solutii="Webinar Topics: \n";
    $message = $_POST['comment-form'];

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $firma = trim($_POST['firma']);
    $commentform = trim($_POST['commentform']);

    $color_name="0";
    $color_firma="0";
    $color_email="0";

    if(sizeof($solutions)>0){
        foreach($solutions as $item) {
            $solutii .= "\n  + $item ";
        }
    }

//Check to make sure that the name field is not empty
    if($name == '')     {$hasError = true; $color_name ="1";}
    if($firma == '')    {$hasError = true; $color_firma ="1";}
    if($email == '')    {$hasError = true; $color_email ="1";}


    //Check to make sure sure that a valid email address is submitted
    if($email == '')  {
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $email)) {
        $hasError = true;;
    }

    //If there is no error, send the email
    if(isset($hasError)) {
        $error_message = "Не всі поля заповнені";
    }
    else {
        $emailTo = 'khristik@ukr.net'; //Put your own email address here
        $body = "Ім'я: $name \nFirma: $firma\nEmail: $email \nНомер телефону: $phone \n\n$solutii \n\nПовідомлення:\n $message";

        $headers = "Mime-Version: 1.0\n";
        $headers .= "Content-Type: text/plain;charset=UTF-8\n";

        $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
        mb_internal_encoding("UTF-8");

        mb_send_mail($emailTo,"Вакансії", $body, $headers);
        $emailSent = true;

        $name = $email = $phone = $firma = $message = "";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    
		<section class="contact" id="contact">
			<div class="container">

                    <div class="row">
					       <div class="col-lg-12 section-heading text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="2s">Контакти</h2>
                        </div>
                        </div>

				<div class="row" style="">
					
					<div class="col-md-6 ">
						
						<div class="row">
							<div class="col-md-6">
							<div class="contact-left wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="2s">
								<p>м. Львів вул. Сахарова</p>
								<p>Час роботи:</p>
								  <p>08:30-20:30</p>	
							</div>
							
							</div>
							<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="2s">	
								<p>Контакти:</p>
											<p><span class=""> </span>  +38(096)-98-98-594</p>
											<p><span class=""> </span> +38(096)-98-98-594</p>						
							</div>
						
						</div>
						<div class="row">
							<div class="col-md-12 gmap wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="2s">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.7999308456965!2d24.02805721570894!3d49.8274253793943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add60eab6e8c5%3A0x6b6a50958d00d57d!2z0LLRg9C70LjRhtGPINCh0YLRgNC40LnRgdGM0LrQsCwgMjUsINCb0YzQstGW0LIsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1471811072342" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
						<section class="subscribe wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="2s" style="background:none;">
						<ul class="company-social">
								<li class="social-vimeo"><a href="https://vk.com/kingwork_lviv"><i class="fa fa-vk"></i></a></li>
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>							
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
						</section>
						</div>
						</div>
					</div>
						
					<div class="col-md-6">
                     <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                        <h2>Дякуємо!</h2>
                        <p>Ваше повідомлення відправлено</p>
                    </div>
                </div>
            <?php } else {?>

                        <p class="error"><?php echo ($error_message); ?></p>

                        <form class="contact-form" id="demo-form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control wow fadeInUp" id="name" name="name" placeholder="Ім'я" value="<?php echo $name ?>" data-wow-delay="0.1s" data-wow-duration="2s">
								<input type="text" class="form-control wow fadeInUp" id="firma" name="firma" placeholder="Прізвище" value="<?php echo $firma ?>" data-wow-delay="0.1s" data-wow-duration="2s">
							</div>	
							<div class="col-md-6">
								<input type="email" class="form-control wow fadeInUp" id="email" name="email" type="email" value="<?php echo $email ?>" placeholder="E-mail" data-wow-delay="0.1s" data-wow-duration="2s">
								<input type="text" class="form-control wow fadeInUp" id="phone" name="phone" value="<?php echo $telefon ?>" placeholder="Номер телефону" data-wow-delay="0.1s" data-wow-duration="2s">
							</div> 
							<div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="2s">
								<textarea id="comment-form" name="comment-form" <?php echo $message;?> placeholder="Your Message" class="form-control" rows="5"></textarea>
								<input type="file" name="uploadfile" class="uploadfile" id="uploadfile" style="background: none!important;
    border-color: #e5e5e5;
    padding: 5px!important;
    border-radius: 3px!important;" data-wow-delay="0.1s" data-wow-duration="2s">
								<button class="send-button" type="submit" name="submit" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."><i class="fa fa-paper-plane" data-wow-delay="0.1s" data-wow-duration="2s"></i> Відправити</button>
								
							</div>
						</div>

                            <!--div class="checkbox col-md-offset-2 col-md-10">

                                <ul>
  
                                    <li><input id="type-0" type="checkbox" name="type[]" value="12.10.2016: Getting more out of your SAP EWM, SAP WM or LES">
                                        <label for="type-0">12.10.2016: <b>Getting more out of your SAP EWM, SAP WM or LES</b> – Slotting, load balancing and many more</label></li>
                                    <li><input id="type-1" type="checkbox" name="type[]" value="14.11.2016: W2MO Case Pack Optimization">
                                        <label for="type-1">14.11.2016: <b>W2MO Case Pack Optimization</b> –  z.B. Optimierung Containerauslastung, Gewichtsverifizierung… (Conference Language German)</label></li>
									<li><input id="type-2" type="checkbox" name="type[]" value="08.12.2016: Nutzen und Anwendung videobasierter Prozessstudien">
                                        <label for="type-2">08.12.2016: <b>Nutzen und Anwendung videobasierter Prozessstudien</b> mit integriertem Pers&ouml;nlichkeitsschutz (Conference Language German)</label></li>

                                </ul>

                            </div-->

                        </form>

            <?php } ?>
						
                        
                        
                        <div id="result-message" role="alert"></div>
					</div>
					</div>
					
				</div>
			</div>
		</section>
        <section class="subscribe">
			<div class="container">
				<div class="row">
					<div class="col-md-6 subscribe-title">
						<p class="">Якщо хочеш працювати з нами</p>
					</div>
                    <div class="col-md-6">
                     <div class="questionnaire">
						<a href="" class="">Заповнюй анкету</a> 
                       </div> 
					</div>                    
				</div>
			</div>
		</section>
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; <a href="#">2016</a> 

						Designed <a href="#">Kris</a>

					</div>
				</div>
			</div>
		</footer>


   


    <!-- jQuery -->
    
    <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
		<script>
         new WOW().init();
        </script>
    <!-- Bootstrap Core JavaScript -->
    

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
   
</body>

</html>
