<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibhuChem Private Limited</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="template-tdw/d0068/style_31_min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link href="template-tdw/d0068/style_31_min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
    <style>/* Lightbox Styles */
/* Lightbox Styles */
.lightbox {
    display: none; /* Hidden by default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8); /* Black background with opacity */
    z-index: 1000;
    overflow: auto;
}

        
body {
            font-family: Arial, sans-serif;
            background-color: #fff8f0; /* Light background */
            color: #333;
            margin: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            color: #e74c3c; /* Light red color */
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid navy; /* Navy Blue Colour */
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ffffff; /* White background */
            color: black;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .header, .contact {
            background-color: #ffffff; /* White background */
            color: black;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .contact h2 {
            color: #e74c3c; /* Light red color */
            margin-bottom: 20px;
        }
        .contact form {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 15px;
        }
        .contact label {
            font-weight: bold;
        }
        .contact input[type="text"],
        .contact input[type="email"],
        .contact textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .contact textarea {
            resize: vertical;
            min-height: 100px;
        }
        .contact button {
            background-color: navy; /* Orange color */
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .contact button:hover {
            background-color: navy;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: navy; /* Orange color */
            color: #fff;
            border-radius: 8px;
        }
    
        #sidebar {
            display: none; /* Hidden by default */
        }
.lightbox-content {
    position: relative;
    margin: 5% auto;
    padding: 20px;
    width: 80%;
    max-width: 1000px;
    background: #fff;
    border-radius: 8px;
    display: flex;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: transparent;
    border: none;
    font-size: 24px;
    color: #333;
    cursor: pointer;
}

.lightbox-inner {
    display: flex;
    width: 100%;
}

.product-card {
    flex: 1;
    margin-right: 20px;
}

.enquiry-form {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.enquiry-form h4 {
    margin-bottom: 20px;
}

.enquiry-form .form-group {
    margin-bottom: 15px;
}

.enquiry-form .btn-primary {
    margin-top: 10px;
}

        
    </style>
</head>

<body>
<header class="bg-white text-gray-800 shadow-lg rounded-lg p-6 mb-6 flex justify-between items-center border-b border-gray-700">
  <div class="flex items-center">
    <img src="assets/img/favicon.png" alt="Company Logo" class="h-16 w-16 mr-4"> <!-- Logo Image -->
    <div>
      <h1 class="text-3xl font-bold mb-2 text-black">VibhuChem Private Limited</h1>
      <p class="text-lg mb-1">Dadra and Nagar Haveli and Daman & Diu</p>
      <p class="text-lg mb-1">GST No. <span class="font-semibold">24AALFT9337Q2Z8</span></p>
    </div>
  </div>
  <div class="space-x-4">
    <a href="tel:+919512238154" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">Call +91-9512238154</a>
    <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">Send Email</button>
    <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out get-quote-btn">Get Quote</button>
    <button id="sidebarToggle" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
            <i class="fa-solid fa-bars"></i> <!-- Font Awesome Icon -->
        </button>
            <!-- Popup Lightbox (Place this at the bottom of your body section) -->
            <div id="quoteModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Submit Your Quotation</h2>
                    <form id="quoteForm">
                        <div class="form-group">
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div>
                                <label for="company">Company Name:</label>
                                <input type="text" id="company" name="company" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="quantity">Quantity: (in Ltrs.)</label>
                                <input type="number" id="quantity" name="quantity" required>
                            </div>
                            <div>
                                <label for="rate">Rate:</label>
                                <input type="text" id="rate" name="rate" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="mobile">Mobile:</label>
                                <input type="tel" id="mobile" name="mobile" required pattern="[0-9]{10}">
                            </div>
                            <div>
                                <label for="material">Material Name:</label>
                                <input type="text" id="material" name="material" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="location">Location:</label>
                                <input type="text" id="location" name="location" required>
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - VibhuChem Private Limited</title>
   
</head>
<body>
<nav id="sidebar" class="bg-white text-white p-4 border-r border-gray-300 rounded-lg shadow-lg z-10 fixed"
    style="width: 250px; height:auto;">
    <ul class="list-none p-0 m-0 space-y-3">
        <li>
            <a href="index.php" class="nav-link font-bold hover:bg-red-700 rounded-lg transition duration-300 block px-3 py-2">Home</a>
        </li>
        <li>
            <a href="about.php" class="nav-link font-bold hover:bg-red-700 rounded-lg transition duration-300 block px-3 py-2">About Us</a>
        </li>
        <li>
            <a href="contact.php" class="nav-link font-bold hover:bg-red-700 rounded-lg transition duration-300 block px-3 py-2">Contact Us</a>
        </li>
        <li>
            <a href="products.php" class="nav-link font-bold hover:bg-red-700 rounded-lg transition duration-300 block px-3 py-2">Our Products</a>
        </li>
        <li class="mt-4">
            <a href="#" class="nav-link text-white font-semibold hover:bg-red-700 rounded-lg transition duration-300 block px-3 py-2">+ View all</a>
            <!-- <form onsubmit="return searchCheck();" id="cse-search-box" method="get" name="frm" class="mt-2">
                <input type="search" onblur="closetext();" onmousedown="searchClear();" id="ss" placeholder="Search Products/Services" autocomplete="off"
                    class="w-full p-2 text-gray-800 rounded-lg" style="width: 200px;">
                <span class="pa r01 t01 cp" onclick="return searchCheck();">
                    <svg class="Magn" width="20" height="20" fill="currentColor">
                        <use xlink:href="#zoom"></use>
                    </svg>
                </span>
            </form> -->
        </li>
    </ul>
</nav>
<Main >
    <div class="container">
        <div class="header ">
            <h1>About Us</h1>
        </div>

        <table>
            <tr>
                <th>Basic Information</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>Company Name</td>
                <td>VibhuChem Private Limited</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>Dadra and Nagar Haveli and Daman and Diu , India.</td>
            </tr>
            <tr>
                <td>GST No.</td>
                <td>07AAICN5203H1ZM</td>
            </tr>
            <tr>
                <td>Call</td>
                <td>07942704896</td>
            </tr>
            <tr>
                <td>Response Rate</td>
                <td>76%</td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Factsheet</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>Nature of Business</td>
                <td>Wholesaler</td>
            </tr>
            <tr>
                <td>Additional Business</td>
                <td>Exporter, Trader, Importer, Distributor</td>
            </tr>
            <tr>
                <td>Company CEO</td>
                <td>Basavaraj Avvappa Tallolli</td>
            </tr>
            <tr>
                <td>Registered Address</td>
                <td>Build-a/ff, Pearl Avenue, Opp Musa, Village Dungra - 396191, Vapi, Valsad, Pardi, Gujarat, India.</td>
            </tr>
            <tr>
                <td>Total Number of Employees</td>
                <td>Upto 10 People</td>
            </tr>
            <tr>
                <td>Year of Establishment</td>
                <td>2024</td>
            </tr>
            <tr>
                <td>Legal Status of Firm</td>
                <td>Private Limited Company (Ltd./Pvt.Ltd.)</td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Trade & Market</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>Export Percentage</td>
                <td>40-60%</td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Statutory Profile</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>TAN No.</td>
                <td>DELN2*****</td>
            </tr>
            <tr>
                <td>Banker</td>
                <td>AXIS BANK, Axis Bank Limited</td>
            </tr>
            <tr>
                <td>GST No.</td>
                <td>07AAICN5203H1ZM</td>
            </tr>
            <tr>
                <td>CIN No.</td>
                <td>U47300GJ2024PTC152431</td>
            </tr>
        </table>

        <div class="container">
        <h1>Contact Us</h1>
        <div class="contact">
            <h2>Send us a Quick Message</h2>
            <form action="save_to_csv.php" method="post">
                <label for="mobile_number">Your Mobile Number:</label>
                <input type="text" id="mobile_number" name="mobile_number" placeholder="+91" required>
                
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
                
                <label for="message">Describe what You are Looking For:</label>
                <textarea id="message" name="message" placeholder="Enter your message here" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
        <footer class="pd10">
    <div class="dib vat cntct_dtlsTxt mr27"><span class="fs16 clr0 fwb">VibhuChem Private Limited</span>
      <div class="mr26">
        <div class="mr15 dfx jcfs"><span class="mr6"><svg class="own">
              <use xlink:href="#own"></use>
            </svg></span>
          <div><span class="db fs14 clr3">Contact Person</span><span class="db fs14 lh1 clr0 mr11">Basavaraj
              Tallolli
              (CEO)</span></div>
        </div>
        <div class="mr15 dfx jcfs"
          onclick="_gaq.push(['b._trackEvent','Bottom','google-map','d0068']);recEvent('Bottom','google-map','d0068');">
          <span class="mr6"><svg class="loc">
              <use xlink:href="#loc"></use>
            </svg></span>
          <div>
            <a href="maps.html?q=28.69267000,77.15273000" target="_blank">
              <span class="db fs14 clr3">Address</span><span class="db fs14 lh1 clr0 mr11">VibhuChem
                Private Limited<br>DG-18, GARMENT ZONE, DUNGRA, VAPI. GUJARAT 396193</span>
            </a><span class="db fs13 cp fwn gDir clr4 mr11"><a href="maps.html?q=28.69267000,77.15273000"
                target="_blank">Get Directions</a></span>
          </div>
        </div>
        <div class="mr15 dfx jcfs"
          onclick="imgset_zoom('CallUs','Send_sms_email');_gaq.push(['b._trackEvent','Bottom','CallUs/1/homepage','d0068']);recEvent('Bottom','CallUs/1/homepage','d0068');">
          <span class="mr6"><svg class="clp">
              <use xlink:href="#clp"></use>
            </svg></span>
          <div class="cp tooltip"><span class="db fs14 clr3">Call Us</span><span
              class="db fs18 lh1 clr0 mr11 fwb tollfree1">+91 9512238154</span>
            <span class="tooltiptext">Call Response Rate: 76% </span>
          </div>
        </div>
        <div class="mr15 dfx">
          <div class="hvnm cp mr6"
            onclick="imgset_zoom('sendSMS','Send_sms_email');_gaq.push(['b._trackEvent','Bottom','SendSms/1/homepage','d0068']);recEvent('Bottom','SendSms/1/homepage','d0068');">
            <p class="pt10 pb10 brds3 brd2 dfx jcc flxAiC"><span class="mr10"><svg class="clp">
                  <use xlink:href="#clp"></use>
                </svg></span><span class="clr4 fs16 vam fwb"><span class="db tdp">Send SMS</span></span>
            </p>
          </div>
          <div class="hvnm cp"
            onclick="imgset_zoom('sendEmail','Send_sms_email');_gaq.push(['b._trackEvent','Bottom','SendEmail/1/homepage','d0068']);recEvent('Bottom','SendEmail/1/homepage','d0068');">
            <p class="pt10 pb10 brds3 bg3 dfx jcc flxAiC"><span class="mr10"><svg xmlns="https://www.w3.org/2000/svg"
                  width="23.827" height="17.87" viewbox="0 0 23.827 17.87">
                  <path id="email-2"
                    d="M21.593,59.882H2.234A2.236,2.236,0,0,0,0,62.116v13.4a2.236,2.236,0,0,0,2.234,2.234H21.593a2.236,2.236,0,0,0,2.234-2.234v-13.4a2.236,2.236,0,0,0-2.234-2.234Zm0,1.489a.74.74,0,0,1,.285.058l-9.965,8.637L1.948,61.429a.741.741,0,0,1,.285-.058Zm0,14.892H2.234a.745.745,0,0,1-.745-.745V63l9.936,8.611a.746.746,0,0,0,.976,0L22.338,63V75.518A.745.745,0,0,1,21.593,76.263Z"
                    transform="translate(0 -59.882)" fill="#fff"></path>
                </svg></span><span class="clr5 fs16 vam fwb tdp">Send Email</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="dib vat mr27 CmFtr"><span class="fs16 clr0 fwb"><a href="profile.html">Company Profile</a></span>
      <ul class="Ftrul mr26 clr0 fs14 lh1 ">
        <li><a href="">Home</a></li>
        <li><a href="profile.html">About Us</a></li>
        <li><a href="our-products.html">Our Products</a></li>
        <li><a href="enquiry.html">Contact Us</a></li>
        <li><a href="sitemap.html">Sitemap</a></li>
      </ul>
    </div>
    <div class="dib vat PrdFtr"><span class="fs16 clr0 fwb db"><a href="our-products.html">Products &
          Services</a></span>
      <ul class="Ftrul mr26 clr0 fs14 lh1 dib vat mr17">
        <li><a href="base-oil.html">Base Oil</a></li>
        <li><a href="turpentine-oil.html">Turpentine Oil</a></li>
        <li><a href="diesel-oil.html">Diesel Oil</a></li>
        <li><a href="chemical-solvent.html">Chemical Solvent</a></li>
        <li><a href="light-diesel-oil.html">Light Diesel Oil</a></li>
        <li><a href="gas-engine-oil.html">Gas Engine Oil</a></li>
        <li><a href="diesel.html">Diesel</a></li>
        <li><a href="biodiesel-oil.html">Biodiesel Oil</a></li>
      </ul>
      <ul class="Ftrul mr26 clr0 fs14 lh1 dib vat mr17">
        <li aaa=""><a href="industrial-chemicals.html">Industrial Chemicals</a></li>
        <li aaa=""><a href="crude-oil.html">Crude Oil</a></li>
        <li aaa=""><a href="c9-solvent.html">C9 Solvent</a></li>
        <li aaa=""><a href="fuel-oil.html">Fuel Oil</a></li>
        <li aaa=""><a href="mineral-oil.html">Mineral Oil</a></li>
        <li aaa=""><a href="bio-diesel.html">Bio Diesel</a></li>
      </ul>
    </div>
    <div class="dfx jcc mr15"><span class="clr0 fs14 lh6">Share Us </span><span class="db cp mr10 soclAnimtn"><a
          class="db bg0 pr" target="_blank"
          onclick="_gaq.push(['b._trackEvent','Bottom','facebook','d0068']); recEvent('Bottom','facebook','d0068');"
          href="login.php?u=https://vibhuchem.com/"><svg class="facebok pa" aria-label="Facebook">
            <use xlink:href="#facebook"></use>
          </svg></a></span><span class="db cp mr10 soclAnimtn"><a class="db bg0 pr" target="_blank"
          onclick="_gaq.push(['b._trackEvent','Bottom','twitter','d0068']); recEvent('Bottom','twitter','d0068');"
          href="https://twitter.com/share?url=https://www.vibhuchem.com"><svg class="twtr pa" aria-label="Twitter">
            <use xlink:href="#twitter"></use>
          </svg></a></span><span class="db cp mr10 soclAnimtn"><a class="db bg0 pr" target="_blank"
          onclick="_gaq.push(['b._trackEvent','Bottom','linkedin','d0068']); recEvent('Bottom','linkedin','d0068');"
          href="uas/login.html?url=https://www.vibhuchem.com/"><svg class="lnkdin pa" aria-label="Linkedin">
            <use xlink:href="#linkedin"></use>
          </svg></a></span></div>
    </Main>
  </footer>
        <div class="footer">
            © 2024 VibhuChem Private Limited
        </div>
    </div>
    <script>
    // Sidebar Toggle Function
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');

    sidebarToggle.addEventListener('click', () => {
        if (sidebar.style.display === 'none' || sidebar.style.display === '') {
            sidebar.style.display = 'block'; // Show the sidebar
        } else {
            sidebar.style.display = 'none'; // Hide the sidebar
        }
    });
</script>
</body>
</html>
