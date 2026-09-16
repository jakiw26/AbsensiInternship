<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>
        Certificate of Completion - {{ $sertifikasi->nama }}
    </title>

    <style>
        @page {
            size: A4 landscape;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            background: #f1f2f4;
            color: #333333;
        }

        .certificate {
            position: relative;
            width: 297mm;
            height: 210mm;
            overflow: hidden;
            background: #ffffff;
        }
        .background {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
        }

        .corner-tl,
        .corner-br {
            position: absolute;
            width: 100mm;
            height: 100mm;
            overflow: hidden;
        }

        .corner-tl {
            top: 0;
            left: 0;
        }

        .corner-br {
            bottom: 0;
            right: 0;
            transform: rotate(180deg);
        }

        .ribbon-red {
            position: absolute;
            top: 18mm;
            left: -55mm;
            width: 150mm;
            height: 22mm;
            background: #9e2734;
            transform: rotate(-42deg);
        }

        .ribbon-gold {
            position: absolute;
            top: 42mm;
            left: -55mm;
            width: 150mm;
            height: 8mm;
            background: #e3a928;
            transform: rotate(-42deg);
        }

        /* ========================================
           WHITE CONTENT
        ======================================== */

        .white-area {
            position: absolute;
            top: 10.5mm;
            right: 10.5mm;
            bottom: 10.5mm;
            left: 10.5mm;
            background: #ffffff;
        }

        .content {
            position: absolute;
            top: 14mm;
            right: 20mm;
            bottom: 13mm;
            left: 20mm;
            text-align: center;
        }

        .logo {
            margin-top: 2mm;
            height: 28mm;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo img {
            max-height: 100%;
            width: auto;
        }

        .red-line {
            width: 250mm;
            height: 1.2mm;
            margin: 4mm auto 0;
            background: #9e2734;
        }
        .title {
            margin-top: 7mm;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 1px;
            color: #dda72f;
        }

        .subtitle {
            margin-top: 7mm;
            font-size: 12px;
            color: #3f3f46;
        }

        .name {
            margin-top: 4mm;
            font-size: 29px;
            font-weight: bold;
            color: #b5262d;
        }

        .name-line {
            width: 210mm;
            height: 0.4mm;
            margin: 3mm auto 0;
            background: #777777;
        }

        .nim {
            margin-top: 2mm;
            font-size: 13px;
            font-weight: bold;
            color: #333333;
        }

        .description {
            margin-top: 5mm;
            font-size: 11px;
            line-height: 1.8;
            color: #444444;
        }

        .period {
            margin-top: 1mm;
            font-size: 12px;
            font-weight: bold;
            text-decoration: underline;
            color: #333333;
        }

        .message {
            margin-top: 5mm;
            font-size: 11px;
            line-height: 1.8;
            color: #444444;
        }

        .city-date {
            margin-top: 4mm;
            font-size: 11px;
            font-weight: bold;
            color: #333333;
        }

        .signature-table {
            width: 100%;
            margin-top: 3mm;
            border-collapse: collapse;
        }

        .signature-table td {
            width: 50%;
            text-align: center;
            vertical-align: top;
        }

        .signature-image {
            height: 21mm;
            margin-bottom: 1mm;
        }

        .signature-image img {
            width: 40mm;
            max-height: 21mm;
        }

        .signature-line {
            width: 62mm;
            height: 0.4mm;
            margin: 0 auto;
            background: #777777;
        }

        .signature-name {
            margin-top: 1.5mm;
            font-size: 10px;
            font-weight: bold;
            color: #333333;
        }

        .signature-role {
            margin-top: 1mm;
            font-size: 9px;
            color: #555555;
        }
    </style>

</head>

<body>

    <div class="certificate">
        <div class="background">

            <div class="corner-tl">
                <div class="ribbon-red"></div>
                <div class="ribbon-gold"></div>
            </div>

            <div class="corner-br">
                <div class="ribbon-red"></div>
                <div class="ribbon-gold"></div>
            </div>

            <div class="white-area"></div>

        </div>

        <div class="content">
            <div class="logo">
                @if (file_exists(public_path('images/bts.png')))
                    <img src="{{ public_path('images/bts.png') }}" alt="BTS.id">
                @endif
            </div>

            <div class="red-line"></div>

            <div class="title">
                CERTIFICATE OF COMPLETION
            </div>

            <div class="subtitle">
                THIS CERTIFIES THAT
            </div>

            <div class="name">
                {{ $sertifikasi->nama }}
            </div>

            <div class="name-line"></div>

            <div class="nim">
                2488871012
            </div>

            <div class="description">
                has completed Internship at PT Intersolusi Teknologi Asia
                as Internship Developer
            </div>

            <div class="period">
                from
                {{ \Carbon\Carbon::parse($sertifikasi->tanggal_mulai)->translatedFormat('d F Y') }}
                to
                {{ \Carbon\Carbon::parse($sertifikasi->tanggal_selesai)->translatedFormat('d F Y') }}
            </div>

            <div class="message">
                We found him sincere, hardworking, dedicated and result oriented.<br>
                He worked well as part of the team during his tenure.<br>
                We take this opportunity to thank you and wish the knowledge gained during this internship<br>
                period will be useful in the future.
            </div>

            <div class="city-date">
                Bandung,
                {{ now()->translatedFormat('d F Y') }}
            </div>

            <table class="signature-table">
                <tr>
                    <td>
                        <div class="signature-image">
                            @if (file_exists(public_path('images/ttd_kiri.png')))
                                <img src="{{ public_path('images/ttd_kiri.png') }}" alt="Tanda tangan">
                            @endif
                        </div>

                        <div class="signature-line"></div>

                        <div class="signature-name">
                            Fahran Panca Arjanggi
                        </div>

                        <div class="signature-role">
                            Chief Human Capital Officer
                        </div>

                    </td>

                    <td>
                        <div class="signature-image">
                            @if (file_exists(public_path('images/ttd_kanan.png')))
                                <img src="{{ public_path('images/ttd_kanan.png') }}" alt="Tanda tangan">
                            @endif
                        </div>

                        <div class="signature-line"></div>

                        <div class="signature-name">
                            Yohanes Prana Sidik
                        </div>

                        <div class="signature-role">
                            Chief Information &amp; Technology Officer
                        </div>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
