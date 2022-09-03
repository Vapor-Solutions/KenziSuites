<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=7in,height=9.25in initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <title>{{ $title }}</title>
    <style>
        strong {
            font-weight: 900;
        }
    </style>
</head>

<body
    style="
      width: 7in;
      height: 9.25in;
      margin: 40px;
      font-family: 'Roboto', sans-serif;
    ">
    <!-- Title Begins -->
    <div style="display: flex; flex-wrap: wrap; align-items: center">
        <div style="margin-right: auto">
            <p
                style="
            text-transform: uppercase;
            font-size: 36px;
            font-weight: 100;
            letter-spacing: 3mm;
            text-decoration: underline;
            text-decoration-color: black;
            text-decoration-thickness: 0.5mm;
            text-underline-offset: 5.5mm;
          ">
                {{ $document }}
            </p>
            <p style="margin-top: 2.5mm">
                No. <strong>{{ $doc_no }}</strong> // {{ Carbon\Carbon::parse($date)->format('jS M, Y') }}<br />
                Quotation RefNo. ---
            </p>
        </div>
        <div style="margin-left: auto">
            <img style="width: 35mm" src="/frontend/ico/apple-touch-icon-144-precomposed.png" alt="" />
        </div>
    </div>
    <!-- Title Ends -->

    <!-- Billing and Pricing Begins -->
    <div
        style="
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 20px;
      ">
        <div style="margin-right: auto">
            <p style="margin-top: 2.5mm">
                <strong>Billing To:</strong> <br />
                {{ $client_name }} || {{ $client_phone }}<br />
                {{ $client_address }}<br />
                {{ $client_city }}, <span style="text-transform:uppercase">{{ $client_country }}</span>
            </p>
        </div>
        <div style="margin-left: auto">
            <p style="margin-top: 2.5mm; text-align: right">
                <strong>Total Due:</strong> <br />
                <span style="font-weight: 300; font-style: italic; color: #00153f">KES</span>
                <span
                    style="
              font-size: 30px;
              font-weight: 300;
              font-style: italic;
              letter-spacing: 0.75mm;
              color: #00153f;
            ">
                    {{ number_format($amount, 2) }}</span>
            </p>
        </div>
    </div>
    <!-- Billing and Price Ends -->

    <!-- Table Begins -->

    <div style="margin-top: 25px">
        <table
            style="
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
          border-top: 2px solid #00153f;
          border-bottom: 2px solid #00153f;
        ">
            <thead style="border-bottom: 2px solid #00153f">
                <th style="text-align: left">Booking No.</th>
                <th style="text-align: left">Check in Date</th>
                <th style="text-align: left">Check Out Date</th>
                <th style="text-align: left">Room Type</th>
                <th style="text-align: right">Nights Stayed</th>
            </thead>
            <tbody>
                @if ($booking)
                    <tr style="border-bottom: 1px solid #0031925f">
                        <td style="text-align: left">{{ $booking->id }}</td>
                        <td style="text-align: left">
                            {{ Carbon\Carbon::parse($booking->check_in)->format('jS M, Y') }}
                        </td>
                        <td style="text-align: left; font-weight: 300">
                            {{ Carbon\Carbon::parse($booking->check_out)->format('jS M, Y') }}</td>
                        <td style="text-align: left; font-weight: 300">{{ $booking->room->roomType->title }}</td>
                        <td style="text-align: right; font-weight: 700 ">{{ $booking->nights_stayed }}</td>
                    </tr>
                @endif
                <!-- Totals Row -->
            </tbody>
        </table>
    </div>
    <!-- Title Begins -->
    <div
        style="
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 25px;
      ">
        <div style="margin-right: auto">
            <p
                style="
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 400;
            text-decoration: underline;
            text-decoration-color: black;
            text-decoration-thickness: 0.5mm;
            text-underline-offset: 2.5mm;
          ">
                AVAILABLE PAYMENT METHODS
            </p>
            <div
                style="
            margin-top: 25px;
            display: flex;
            align-items: center;
            flex-direction: row;
          ">
                <img style="width: 60px; margin-right: 20px" src="/frontend/ico/mpesa.png" alt="" />
                <span style="color: #ed1c24">Till No: &nbsp;</span><span style="color: #39b54a">
                    {{ env('MPESA_TILL') }}</span>
            </div>
        </div>
        <div style="margin-left: auto">
            <p style="text-align: right; line-height: 2">
                Subtotal &emsp;&emsp; KES {{ number_format($amount, 2) }} <br />
                <span style="color: #ff0000">
                    Discount(0%) &emsp;&emsp; KES 0.00</span>
                <br />
                {{-- Tax (0% VAT) &emsp;&emsp; KES 0.00 <br /> --}}
                <span
                    style="
              color: white;
              background-color: black;
              padding: 5px;
              font-weight: 300;
            ">
                    GRAND TOTAL &emsp;&emsp;
                    <span style="font-weight: bold">KES {{ number_format($amount, 2) }}</span></span>
                <br />
            </p>
        </div>

        {{-- Terms and Signature --}}



    </div>

    <div style="display: flex; flex-direction:row; ">
        <div style="max-width:50%">
            <p style="font-weight: 200">
                Thank you for your Business!!
            </p>
            <br>
            <span style="font-size: 11px; font-weight:800">Terms and Conditions</span>
            <p style="font-size:11px"> Payment to be made within 14 days after the issue date of this invoice
                via the accepted payment
                methods above.
                0% Discount applied for refferals on this invoice. Referral discounts apply to the first sale
                only
            </p>
            </p>
        </div>

    </div>

    <div style="position: absolute; bottom:0;">
        <footer style="
    border-top: 0.7px solid #6d6e70;
    border-bottom: 0.7px solid #0922a1;
  ">
            <div
                style="
      border: 2.5px solid #0922a1;
      background-color: #0922a1;
      height: 0;
      width: 300px;
      margin-top: -2.5px;
    ">
            </div>

            <div
                style="
      margin-top: 25px;
      display: grid;
      grid-template-columns: auto auto auto auto auto;
      margin-left: 60px;
      margin-right: 60px;
      justify-content:center
    ">
                <div style="text-align:center; margin-right:15px; margin-left:15px ">
                    <p>
                        <span style="font-weight:800">Phone</span> <br /><br>
                        +254 769 796 255
                    </p>
                </div>
                <div style="width:0 ; height:70px; border-left:2px solid #0922a1; ">
                    <!-- separator -->
                </div>
                <div style="text-align:center; margin-right:15px; margin-left:15px">
                    <p>
                        <span style="font-weight:800">Web</span> <br />
                        www.kenzisuites.com <br />
                        info@kenzisuites.com
                    </p>
                </div>
                <div style="width:0 ; height:70px; border-left:2px solid #0922a1; ">
                    <!-- separator -->
                </div>
                <div style="text-align:center; margin-right:15px; margin-left:15px">
                    <p>
                        <span style="font-weight:800">Address</span> <br />
                        Menyinkwa, Kisii-Kilgoris Rd <br> Kisii, Kenya
                    </p>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
