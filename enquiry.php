<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VibhuChem Private Limited</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link href="template-tdw/d0068/style_31_min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Lightbox Styles */
    .lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      z-index: 1000;
      overflow: auto;
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
      width: 50%;
    }

    .product-card {
      flex: 1;
      margin-right: 20px;
    }

    .enquiry-form-lightbox {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .enquiry-form-lightbox h4 {
      margin-bottom: 20px;
    }

    .enquiry-form-lightbox .form-group {
      margin-bottom: 15px;
    }

    .enquiry-form-lightbox .btn-primary {
      margin-top: 10px;
    }

    /* Tailwind CSS lightbox overlay */
    .modal-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: white;
      border-radius: 8px;
      width: 90%;
      max-width: 400px;
      padding: 1.5rem;
      animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .modal-content input {
      border: 1px solid #e5e7eb;
      border-radius: 0.375rem;
      padding: 0.5rem;
      width: 100%;
    }
    body {
            background-image: url('https://picsum.photos/1920/1080');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .contact-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            max-width: 900px;
            margin: 50px auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
  </style>
</head>

<body>
  <header class="bg-white text-gray-800 shadow-lg rounded-lg p-6 mb-6 flex justify-between items-center border-b border-gray-700">
    <div class="flex items-center">
    <a href="index.php"><img src="assets/img/favicon.png" alt="Company Logo" class="h-16 w-16 mr-4"></a> 
      <div>
        <h1 class="text-3xl font-bold mb-2 text-blue-950">VibhuChem Private Limited</h1>
        <p class="text-lg mb-1">Dadra and Nagar Haveli and Daman & Diu</p>
        <p class="text-lg mb-1">GST No. <span class="font-semibold">24AALFT9337Q2Z8</span></p>
      </div>
    </div>
    <div class="space-x-4">
      <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
        <a href="tel:+919512238154" class=" text-white font-semibold ">Call +91-9512238154</a></button>
      <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@vibhuchem.com" target="_blank" class=" text-white font-semibold ">Send Email</a></button>
      <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out get-quote-btn">Get Quote</button>
    </div>

    <!-- Popup Lightbox -->
    <div id="quoteModal" class="modal fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 hidden">
      <div class="modal-content bg-white rounded-lg shadow-lg p-6 max-w-lg mx-auto relative">
        <span class="close absolute top-2 right-2 text-gray-600 hover:text-gray-900 cursor-pointer text-2xl">&times;</span>
        <h2 class="text-2xl font-semibold mb-4 text-black">Submit Your Quotation</h2>
        <form id="quoteForm" class="enquiry-form-lightbox" method="POST" action="save_quotation.php">
          <div class="form-group mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="name" class="block text-gray-700 font-medium">Name:</label>
              <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
            <div>
              <label for="company" class="block text-gray-700 font-medium">Company Name:</label>
              <input type="text" id="company" name="company" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
          </div>
          <div class="form-group mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="quantity" class="block text-gray-700 font-medium">Quantity: (in Ltrs.)</label>
              <input type="number" id="quantity" name="quantity" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
            <div>
              <label for="rate" class="block text-gray-700 font-medium">Rate:</label>
              <input type="text" id="rate" name="rate" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
          </div>
          <div class="form-group mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="mobile" class="block text-gray-700 font-medium">Mobile:</label>
              <input type="tel" id="mobile" name="mobile" required pattern="[0-9]{10}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
            <div>
              <label for="material" class="block text-gray-700 font-medium">Material Name:</label>
              <input type="text" id="material" name="material" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
          </div>
          <div class="form-group mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="location" class="block text-gray-700 font-medium">Location:</label>
              <input type="text" id="location" name="location" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
            <div>
              <label for="payment" class="block text-gray-700 font-medium">Payment Terms:</label>
              <input type="text" id="payment" name="payment" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>
          </div>
          <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">Submit</button>
        </form>
      </div>
    </div>
  </header>

  <main class="bg-gray-100 contact-container">
    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-8 text-gray-800">Contact Us</h2>
        <div class="flex flex-col md:flex-row">
            <!-- Left Side: Contact Details -->
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                <h4 class="text-xl font-semibold mb-4 text-gray-700">Contact Details</h4>
                <p class="text-gray-700 mb-2"><strong>Contact Person:</strong> Basavaraj Tallolli (CEO)</p>
                <p class="text-gray-700 mb-2"><strong>Address:</strong> VibhuChem Private Limited,<br> Build-a/ff, Pearl Avenue, Opp Musa,<br> Village Dungra - 396191, Vapi,<br> Valsad, Pardi, Gujarat, India.</p>
                <p class="text-gray-700"><strong>Call Us:</strong> 9512238154</p>
            </div>
            <!-- Right Side: Form -->
            <div class="md:w-1/2">
                <form action="process_form.php" method="POST">
                    <div class="mb-4">
                        <label for="mobileNumber" class="block text-gray-700 font-semibold mb-2">Your Mobile Number</label>
                        <input type="text" id="mobileNumber" name="mobileNumber" placeholder="Enter your number" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Describe your requirement in detail" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-red-600 text-white font-bold py-3 rounded-lg hover:bg-red-700 transition duration-300">Contact Now</button>
                </form>
            </div>
        </div>
    </div>
</main>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const modal = document.getElementById('quoteModal');
      const openModalButton = document.querySelector('.get-quote-btn');
      const closeModalButton = modal.querySelector('.close');

      openModalButton.addEventListener('click', function () {
        modal.classList.remove('hidden');
      });

      closeModalButton.addEventListener('click', function () {
        modal.classList.add('hidden');
      });

      window.addEventListener('click', function (event) {
        if (event.target === modal) {
          modal.classList.add('hidden');
        }
      });
    });
  </script>
</main>

</html>
