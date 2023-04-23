 <?php 
// Start the session
 session_start();
 include "includes/db.php";
// Check if the session variable is set and display the email address

//  if(isset($_SESSION['user_email'])) 
//  {

//   $email = $_SESSION['user_email'];
// }
// else if(isset($_SESSION['user_email']) && $_SESSION['login_account'] == "true") 
// {

//   $email = $_SESSION['user_email'];
// }
// else
// {
//   $email = "";
//
// }


 ?>


 <!DOCTYPE html><!--  Last Published: Mon Apr 10 2023 17:06:25 GMT+0000 (Coordinated Universal Time)  -->
 <html data-wf-page="64319b7a9d91c60f6fbcb9d9" data-wf-site="640c46a109bfca551c61da47">
 <head>
  <meta charset="utf-8">
  <title>Request Certificate</title>
  <meta content="Request Certificate" property="og:title">
  <meta content="Request Certificate" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/san-gregorio-magno.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Marcellus:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="../images/webclip.png" rel="apple-touch-icon">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XREV9R6ECX"></script>
    <script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('set', 'developer_id.dZGVlNj', true);gtag('config', 'G-XREV9R6ECX');</script>
    <style>
      .no-scroll 
      {
        overflow-y: hidden!important;
        touch-action: none;
        -ms-touch-action: none;
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
    <div class="section header-section wf-section">
      <div class="container">
        <div class="header-wrapper">
          <div class="header-content-con">
            <h1 data-w-id="57a8dbd8-0d2d-09f9-75c6-5edafa8b68e2" style="opacity:0" class="header-title header-title-text">Baptism Reports </h1>
            <div data-w-id="57a8dbd8-0d2d-09f9-75c6-5edafa8b68e4" style="opacity:0" class="body-text-medium header-excerpt">lorem ipsum</div>
          </div>
        </div>
      </div>
    </div>

    <?php include '../partial/custom-css.html'; ?>
    <?php include 'partial/navigation.php'; ?>

    <div class="section status-section wf-section">
      <div class="container">
        <div id="w-node-e11252ee-d72a-90fa-2d26-73bcf10fd970-6fbcb9d9" class="w-form">
          <form method="get" name="email-form" data-name="Email Form" style="opacity:0" data-w-id="e11252ee-d72a-90fa-2d26-73bcf10fd971" id="email-form" class="filter-wrapper">

            <div id="select-filter-wrapper" class="select-filter-wrapper">


              <!--  -->

              <div class="select-wrapper"><select id="purpose" name="purpose" data-name="purpose" class="select filter-select w-select">



                <?php 
                $query = "SELECT * FROM services_tbl WHERE status ='Publish'";
                $select_all_services = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($select_all_services)){
                  $id = $row['id'];
                  $title = $row['title'];

                  echo '<option value="'.$title.'">'.$title.'</option>';

                }
                ?>

              </select><img src="../images/down-chevron-1.svg" loading="lazy" alt="" class="select-icon"></div>




              <div class="select-wrapper"><select id="gender" name="Gender" data-name="Gender" class="select filter-select w-select">
                <option value="">Select sex</option>
                <option value="male">Male</option>
                <option value="Female">Female</option>
              </select><img src="../images/down-chevron-1.svg" loading="lazy" alt="" class="select-icon"></div>
              <div class="select-wrapper"><select id="month" name="Month" data-name="Month" class="select filter-select w-select">
                <option value="">Select month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select><img src="../images/down-chevron-1.svg" loading="lazy" alt="" class="select-icon"></div>

              <input type="text" class="select filter-select w-node-bf108295-d0aa-8c11-e91e-2270fbecb533-6fbcb9d9 w-input" maxlength="256" name="Year" data-name="Year" placeholder="Select year" id="year">

              <div class="select-wrapper"><select id="barangay" name="Barangay" data-name="Barangay" class="select filter-select w-select">
                <option value="">Barangay</option>
                <option value="Brgy. Aguado">Brgy. Aguado</option>
                <option value="Brgy. Inocencio">Brgy. Inocencio</option>
              </select><img src="../images/down-chevron-1.svg" loading="lazy" alt="" class="select-icon"></div>
            </div>
            <div id="w-node-b4028a5b-c8ef-df80-9a35-75789bf105b1-6fbcb9d9" class="search-wrapper">

              <div id="w-node-b6ec6774-df05-e803-8d15-82867510d761-6fbcb9d9" class="print-wrapper">
                <div id="w-node-_797a341e-e77b-3edb-abfc-8ecd7d3a3407-6fbcb9d9" class="print-con dl-con" onclick="print()"><img src="../images/Mask-group.svg" loading="lazy" alt="" class="print-icon"></div>

                <div id="download-pdf" class="print-con printer-con" onclick="loadPrint()"><img src="../images/Mask-group-1.svg" loading="lazy" alt="" class="print-icon"></div>
              </div>

              <div id="w-node-_4cca64a6-0a55-4a6e-5412-4a46426bcb02-6fbcb9d9" class="input-wrapper">
                <div class="search-label">Search:</div><input type="text" class="select filter-select search-text w-input" maxlength="256" name="search" data-name="search" placeholder="" id="search">
              </div>
            </div>
          </form>
          <div class="hide w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="hide w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
        <div data-w-id="a6ce49cc-23b9-46b0-3db0-c07c98e55d15" style="opacity:0" class="table-container report-table" id="report">
          <div class="table-wrapper w-embed">
            <style>
              table {
                border-collapse: collapse;
                width: 100%;
                border-radius: 0px;
                overflow: hidden;
                position: relative;
                border: 1px solid #C7C6B8;
              }
              table td,
              table th {
                border: 1px solid #C7C6B8;
                text-align: start;
              }
              table td {
                padding: 15px 7px;
                font-family: Lato, sans-serif;
                color: #555;
                font-size: 14px;
                line-height: 30px;
                font-weight: 400;
                min-height: 60px;
                text-align: center;
              }
              table tr td:first-child
              {
               text-align: left;
             }
             table th {
              background-color: #BABABA36;
              padding: 7px 45px;
              font-family: Marcellus, sans-serif;
              color: #100a0a;
              font-size: 14px;
              line-height: 30px;
              font-weight: 400;
              text-align: center;
            }
            .btn-td {
              display: flex;
              justify-content: center;
            }
            .status {
              text-align: center;
            }
            .edit
            {
             position: relative;
           }
           .edit-wrapper {
            position: absolute;
            top: 45px;
            right: 8px;
            left: auto;
            bottom: auto;
            z-index: 20;
            background-color: #fff;
            display: none;
            width: 80px;
            padding-top: 6px;
            padding-bottom: 6px;
            flex-direction: column;
            justify-content: center;
            border: 1px solid #c7c6b8;
            border-radius: 5px;
          }
          table tr:last-child .edit-wrapper
          {
            top: auto;
            right: 8px;
            left: auto;
            bottom: 10px;
          }
          .edit-btn-wrapper
          {
           width: 20px;
           height: 20px;
           margin: 0 auto;
           cursor: pointer;
         }
         .create-edit {
          font-family: Lato, sans-serif;
          color: #52070b;
          font-size: 10px;
          line-height: 30px;
          font-weight: 400;
          text-decoration: none;
          text-transform: uppercase;
        }
        .create-edit:hover {
          text-decoration: underline;
        }
      </style>
      <table id="myTable">
        <thead>
          <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Barangay</th>
            <th>Age</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="result">

        </tbody>
      </table>
    </div>
  </div>
  <div data-w-id="0853b24f-7720-ae28-225f-1186ba5f3c1f" style="opacity:0" class="page-wrapper">
    <div id="pagination" class="pagination"></div>
  </div>
