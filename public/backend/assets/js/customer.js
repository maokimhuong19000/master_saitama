<><><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>
    $(document).ready(function() {
        // Function to update total price based on quantity change
        function updateTotalPrice(card) {
            var quantity = parseInt(card.find('input[data-rule="quantity"]').val());
            var pricePerItem = parseFloat(card.find('.sw-19').text().replace('$ ', ''));
            var totalPrice = quantity * pricePerItem;
            card.find('.col-6.col-md-3.d-flex.justify-content-end.justify-content-md-start.align-items-center .h6.mb-0').text('$ ' + totalPrice.toFixed(2));
        }
        // Initial calculation for each card
    }

        // Initial calculation for each card
    $('.card.mb-2').each(function() {updateTotalPrice($(this))};
    );

    // Update total price on quantity change
    $('input[data-rule="quantity"]').on('input', function()
    var card = $(this).closest('.card.mb-2');
    updateTotalPrice(card);
    );
    );
</script></>



<script>
        $(document).ready(function() {
            // Function to update checkout summary
            function updateCheckoutSummary() {
                var totalItems = 0;
                var subtotal = 0;

                // Loop through each product card
                $('.card.mb-2').each(function () {
                    var quantity = parseInt($(this).find('input[data-rule="quantity"]').val());
                    var pricePerItem = parseFloat($(this).find('.sw-19').text().replace('$ ', ''));
                    var totalPrice = quantity * pricePerItem;

                    totalItems += quantity;
                    subtotal += totalPrice;
                });

                var shipping = 12.50; // Example shipping cost
                var saleDiscount = -24.50; // Example discount

                var grandTotal = subtotal + shipping + saleDiscount;

                // Update values in the checkout summary
                $('.text-small.text-muted.mb-1:contains("ITEMS")').next().find('.text-alternate').text(totalItems);
                $('.text-small.text-muted.mb-1:contains("TOTAL")').next().find('.text-alternate').text('$ ' + subtotal.toFixed(2));
                $('.text-small.text-muted.mb-1:contains("SHIPPING")').next().find('.text-alternate').text('$ ' + shipping.toFixed(2));
                $('.text-small.text-muted.mb-1:contains("SALE")').next().find('.text-alternate').text('$ ' + saleDiscount.toFixed(2));
                $('.text-small.text-muted.mb-1:contains("GRAND TOTAL")').find('.cta-2 span').text('$ ' + grandTotal.toFixed(2));
            }
            // Initial calculation for checkout summary
        }

        // Initial calculation for checkout summary
        updateCheckoutSummary();

        // Update checkout summary on quantity change
        $('input[data-rule="quantity"]').on('input', function() {updateCheckoutSummary()};
        );
        );
    </script></>
