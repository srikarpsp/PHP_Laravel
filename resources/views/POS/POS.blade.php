<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Page</title>
    <link rel="stylesheet" href="{{asset('css/POS.css')}}" />
    <link rel="stylesheet" href="{{asset('css/HeaderFooterStyle.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="About Us Page" />
</head>
<body>

<div id="invoice-POS">


        <div class="logo"></div>
        <div class="info">
            <h2 style="font-size: large">Canada Spicy Restaurant</h2>
        </div>


    <div id="mid">
        <div class="info">
            <p>
                235 Queens Streetstreet </br>
                Toronto, Ontario, L4I l9D</br>
                489-784-5896</br>
            </p>

            <p>

            </p>
        </div>
    </div><!--End Invoice Mid-->

    <div id="bot">

        <div id="table">
            <table>
                <tr class="tabletitle">
                    <td class="item"><h2>Item</h2></td>
                    <td class="Hours"><h2>Qty</h2></td>
                    <td class="Rate"><h2>Sub Total</h2></td>
                </tr>

                <tr class="service">
                    <td class="tableitem"><p class="itemtext">Communication</p></td>
                    <td class="tableitem"><p class="itemtext">5</p></td>
                    <td class="tableitem"><p class="itemtext">$38.00</p></td>
                </tr>

                <tr class="tabletitle">
                    <td></td>
                    <td class="Rate"><h2>tax</h2></td>
                    <td class="payment"><h2>$8.30</h2></td>
                </tr>

                <tr class="tabletitle">
                    <td></td>
                    <td class="Rate"><h2>Total</h2></td>
                    <td class="payment"><h2>$43.50</h2></td>
                </tr>

            </table>
        </div><!--End Table-->

        <div id="legalcopy">
            <p class="legal"><strong> Thank You.</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.
            </p>
        </div>

    </div><!--End InvoiceBot-->
</div><!--End Invoice-->

</body>
</html>
