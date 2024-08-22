$(document).ready(function () {
    // Sample data for products
    const products = {
        "Base Oil": [
            { 
                name: "SN-70", 
                image: "images/sn70.jpg",
                description: "High-quality base oil suitable for various industrial applications.",
                unit: "Loose",
                measurement: "per litre"
            },
            { 
                name: "SN-150", 
                image: "images/sn70.jpg",
                description: "Versatile base oil with excellent performance characteristics.",
                unit: "Loose",
                measurement: "per litre"
            },
            { 
                name: "Base Oil 3", 
                image: "base-oil-3.jpg",
                description: "Premium base oil designed for high-temperature operations.",
                unit: "Loose",
                measurement: "per litre"
            },
            { 
                name: "Base Oil 4", 
                image: "base-oil-4.jpg",
                description: "Base oil with enhanced stability and low volatility.",
                unit: "Loose",
                measurement: "per litre"
            }
        ],
        "Turpentine Oil": [
            { 
                name: "Distilled Turpentine Oil", 
                image: "distilled-turpentine-oil.jpg",
                description: "Pure distilled turpentine oil used in various applications.",
                unit: "Loose",
                measurement: "per litre"
            },
            { 
                name: "Mineral Turpentine Oil", 
                image: "mineral-turpentine-oil.jpg",
                description: "Mineral turpentine oil with a wide range of uses.",
                unit: "Loose",
                measurement: "per litre"
            },
            { 
                name: "Mineral Turpentine Oil Cut", 
                image: "mineral-turpentine-oil-cut.jpg",
                description: "Cut form of mineral turpentine oil for specialized applications.",
                unit: "Loose",
                measurement: "per litre"
            }
        ],
        "Diesel Oil": [
            { 
                name: "LDO- Light Diesel oil",  
                image: "images/ldo.jpeg",
                description: "Standard diesel oil for various industrial uses.",
                unit: "Loose",
                measurement: "per litre"
            }
        ],
        "Chemical Solvent": [
            { 
                name: "Chemical Solvent 1", 
                image: "chemical-solvent-1.jpg",
                description: "High-purity chemical solvent for industrial processes.",
                unit: "Loose",
                measurement: "per litre"
            },
            { 
                name: "Chemical Solvent 2", 
                image: "chemical-solvent-2.jpg",
                description: "Chemical solvent with specific solvent properties for specialized use.",
                unit: "Loose",
                measurement: "per litre"
            }
        ],
        "Light Diesel Oil": [
            { 
                name: "Light Diesel Oil", 
                description: "LDO is a Light Diesel Oil that comes in a light yellow color, ideal for use in various machinery and engines.",
                image: "images/images.jpeg",
                unit: "Loose",
                measurement: "per litre"
            }
        ],
        "Gas Engine Oil": [
            { 
                name: "Gas Engine Oil 1", 
                image: "gas-engine-oil-1.jpg",
                description: "Specialized gas engine oil with enhanced performance for gas engines.",
                unit: "Loose",
                measurement: "per litre"
            }
        ],
        "Diesel": [
            { 
                name: "Diesel 1", 
                image: "diesel-1.jpg",
                description: "Standard diesel for various heavy-duty applications.",
                unit: "Loose",
                measurement: "per litre"
            }
        ]
    };

     $(document).ready(function() {
            // Open lightbox
            $('.card-link').click(function() {
                $('#lightbox').fadeIn();
            });
    
            // Close lightbox
            $('#close-lightbox').click(function() {
                $('#lightbox').fadeOut();
            });
    
            // Close lightbox if clicking outside of it
            $(window).click(function(event) {
                if ($(event.target).is('#lightbox')) {
                    $('#lightbox').fadeOut();
                }
            });
        });
    
    // Function to render products based on category
    function renderProducts(category) {
        const gallery = $("#product-gallery");
        gallery.empty(); // Clear the gallery

        if (products[category]) {
            products[category].forEach(product => {
                const productHTML =`
<div class="lightbox" id="lightbox">
    <div class="lightbox-content">
        <!-- Close Button -->
        <button class="close-btn" id="close-lightbox">&times;</button>
        <!-- Lightbox Content -->
        <div class="lightbox-inner">
            <!-- Product Card in Lightbox -->
            <div class="product-card">
               
                <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    
                </div>
                <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Name:</strong> ${product.name}</li>
    <li class="list-group-item">
        
    </li>
    <li class="list-group-item"><strong>Description:</strong> ${product.description}</li>
    <li class="list-group-item"><strong>Unit:</strong> ${product.unit}</li>
    <li class="list-group-item"><strong>Measurement:</strong> ${product.measurement}</li>
</ul>

                
            </div>
            <!-- Enquiry Form -->
            <div class="enquiry-form">
                <h4>Share your requirement with VibhuChem Private Limited</h4>
                <form>
                    <div class="form-group">
                        <label for="mobileNumber">Mobile Number:</label>
                        <input type="text" class="form-control" id="mobileNumber" placeholder="Enter your mobile number">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 product-item" style="width: 18rem;">
    <div class="card-content">
        <img src="${product.image}" class="card-img-top" alt="${product.name}">
        <div class="card-body">
            
            
        </div>
        <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Name:</strong> ${product.name}</li>
    <li class="list-group-item">
        
    </li>
    <li class="list-group-item"><strong>Description:</strong> ${product.description}</li>
    <li class="list-group-item"><strong>Unit:</strong> ${product.unit}</li>
    <li class="list-group-item"><strong>Measurement:</strong> ${product.measurement}</li>
</ul>

        <div class="card-body">
            <button type="button" class="btn btn-danger card-link">Quote</button>
        </div>
    </div>
</div>

                        `;

                gallery.append(productHTML);
            });
        }
    }
    $(document).on('click', '.card-link', function() {
        // Open a new tab with a specified URL
        window.open('http://localhost/vibhuchemoil/admin.php', '_blank');
    });
    // Load products for the selected category
    $(".nav-link[data-category]").click(function () {
        const category = $(this).data("category");
        renderProducts(category);
    });

    // Load default category on page load
    renderProducts("Base Oil");
});
$(document).ready(function () {
    // Get the modal
    var modal = document.getElementById("quoteModal");

    // Get the button that opens the modal
    var btns = document.querySelectorAll(".get-quote-btn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btns.forEach(btn => {
        btn.onclick = function () {
            modal.style.display = "block";
        };
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    // Handle form submission
    $("#quoteForm").submit(function (event) {
        event.preventDefault();
        const formData = $(this).serialize();

        // Save form data to a new folder
        $.ajax({
            type: "POST",
            url: "save_quotation.php",
            data: formData,
            success: function () {
                alert("Quotation submitted successfully!");
                modal.style.display = "none";
            },
            error: function () {
                alert("There was an error submitting the form.");
            }
        });
    });
});