</div>
</div>


<?php include '../partial/footer.php'; ?>


<div class="tawkto-wrapper">
  <div class="tawkto-embed w-embed w-script">

  </div>
</div>
</div>
</div>



<!-- Add print -->
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>


<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>

    
function loadPrint() {

  $("#myTable th:last-child").css("display", "none");
  $("#myTable td:last-child").css("display", "none");
  $("table").css({
    "border-collapse": "collapse",
    "width": "100%",
    "border-radius": "0px",
    "overflow": "hidden",
    "position": "relative",
    "border": "1px solid #C7C6B8 !important;"
  });

  $("table td, table th").css({
    "border": "1px solid #C7C6B8 !important;",
    "text-align": "start"
  });



// Create a new window
  var win = window.open('', 'Print Window');

// Retrieve the contents of the myTable element
  var printContents = document.getElementById("report").innerHTML;

// Replace the contents of the new window with the table contents
  win.document.body.innerHTML = printContents;

// Print the new window
  win.print();

// Close the new window
  win.close();

// Add event listener for afterprint
  window.addEventListener("afterprint", function(event) {
    console.log("afterprint event:", event);
    setTimeout(function() {
    location.reload(); // Reload the page after a delay
  }, 100); // Delay in milliseconds (adjust as needed)
  }, false);

  // // Fallback for browsers that don't support afterprint
  setTimeout(function() {
    location.reload();
  }, 100); // Reload the page after a delay (adjust as needed)

}




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

  function deleteBaptism(id) {
    if (confirm("Are you sure you want to delete this?")) {
      $.ajax({
        type: 'GET',
        url: '/editor/includes/delete-baptism.php',
        data: { id: id },
        success: function(response) {
          if (response == 'Success') {
            alert("Deleted");
            window.location = "services-report.php";
          }
        },
        error: function(xhr) {
        // handle error response
        }
      });
    }
  }



  $(document).ready(function() {
    var i = 0;

    $(document).on("click", ".edit-btn-wrapper", function() {
      $(".edit-wrapper").css("display", "none");
      var edit = $("#edit" + $(this).attr("id"));
      edit.css("display", "block");
    });
  });





  const container = document.querySelector('body');
  container.addEventListener('click', function(event) {
    if (!event.target.closest('.edit-btn-wrapper')) {
      //$(".edit-wrapper").hide();
    }
  });
  $(".filter-select option").each(function(){
   $(this).addClass("option");
 });
