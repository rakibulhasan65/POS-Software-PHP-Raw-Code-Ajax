


jQuery(document).ready(function () {
    function salePriceShow() {
        jQuery(document).on('keyup', '.barcode', function () {
            var barcode = jQuery(this).val();
            jQuery('.sPrice').val("");
        var action = "salesBarcode";
        $.ajax({
            url: "././classes/salesFunc.php",
            type: "POST",
            dataType:"JSON",
            data: {
                'barcode': barcode,
                'action': action
            },
            success: function (response) {
                jQuery('.sPrice').val(response.unitPrice)
                
            }
        });
        
    });
    }
    function saleStockShow() {
        jQuery(document).on('keyup', '.barcode', function () {
            var barcode = jQuery(this).val();
            jQuery('.stock').val("");
            var action = "salesStock";
            $.ajax({
                url: "././classes/salesFunc.php",
                type: "POST",
                dataType: "JSON",
                data: {
                    'barcode': barcode,
                    'action': action
                },
                success: function (response) {
                    jQuery('.stock').val(response.pQuantity)
                }
            });
        });

    }

    function totalAmount() {
        jQuery(document).on('keyup', '.sQuentity', function () {
        var sQuentity = jQuery(this).val();
        var sPrice = jQuery('.sPrice').val();
        var totalAmount = (sPrice * sQuentity);
        jQuery('.sTotal').val(totalAmount);
    });
    }

    jQuery(document).on('click', '.salesAdd', function () { 
        var totalQty = jQuery('.sQuentity').val();
        var salesAmount = jQuery('.sTotal').val();
        jQuery('.sTotalQuantity').val(totalQty);
        jQuery('.srTotalAmount').val(salesAmount);
        
    });

    function totalDesCon() {
        jQuery(document).on('change', '#desPursent', function () {
        jQuery('.sAmount').val(""); 
        var totalSamount = jQuery('.srTotalAmount').val();
        var disParsent = jQuery('#desPursent').val();
        var totalDisAmount = (totalSamount * disParsent) / 100; 
        jQuery('.sAmount').val(totalDisAmount); 
    });
    }
    

    function grandTotalFinc() {
        jQuery(document).on('change', '#desPursent', function () {
            jQuery('.grandTotal').val("");
            var totalSamount = jQuery('.srTotalAmount').val();
            var sAmount = jQuery('.sAmount').val();
            var gTotal = (totalSamount - sAmount);
            jQuery('.grandTotal').val(gTotal);

        });
    }
    function paymentSales() {
        jQuery(document).on('keyup', '.payment', function () {
        var totalPayment = jQuery('.grandTotal').val();
        var payment = jQuery('.payment').val();
            var totalDeu = (totalPayment - payment);
            var deuTotal = (totalDeu).toFixed(2);
        jQuery('.deu').val(deuTotal);

    });
    }
    

    jQuery(document).on('click', '.printSave', function () {
        var invoice = jQuery('.invoice').val();
        var barcode = jQuery('.barcode').val();
        var sPrice = jQuery('.sPrice').val();
        var sTotalQuantity = jQuery('.sTotalQuantity').val();
        var srTotalAmount = jQuery('.srTotalAmount').val();
        var desPursent = jQuery('#desPursent').val();
        var sAmount = jQuery('.sAmount').val();
        var grandTotal = jQuery('.grandTotal').val();
        var payment = jQuery('.payment').val();
        var deu = jQuery('.deu').val();
        var action = "salesReportPrint";
        $.ajax({
                url: "././classes/salesFunc.php",
                type: "POST",
                data: {
                    'invoice' : invoice,
                    'barcode' : barcode,
                    'sPrice' : sPrice,
                    'sTotalQuantity' : sTotalQuantity,
                    'srTotalAmount' : srTotalAmount,
                    'desPursent' : desPursent,
                    'sAmount' : sAmount,
                    'grandTotal' : grandTotal,
                    'payment' : payment,
                    'deu' : deu,
                    'action': action
                },
                success: function (response) {
                    alert("Report Print OK");
                }
            });

    });

    jQuery(document).on('click', '.printSave', function () {
            var invoice = jQuery('.invoice').val();
            var action = "salesSummary";
            $.ajax({
                url: "././classes/salesFunc.php",
                type: "POST",
                data: {
                    'invoice': invoice,
                    'action': action
                },
                success: function (response) {
                    console.log(response);
                    jQuery('.tData').html(response);
                }
            });
    });



        // call back function 
    
    salePriceShow();
    saleStockShow();
    totalAmount();
    totalDesCon();
    grandTotalFinc();
    paymentSales();
});