<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var selected_currency = '';
    var aLink;
    function getCurrency() {
        console.log($(this));
       if( !$(this)[0] || !($(this)[0].nodeName === "SELECT")) {
        selected_currency = 'USD';
        selectedValue = 'USD'; 
        $(".currency_change").val('USD')
        {{-- console.log(selected_currency,selectedValue); --}}
        //$(".currency_change option:selected").find(0).text();
       }
       else {
        selected_currency = $(this).val();
        selectedValue = $(this).find('option:selected').text();
       }
        $('.currency_change').val(selected_currency);
        const link = 'https://www.google.com/search?q=1 ##selected_currency## to USD';
        
        console.log(selected_currency);
        console.log(link);
        console.log($('#source_currency_value_bind'));
        aLink = document.createElement('A')
        aLink.setAttribute('href', link.replace('##selected_currency##', selected_currency.toLocaleUpperCase()));
        aLink.setAttribute('target','_blank');
       
        console.log(selectedValue);
        aLink.innerHTML = '1 '+ (selectedValue.trim() ==='USA Dollar' ? 'USD': selectedValue.replace('USA Dollar',''));
        $('#source_currency_value_bind').html(aLink);
        $('#price_per_token').val(1);
        $('.asset_currency_select').val(selected_currency);
    }
    $(document).ready(function () {
        $('.currency_change').change(getCurrency);
        getCurrency();
    })
    
</script>