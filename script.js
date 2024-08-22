

        $(document).ready(function() {
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
                        name: "SN-500", 
                        image: "images/sn500.webp",
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
                        name: "En 590 10 ppm",  
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
            function renderProducts(category) {
                const gallery = $("#product-gallery");
                gallery.empty();
        
                if (products[category]) {
                    products[category].forEach(product => {
                        const productHTML = `
                        <div class="col-md-4 product-item" style="width: 18rem;">
    <article class="card-content">
        <div class="card-body product-description">
            <figure class="product-image">
                <img src="${product.image}" class="card-img-top" alt="${product.name} image showing ${product.description}">
            </figure>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h2 class="product-name"><strong>Name:</strong> ${product.name}</h2></li>
                <li class="list-group-item"><p class="product-description"><strong>Description:</strong> ${product.description}</p></li>
                <li class="list-group-item"><strong>Unit:</strong> ${product.unit}</li>
                <li class="list-group-item"><strong>Measurement:</strong> ${product.measurement}</li>
            </ul>
            <div class="card-body">
                <button type="button" class="btn btn-danger card-link">Order</button>
                <button type="button" class="btn btn-primary get-quote-btn" onclick="openModal('${product.name}', '${product.description}', '${product.image}')">Get Quote</button>
            </div>
        </div>
    </article>
</div>

                        `;
                        gallery.append(productHTML);
                    });
                }
            }
        
            // Handle lightbox interactions
            $(document).on('click', '.card-link', function() {
                const productDetails = $(this).closest('.product-description').html();
                $('#lightbox .lightbox-inner').html(productDetails);
                $('#lightbox').fadeIn();
            });
        
            $('#close-lightbox').click(function() {
                $('#lightbox').fadeOut();
            });
        
            $(window).click(function(event) {
                if ($(event.target).is('#lightbox')) {
                    $('#lightbox').fadeOut();
                }
            });
        
            // Handle modal interactions for quotes
            const quoteModal = $('#quoteModal');
            const quoteForm = $('#quoteForm');
            const closeQuoteModal = $(".close");
        
            $(document).on("click", ".get-quote-btn", function () {
                quoteModal.show();
            });
        
            closeQuoteModal.click(function () {
                quoteModal.hide();
            });
        
            $(window).click(function (event) {
                if ($(event.target).is(quoteModal)) {
                    quoteModal.hide();
                }
            });
        
            quoteForm.submit(function (event) {
                event.preventDefault();
                const formData = $(this).serialize();
        
                $.ajax({
                    type: "POST",
                    url: "save_quotation.php",
                    data: formData,
                    success: function () {
                        alert("Quotation submitted successfully!");
                        quoteModal.hide();
                    },
                    error: function () {
                        alert("There was an error submitting the form.");
                    }
                });
            });
        
            // Handle contact modal interactions
            const contactModal = $('#contactModal');
            const contactBtn = $('#contactBtn');
            const closeContactModal = $('#closeContactModal');
        
            contactBtn.click(() => {
                contactModal.show();
            });
        
            closeContactModal.click(() => {
                contactModal.hide();
            });
        
            $(window).click((e) => {
                if ($(e.target).is(contactModal)) {
                    contactModal.hide();
                }
            });
        
            // Handle enquiry modal interactions
            window.openModal = function(productName, productDescription, productImage) {
                $('#enquiryTitle').text(productName);
                $('#enquiryDescription').text(productDescription);
                $('#enquiryImage').attr('src', productImage);
                $('#enquiryProductName').val(productName);
                $('#enquiryModal').removeClass('hidden');
            };
        
            function closeEnquiryModal() {
                $('#enquiryModal').addClass('hidden');
            }
        
            $('#enquiryClose').click(closeEnquiryModal);
        
            $(window).click(function(event) {
                if ($(event.target).is('#enquiryModal')) {
                    closeEnquiryModal();
                }
            });
        
            $('#enquiryForm').submit(function(event) {
                event.preventDefault();
                const formData = $(this).serialize();
        
                $.ajax({
                    type: "POST",
                    url: "submit_enquiry.php",
                    data: formData,
                    success: function() {
                        alert("Enquiry submitted successfully!");
                        closeEnquiryModal();
                    },
                    error: function() {
                        alert("There was an error submitting the form.");
                    }
                });
            });
        
            // Load default category on page load
            renderProducts("Base Oil");
        
            // Handle category selection
            $(".nav-link[data-category]").click(function () {
                const category = $(this).data("category");
                renderProducts(category);
            
        });
    });        
    // Function to reload the page
function reloadPage() {
    window.location.reload();
}

// Function to close the modal
function closeModal() {
    document.getElementById('enquiryModal').classList.add('hidden');
}

// Event listeners for the modal
document.getElementById('enquiryClose').addEventListener('click', closeModal);
window.addEventListener('click', function(event) {
    if (event.target === document.getElementById('enquiryModal')) {
        closeModal();
    }
});