// pagination"
// number of rows to display per page
  var rowsPerPage = 10;
// get the table and rows
  var table = document.getElementById("myTable");
  var rows = table.getElementsByTagName("tr");
// calculate the number of pages
  var totalPages = Math.ceil((rows.length - 1) / rowsPerPage);
  if(totalPages <= 1)
  {
   totalPages = 1;
   $(".pagination").hide();
 }
// show the first page
 $(document).ready(function(){
   showPage(1);
 });
// create pagination buttons
 var page_num ;
 var pagination = document.getElementById("pagination");
 for (var i = 1; i <= totalPages; i++) {
  var button = document.createElement("button");
  button.innerHTML = i;
  button.classList.add("page-btn");
  if (i === 1) {
    button.classList.add("active-page");
  }
  button.addEventListener("click", function() {
    showPage(this.innerHTML);
    setActivePage(this);
    var currentPage = getCurrentPage();
    page_num = currentPage;
    if(page_num <= 2)
    {
      prevBtn.disabled = true;
    }
    else if(page_num >= totalPages - 1)
    {
      nextBtn.disabled = true;
    }
    else
    {
      nextBtn.disabled = false;
      prevBtn.disabled = false;
    }
  });
  pagination.appendChild(button);
}
// create next and previous buttons
var prevBtn = document.createElement("button");
prevBtn.innerHTML = "<img class='rotate-arrow' src='https://uploads-ssl.webflow.com/640c46a109bfca551c61da47/64304fc75434bd157bd7075d_next-button.svg'>";
prevBtn.classList.add("prev-btn");
prevBtn.disabled = true;
prevBtn.addEventListener("click", function() {
  var currentPage = getCurrentPage();
  page_num = currentPage;
  showPage(currentPage - 1);
  var activePageBtn = document.querySelector(".active-page");
  setActivePage(activePageBtn.previousSibling);
});
pagination.insertBefore(prevBtn, pagination.firstChild);
var nextBtn = document.createElement("button");
nextBtn.innerHTML = "<img src='https://uploads-ssl.webflow.com/640c46a109bfca551c61da47/64304fc75434bd157bd7075d_next-button.svg'>";
nextBtn.classList.add("next-btn");
if (totalPages === 1) {
  nextBtn.disabled = true;
}
else if (i > 4) {
    // add an ellipsis between page 2 and the second-to-last page
   /* var ellipsis = document.createElement("span");
    ellipsis.innerHTML = "&hellip;";
    ellipsis.classList.add("ellipsis");
    pagination.appendChild(ellipsis);*/ //hidden for now
}
nextBtn.addEventListener("click", function() {
  var currentPage = getCurrentPage();
  page_num = currentPage;
  showPage(currentPage + 1);
  var activePageBtn = document.querySelector(".active-page");
  setActivePage(activePageBtn.nextSibling);
});
pagination.appendChild(nextBtn);
// function to show a page of rows
function showPage(page) {
  // calculate the start and end indexes of the rows to show
  var startIndex = (page - 1) * rowsPerPage + 1;
  var endIndex = Math.min(startIndex + rowsPerPage - 1, rows.length - 1);
  // hide all rows
  for (var i = 1; i < rows.length; i++) {
    rows[i].style.display = "none";
  }
  // show the rows for the current page
  for (var i = startIndex; i <= endIndex; i++) {
    rows[i].style.display = "";
  }
  // enable/disable previous and next buttons based on current page
  var prevBtn = document.querySelector(".prev-btn");
  var nextBtn = document.querySelector(".next-btn");
  if (page === 1) {
    prevBtn.disabled = true;
  } else {
    prevBtn.disabled = false;
  }
  if (page === totalPages) {
    nextBtn.disabled = true;
  } else {
    nextBtn.disabled = false;
  }
}
// function to get the current page number
function getCurrentPage() {
  var activePageBtn = document.querySelector(".active-page");
  return parseInt(activePageBtn.innerHTML);
}
// function to set the active page button
function setActivePage(pageBtn) {
  var activePageBtn = document.querySelector(".active-page");
  activePageBtn.classList.remove("active-page");
  pageBtn.classList.add("active-page");
}




