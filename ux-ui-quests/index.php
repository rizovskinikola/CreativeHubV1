
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    />
    <script
      src="https://kit.fontawesome.com/2b7c92c2d4.js"
      crossorigin="anonymous"
    ></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../navbar.css" />

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>

    <!--GOOGLE FONDS--->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;0,900;1,600&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="../bootstrap-5.0.2-dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="../bootstrap-4.6.0-dist/css/bootstrap.min.css"
    />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="shortcut icon" href="Images\favicon.png" type="image/x-icon">
    <title>UX/UI QUEST</title>

  </head>

<body>
<?php 
	//require_once ('../navbar.php');
?>
	<div class="container">
		<div class="row">
			<p><?php require_once "form.php"; ?></p>
		</div>
	</div>

    <div id="bg">
		<h1 style="font-weight: 900;padding-top: 25px;" class="text-center ">
			UX/UI ПРЕДИЗВИЦИ
		</h1>
      	<br />
      	<div class="container mt-5">
        	<div class="row">
          		<div class="col-md-6 mb-3">
            		<div class="first">
						<p
							class="text-left"
							style="color: #606060; font-size: 16px; font-weight: 500"
						>
							Што е UX/UI Quest? Како што знаете во Creative Hub имаме
							акредитирана UX/UI Академија.
							<br />
							Заедно со дел од нашите алумни и нашите ментори дојдовме на
							идеја да ја доближиме Академијата и програмата до сите Вас што
							сакате да учествувате во предизвици. Секој четврток следете го
							нашиот Фејсбук канал каде ќе објавуваме UX/UI предизвик.
							<br />
							Сите Вие кои ќе учествувате ќе имате 7 дена да испратите UX/UI
							решение. За решението ќе добиете фидбек од нашите судии - сениор
							UX/UI дизајнери. А за најактивните следуваат и награди.
							<br />
							Секој трет четврток во месецот и ќе доделуваме награди за
							најдобрите. Најдоброто решение ќе добие и 200 ЕУР попуст на
							Академијата за UX/UI.
						</p>
            		</div>
          		</div>
				<div class="col-md-6">
					<div class="second">
					<div class="insideSecond">
						<p class="text-left">
						Денешниот клиент Ви е Зоран. На Зоран му е потребен дизајн за како најбрзо да се снајде на аеродром. Можете ли да и помогнете? Сите дизајни / скици/ прототипи испратете ги на contact@creativehub.mk најдоцна до слесндата среда 12 часот кога ќе го објавиме новиот UX UI предизвик.Сите учесници ќе добијат фидбек на дизајниот,а најдобриот и ваучер од 200 ЕУР за UX UI Академија.

						</p>
					</div>
					<div class="d-grid gap-2">
						<button class="btn btn theBTN" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
						Заврши? Испрати ни го твоето
						решение!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
							class="fas fa-arrow-right"
						></i>
						</button>
					</div>
					</div>

					<!-- Modal -->
					<div class="modal fade"id="exampleModal" tabindex="-1"aria-labelledby="exampleModalLabel"aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">
								Испрати го твоето решение!
							</h5>
							<button type="button"class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div>
							<p class="fake-legend"><span style="color: #606060;">Lични податоци</span> </p>
				</div>   
                <div class="modal-header">
                        <!-- Display submission status -->
						<form class="row g-3" action="" method="POST" id="Challenges" accept-charset="UTF-8" enctype="multipart/form-data">
							<div class="col-md-6">
								<label for="name" class="form-label">Име и презиме</label>
								<input type="text" name="name" class="form-control" id="nameSurname" placeholder="пр.Стефан Стефановски" required>
								</div>
								<div class="col-md-6">
								<label for="email" class="form-label">e-mail адреса</label>
								<input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="eMail" placeholder="пр.стефан@yahoo.com" required>
								</div>
								<p class="fake-legend"><span style="color: #606060;">Вашето решение</span>
								</p>
								<div class="col-md-12" id="subjectInput">
								<input type="text" name="subject" class="form-control"  placeholder="Subject" style="display: none;">

							</div>
							<div class="col-12">
								<label for="title" class="form-label">Наслов</label>
								<input type="text" class="form-control" name="title" id="title" placeholder="пр.Редизајн на веб-сајт" required>
								</div>
								<div class="col-6">
								<label for="descripton" class="form-label">Опис</label>
								<textarea class="form-control" name="descripton" form="Challenges" rows="5" placeholder="пр. Опис на вашето решение"></textarea>
								</div>
								<div class="col-6">
									<label for="file" class="form-label">Прикачете ги вашите дизајни</label>
									<input type="file" name="file" class="form-control" id="inputGroupFile01" required>
									<br>
									<label for="prototip" class="form-label">Линк презентација / прототип</label>
									<input type="text" class="form-control" name="prototip" id="prototip" placeholder="Линк презентација / прототип">
								</div>
							</div>
							<div class="col-12 text-right">
								<div>
									<button type="submit" name="submit" class="btn  btn-lg" id="submit" value="Submit" >Испрати го твоето решение!</button>
								</div>
							</div>
						</form>
						<br>
						<hr>
						<p class="text-muted" style="padding: 5px;font-size: 12px;"> <span style="color: red;">*</span>  Ви благодариме за учеството.</p>
                  	</div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="container">
			<br>
			<div class="text-center mt-5" id="arrow">
				<img src="Images/arrowdown.png" class="responsive">
			</div>
			<br>
			<h4 class="text-center">Tука се пак, изминатите предизвици</h4>
			<br>
			<div class="row">
				<div class="col-md-4">
				<div class="second">
					<div class="insideSecond">
						<p class="text-left">
						Замислете дека имате клиент по име Сара. На Сара и е потребен
						UX UI дизајнер. Сака да има дизајн за вебсајт на кој ќе може
						лесно и брзо да плаќа за намирници без да и е потребен касиер.
						Можете ли да и помогнете? Сите дизајни / скици/ прототипи
						испратете ги на contact@creativehub.mk најдоцна до следната
						среда 12 часот кога ќе го објавиме новиот UX UI предизвик.
						Сите учесници ќе добијат фидбек на дизајниот,а најдобриот и
						ваучер од 200 ЕУР за UX UI Академија.
						</p>
					</div>
					<div class="d-grid gap-2">
						<button class="btn btn theBTN2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
						Испрати ни го твоето
						решение!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
							class="fas fa-arrow-right"
						></i>
						</button>
					</div>
					</div>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>

			</div>
		</div>
      </div>
    </div>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
    <script src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>