 <?php 
 // Start the session
 session_start();
 include "includes/db.php";
 $id = $_POST['id'];
 
 ?>



 <!DOCTYPE html><!--  Last Published: Mon Apr 10 2023 17:06:25 GMT+0000 (Coordinated Universal Time)  -->
 <html data-wf-page="6431a5f101d447259d53b872" data-wf-site="640c46a109bfca551c61da47">
 <head>
  <meta charset="utf-8">
  <title>Create Certificate</title>
  <meta content="Create Certificate" property="og:title">
  <meta content="Create Certificate" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/parokya.css" rel="stylesheet" type="text/css">
  <link href="../css/san-gregorio-magno.parokya.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Marcellus:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="http://parokya-ni-san-gregorio-magno.com/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://parokya-ni-san-gregorio-magno.com/images/favicon.ico" rel="apple-touch-icon">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XREV9R6ECX"></script>



    <script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('set', 'developer_id.dZGVlNj', true);gtag('config', 'G-XREV9R6ECX');</script>
    <style>
      .no-scroll
      {
        overflow-y: hidden!important;
        touch-action: none;
        -ms-touch-action: none;
      }
      @font-face {
        font-family: 'Rasa';
        src: url('fonts/Rasa-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
      }
      @font-face {
        font-family: 'Rasa';
        src: url('fonts/Rasa-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
      }
      .text-cert
      {
        font-family: 'Rasa', sans-serif;
        font-weight: 400;
        font-size: 19px;
      }
    </style>
    <!--  Google tag (gtag.js)  -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XREV9R6ECX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XREV9R6ECX');
    </script>
  </head>
  <body>

   <?php include '../partial/custom-css.html'; ?>
   <?php include 'partial/navigation.php'; ?>


   <div class="section header-section wf-section">
    <div class="container">
      <div class="header-wrapper">
        <div class="header-content-con">
          <h1 data-w-id="97ee2e95-bedc-8996-6f58-28ca048dc297" style="opacity:0" class="header-title header-title-text">Certificate</h1>
          <div data-w-id="97ee2e95-bedc-8996-6f58-28ca048dc299" style="opacity:0" class="body-text-medium header-excerpt"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section create-section wf-section">
    <div data-w-id="9a356ad7-03f5-c344-1e49-df5b3e5bfa71" style="opacity:0" class="container">
      <div class="select-cert-wrapper">
        <div class="select-cert-text">Select certificate  layout</div>
        <div class="create-cert-form w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get">
            <div class="select-wrapper serv-categ-wrapper"><select id="cert-type" name="Month" data-name="Month" class="select filter-select serv-create-select w-select">
              <option value="">Select</option>
              <option value="Baptismal">Baptismal</option>
              <option value="Communion">Communion</option>
              <option value="Confirmation">Confirmation</option>
            </select><img src="../images/down-chevron-1.svg" loading="lazy" alt="" class="select-icon"></div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="cert-cont-wrapper">
        <div class="cert-wrapper">
          <div id="Baptismal" class="cert-preview baptismal-cert">
            
           <?php include '../partial/custom-css.html'; ?>

           <div class="cert-border">
            <div class="cert-inner-border">
              <div class="logo-grid">
                <div id="w-node-a09aca7b-abff-362e-1e13-57a9981ebaaa-9d53b872" class="cert-logo-con"><img src="../images/parokya-ni-San-Gregorio-Magno.png" loading="lazy" alt="" class="cert-logo"></div>
                <div id="w-node-_409948cc-6d99-5dd2-92a9-e09972e3968b-9d53b872" class="cert-church-title">
                  <div class="diocese">Diocese of Imus</div>
                  <div class="parokya">PAROKYA NI SAN GREGORIO MAGNO</div>
                  <div class="address">Brgy. Inocencio, Trece Martires City, Cavite 4109 Philippines</div>
                </div>
                <div id="w-node-eede9853-2b5e-735f-af71-b760337418bf-9d53b872" class="cert-logo-con"><img src="../images/Diyosesis-ng-Imus.png" loading="lazy" alt="" class="cert-logo"></div>
              </div>
              <div class="cert-type bap-text"><strong>Baptismal Certificate</strong></div>
              <div class="cert-semi-title"><strong>This is to certify that</strong></div>
              <div class="cert-field-wrapper">
                <div class="cert-form w-form">
                  <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get">


                    <!-- Start of getting Info -->

                    <?php
                    if(isset($_GET['id'])){
                      $id = $_GET['id'];




                      $query = "SELECT * FROM formdata WHERE id = '$id'";
                      $view_query = mysqli_query($connection, $query);

                      if(!$view_query){
                        die("QUERY FAILED". mysqli_error($connection));
                      }

                      while($row = mysqli_fetch_array($view_query)){
                        $id = $row["id"];
                        $name = $row["name"];
                        $age = $row["age"];
                        $address = $row["address"];
                        $phone = $row["phone"];
                        $gender = $row["gender"];
                        $barangay = $row["barangay"];


                      }
                    }

                    ?>


                    <!--  -->
                    <div class="info-wrapper">
                      <div class="cert-input-wrapper marg-bot-12"><input type="email" class="cert-field name-field w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="cert-name" required="">
                        <div class="cert-text text-cert"><?php echo $name; ?></div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">Child of</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field child-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="">
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">and</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field and w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="and" required="">
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">born in</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field child-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="born-in" required="">
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">on the</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field on-the w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="on-the" required="">
                        </div>
                        <div class="cert-text left-marg">day of</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field day-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="day-of" required="">
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong></div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field coma w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="year" required="">
                        </div>
                      </div>
                      <div class="cert-text has-rec">has received</div>
                    </div>
                    <div class="holy-wrapper">
                      <div class="holy-title"><strong>The Holy Sacraments of Baptism</strong></div>
                      <div class="cert-text center-text top-5">according to the rite of the Roman Catholic Church</div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">on the</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field on-the w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="on-the" required="">
                        </div>
                        <div class="cert-text left-marg">day of</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field day-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="day-of" required="">
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong></div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field coma w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="year" required="">
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">by the rev</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field by-the w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="by-the" required="">
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">the sponsor being</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field sponsor w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="sponsor" required="">
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">and</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field and-holy w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="and-holy" required="">
                        </div>
                      </div>
                      <div class="text-field-wrapper register-wrapper">
                        <div class="cert-text">As appears on the Baptismal Register No.</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field reg-num w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="reg-num" required="">
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong> Page no.</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field reg-num w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="page-num" required="">
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong> Line no.</div>
                        <div class="cert-input-wrapper">
                          <div class="cert-text text-cert">---</div><input type="email" class="cert-field reg-num w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="line-num" required="">
                        </div>
                      </div>
                    </div>
                    <div class="date-wrapper padd-none">
                      <div>
                        <div class="text-field-wrapper">
                          <div class="cert-text">Date issued:</div>
                          <div class="cert-input-wrapper">
                            <div class="cert-text text-cert">---</div><input type="email" class="cert-field issued w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="" value="">
                          </div>
                        </div>
                        <div class="text-field-wrapper">
                          <div class="cert-text">Purpose:</div>
                          <div class="cert-input-wrapper">
                            <div class="cert-text text-cert purpose_text">---</div><input type="email" class="cert-field purpose w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="">
                          </div>
                        </div>
                      </div>
                      <div class="text-field-wrapper priest-sign">
                        <div class="cert-input-wrapper min-210">
                          <div class="cert-text text-cert"></div><input type="email" class="cert-field priest-sign w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="">
                        </div>
                        <div class="cert-text mag-top">Parish Priest</div>
                      </div>
                    </div>
                  </form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div><img src="../images/image-89.png" loading="lazy" alt="" class="bg-img">
            </div>
          </div>
        </div>
        <div id="Confirmation" class="cert-preview confirmation-cert"><img src="../images/Group-154.png" loading="lazy" alt="" class="bg-img-copy">
          <div class="cert-border">
            <div class="cert-inner-border">
              <div class="logo-grid">
                <div id="w-node-_725d7263-227a-03ce-7926-9a83b7513613-9d53b872" class="cert-logo-con"><img src="../images/parokya-ni-San-Gregorio-Magno.png" loading="lazy" alt="" class="cert-logo"></div>
                <div id="w-node-_725d7263-227a-03ce-7926-9a83b7513615-9d53b872" class="cert-church-title">
                  <div class="diocese">Diocese of Imus</div>
                  <div class="parokya">PAROKYA NI SAN GREGORIO MAGNO</div>
                  <div class="address">Brgy. Inocencio, Trece Martires City, Cavite 4109 Philippines</div>
                </div>
                <div id="w-node-_725d7263-227a-03ce-7926-9a83b751361c-9d53b872" class="cert-logo-con"><img src="../images/Diyosesis-ng-Imus.png" loading="lazy" alt="" class="cert-logo"></div>
              </div>
              <div class="cert-type">Confirmation Certificate</div>
              <div class="cert-semi-title"><strong>This is to certify that</strong></div>
              <div class="cert-field-wrapper">
                <div class="cert-form w-form">
                  <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get">
                    <div class="info-wrapper">
                      <div class="cert-input-wrapper marg-bot-12"><input type="email" class="cert-field name-field w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="cert-name" required="">
                        <div class="cert-text text-cert"><?php echo $name; ?></div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">Child of</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field child-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">and</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field and w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="and" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">born in</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field child-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="born-in" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">on the</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field on-the w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="on-the" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                        <div class="cert-text left-marg">day of</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field day-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="day-of" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong></div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field coma w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="year" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="cert-text has-rec">has received</div>
                    </div>
                    <div class="holy-wrapper">
                      <div class="holy-title font-marv"><strong>The Holy Sacraments of Confirmation</strong></div>
                      <div class="cert-text center-text">according to the rite of the Roman Catholic Church</div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">on the</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field on-the w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="on-the" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                        <div class="cert-text left-marg">day of</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field day-of w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="day-of" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong></div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field coma w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="year" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">by the rev</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field by-the w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="by-the" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">the sponsor being</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field sponsor w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="sponsor" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="text-field-wrapper">
                        <div class="cert-text">and</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field and-holy w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="and-holy" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                      <div class="text-field-wrapper register-wrapper">
                        <div class="cert-text">As appears on the Baptismal Register No.</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field reg-num w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="reg-num" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong> Page no.</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field reg-num w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="page-num" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                        <div class="cert-text left-marg coma"><strong>,</strong> Line no.</div>
                        <div class="cert-input-wrapper"><input type="email" class="cert-field reg-num w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="line-num" required="">
                          <div class="cert-text text-cert">---</div>
                        </div>
                      </div>
                    </div>
                    <div class="date-wrapper">
                      <div>
                        <div class="text-field-wrapper">
                          <div class="cert-text">Date issued:</div>
                          <div class="cert-input-wrapper"><input type="email" class="cert-field issued w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="">
                            <div class="cert-text text-cert">---</div>
                          </div>
                        </div>
                        <div class="text-field-wrapper">
                          <div class="cert-text">Purpose:</div>
                          <div class="cert-input-wrapper"><input type="email" class="cert-field purpose w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="">
                            <div class="cert-text text-cert purpose_text">---</div>
                          </div>
                        </div>
                      </div>
                      <div class="text-field-wrapper priest-sign"><input type="email" class="cert-field priest-sign w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="child-of" required="">
                        <div class="cert-text mag-top">Parish Priest</div>
                      </div>
                    </div>
                  </form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="Communion" class="cert-preview communion-cert">
          <div class="com-content-wrapper">
            <div class="border-top-left"></div>
            <div class="border-bot-right"></div>
            <div class="logo-grid">
              <div id="w-node-_6b65a5d3-79cb-b4e9-e9b8-0965bb33b797-9d53b872" class="cert-logo-con"><img src="../images/parokya-ni-San-Gregorio-Magno.png" loading="lazy" alt="" class="cert-logo"></div>
              <div id="w-node-_6b65a5d3-79cb-b4e9-e9b8-0965bb33b799-9d53b872" class="cert-church-title">
                <div class="diocese">Diocese of Imus</div>
                <div class="parokya">PAROKYA NI SAN GREGORIO MAGNO</div>
                <div class="address">Brgy. Inocencio, Trece Martires City, Cavite 4109 Philippines</div>
              </div>
              <div id="w-node-_6b65a5d3-79cb-b4e9-e9b8-0965bb33b7a0-9d53b872" class="cert-logo-con"><img src="../images/Diyosesis-ng-Imus.png" loading="lazy" alt="" class="cert-logo"></div>
            </div>
            <div class="com-title"><strong>Remembrance of First Holy Communion</strong></div>
            <div class="com-field-wrapper">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3" method="get" class="form-2">
                  <div class="com-input-title"><strong>Received by</strong></div>
                  <div class="cert-input-wrapper marg-bot-12"><input type="email" class="cert-field name-field w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="receive-by" required="">
                    <div class="cert-text text-cert"><?php echo $name; ?></div>
                  </div>
                  <div class="com-input-title marg-top-32"><strong>In the church of</strong></div>
                  <div class="cert-input-wrapper marg-bot-12"><input type="email" class="cert-field name-field w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="church-of" required="">
                    <div class="cert-text text-cert">---</div>
                  </div>
                  <div class="com-input-title marg-top-32"><strong>On the date of</strong></div>
                  <div class="cert-input-wrapper marg-bot-12"><input type="email" class="cert-field name-field w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="date-of" required="">
                    <div class="cert-text text-cert">---</div>
                  </div>
                  <div id="com-the-rev" class="com-input-title marg-top-32"><strong>By the rev</strong></div>
                  <div class="cert-input-wrapper marg-bot-12"><input type="email" class="cert-field name-field w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="receive-by" required="">
                    <div class="cert-text text-cert">---</div>
                  </div>
                </form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="sign-wrapper">
              <div class="com-img-wrapper"><img src="../images/image-94.png" loading="lazy" alt="" class="con-img"></div>
              <div class="sign-con">
                <div class="sign-overline"><strong>“I am the living bread that came down from heaven; whoever eats this head will live forever.” (John 6:51)</strong></div>
                <div class="text-field-wrapper priest-sign">
                  <div class="cert-input-wrapper min-210">
                    <div class="cert-text text-cert"></div>
                  </div>
                  <div class="cert-text mag-top">Parish Priest</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="print-btn-wrapper">
        <div data-w-id="264267ad-4410-94ee-9c94-b4619ad31d51" class="button rounded-button print-btn">
          <div style="opacity:0" class="button-overlay"></div>
          <a aria-label="" href="#" class="button-link" id="edit-cert">EDIT</a>
        </div>
        <div data-w-id="1bfae472-55c7-8dea-b277-bbaeff02cf6d" class="button rounded-button print-btn">
          <div style="opacity:0" class="button-overlay"></div>
          <a aria-label="" href="#" class="button-link" id="download-pdf">SAVE</a>
        </div>
      </div>
      <div class="print-btn-con">
        <div id="print-btn" data-w-id="29354402-af0b-b46a-b719-c3772c7b4b6e" class="button rounded-button print-btn">
          <div style="opacity:0" class="button-overlay"></div>
          <a aria-label="" href="#" class="button-link">PRINT</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section footer-section wf-section">
  <div class="container">
    <div class="cta-grid">
      <div id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae23a-2fdae237" data-w-id="0070e048-3023-2eb5-4e69-91f82fdae23a" class="cta-con left-cta-con">
        <div class="cta-title cta-title-with-border">LETS GET IN TOUCH</div>
        <div class="div-block">
          <a href="https://www.facebook.com/parokyanisangregoriomagnotrece" target="_blank" class="cta-link">Parokya ni San Gregorio Magno/Trece | Facebook</a>
          <a href="mailto:sangregoriomagno262017@gmail.com" class="cta-link">sangregoriomagno262017@gmail.com</a>
        </div>
      </div>
      <div id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae242-2fdae237" data-w-id="0070e048-3023-2eb5-4e69-91f82fdae242" class="cta-con">
        <div class="cta-title cta-title-with-border">LETS GET IN TOUCH</div>
        <div class="div-block">
          <a href="tel:(046)419-1162" class="cta-link">Landline No. (046) 419-1162</a>
          <a href="tel:09109799416" class="cta-link">Cellphone No. 09109799416</a>
        </div>
      </div>
    </div>
    <div class="footer-brand-wrapper">
      <div data-w-id="0070e048-3023-2eb5-4e69-91f82fdae24b" class="footer-brand-con">
        <div class="footer-brand-grid">
          <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae24d-2fdae237" href="#" class="footer-brand-link w-inline-block"><img src="../images/Diyosesis-ng-Imus.png" loading="eager" alt="" class="footer-brand"></a>
          <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae24f-2fdae237" href="#" class="footer-brand-link w-inline-block"><img src="../images/parokya-ni-San-Gregorio-Magno.png" loading="eager" alt="" class="footer-brand"></a>
        </div>
        <div class="footer-title">Parokya ni San Gregorio Magno</div>
        <div class="footer-excerpt">Inocencio, Trece Martires City</div>
      </div>
    </div>
    <div class="footer-link-wrapper">
      <div data-w-id="0070e048-3023-2eb5-4e69-91f82fdae256" class="footer-link-grid">
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae257-2fdae237" href="index.html" class="nav-link footer-link">Home</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae259-2fdae237" href="about.html" class="nav-link footer-link">About</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae25b-2fdae237" href="services.html" class="nav-link footer-link">Services</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae25d-2fdae237" href="galleries.html" class="nav-link footer-link">Galleries</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae25f-2fdae237" href="contact-us.html" class="nav-link footer-link">Contact us</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae261-2fdae237" data-w-id="0070e048-3023-2eb5-4e69-91f82fdae261" href="#" class="nav-link footer-link login-btn">Log in</a>
      </div>
    </div>
    <div class="footer-note-wrapper">
      <div data-w-id="0070e048-3023-2eb5-4e69-91f82fdae264" class="footnote-text">© PAROKYA NI SAN GREGORIO MAGNO PARISH CHURCH 2023. Website by PRIJAG Network Solution</div>
    </div>
    <div class="tawkto-wrapper">
      <div class="tawkto-embed w-embed w-script">
        <!-- Start of Tawk.to Script -->
        <script type="text/javascript">
            // var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            // (function(){
            //   var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            //   s1.async=true;
            //   s1.src='https://embed.tawk.to/6429585a4247f20fefe95a36/1gt0o2977';
            //   s1.charset='UTF-8';
            //   s1.setAttribute('crossorigin','*');
            //   s0.parentNode.insertBefore(s1,s0);
            // })();
        </script>
        <!-- End of Tawk.to Script -->
      </div>
    </div>
  </div>
</div>


<!-- Add print -->
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>




<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../js/parokya.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>


    $(document).ready(function() {
      $("#edit-cert").click(function() {

        $(".cert-field").each(function(){
          $(this).addClass("active-input");

        });
        $(".text-cert").css("opacity",'0');

      });
    });



    function togglefunction()
    {  
     if ($(window).width() > 1023) 
     {	
      $('.signup-btn').click(function(){
        $('body').toggleClass('no-scroll');
      });
      $('.login-btn').click(function(){
        $('body').toggleClass('no-scroll');
      });
      $('.close-login').click(function(){
        $('body').toggleClass('no-scroll');
      });
    }
    else
    {
      $('.hamburger').click(function(){
        $('body').toggleClass('no-scroll');
      }); 
    }
  }  
  $(document).ready(function(e) {
    togglefunction();
  });
  $(window).resize(function() {
    togglefunction();
  });
</script>
<script>
  var cert_type="Baptismal";
  var elementToSave;

  $(".cert-input-wrapper").each(function(){
   var input = $(this).find(".cert-field");
   var text = $(this).find(".text-cert");
   input.on("keypress, keyup", function(){
     console.log($(this).val());
     text.text($(this).val());
   });
 });

  $("#cert-type").change(function(){

    $(".purpose_text").text(cert_type);

    $(".cert-cont-wrapper").show();
    cert_type = $(this).val();
    if(cert_type == "Baptismal")
    {
     $(".cert-preview").hide();
     $("#Baptismal").show();
   }
   else if(cert_type == "Confirmation")
   {
     $(".cert-preview").hide();
     $("#Confirmation").show();
   }
   else if(cert_type == "Communion")
   {
     $(".cert-preview").hide();
     $("#Communion").show();
   }
   else
   {
     $(".cert-preview").hide();
     $("#Baptismal").show();
   }
   elementToSave = document.getElementById(cert_type);
   var printContents = document.getElementById(cert_type).innerHTML;


 });
  $("#print-btn").click(function(){
    printDiv();
  });

  var id = <?php echo json_encode($id); ?>;

    // function printDiv() {


    //   if(confirm("Are you sure you want to update the status and print file?")) 
    //   {

    //     $(".text-cert").css("opacity",'1');
    //     $.ajax({
    //       type: "POST",
    //       url: "update_status.php",
    //       data: { id: id },
    //       success: function(response) {

    //       },
    //       error: function(response) {

    //       }
    //     });

    //     var printContents = document.getElementById(cert_type).innerHTML;
    //     var originalContents = document.body.innerHTML;
    //     document.body.innerHTML = printContents;
    //     window.print();
    //     document.body.innerHTML = originalContents;

    //     // window.addEventListener("afterprint", function(event) 
    //     // {
    //     //   console.log("afterprint event:", event);
    //     //   setTimeout(function() 
    //     //   {
    //     //     location.reload();  
    //     //   }, 100);  
    //     // }, false);

    //     setTimeout(function() 
    //     {
    //       location.reload();
    //     }, 1500); 
    //   }


    // }
  function printDiv() {
    if (confirm("Are you sure you want to update the status and print file?")) {
      $(".text-cert").css("opacity", "1");
      $.ajax({
        type: "POST",
        url: "update_status.php",
        data: { id: id },
        success: function(response) {},
        error: function(response) {}
      });

      var printContents = document.getElementById(cert_type).innerHTML;
      var originalContents = document.body.innerHTML;

      var printWindow = window.open("", "", "height=768,width=1366");
      printWindow.document.write("<html><head><title>" + document.title + "</title>");
      printWindow.document.write("</head><body>");
      printWindow.document.write(printContents);
      printWindow.document.write("</body></html>");

    printWindow.document.close(); // necessary for IE >= 10
    printWindow.focus(); // necessary for IE >= 10*/

    printWindow.print();

    document.body.innerHTML = originalContents;

    setTimeout(function() {
      location.reload();
    }, 1500);
  }
}




const jsPDF = window.jspdf.jsPDF;

const downloadButton = document.querySelector('#download-pdf');
var name = <?php echo json_encode($name); ?>;

downloadButton.addEventListener('click', () => {

  $(".cert-field").each(function()
  {
    $(this).removeClass("active-input");

  });
  $(".text-cert").css("opacity",'1');

      // var id = <?php echo json_encode($id); ?>;

      // if(confirm("Are you sure you want to update the status and download file?")) {


      //   const filename = name+".pdf";


      //   const options = {
      //     filename: filename,
      //     jsPDF: { 
      //       unit: 'in', 
      //       format: 'letter', 
      //       orientation: 'portrait',
      //     }
      //   };


      //   html2canvas(elementToSave, {
      //     scale: 1,  
      //   }).then(canvas => {

      //     elementToSave.style.width = '8.5in';
      //     elementToSave.style.height = '11in';


      //     const imgData = canvas.toDataURL('image/png');


      //     const doc = new jsPDF(options.jsPDF);
      //     const width = doc.internal.pageSize.getWidth();
      //     const height = doc.internal.pageSize.getHeight();
      //     doc.addImage(imgData, 'PNG', 0, 0, width, height);


      //     doc.save(options.filename);


      //     elementToSave.style.width = '';
      //     elementToSave.style.height = '';
      //   })
      //   .then(() => {

      //     alert('PDF was successfully generated!');
      //   })
      //   .catch((error) => {

      //     console.error(error);
      //     alert('There was an error generating the PDF.');
      //   });
      //   $.ajax({
      //     type: "POST",
      //     url: "update_status.php",
      //     data: { id: id },
      //     success: function(response) {

      //     },
      //     error: function(response) {

      //     }
      //   });
      // }



});


function certUpdate()
{


}
</script>





</body>
</html>