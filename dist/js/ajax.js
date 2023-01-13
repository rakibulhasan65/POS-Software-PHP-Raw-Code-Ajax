jQuery(document).ready(function () {
    jQuery(document).on("click", "#addPurchase", function () {
        var pdate = jQuery('.pdate').val();
        var barcode = jQuery('.barcode').val();
        var invoice = jQuery('.invoice').val();
        var company_name = jQuery('.company_name').val();
        var pQuantity = jQuery('.pQuantity').val();
        var unitPrice = jQuery('.unitPrice').val();
        var costPrice = jQuery('.costPrice').val();
        var total_amoun = jQuery('.total_amoun').val();
        var br_id = jQuery('.br_id').val();
        var product_code = jQuery('.product_code').val();
        var action = 'addPurchase';
        $.ajax({
            url: "././classes/functions.php",
            type: 'POST',
            data: {
                'pdate': pdate,
                'barcode': barcode,
                'invoice': invoice,
                'company_name': company_name,
                'pQuantity': pQuantity,
                'unitPrice': unitPrice,
                'costPrice': costPrice,
                'total_amoun': total_amoun,
                'br_id': br_id,
                'product_code': product_code,
                'action':action
                
            },
            success: function (response) {
                alert("Successfully Add Purchase");
                showPurchaseData();
            }
        });

    });

        jQuery(document).on("click", "#addPurchase", function () {
        var barcode = jQuery('.barcode').val();
        var pQuantity = jQuery('.pQuantity').val();
        var br_id = jQuery('.br_id').val();
        var action = 'addStockProduct';
        $.ajax({
            url: "././classes/functions.php",
            type: 'POST',
            data: {
                'barcode': barcode,
                'pQuantity': pQuantity,
                'br_id': br_id,
                'action':action
                
            },
            success: function (response) {
                console.log("Successfully Add Stock Update Success");
            }
        });

    });

    jQuery(document).on('keyup', '.barcode', function () {
        var barcode = jQuery(this).val();
        jQuery('.availbleStock').val("");
        var action = 'stockShow';
        $.ajax({
            url: "././classes/functions.php",
            type: 'POST',
            dataType: 'JSON',
            data: {
                'barcode': barcode,
                'action': action
            },
            success: function (response) {
                jQuery('.availbleStock').val(response.pQuantity)
            }
        });
    });

    jQuery(document).on('keyup', '.barcode', function () {
        var barcode = jQuery(this).val();
        jQuery('.product_code').val("");
        var action = 'showProductCode';
        $.ajax({
            url: "././classes/functions.php",
            type: 'POST',
            dataType: 'JSON',
            data: {
                'barcode': barcode,
                'action': action
            },
            success: function (response) {
                jQuery('.product_code').val(response.product_code);
            }
        });
    });

    jQuery(document).on('keyup', '.unitPrice', function () {
        var pQuantity = jQuery('.pQuantity').val();
        var unitPrice = jQuery('.unitPrice').val();
        var total_amoun = ( pQuantity* unitPrice );
        jQuery('.total_amoun').val(total_amoun);
    });

    jQuery(document).on('keyup', '.invoice', function () { 
        var invoice = jQuery('.invoice').val();
        jQuery('.costPrice').val("");
        var action = "costPriceFind";
        $.ajax({
            url: "././classes/functions.php",
            type: 'POST',
            dataType: 'JSON',
            data: {
                'invoice' : invoice,
                'action': action
            },
            success: function (response) {
                jQuery('.costPrice').val(response.costPrice)
            }
        });
    });

    jQuery(document).on("click", "#pDelete", function () {
        var id = jQuery(this).val();
        var action = "pDeleteItem";
        $.ajax({
            url: "././classes/functions.php",
            type: 'PoST',
            data: {
                'id': id,
                'action': action
            },
            success: function (response) {
                    alert("Successfully Deleted")
            }
        });
        
    });

});
