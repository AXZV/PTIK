<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<style>

      body{
        background-color: #f3f3f3;
      }

		.background{
		
		position: fixed;
		z-index: -1;
		margin-top: -100px;
		}

		.sosmed_facebook{
          background-color: #e0e0e0;
          padding: 10px 20px 0px 20px;
          border-radius: 0px 30px 30px 0px;
          width: 20px;
          height: 40px;
          -webkit-transition-duration: 0.2s;
          -transition-duration: 0.2s;
          cursor: pointer;
          margin-top: 4px;
        }

        .sosmed_facebook:hover{
          background-color: #3267bc;
        }

         .sosmed_twitter{
          background-color: #e0e0e0;
          padding: 10px 20px 0px 20px;
          border-radius: 0px 30px 30px 0px;
          width: 20px;
          height: 40px;
          -webkit-transition-duration: 0.2s;
          -transition-duration: 0.2s;
          cursor: pointer;
          margin-top: 4px;
        }

        .sosmed_twitter:hover{
          background-color: #40b4d1;
        }

        .sosmed_link{
          background-color: #e0e0e0;
          padding: 10px 20px 0px 20px;
          border-radius: 0px 30px 30px 0px;
          width: 20px;
          height: 40px;
          -webkit-transition-duration: 0.2s;
          -transition-duration: 0.2s;
          cursor: pointer;
          margin-top: 4px;
        }

        .sosmed_link:hover{
          background-color: #4097c9;
        }

        .img1{
          position: relative;
          right: 10px;
          top: 3px;
        }
        .img2{
          position: relative;
          right: 2px;
        }
        .img3{
          position: relative;
          right: 10px;
        }

        .wrapper_sosmed{
          position: fixed;
          top: 170px;
          z-index: 10;
        }

	</style>
	</head>
	<body>
	<div class="wrapper_sosmed">
    <div class="sosmed_facebook">
      <a href="#"><img class="img2" src="asset/facebook.png" width="13"/></a>
    </div>
    <div class="sosmed_twitter">
      <a href="#"><img class="img1" src="asset/twitter.png" width="30"/></a>
    </div>
    <div class="sosmed_link">
      <a href="#"><img class="img3" src="asset/link.png" width="30"/></a>
    </div>
  </div>
		<div><img class="background" src="asset/background.jpg"></div>
	</body>
	</html>