function print() 
{
     // Get the current values of all four select boxes and the search input
  var gender = $("#gender").val();
  var year = $("#year").val();
  var barangay = $("#barangay").val();
  var month = $("#month").val();
  var name = $("#search").val();

    // Send an AJAX request to the server-side PHP script
  $.ajax({
      url: "print_services.php", // Replace with the URL of your PHP script
      method: "POST",
      data: {
        gender: gender,
        year: year,
        barangay: barangay,
        month: month,
        name: name
      },

      success: function(response) {
        // Handle the response from the PHP script
        // For example, you could update the contents of a <div> element with the response data

      },
      error: function(xhr, textStatus, errorThrown) {
        // Handle any errors that occur during the AJAX request
        console.log("Error: " + errorThrown);
      }
    });


  var domain = window.location.hostname;

  if (domain === 'localhost') {
    domain = 'http://localhost/san-gregorio-magno-church/editor/baptism-certificates-list.xlsx';
  } else {
    domain = "http://parokya-ni-san-gregorio-magno.com/editor/baptism-certificates-list.xlsx";
  }

  window.open(domain, '_blank');



}





$(document).ready(function() {
  // Define a function to handle the AJAX request
  handleRequest();

  function handleRequest() {
    $("#result").html("");
    // Get the current values of all four select boxes and the search input
    var gender = $("#gender").val();
    var year = $("#year").val();
    var barangay = $("#barangay").val();
    var month = $("#month").val();
    var name = $("#search").val();
    var purpose = $("#purpose").val();

    // Send an AJAX request to the server-side PHP script
    $.ajax({
      url: "get_request_services.php", // Replace with the URL of your PHP script
      method: "POST",
      data: {
        gender: gender,
        year: year,
        barangay: barangay,
        month: month,
        name: name,
        purpose: purpose

      },

      success: function(response) {
        // Handle the response from the PHP script
        // For example, you could update the contents of a <div> element with the response data
        $("#result").html(response);
      },
      error: function(xhr, textStatus, errorThrown) {
        // Handle any errors that occur during the AJAX request
        console.log("Error: " + errorThrown);
      }
    });
  }

  // Trigger the AJAX request on change events for any select box
  $("select").change(handleRequest);

  // Trigger the AJAX request on keypress and change events for the search input and year input
  $("#search, #year").on("keyup change", handleRequest);
});



 



</script>
</body>
</html>